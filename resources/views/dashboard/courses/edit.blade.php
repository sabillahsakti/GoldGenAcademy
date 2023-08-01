@extends('dashboard.layouts.master')

@section('content')

<form action="{{ route('edit.courses', $courses->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" name="name" class="form-control" aria-describedby="nama" value="{{$courses->name}}" >
      </div>
    <div>
   <div class="mb-3">
        <label for="nama" class="form-label">Price</label>
        <input type="text" name="price" class="form-control" aria-describedby="nama" value="{{$courses->price}}">
       </div>
   <div>
    <div class="mb-3">
        <label for="nama" class="form-label">Image</label>
        <input type="text" name="image" class="form-control" aria-describedby="nama"  value="{{$courses->image}}">
       </div>
   <div>
    <div class="mb-3">
        <label for="nama" class="form-label">ID Field</label>
        <input type="text" name="image" class="form-control" aria-describedby="nama"  value="{{$courses->field_id}}">
       </div>
   <div>
   
    


<button type="submit" class="btn btn-primary">Submit</button>
    
</form>

@endsection