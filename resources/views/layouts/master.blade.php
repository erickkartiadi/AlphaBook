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
            <div class="d-flex pt-1">
                <a class="nav-brand h1 m-0 font-title font-weight-bold mr-3" href="/">Alphabook</a>
                <ul class="nav-menu">
                    <li class="nav-item">
                        <a href="/book/add"><i class="material-icons">add</i><span>Add Book</span></a>
                    </li>
                </ul>
            </div>
            <form action="" class="search-form bg-light-gray">
                <input type="search" placeholder="Titles, authors, or category" class="search-input">
                <button type="submit" class="search-button">
                    <i class="material-icons">search</i>
                </button>
            </form>
        </nav>
        <div class="content">
            @yield('content')
        </div>
    </div>
</body>

@yield('js_script')


</html>
