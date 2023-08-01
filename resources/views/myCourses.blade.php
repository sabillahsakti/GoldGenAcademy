@extends('layout.master')

@section('content')
    <div class="course-list">
        @foreach ($userOrders as $order)
            <div class="course-card">
                <img src="{{ asset($order->course->image) }}" alt="{{ $order->course->name }}">
                <div class="course-details">
                    <h3>{{ $order->course->name }}</h3>
                </div>
                <button class="btn-purchase" 
                        @if ($order->status == 'Pending') disabled @endif
                        onclick="window.location.href='{{ route('certificate', $order->course->id) }}'"
                >
                    Certificate
                </button>
            </div>
        @endforeach
    </div>
@endsection
