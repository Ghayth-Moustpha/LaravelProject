@extends("layouts.control")

@section("content")

<div class="container">
    <h1>Templates</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Image</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <!-- Add New Template button row -->
            <tr>
                <td colspan="5" class="text-center">
                    <a href="{{ url('ourtemp/create') }}" class="btn btn-primary">Add New Template</a>
                </td>
            </tr>
            <!-- Iterate over templates -->
            @foreach($templates as $temp)
            <tr>
                <td class="text-center align-middle">{{ $temp->id }}</td>
                <td class="text-center align-middle">{{ $temp->name }}</td>
                <td class="text-center align-middle"><img src="{{ asset($temp->image) }}" alt="{{ $temp->name }}" class="img-thumbnail" style="max-width: 400px;"></td>
                <td class="text-center align-middle"><a href="{{ route('templates.edite', ['id' => $temp->id]) }}" class="btn btn-primary">Edit</a></td> 
                <td class="text-center align-middle">
                    <form action="{{ route('template.delete', ['id' => $temp->id]) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this template?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection