@extends('layouts.app')

@section('title', 'Books')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Books List</h5>
            <a href="{{ route('books.create') }}" class="btn btn-primary">Add New Book</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered" id="booksTable">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>ISBN</th>
                        <th>Author</th>
                        <th>Category</th>
                        <th>Publisher</th>
                        <th>Quantity</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($books as $book)
                        <tr>
                            <td>{{ $book->title }}</td>
                            <td>{{ $book->isbn }}</td>
                            <td>{{ $book->author }}</td>
                            <td>{{ $book->category->name }}</td>
                            <td>{{ $book->publisher->name }}</td>
                            <td>{{ $book->quantity }}</td>
                            <td>
                                <a href="{{ route('books.show', $book) }}" class="btn btn-info btn-sm">View</a>
                                <a href="{{ route('books.edit', $book) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('books.destroy', $book) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#booksTable').DataTable({
                responsive: true,
                order: [
                    [0, 'asc']
                ]
            });
        });
    </script>
@endpush
