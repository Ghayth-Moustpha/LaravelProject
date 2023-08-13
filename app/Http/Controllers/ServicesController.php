<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Service;

class ServicesController extends Controller
{
    public function index()
    {
        $services = Service::all();

        return view("services", ["services" => $services]);
    }

    public function adminindex()
    {
        $services = Service::all();

        return view("services.panal", ["services" => $services]);
    }
    public function show($id)
    {
        $service = Service::findOrFail($id);

        return view("service", ["service" => $service]);
    } 
    public function create()
    {
        return view('services.create');
    }

    /**
     * Store a newly created service in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'details' => 'required',
        ]);

        $imagePath = $request->file('image')->store('public/images');
        $imagePath =str_replace("public", "storage", $imagePath);

        $service = new Service();
        $service->title = $request->title;
        $service->image = $imagePath;
        $service->details = $request->details;
        $service->save();

        return redirect()->route('services.admin')->with('success', 'Service created successfully.');
    }

    /**
     * Show the form for editing the specified service.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $service = Service::findOrFail($id);

        return view('services.edit', compact('service'));
    }

    /**
     * Update the specified service in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'details' => 'required',
        ]);

        $service = Service::findOrFail($id);
        $service->title = $request->title;
        $service->details = $request->details;

        if ($request->hasFile('image')) {
            // Delete the old image file
            Storage::disk('public')->delete($service->image);

            // Store the new image file
            $imagePath = $request->file('image')->store('services', 'public');
            $service->image = $imagePath;
        }

        $service->save();

        return redirect()->route('services.admin')->with('success', 'Service updated successfully.');
    }

    /**
     * Remove the specified service from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $service = Service::findOrFail($id);

        // Delete the image file
        Storage::disk('public')->delete($service->image);

        $service->delete();

        return redirect()->route('services.admin')->with('success', 'Service deleted successfully.');
    }
}