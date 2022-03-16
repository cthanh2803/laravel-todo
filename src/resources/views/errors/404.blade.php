@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col col-md-offset-3 col-md-6">
            <div class="text-center">
                <p>Not found</p>
                <a href="{{ route('home') }}" class="btn">Back to Homepage</a>
            </div>
        </div>
    </div>
</div>
@endsection