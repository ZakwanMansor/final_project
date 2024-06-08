@extends('layouts.template')

@section('main')
    {{-- @section('title') Add Book 
@endsection --}}

    <div class="mt-3 mx-3">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="px-3">
                            <form action="{{ route('book.store') }} " method="POST">
                                @csrf
                                <h4 class="mt-3">Create new book</h4>
                                <div>
                                    <label for="title">Title</label>
                                    <input type="text" name="title" class="form-control" required>
                                </div>

                                <div>
                                    <label for="author">Author</label>
                                    <input type="text" name="author" class="form-control" required>
                                </div>

                                <div>
                                    <label for="publisher">Publisher</label>
                                    <input type="text" name="publisher" class="form-control" required>
                                </div>

                                <div>
                                    <label for="year">Year</label>
                                    <input type="text" name="year" class="form-control" required>
                                </div>

                                <div>
                                    <label for="category">Category</label>
                                    <input type="text" name="category" class="form-control" required>
                                </div>

                                <div>
                                    <button type="submit" class="btn btn-primary mt-3">Create</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
