@extends('layouts.default')

@section('content')
    <div class="register-page">
        <div class="register-box">
        <div class="card">
            <div class="card-body register-card-body">
                <form action="{{ url('/user') }}" method="post">
                    @csrf
                    @method('put')
                    <input type="hidden" name="id" value="{{ $user->id }}">
                    <div class="input-group mb-3">
                        <input type="text" name="name" value="{{ $user->name}}" class="form-control">
                        <div class="input-group-text"><span class="bi bi-person"></span></div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="email" name="email" value="{{ $user->email}}" class="form-control">
                        <div class="input-group-text"><span class="bi bi-envelope"></span></div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                        <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
                    </div>
                    <!--begin::Row-->
                    <div class="row">
                        <!--/.col-->
                        <div class="col-4">
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">Sign In</button>
                            </div>
                        </div>
                        <!--/.col-->
                    </div>
                    <!--end::Row-->
                </form>
            </div>
            <!--/.register-card-body-->
        </div>
    </div>
</div>
@endsection
