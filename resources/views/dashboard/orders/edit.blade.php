@extends('dashboard.layouts.master')

@section('content')

<form action="{{ route('update.orders', $order->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="user_id">User ID:</label>
        <input type="text" id="user_id" name="user_id" class="form-control" value="{{ $order->user_id }}" required>
    </div>

    <div class="form-group">
        <label for="course_id">Course ID:</label>
        <input type="text" id="course_id" name="course_id" class="form-control" value="{{ $order->course_id }}" required>
    </div>

    <div class="form-group">
    <label for="status">Status:</label>
        <select id="status" name="status" class="form-control" required>
            <option value="Pending" {{ $order->status == 'Pending' ? 'selected' : '' }}>Pending</option>
            <option value="On Going" {{ $order->status == 'On Going' ? 'selected' : '' }}>On Going</option>
            <option value="Done" {{ $order->status == 'Done' ? 'selected' : '' }}>Done</option>
        </select>
    </div>


    <button type="submit" class="btn btn-primary">Submit</button>

</form>

@endsection
