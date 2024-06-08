@extends('layouts.template')
@section('main')
    {{-- @section('title')
    Show member details
@endsection --}}
    <div class="mx-3">

        <div class="card-body">
            <div class="card-body">
                <h5>Member: {{ $member->name }}</h5>
                <h5>Ic Number: {{ $member->icNum }}</h5>
            </div>
            <div class="card mt-3">
                <div class="card-body">
                    <h5>Active Loans</h5>
                    <Table class="table table-striped">
                        <tr>
                            <th>Loan ID</th>
                            <th>Book ID</th>
                            <th>Book Title</th>
                            <th>Borrowing Date</th>
                            <th colspan="2">Return Date</th>
                        </tr>
                        @foreach ($loans as $loan)
                            <tr>
                                <td>{{ $loan->id }}</td>
                                <td>{{ $loan->book->id }}</td>
                                <td>{{ $loan->book->title }}</td>
                                <td>{{ $loan->borrowingDate }}</td>

                                <form action="{{ route('loan.update', $loan) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <td>
                                        <input type="date" name="returnDate" class="form-control" required>
                                    </td>
                                    <td>
                                        <button type="submit" class="btn btn-success">Return</button>
                                    </td>
                                </form>
                            </tr>
                        @endforeach
                    </TABle>
                    {{ $loans->links() }}
                </div>
            </div>

            <div>
                <div class="card mt-3">
                    <div class="card-body">
                        <h5>Previous Loan Records</h5>
                        <Table class="table table-striped">
                            <tr>
                                <th>Loan ID</th>
                                <th>Book ID</th>
                                <th>Book Title</th>
                                <th>Borrowing Date</th>
                                <th>Return Date</th>
                            </tr>
                            @foreach ($records as $loan)
                                <tr>
                                    <td>{{ $loan->id }}</td>
                                    <td>{{ $loan->book->id }}</td>
                                    <td>{{ $loan->book->title }}</td>
                                    <td>{{ $loan->borrowingDate }}</td>
                                    <td>{{ $loan->returnDate }}</td>
                                </tr>
                            @endforeach
                        </TABle>
                        {{ $records->links() }}
                    </div>
                </div>
            </div>
        </div>
    @endsection
