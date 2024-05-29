@extends('layouts.objects-layout', ['returnTo' => 'objects'])

@section('pagetitle', 'Edit object')
@section('header-option')
    <span class="header-date">
        Created on {{ $object->created_at->format('M j \a\t g:i a') }}
    </span>
@endsection

@section('content')
    <x-object-form action-label="Update" :object="$object" action="{{ route('create').'/'.$object->id }}"/>

    <form action="">
        <button class="button prominent warning mt-3">
            <x-icons.delete/>
            Delete object
        </button>
    </form>
@endsection