@extends('layouts.objects-layout', ['returnTo' => 'objects'])

@section('pagetitle', 'New object')

@section('content')
    <x-object-form action-label="Create" action="{{ route('create') }}"/>
    {{-- @component('crudexample.components.object-form', ['actionLabel' => 'Create'])@endcomponent --}}
@endsection