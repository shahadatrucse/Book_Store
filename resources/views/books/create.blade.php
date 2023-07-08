@extends('layouts.layout')

@section('title')Create @endsection

@section('content')

<form action="{{route('books.store')}}" method="post">
    @csrf
  <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" name="title" class="form-control" id="title" value="{{old('title')}}">
  </div>
  <div class="mb-3">
    <label for="author" class="form-label">author</label>
    <input type="text" name="author" class="form-control" id="author" value="{{old('author')}}">
  </div>
 
  <div class="mb-3">
    <label for="isbn" class="form-label">isbn</label>
    <input type="text" name="isbn" class="form-control" id="isbn" value="{{old('isbn')}}">
  </div>
 
  <div class="mb-3">
    <label for="price" class="form-label">price</label>
    <input type="text" name="price" class="form-control" id="price" value="{{old('price')}}">
  </div>
 
  <div class="mb-3">
    <label for="available" class="form-label">available</label>
    <input type="text" name="available" class="form-control" id="available" value="{{old('available')}}">
  </div>
 
 
  <button type="submit"  class="btn btn-primary">Submit</button>
</form>

@endsection