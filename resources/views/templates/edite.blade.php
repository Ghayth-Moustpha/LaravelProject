@extends("layouts.control")

@section("content")

<div class="container m-4">
    <div class="card">
        <div class="card-header">
            <h1 class="card-title">Edit Template</h1>
        </div>
        <div class="card-body">
            <form action="{{ route('templates.update', ['id' => $template->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="templateName">Name</label>
                    <input type="text" class="form-control" id="templateName" name="name" placeholder="Enter template name" value="{{ $template->name }}" required>
                </div>

                <div class="form-group">
                    <label for="templateDetails">Details</label>
                    <textarea class="form-control" id="templateDetails" name="details" placeholder="Enter template details" required>{{ $template->details }}</textarea>
                </div>

                <div class="form-group mb-3">
                    <label for="templateImage">Image</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="templateImage" name="image">
                            <label class="custom-file-label" for="templateImage">Choose image</label>
                        </div>
                    </div>
                </div>

                <div class="form-group mb-3">
                    <label for="templateZip">Zip File</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="templateZip" name="zip">
                            <label class="custom-file-label" for="templateZip">Choose zip file</label>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>

            <!-- Display uploaded image preview -->
            <div id="imagePreview" class="mt-4" style="display: none;">
                <h4>Uploaded Image Preview:</h4>
                <img id="previewImage" src="#" alt="Image Preview" style="max-width: 400px;">
            </div>
        </div>
    </div>
</div>

<script>
    // Function to display image preview
    function showImagePreview(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $("#previewImage").attr("src", e.target.result);
                $("#imagePreview").show();
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    // Trigger image preview when a file is selected
    document.getElementById("templateImage").addEventListener("change", function() {
        showImagePreview(this);
    });
</script>

@endsection