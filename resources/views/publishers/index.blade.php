@extends('layouts.app')

@section('title', 'Publishers')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Publishers List</h5>
            <a href="{{ route('publishers.create') }}" class="btn btn-primary">Add New Publisher</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered" id="publishersTable">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($publishers as $publisher)
                        <tr>
                            <td>{{ $publisher->name }}</td>
                            <td>{{ $publisher->address ?: 'No address' }}</td>
                            <td>{{ $publisher->phone ?: 'No phone' }}</td>
                            <td>
                                <a href="{{ route('publishers.show', $publisher) }}" class="btn btn-info btn-sm">View</a>
                                <a href="{{ route('publishers.edit', $publisher) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('publishers.destroy', $publisher) }}" method="POST"
                                    class="d-inline">
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
            $('#publishersTable').DataTable({
                responsive: true,
                order: [
                    [0, 'asc']
                ]
            });
        });
    </script>
@endpush
