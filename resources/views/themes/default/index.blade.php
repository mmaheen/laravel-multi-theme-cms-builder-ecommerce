@extends('themes.default.layouts.app')
@section('content')
    <div class="container mx-auto my-5">
        <x-navbar :navbar="$navbar" />
        <x-hero :hero="$hero" />
        <x-features :features="$features" />
        <x-overview :overview="$overview" />
        <x-specs :specs="$specs" />
    </div>
@endsection
