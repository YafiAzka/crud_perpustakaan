@extends('layouts.app')

@section('title', 'Publisher Details')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Publisher Details</h5>
            <div>
                <a href="{{ route('publishers.edit', $publisher) }}" class="btn btn-warning">Edit</a>
                <a href="{{ route('publishers.index') }}" class="btn btn-secondary">Back to List</a>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <table class="table">
                        <tr>
                            <th style="width: 200px;">Name</th>
                            <td>{{ $publisher->name }}</td>
                        </tr>
                        <tr>
                            <th>Address</th>
                            <td>{{ $publisher->address ?: 'No address available' }}</td>
                        </tr>
                        <tr>
                            <th>Phone</th>
                            <td>{{ $publisher->phone ?: 'No phone available' }}</td>
                        </tr>
                        <tr>
                            <th>Total Books</th>
                            <td>{{ $publisher->books->count() }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
