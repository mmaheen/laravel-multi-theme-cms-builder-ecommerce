@extends('theme-edit.layouts.app')
@section('content')
    {{-- @foreach ($product->components->sortBy('position') as $component)
        <x-dynamic-component :component="$component->name" :componentData="$component->data" />
    @endforeach --}}
    @foreach ($components as $comp)
        <x-dynamic-component :component="$comp->name" :componentData="$comp->data" />
    @endforeach
@endsection
