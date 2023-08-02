@extends('dashboard.layouts.master')

@section('content')
    <form action="{{ route('dashboard.courses.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Course Name:</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="price">Course Price:</label>
            <input type="number" id="price" name="price" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="image">Course Image:</label>
            <input type="file" id="image" name="image" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="field_id">Field ID:</label>
            <input type="number" id="field_id" name="field_id" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
