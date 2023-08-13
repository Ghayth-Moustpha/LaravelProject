@extends('layouts.control')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1 class="card-title">Edit Service</h1>
            </div>
            <div class="card-body">
                <form action="{{ route('services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title" class="form-control" value="{{ $service->title }}" required>
                    </div>

                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" name="image" id="image" class="form-control-file">
                        <div class="mt-2">
                            <img src="{{asset( '$service->image_url') }}" alt="Current Image" style="max-width: 200px;">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="details">Details</label>
                        <textarea name="details" id="details" class="form-control" required>{{ $service->details }}</textarea>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Update Service</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection