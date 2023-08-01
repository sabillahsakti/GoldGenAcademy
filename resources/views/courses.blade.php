@extends('layout.master')

@section('content')

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
                <button onclick="window.location.href = '{{ route('courses.purchase', $course->id) }}'">Purchase</button>
            </div>
            @endforeach
        </div>

    @endsection