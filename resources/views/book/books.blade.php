@extends('layouts.master')

@section("content")
<div class="d-flex w-100 flex-wrap p-2">
@foreach ($books as $book)
<div class="p-3">
    <div class="book-card m-0">
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
</div>
    @endforeach
</div>
@endsection
