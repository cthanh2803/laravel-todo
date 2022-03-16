@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col col-md-offset-3 col-md-6">
            <div class="text-center">
                <p>You do not have authorization </p>
                <a href="{{ route('home') }}" class="btn">
                    Back to Homepage
                </a>
            </div>
        </div>
    </div>
</div>