@extends('layouts.layout')

@section('title')Books @endsection

@section('content')

<div class="card">
  <div class="card-body">
    <h5 class="card-title">{{$book->title}}</h5>
    <p>{{$book->author}}</p>
    <p>{{$book->isbn}}</p>
    <p>{{$book->price}}</p>
    <p>{{$book->available}}</p>
    <a href="{{route('books.edit',$book->id)}}" class="btn btn-primary">Edit</a>
    <a href="{{route('books.index')}}" class="btn btn-secondary">Cancel</a>
  </div>
</div>

@endsection