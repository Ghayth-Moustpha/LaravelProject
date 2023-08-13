<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Template;

class TemplateController extends Controller
{
    public function index () {
        $templates = template::all() ; 
        return view("Template" , ["templates" => $templates]) ; 
    }

    public function adminindex (){
        $templates = template::all() ; 
        return view("Templatepanael" , ["templates" => $templates]) ; 
    }
    
    
    public function edite ($id){
        $template = Template::findOrFail($id);

        return view("Templates.edite" , ["template" => $template]) ; 
    }
    public function create()
    {
        // Logic for create method goes here
        
        // Return the view for creating a new template
        return view('templates.create');
    }
    public function store(Request $request)
    {
        
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required',
            'details' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'zip' => 'required',
        ]);

        
        
        $imagePath = $request->file('image')->store('public/images');
        $zipPath = $request->file('zip')->store('public/zips');
        $imagePath =str_replace("public", "storage", $imagePath);
        $zipPath =str_replace(  "public", "storage", $zipPath);

        $temp = new Template () ; 
        $temp->name  = $validatedData['name']; 
        $temp->details = $validatedData['details'];
        $temp->image = $imagePath  ; 
        $temp->download = $zipPath; 
        $temp->save(); 
     
        error_log($temp);
           // echo 'Template added successfully!' ;
        // Redirect the user to a success page or do any additional processing
        return redirect("/ourtemp")->with('success', 'Template added successfully!');
    }
    public function update(Request $request, $id)
{
    // Retrieve the template you want to update
    $template = Template::findOrFail($id);

    // Validate the request data
    $validatedData = $request->validate([
        'name' => 'required',
        'details' => 'required',
        'image' => 'image|mimes:jpeg,png,jpg,gif',
        'zip' => 'file',
    ]);

    // Update the template with the validated data
    $template->name = $validatedData['name'];
    $template->details = $validatedData['details'];

    // Handle uploaded image
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('public/images');
        $imagePath =str_replace("public", "storage", $imagePath);

        $template->image = $imagePath;
    }

    // Handle uploaded zip file
    if ($request->hasFile('zip')) {
        $zipPath = $request->file('zip')->store('public/zips');
        $zipPath =str_replace(  "public", "storage", $zipPath);
        $template->zip = $zipPath;
    }

    // Save the updated template
    $template->save();

    // Redirect the user back to the template index page with a success message
    return redirect("/ourtemp")->with('success', 'Template updated successfully.');
}

    public function delete($id)
{
    $template = Template::find($id);
    
    if ($template) {
        $template->delete();
        return redirect("/ourtemp")->with('success', 'Template deleted successfully!');
    } else {
        return redirect("/ourtemp")->with('error', 'Template not found!');
    }
}
}
