@extends('layouts.app')

@section('title', 'Book Details')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Book Details</h5>
            <div>
                <a href="{{ route('books.edit', $book) }}" class="btn btn-warning">Edit</a>
                <a href="{{ route('books.index') }}" class="btn btn-secondary">Back to List</a>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <table class="table">
                        <tr>
                            <th style="width: 200px;">Title</th>
                            <td>{{ $book->title }}</td>
                        </tr>
                        <tr>
                            <th>ISBN</th>
                            <td>{{ $book->isbn }}</td>
                        </tr>
                        <tr>
                            <th>Author</th>
                            <td>{{ $book->author }}</td>
                        </tr>
                        <tr>
                            <th>Year Published</th>
                            <td>{{ $book->year_published }}</td>
                        </tr>
                        <tr>
                            <th>Quantity</th>
                            <td>{{ $book->quantity }}</td>
                        </tr>
                        <tr>
                            <th>Category</th>
                            <td>{{ $book->category->name }}</td>
                        </tr>
                        <tr>
                            <th>Publisher</th>
                            <td>{{ $book->publisher->name }}</td>
                        </tr>
                        <tr>
                            <th>Description</th>
                            <td>{{ $book->description ?: 'No description available' }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
