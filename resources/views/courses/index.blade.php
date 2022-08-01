@extends('layouts.app')
@section('title',__('titles.courses.title'))
@section('content')
<div class="container page g-0">
    <div class="row my-5 justify-content-between border-end border-bottom border-secondary pb-1 pe-2 g-0">
        <div class="col-auto">
            <h5 class="text-primary hf fw-bold">{{ __('titles.courses.all')}}</h5>
        </div>
        <div class="col-auto">
            @if($phase==='all')
            <div class="dropdown d-inline-block">
                <button class="btn btn-sm btn-secondary dropdown-toggle" type="button" id="dropdownMenuPhases" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ __('labels.phases.all')}}
                </button>
                <ul class="dropdown-menu dropdown-menu-start text-end">
                    <li><a class="dropdown-item active" href="{{ route('courses.index') }}">{{ __('labels.phases.all')}}</a></li>
                    @foreach(__('menus.levels') as $i=>$l)
                    <li><a class="dropdown-item" href="{{ route('courses.index', $i) }}">{{ __('menus.levels')[$i]['phase'] }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="dropdown d-inline-block">
                <button class="btn btn-sm btn-secondary dropdown-toggle" type="button" id="dropdownMenuLevels" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ __('labels.levels.all')}}
                </button>
                <ul class="dropdown-menu dropdown-menu-start text-end">
                    <li><a class="dropdown-item active" href="{{ route('courses.index') }}">{{ __('labels.levels.all')}}</a></li>
                </ul>
            </div>
            @else
            <div class="dropdown d-inline-block">
                <button class="btn btn-sm btn-secondary dropdown-toggle" type="button" id="dropdownMenuPhases" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ __('menus.levels')[$phase]['phase'] }}
                </button>
                <ul class="dropdown-menu dropdown-menu-start text-end">
                    <li><a class="dropdown-item" href="{{ route('courses.index') }}">{{ __('labels.phases.all')}}</a></li>
                    @foreach(__('menus.levels') as $i=>$l)
                    <li><a class="dropdown-item {{ $phase==$i?'active':'' }}" href="{{ route('courses.index', $i) }}">{{ __('menus.levels')[$i]['phase'] }}</a></li>
                    @endforeach
                </ul>
            </div>
            @if($level==='all')
            <div class="dropdown d-inline-block">
                <button class="btn btn-sm btn-secondary dropdown-toggle" type="button" id="dropdownMenuLevels" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ __('labels.levels.all')}}
                </button>
                <ul class="dropdown-menu dropdown-menu-start text-end">
                    <li><a class="dropdown-item active" href="{{ route('courses.index',[$phase]) }}">{{ __('labels.levels.all')}}</a></li>
                    @foreach(__('menus.levels')[$phase]['levels'] as $i=>$l)
                    <li><a class="dropdown-item" href="{{ route('courses.index', [$phase, $i]) }}">{{ __('menus.levels')[$phase]['levels'][$i] }}</a></li>
                    @endforeach
                </ul>
            </div>
            @else
            <div class="dropdown d-inline-block">
                <button class="btn btn-sm btn-secondary dropdown-toggle" type="button" id="dropdownMenuLevels" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ __('menus.levels')[$phase]['levels'][$level] }}
                </button>
                <ul class="dropdown-menu dropdown-menu-start text-end">
                    <li><a class="dropdown-item" href="{{ route('courses.index',[$phase]) }}">{{ __('labels.levels.all')}}</a></li>
                    @foreach(__('menus.levels')[$phase]['levels'] as $i=>$l)
                    <li><a class="dropdown-item {{ $level==$i?'active':'' }}" href="{{ route('courses.index', [$phase, $i]) }}">{{ __('menus.levels')[$phase]['levels'][$i] }}</a></li>
                    @endforeach
                </ul>
            </div>
            @endif
            @endif
        </div>
    </div>


</div>
@include('home.library')
@endsection
