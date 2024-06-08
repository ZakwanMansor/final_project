@extends('layouts.template')

@section('main')
    {{-- @section('title') Create Loan @endsection --}}
    <div class="mx-3 mt-3">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="px-3">
                            <h4 class="mt-3">Register New Member</h4>
                            <form action="{{ route('member.store') }} " method="POST">
                                @csrf
                                <div>
                                    <label for="name">Name</label>
                                    <input type="text" name="name" class="form-control" required>
                                </div>

                                <div>
                                    <label for="icNum">Ic Number</label>
                                    <input type="text" name="icNum" class="form-control" required>
                                </div>

                                <div>
                                    <label for="phone">Phone</label>
                                    <input type="tel" name="phone" class="form-control" required>
                                </div>

                                <div>
                                    <label for="address">Address</label>
                                    <textarea name="address"class="form-control" required></textarea>
                                </div>

                                <div>
                                    <label for="email">Email</label>
                                    <input type="email" name="email" class="form-control" required>
                                </div>

                                <button type="submit" class="btn btn-primary mt-3">Register</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
@endsection
