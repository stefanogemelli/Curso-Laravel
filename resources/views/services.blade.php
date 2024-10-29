@extends('layouts.landing')

@section('title', 'services')

@section('content')
    <h1>Services</h1>

    @component('_components.card')
        @slot('title')
            Service 1
        @endslot
        @slot('content')
            Lorem impsum dolor set aimet.
        @endslot
    @endcomponent

@endsection
