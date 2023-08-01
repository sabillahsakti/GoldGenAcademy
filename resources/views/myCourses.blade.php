@extends('layout.master')

@section('content')
    <div class="course-list">
        @foreach ($courses as $course)
            <div class="course-card">
                <img src="{{ asset($course->image) }}" alt="{{ $course->name }}">
                <div class="course-details">
                    <h3>{{ $course->name }}</h3>
                </div>
                <a href="#" class="btn-purchase">Certificate</a>
            </div>
        @endforeach
    </div>
@endsection