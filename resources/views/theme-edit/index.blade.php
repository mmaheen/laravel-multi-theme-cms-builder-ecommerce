@extends('theme-edit.layouts.app')
@section('content')
    {{-- @foreach ($product->components->sortBy('position') as $component)
        <x-dynamic-component :component="$component->name" :componentData="$component->data" />
    @endforeach --}}
    @foreach ($components as $comp)
        @php
            $componentName = $theme . '.' . $comp->name;
        @endphp
        <x-dynamic-component :component="$componentName" :componentData="$comp->data" />
    @endforeach
@endsection
