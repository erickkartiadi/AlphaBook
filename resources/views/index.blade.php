@extends("layouts.master")

@section("content")
<div class="mb-5">
    <div class="mb-4">
        <h4 class="font-title mb-0">Genres</h4>
    </div>
    <div class="categories d-flex flex-wrap">
        @foreach($genres as $genre)
        <button class="btn bg-light-gray mr-2 mb-2">
            {{$genre->genre}}
        </button>
        @endforeach
    </div>
</div>

<div class="mb-5">
    <div class="mb-4 d-flex justify-content-between align-items-center">
        <h4 class="font-title mb-0">Books</h4>
        <a href="#">See All</a>
    </div>
    <div class="position-relative slider">
        <div id="books" class="slider-content books d-flex overflow-auto">
            @foreach($books as $book)
            <div class="book-card">
                <div class="book-cover shadow-sm w-100 rounded overflow-hidden">
                    <img class="" src="{{$book->image_url}}">
                </div>
                <div class="card-content mt-3 mb-2">
                    <h4 class="font-weight-normal m-0">
                        {{$book->title}}
                    </h4>
                    <p class="text-black-50">
                        {{$book->author}}
                    </p>
                </div>
            </div>
            @endforeach
        </div>
        <div class="slider-button d-flex justify-content-between align-items-center">
            <button class="scroll-left" onclick="slide('books', 'left', 230)">
                <i class="material-icons">chevron_left</i>
            </button>
            <button class="scroll-right" onclick="slide('books', 'right', 230)">
                <i class="material-icons">chevron_right</i>
            </button>
        </div>
    </div>
</div>
<div class="mb-5">
    <div class="mb-4 d-flex justify-content-between align-items-center">
        <h4 class="font-title mb-0">Authors</h4>
        <a href="#">See All</a>
    </div>
    <div class="slider position-relative">
        <div id="authors" class="slider-content books d-flex overflow-auto">
            @foreach($books as $book)
            <div class="author-card">
                <div class="w-100 author-photo rounded-circle overflow-hidden">
                    <img src="https://picsum.photos/id/@php echo rand(1, 1000)@endphp/100/100" alt="">
                </div>

                <h6 class="text-center text-black-50 mb-0 mt-3">
                    {{$book->author}}
                </h6>
            </div>
            @endforeach
        </div>

        <div class="slider-button d-flex justify-content-between align-tems-center">
            <button class="scroll-left" onclick="slide('authors', 'left',125)">
                <i class="material-icons">chevron_left</i>
            </button>
            <button class="scroll-right" onclick="slide('authors', 'right',125)">
                <i class="material-icons">chevron_right</i>
            </button>
        </div>
    </div>
</div>
@endsection
