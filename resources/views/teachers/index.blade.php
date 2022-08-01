@extends('layouts.app')
@section('title',__('titles.teachers.title'))
@section('content')
<div class="container page g-0">
    <h5 class="text-primary hf fw-bold my-5 border-end border-bottom border-secondary pb-1 pe-2">{{ __('titles.teachers.all')}}</h5>
    <div class="row row-cols-md-2 g-4">
        @foreach($teachers as $teacher)
        <div class="col">
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4 text-center">
                        @if(is_null($teacher->photo))
                        <img src="{{ asset('images/teachers/'.$teacher->user->gender.'.png') }}" class="img-fluid rounded-end" alt="teacher" width="256">
                        @else
                        <img src="{{ asset('images/teachers/'.$teacher->photo) }}" class="img-fluid rounded-end" alt="teacher" width="256">
                        @endif
                    </div>
                    <div class="col-md-8 position-relative">
                        <div class="card-body bg-light h-100 border-bottom border-primary border-5">
                            <h5 class="card-title"><span>{{ __('labels.teachers.'.$teacher->user->gender) }}</span>&nbsp;{{ $teacher->user->name }}</h5>
                            <p class="card-text text-justify">{{ $teacher->description }}</p>
                            <div class="position-absolute bottom-0 start-50 translate-middle-x bg-primary w-100 justify-content-center d-flex">
                                <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                    <a type="button" class="btn btn-primary" href="{{ route('teachers.courses', id($teacher->id)) }}">
                                        <i class="fas fa-chalkboard-teacher"></i>
                                        {{ __('labels.teachers.allcourses') }}
                                    </a>
                                    <a type="button" class="btn btn-primary" href="{{ route('teachers.downloads', id($teacher->id)) }}">
                                        <i class="fas fa-file-download"></i>
                                        {{ __('labels.teachers.downloads') }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection