@extends('layouts.app')
@section('title',__('titles.commons.login'))
@section('content')
<div class="container page">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header bg-light text-primary fw-bold hf">
                    {{ __('titles.commons.login')}}
                </div>
                <div class="card-body">
                    @include('guest.auth.login.form')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection