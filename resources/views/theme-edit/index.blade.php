@extends('theme-edit.layouts.app')
@section('content')
    @foreach ($product->components->sortBy('position') as $component)
        <x-dynamic-component :component="$component->name" />
    @endforeach
@endsection
