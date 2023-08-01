@extends('layout.master')

@section('content')

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
                <button onclick="window.location.href = '{{ route('courses.purchase', $course->id) }}'">Purchase</button>
            </div>
            @endforeach
        </div>
    </div>
    @endsection