@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if ($message = Session::get('message'))
            <div class="alert alert-danger alert-block" style="width: 87%;margin-left: 92px;font-size: 17px;">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
            @endif
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="old_password" class="col-md-4 col-form-label text-md-right">Old Password</label>
                            <div class="col-md-6">
                                <input type="password" id="old_password" required name="old_password" class="form-control" placeholder="Old password"> 

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="new_password" class="col-md-4 col-form-label text-md-right">{{ __('New Password') }}</label>

                            <div class="col-md-6">
                                <input id="new_password" type="password" class="form-control" name="new_password" required autocomplete="new_password" placeholder="New password">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="confirm_password" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="confirm_password" type="password" class="form-control" name="confirm_password" required autocomplete="confirm_password" placeholder="Confirm password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
