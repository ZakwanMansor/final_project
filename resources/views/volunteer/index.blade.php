@extends('layouts\template')
{{-- @section('title') 
View Volunter 
@endsection --}}
@section('main')
    <div class="px-3">
        {{-- dia akan hide kalau tade --}}

        <h4 class="font-weight-bold mt-3">Volunteers</h4>

        @can('create-volunteers', App\Models\User::class)
            <a href="{{ route('volunteer.create') }}" class="btn btn-primary mb-3">Register new volunteers</a>
        @endcan

        <div class="card mt=3">
            <div class="card-body">
                <table class="table table-striped">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                    </tr>
                    @foreach ($volunteers as $volunteer)
                        <tr>
                            <td>{{ $volunteer->id }}</td>
                            <td>{{ $volunteer->name }}</td>
                            <td>{{ $volunteer->email }}</td>
                        </tr>
                    @endforeach
                </table>
                {{ $volunteers->links() }}
            </div>
        </div>
    @endsection
