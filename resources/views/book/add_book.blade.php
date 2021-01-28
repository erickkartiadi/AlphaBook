@extends("layouts.master")

@section("content")
<div class="container p-0 mt-3">
    <h1 class="mb-4">Add Book</h1>
    <form action="/book" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="d-flex">
            <div class="pr-4">
                <div class="form-group">
                    <div class="book_cover_image rounded overflow-hidden shadow-sm">
                        <img id="book_cover" class="w-100 h-100" src="https://picsum.photos/200/300">
                    </div>
                    <div class="mt-3">
                        <label for="book_image_url">Book cover</label>
                        <input type="file" class="form-control-file" id="book_image_url" name="book_image"
                            onchange="previewImage(this, 'book_cover')">
                    </div>
                </div>
            </div>
            <div class="flex-grow-1 ">
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
                <div class="form-group">
                    <label for="author">Author</label>
                    <input type="text" class="form-control" id="author" name="author">
                </div>
                <div class="form-group text-right">
                    <button class="btn btn-success">Save</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
