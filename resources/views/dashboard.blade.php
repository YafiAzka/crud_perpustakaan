@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">
                    <h5 class="card-title">Total Books</h5>
                    <h2 class="card-text">{{ $totalBooks }}</h2>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">
                    <h5 class="card-title">Total Categories</h5>
                    <h2 class="card-text">{{ $totalCategories }}</h2>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-info text-white mb-4">
                <div class="card-body">
                    <h5 class="card-title">Total Publishers</h5>
                    <h2 class="card-text">{{ $totalPublishers }}</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Quick Actions</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <a href="{{ route('books.create') }}" class="btn btn-primary w-100 mb-2">Add New Book</a>
                        </div>
                        <div class="col-md-3">
                            <a href="{{ route('categories.create') }}" class="btn btn-success w-100 mb-2">Add New
                                Category</a>
                        </div>
                        <div class="col-md-3">
                            <a href="{{ route('publishers.create') }}" class="btn btn-info w-100 mb-2">Add New Publisher</a>
                        </div>
                        <div class="col-md-3">
                            <a href="{{ route('books.index') }}" class="btn btn-secondary w-100 mb-2">View All Books</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
