@extends('theme-edit.layouts.app')
@section('content')
    @foreach ($product->components->sortBy('position') as $component)
        <x-dynamic-component :component="$component->name" :navbar="$navbar" :hero="$hero" :features="$features" :overview="$overview"
            :specs="$specs" />
    @endforeach
@endsection
