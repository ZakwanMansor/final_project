@extends('layouts.template')
@section('main')
    {{-- @section('title') View Member
@endsection --}}
    <div class="mx-3 ">
        <h4 class="font-weight-bold mt-3">Members</h4>

        <a href="{{ route('member.create') }}" class="btn btn-primary mb-3">Register new members</a>

        <div class="card mt=3">

            <div class="card-body">
                <table class="table table-striped">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>IC</th>
                        <th>Phone Number</th>
                        <th>Address</th>
                        <th>Contact</th>
                        <th>Action</th>
                    </tr>

                    {{-- for each akan loop semua member --}}
                    @foreach ($members as $member)
                        <tr>
                            <td>{{ $member->id }} </td>
                            <td>{{ $member->name }} </td>
                            <td>{{ $member->icNum }} </td>
                            <td>{{ $member->phone }} </td>
                            <td>{{ $member->address }} </td>
                            <td>{{ $member->email }} </td>
                            <td><a href="{{ route('member.show', $member) }}" class="btn btn-primary">Show</a></td>
                        </tr>
                    @endforeach
                </table>
                {{ $members->links() }}
            </div>
        </div>
    </div>
@endsection
