@extends('dashboard.layouts.master')

@section('content')

@if(isset($courses))
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
        <label for="nama" class="form-label">ID Field</label>
        <select name="area_id" class="form-select form-control" aria-label="Default select example">
            @foreach ($fields as $field)
            <option value="{{ $field->id }}">{{ $field->name }}</option>
            @endforeach 
        </select>
    </div>
    
   
    


<button type="submit" class="btn btn-primary">Submit</button>
    
</form>
@endif
@endsection