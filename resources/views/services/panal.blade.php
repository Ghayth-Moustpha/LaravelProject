@extends('layouts.control')

@section('content')
    <div class="container">
        <h1>Services</h1>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Details</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($services as $service)
                    <tr>
                        <td>{{ $service->title }}</td>
                        <td>
                            <img src="{{ asset($service->image) }}" alt="Service Image" width="100">
                        </td>
                        <td>{{ $service->details }}</td>
                        <td>
                            <a href="{{ route('services.edit', $service->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('services.destroy', $service->id) }}" method="POST"
                                style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Are you sure you want to delete this service?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('services.create') }}" class="btn btn-success">Create Service</a>
    </div>
@endsection