@extends('layouts.template')

@section('main')
    {{-- @section('title') Create Loan @endsection --}}
    <div class="mx-3 mt-3">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mt-3">Create loan</h4>
                        <form action="{{ route('loan.store') }}" method="POST">
                            @csrf
                            <div>
                                <label for="book-id">Book ID</label>
                                <input type="text" name="book_id" class="form-control" required>
                            </div>

                            <div>
                                <label for="member_id">Member ID</label>
                                <input type="text" name="member_id" class="form-control">
                            </div>

                            <div>
                                <label for="borrowingDate">Borrowing Date</label>
                                <input type="date" name="borrowingDate" class="form-control" required>
                            </div>

                            <div>
                                <button type="submit" class="btn btn-primary mt-3">Create</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>



    </div>
@endsection
