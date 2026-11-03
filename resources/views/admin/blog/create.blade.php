@extends('admin.layout.side-nav')
@section('content')
@if ($errors->any())
  <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
@endif
<div class="d-flex justify-content-center align-items-center">
    <div class="card shadow-lg p-4" style="width: 100%;">
        <div class="card-body">
            <h4 class="text-center mb-3">Create Blog</h4>

            <!-- Form -->
            <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title" required>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="description">Description</label>
                        <input type="text" class="form-control" id="description" name="description" placeholder="Enter description" required>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="url">Url</label>
                        <input type="text" class="form-control" id="url" name="url" placeholder="Enter Url" required>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="thumbnail">Thumbnail</label>
                        <input type="file" class="form-control" id="thumbnail" name="thumbnail" accept="image/*" required>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="author_name">Author Name</label>
                        <input type="text" class="form-control" id="author_name" name="author_name" placeholder="Enter Author Name" required>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="author_image">Author Image</label>
                        <input type="file" class="form-control" id="author_image" name="author_image" accept="image/*" required>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="meta_title">Meta Title</label>
                        <input type="text" class="form-control" id="meta_title" name="meta_title" placeholder="Enter Meta Title" required>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="meta_description">Meta Description</label>
                        <input type="text" class="form-control" id="meta_description" name="meta_description" placeholder="Enter Meta Description" required>
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="content" class="form-label">Content</label>
                        <textarea name="content" class="form-control" id="editor"></textarea>
                    </div>
                </div>

                <div class="row">
    <div class="col-12 d-flex justify-content-center">
        <button type="submit" class="btn btn-primary">Add Blog</button>
    </div>
</div>
            </form>
        </div>
    </div>
</div>


@endsection

@push('scripts')
<script src="https://cdn.tiny.cloud/1/lj0c3qufv1df5v26illo6du9afb0bgeqbw9iaa1cca4u7qre/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>
$(document).ready(function() {
    const uploadUrl = "{{ route('image-upload') }}"; 
    const csrfToken = "{{ csrf_token() }}";

    const example_image_upload_handler = (blobInfo, progress) => {
        return new Promise((resolve, reject) => {
            const formData = new FormData();
            formData.append('file', blobInfo.blob(), blobInfo.filename());

            $.ajax({
                url: uploadUrl,
                method: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                headers: {
                    'X-CSRF-TOKEN': csrfToken
                },
                xhr: function () {
                    const xhr = new window.XMLHttpRequest();
                    xhr.upload.addEventListener("progress", function (e) {
                        if (e.lengthComputable) {
                            progress(e.loaded / e.total * 100);
                        }
                    }, false);
                    return xhr;
                },
                success: function (res) {
                    if (res && typeof res.location === 'string') {
                        resolve(res.location);
                    } else {
                        reject({ message: 'Invalid response format', remove: true });
                    }
                },
                error: function (xhr) {
                    reject({ message: 'Upload failed: ' + xhr.statusText, remove: true });
                }
            });
        });
    };

    tinymce.init({
        selector: '#editor',
        plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
        toolbar: 'undo redo | blocks | bold italic underline strikethrough | link image media table | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
        automatic_uploads: true,
        images_upload_handler: example_image_upload_handler
    });
});
</script>
<script>
  setTimeout(() => {
      let alerts = document.querySelectorAll('.alert');
      alerts.forEach((alert) => {
          alert.classList.remove('show'); 
          setTimeout(() => alert.remove(), 500); 
      });
  }, 5000);
</script>
@endpush

