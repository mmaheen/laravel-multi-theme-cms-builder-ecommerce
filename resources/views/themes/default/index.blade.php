@extends('themes.default.layouts.app')
@section('content')
    <div class="container mx-auto my-5">
        @foreach ($components as $comp)
            <x-dynamic-component :component="$comp->name" :componentData="$comp->data" />
        @endforeach

    </div>
@endsection
