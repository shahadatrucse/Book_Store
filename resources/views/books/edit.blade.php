@extends('layouts.layout')

@section('title')Create @endsection

@section('content')

<form action="{{route('books.update',$book->id)}}" method="post">
    @csrf
    @method('PATCH')
  <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" name="title" class="form-control" id="title" value="{{$book->title ? $book->title:old('title')}}">
  </div>
  <div class="mb-3">
    <label for="author" class="form-label">author</label>
    <input type="text" name="author" class="form-control" id="author" value="{{$book->author ? $book->author:old('author')}}">
  </div>
 
  <div class="mb-3">
    <label for="isbn" class="form-label">isbn</label>
    <input type="text" name="isbn" class="form-control" id="isbn" value="{{$book->isbn ? $book->isbn:old('isbn')}}">
  </div>
 
  <div class="mb-3">
    <label for="price" class="form-label">price</label>
    <input type="text" name="price" class="form-control" id="price" value="{{$book->price ? $book->price:old('price')}}">
  </div>
 
  <div class="mb-3">
    <label for="available" class="form-label">available</label>
    <input type="text" name="available" class="form-control" id="available" value="{{$book->available ? $book->available:old('available')}}">
  </div>
 
 
  <button type="submit"  class="btn btn-primary">Submit</button>
</form>

@endsection