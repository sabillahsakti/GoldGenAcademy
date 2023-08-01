@extends('layout.master')

@section('content')

<div class="services-section">
    <h2>Course List</h2>
    <p>
        Choose the course that you want
    </p>

    <div class="service-card">
        @foreach($courses as $course)
        <div class="service">
            <style>
            .button-purchase button {
                display: block;
                padding: 10px;
                background-color: #333;
                color: #fff;
                border: none;
                border-radius: 8px;
                cursor: pointer;
                margin-left: 111px;
            }

            .button-purchase button:hover {
                background-color: #666;
                /* Darker shade on hover */
            }
            </style>
            <img src="{{ asset($course->image) }}" alt="Course Image">
            <h3>{{ $course->name }}</h3>
            <h5>{{ $course->price }}</h5>
            <div class="button-purchase">
            <button
                onclick="window.location.href = '{{ Auth::check() ? route('courses.purchase', $course->id) : route('index') }}'">Purchase</button>
            </div>
        </div>
        @endforeach
    </div>

    @endsection
