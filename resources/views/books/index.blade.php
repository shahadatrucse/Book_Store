@extends('layouts.layout')

@section('title')Books @endsection

@section('content')
<div class="mb-3">
    <a href="{{route('books.create')}}" class="btn btn-primary" >Add Book</a>
</div>

<table class="table table-striped ">
  <thead class="bg-dark text-white text-center">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Author</th>
      <th scope="col">ISBN</th>
      <th scope="col">Price</th>
      <th scope="col">Available</th>
      <th scope="col">Actions</th>

    </tr>
  </thead>
  <tbody class="text-center">
    @foreach($books as $book)
    <tr>
      <th scope="row">{{$book->id}}</th>
      <td>{{$book->title}}</td>
      <td>{{$book->author}}</td>
      <td>{{$book->isbn}}</td>
      <td>{{$book->price}}</td>
      <td>{{$book->available}}</td>
      <td class="d-flex">
      <div class="mb-3 ">
            <a href="{{route('books.show', $book->id)}}" class="btn btn-secondary" >View</a>
        </div>
        <div class="mb-3 ms-2">
            <a href="{{route('books.edit', $book->id)}}" class="btn btn-primary" >Edit</a>
        </div>
        <div class="ms-2">
            <form action="{{route('books.destroy', $book->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
{{$books->links()}}

@endsection