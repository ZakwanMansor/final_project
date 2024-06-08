@extends('layouts\template')
{{-- @section('title') 
View Supervisor
@endsection  --}}
@section('main')
    <div class="px-3">
        <h4 class="font-weight-bold mt-3">Supervisors</h4>
        <div class="card">
            <div class="card-body">
                <table class="table table-striped">
                    <tr>
                        <th> ID </th>
                        <th> name </th>
                        <th> email </th>
                    </tr>
                    @foreach ($supervisors as $supervisor)
                        <tr>
                            <td> {{ $supervisor->id }} </td>
                            <td> {{ $supervisor->name }} </td>
                            <td> {{ $supervisor->email }} </td>
                        </tr>
                    @endforeach
                </table>
                {{ $supervisors->links() }}

            </div>
        </div>
    </div>
@endsection
