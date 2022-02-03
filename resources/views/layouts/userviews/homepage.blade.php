@extends('layouts.user')

@section('content')
    <!-- Slider Section -->
    @livewire('homepage-sliders')
    @livewire('how-we-work-section')
    <!-- collection -->
    @livewire('all-time-hit-brands')

@endsection