@extends('layouts.app')

@section('title', 'Category Details')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Category Details</h5>
            <div>
                <a href="{{ route('categories.edit', $category) }}" class="btn btn-warning">Edit</a>
                <a href="{{ route('categories.index') }}" class="btn btn-secondary">Back to List</a>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <table class="table">
                        <tr>
                            <th style="width: 200px;">Name</th>
                            <td>{{ $category->name }}</td>
                        </tr>
                        <tr>
                            <th>Description</th>
                            <td>{{ $category->description ?: 'No description available' }}</td>
                        </tr>
                        <tr>
                            <th>Total Books</th>
                            <td>{{ $category->books->count() }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
