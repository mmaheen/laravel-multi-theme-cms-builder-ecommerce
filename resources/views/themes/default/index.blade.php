@extends('themes.default.layouts.app')
@section('content')
    <div class="container mx-auto my-5">
        @foreach ($components as $comp)
            @php
                $componentName = 'default.' . $comp->name;
            @endphp
            <x-dynamic-component :component="$componentName" :componentData="$comp->data" />
        @endforeach

    </div>
@endsection
