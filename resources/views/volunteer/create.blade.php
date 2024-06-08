@extends('layouts.template')

@section('main')
    {{-- @section('title') 
Create Volunter
@endsection  --}}
    <div class="mx-3 mt-3">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="mx-3">
                            <h4 class="mt-3">Register New Volunteer</h4>
                            <form action="{{ route('volunteer.store') }} " method="post">
                                @csrf
                                {{-- action akan run volunteer.store  --}}
                                {{-- dia akan create satu user dalam public function store  --}}
                                {{-- data tu diakan amik dari form yang kita isi --}}
                                {{-- and return back to volunteer.index --}}
                                <div>
                                    <label for="name">Name</label>
                                    <input type="text" name="name" class="form-control" required>
                                </div>
                                <label for="email">Email</label>
                                <div>
                                    <input type="text" name="email" class="form-control" required>
                                </div>
                                <label for="password">Password</label>
                                <div>
                                    <input type="password" name="password" class="form-control" required>
                                </div>
                                <button type="submit" class="btn btn-primary mt-3">Register</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
