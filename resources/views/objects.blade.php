@extends('layouts.objects-layout')

@section('pagetitle', 'Objects')

@section('header-option')
    <a href="{{ route('new object') }}" class="button primary">
        <x-icons.plus/>
        New object
    </a>
@endsection

@section('content')
    <ul class="object-list">
        @foreach ($objects as $object)
        <a class="object" href="{{ route('edit object', ['object' => $object->id]) }}">
            <div class="object-header">
                <span class="object-title">{{ $object->name }}</span>
                <span class="object-date">{{ $object->updated_at->format('M j \a\t g:i a') }}</span>
            </div>
            <span class="object-description">{{ $object->description }}</span>
        </a>
        @endforeach
    </ul>
@endsection