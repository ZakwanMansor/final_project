@extends('layouts.template')
@section('main')
    {{-- @section('title') View Loan @endsection  --}}
    <div class="mx-3">
        <h4 class="font-weight-bold mt-3">Loans</h4>
        <a href="{{ route('loan.create') }}" class="btn btn-primary mb-3">Add new loan records</a>

        <div class="card">
            <div class="card-body">
                <h4>Active Loans</h4>
                {{-- searchbar --}}
                {{-- POST nak hantar kepada server(kalau letak post dia akan store je data tu) --}}
                {{-- why GET? GET nak fetch dari server --}}
                <div class="d-flex" style="gap:10px">
                    <form action="{{ route('loan.search') }}" method="GET" class="form-inline">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="search" name="searchkey" class="form-control">
                            <button type="submit" class="btn btn-primary ml-3">Search</button>
                        </div>
                    </form>
                    <a href="{{ route('loan.index') }}"><button class="btn btn-primary">View All</button></a>
                </div>

                <Table class="table table-striped">
                    <tr>
                        <th>Loan ID</th>
                        <th>Book ID</th>
                        <th>Book Title</th>
                        <th>Member Name</th>
                        <th>IC Number</th>
                        <th>Borrowing Date</th>
                        <th colspan="2">Return Date</th>
                    </tr>
                    @foreach ($loans as $loan)
                        <tr>
                            <td>{{ $loan->id }}</td>
                            <td>{{ $loan->book->id }}</td>
                            <td>{{ $loan->book->title }}</td>
                            <td>{{ $loan->member->name }}</td>
                            <td>{{ $loan->member->icNum }}</td>
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

        <div class="card mt-3">
            <div class="card-body">
                <h4>Loan Records</h4>
                <Table class="table table-striped">
                    <tr>
                        <th>Loan ID</th>
                        <th>Book ID</th>
                        <th>Book Title</th>
                        <th>Member Name</th>
                        <th>IC Number</th>
                        <th>Borrowing Date</th>
                        <th>Return Date</th>
                    </tr>
                    @foreach ($records as $loan)
                        <tr>
                            <td>{{ $loan->id }}</td>
                            <td>{{ $loan->book->id }}</td>
                            <td>{{ $loan->book->title }}</td>
                            <td>{{ $loan->member->name }}</td>
                            <td>{{ $loan->member->icNum }}</td>
                            <td>{{ $loan->borrowingDate }}</td>
                            <td>{{ $loan->returnDate }}</td>
                        </tr>
                    @endforeach
                </TABle>
                {{ $records->links() }}
            </div>
        </div>

    </div>
@endsection
