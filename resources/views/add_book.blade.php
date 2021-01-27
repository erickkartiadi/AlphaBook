@extends("layouts.master")


@section("content")

<form>
    <div class="container-fluid p-0">
        <div class="row m-0">
            <div class="col-6">
                <div class="form-group">
                    <div class="book_cover_image rounded overflow-hidden shadow-sm">
                        <img id="book_cover" class="w-100 h-100" src="https://picsum.photos/200/300">
                    </div>
                    <div class="mt-3">
                        <label for="book_image_url">Book cover</label>
                        <input type="file" class="form-control-file" id="book_image_url" name="book_image_url" onchange="previewImage(this, 'book_cover')">
                    </div>
                </div>
                <div class="form-group">
                    <label for="title">Title</label>
                    <input class="form-control" type="text" id="title" name="title">
                </div>
                <div class="form-group">
                    <label for="genre">Genre</label>
                    <input class="form-control" type="text" id="genre" name="genre">
                </div>
                <div class="form-group">
                    <label for="total_pages">Total pages</label>
                    <input type="text" class="form-control" id="total_pages" name="total_pages">
                </div>
                <div class="form-group">
                    <label for="published_year">Published year</label>
                    <input type="text" class="form-control" id="publised_year" name="published_year">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <div class="rounded-circle overflow-hidden author_profile_image shadow-sm">
                        <img id="author_profile" src="https://picsum.photos/200">
                    </div>
                    <div class="mt-3">
                        <label for="book_image_url">Author profile</label>
                        <input type="file" class="form-control-file" id="book_image_url" name="book_image_url" onchange="previewImage(this, 'author_profile')">
                    </div>
                </div>
                <div class="form-group">
                    <label for="author">Author</label>
                    <input type="text" class="form-control" name="author">
                </div>
            </div>
        </div>
    </div>
</form>

@endsection


@section("js_script")
    <script>
        function previewImage(input, target) {
            let reader = new FileReader();
            reader.readAsDataURL(input.files[0]);
            reader.onload = function(readerEvent) {
                document.getElementById(target).src = readerEvent.target.result;
            }
        }
    </script>
@endsection
