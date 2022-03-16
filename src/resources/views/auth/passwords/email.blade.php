@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col col-md-offset-3 col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">{{ __('Reset Password') }}</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group">
                            <label for="email">{{ __('E-Mail Address') }}</label>
                            <input
                                id="email"
                                type="text"
                                class="form-control"
                                name="email"
                            >
                        </div>
                        <div class="text-right">
                            <button class="btn btn-primary">
                                Get Reset Password Link
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
