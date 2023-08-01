@extends('layout.master')

@section('content')

    <div class="services-section">
        <h2>Course List</h2>
        <p>
            Choose the course that you want    
        </p>
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Name</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
  </tbody>
</table>

    
        
        <div class="service-card">
            @foreach($courses as $course)
            <div class="service">
                <img src="{{ asset($course->image) }}" alt="Course Image">
                <h3>{{ $course->name }}</h3>
                <h5>{{ $course->price }}</h5>
                <button onclick="window.location.href = '{{ Auth::check() ? route('courses.purchase', $course->id) : route('index') }}'">Purchase</button>
            </div>
            @endforeach
        </div>

    @endsection
