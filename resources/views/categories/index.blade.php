@extends('layouts.app')

@section('title', 'Categories')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Categories List</h5>
            <a href="{{ route('categories.create') }}" class="btn btn-primary">Add New Category</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered" id="categoriesTable">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Total Books</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->description ?: 'No description' }}</td>
                            <td>{{ $category->books_count }}</td>
                            <td>
                                <a href="{{ route('categories.show', $category) }}" class="btn btn-info btn-sm">View</a>
                                <a href="{{ route('categories.edit', $category) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('categories.destroy', $category) }}" method="POST" class="d-inline">
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
            $('#categoriesTable').DataTable({
                responsive: true,
                order: [
                    [0, 'asc']
                ]
            });
        });
    </script>
@endpush
