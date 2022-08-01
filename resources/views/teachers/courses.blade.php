@extends('layouts.app')
@section('title',__('labels.teachers.'.$teacher['user']['gender']) .' '. $teacher['user']['name'])
@section('content')
<div class="container page g-0">
    <h5 class="text-primary hf fw-bold my-5 border-end border-bottom border-secondary pb-1 pe-2"><span>@yield('title')</h5>
    <div class="row">
        <div class="col-md-4">
            @include('teachers.teacher')
        </div>
        <div class="col-md-8">
            <div class="row g-0">
                <div class="col-md-6">
                    <div class="d-grid">
                        <a class="btn btn-primary" href="{{ route('teachers.courses', id($teacher['id'])) }}">
                            <i class="fas fa-chalkboard-teacher"></i>
                            {{ __('labels.teachers.allcourses') }}
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-grid">
                        <a class="btn btn-outline-primary" href="{{ route('teachers.downloads', id($teacher['id'])) }}">
                            <i class="fas fa-file-download"></i>
                            {{ __('labels.teachers.downloads') }}
                        </a>
                    </div>
                </div>
            </div>
            <div class="row g-0">
                Courses
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
@include('scripts.teachers.show')
@endsection