@extends('layouts.control')

@section('content')
    <div class="container m-4">
        <div class="card">
            <div class="card-header">
                <h1 class="card-title">Add Service</h1>
            </div>
            <div class="card-body">
                <form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group m-2">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title" class="form-control" required>
                    </div>

                    <div class="form-group m-2">
                        <label for="image">Image</label>
                        <input type="file" name="image" id="image" class="form-control-file" required>
                    </div>

                    <div class="form-group m-2">
                        <label for="details">Details</label>
                        <textarea name="details" id="details" class="form-control" required></textarea>
                    </div>

                    <div class="text-center m-2">
                        <button type="submit" class="btn btn-primary">Add Service</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection