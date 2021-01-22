<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
    <link rel="stylesheet" href="{{asset("css/style.css")}}">
    <title>Document</title>
</head>

<body>
    <div class="container-fluid p-0">
        <nav class="d-flex justify-content-between shadow-sm flex-wrap">
            <a class="nav-brand h1 m-0 font-title font-weight-bold pt-1">Alphabook</a>
            <form action="" class="search-form bg-light-gray">
                <input type="search" placeholder="Titles, authors, or category" class="search-input">
                <button type="submit" class="search-button">
                    <i class="bi bi-search"></i>
                </button>
            </form>
        </nav>
        <div class="content">
            <div class="mb-5">
                {{-- TODO event style --}}
                <div class="mb-4">
                    <h4 class="font-title mb-0">Genres</h4>
                </div>
                <div class="categories d-flex flex-wrap">
                    @foreach($genres as $genre)
                    <button class="btn bg-light-gray mr-2 mb-2">
                        {{$genre->genres}}
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
                    <div id="books" class="slider-content books d-flex overflow-auto" >
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
                    {{-- TODO center the button with absolute positioning --}}
                    <div class="slider-button d-flex justify-content-between align-items-center">
                        <button class="scroll-left" onclick="slide('books', 'left', 230)">
                            <i class="bi bi-chevron-compact-left"></i>
                        </button>
                        <button class="scroll-right" onclick="slide('books', 'right', 230)">
                            <i class="bi bi-chevron-compact-right"></i>
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
                        <div class="author-card" onclick="test()">
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
                        <button
                            class="scroll-left"
                            onclick="slide('authors', 'left',125)">
                            <i class="bi bi-chevron-compact-left"></i>
                        </button>
                        <button
                            class="scroll-right"
                            onclick="slide('authors', 'right',125)">
                            <i class="bi bi-chevron-compact-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    function slide(element, direction, step) {
        let destination = direction === "right" ? +step : -step;

        document.getElementById(element).scrollBy({
            left: destination,
            behavior: 'smooth'
        })
    }

    function test(){
        console.log("tes");
    }

</script>

</html>
