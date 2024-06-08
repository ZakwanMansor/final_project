@extends('layouts.template')
@section('main')
    {{-- @section('title') View Book @endsection  --}}

    <div class="px-3">
        <h4 class="mt-3">Books</h4>
        <a href="{{ route('book.create') }}" class="btn btn-primary mb-3">Add new books</a>
        <div class="card">
            <div class="card-body">
                <h4>Borrowed Books</h4>
                <table class="table table-striped">
                    <tr>
                        <th>Book ID</th>
                        <th>Book Title</th>
                        <th>Author</th>
                        <th>Publisher</th>
                        <th>Year</th>
                        <th>Category</th>
                        <th>Action</th>
                    </tr>
                    books adalah array and itterate for each and jadikan as single book
                    @foreach ($borrowedBooks as $book)
                        <tr>
                            <td>{{ $book->id }}</td>
                            <td>{{ $book->title }}</td>
                            <td>{{ $book->author }}</td>
                            <td>{{ $book->publisher }}</td>
                            <td>{{ $book->year }}</td>
                            <td>{{ $book->category }}</td>
                            <td><a href="{{ route('book.show', $book) }}"><button class="btn btn-primary">Show</button></a>
                            </td>
                        </tr>
                    @endforeach
                </table>
                {{ $availableBooks->links() }}
            </div>
        </div>


        <div class="card">
            <div class="card-body">
                <h4>Available Books</h4>
                <table class="table table-striped">
                    <tr>
                        <th>Book ID</th>
                        <th>Book Title</th>
                        <th>Author</th>
                        <th>Publisher</th>
                        <th>Year</th>
                        <th>Category</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($availableBooks as $book)
                        <tr>
                            <td>{{ $book->id }}</td>
                            <td>{{ $book->title }}</td>
                            <td>{{ $book->author }}</td>
                            <td>{{ $book->publisher }}</td>
                            <td>{{ $book->year }}</td>
                            <td>{{ $book->category }}</td>
                            <td><a href="{{ route('book.show', $book) }}"><button class="btn btn-primary">Show</button></a>
                            </td>
                        </tr>
                    @endforeach
                </table>
                {{ $availableBooks->links() }}
            </div>
        </div>
    </div>
@endsection
