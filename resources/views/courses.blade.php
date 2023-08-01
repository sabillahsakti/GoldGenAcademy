@extends('layout.master')

@section('content')

<<<<<<< HEAD
    <div class="services-section">
        <h2>List Courses</h2>
        <p>
            Choose the courses that you want    
        </p>
        
        <div class="service-card">
            @foreach($courses as $course)
            <div class="service">
                <img src="{{ asset($course->image) }}" alt="Course Image">
                <h3>{{ $course->name }}</h3>
                <h5>{{ $course->price }}</h5>
                <button onclick="window.location.href = '{{ Auth::check() ? route('courses.purchase', $course->id) : route('index') }}'">Purchase</button>
=======
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
>>>>>>> 731d3611ebdb5af096c8bbf578783d150b353d2e
            </div>
        </div>
<<<<<<< HEAD
    </div>
    @endsection
=======
        @endforeach
    </div>

    @endsection
>>>>>>> 731d3611ebdb5af096c8bbf578783d150b353d2e
