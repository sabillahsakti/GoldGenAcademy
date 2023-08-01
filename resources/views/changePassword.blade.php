@extends('layout.master')
<style>
h2 {
    text-align: center;
    margin-bottom: 20px;
}

form {
    width: 50%;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 5px;
    background: #f9f9f9;
}

div {
    margin-bottom: 10px;
    padding: 5px;
}

label {
    display: block;
    margin-bottom: 5px;
}

input[type="password"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
}

.alert {
    color: #721c24;
    background-color: #f8d7da;
    border-color: #f5c6cb;
    padding: .75rem 1.25rem;
    margin-bottom: 1rem;
    border: 1px solid transparent;
    border-radius: .25rem;
}

.alert-danger {
    color: #721c24;
    background-color: #f8d7da;
    border-color: #f5c6cb;
}

.alert-success {
    color: #155724;
    background-color: #d4edda;
    border-color: #c3e6cb;
}

.btn-sub {
    margin-top: 20px;
    display: flex;
    justify-content: center;
}

.btn-sub button[type="submit"] {
    display: block;
    background-color: #333;
    padding: 15px;
    color: #fff;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    justify-content: center;
}

.btn-sub button[type="submit"]:hover {
    background-color: #666;
    /* Darker shade on hover */
}
</style>

@section('content')
<h2>Change Password</h2>

@if (session('status'))
<div class="alert alert-success">
    {{ session('status') }}
</div>
@endif

<form method="POST" action="{{ route('changePassword') }}">
    @csrf

    <div>
        <label for="old_password">Old Password</label>
        <input type="password" id="old_password" name="old_password" required>
        @error('old_password')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div>
        <label for="new_password">New Password</label>
        <input type="password" id="new_password" name="new_password" required>
        @error('new_password')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div>
        <label for="new_password_confirmation">Confirm New Password</label>
        <input type="password" id="new_password_confirmation" name="new_password_confirmation" required>
    </div>
    <div class="btn-sub">
    <button type="submit">Change Password</button>
    </div>
</form>
@endsection