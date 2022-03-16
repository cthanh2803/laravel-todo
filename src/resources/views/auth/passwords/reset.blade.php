@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col col-md-offset-3 col-md-6">
            <nav class="panel panel-default">
                <div class="panel-heading">{{ __('Reset Password') }}</div>
                <div class="panel-body">
                    @if($errors->any())
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $messasge)
                                <p>{{ $message }}</p>
                            @endforeach
                        </div>
                    @endif
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}" />
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email" />
                        </div>
                        <input type="hidden" name="token" value="{{ $token }}">
                        <div class="form-group">
                            <label for="password">New Password</label>
                            <input type="password" class="form-control" id="password" name="password" />
                        </div>
                        <div class="form-group">
                            <label for="password-confirm">New Password Confirm</label>
                            <input type="password" class="form-control" id="password-confirm" name="password_confirmation" />
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </nav>
        </div>
    </div>
</div>
@endsection
