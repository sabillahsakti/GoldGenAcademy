@extends('dashboard.layouts.master')

@section('content')


<div class="row">
<a style="margin: 1%" href="{{route('dashboard.courses.create')}}" class="float-right btn btn-sm btn-primary">Add Courses</a>

    <table class="table">
      <thead>
        <tr>
          <th scope="col" style="padding-left: 30px">No</th>
          <th scope="col">Nama</th>
          <th scope="col">Price</th>
          <th scope="col">Image</th>
          <th scope="col">Fiel Id</th>
          <th scope="col">Dibuat</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($courses as $row)
        <tr>
          <th scope="row" style="padding-left: 30px">{{$row->id}}</th>
          <td>{{$row->name}}</td>
          <td>{{$row->price}}</td>
          <td>
            <img style="width: 50px" src="{{ asset($row->image) }}" alt="">
          </td>
         
          <td>{{$row->field_id}}</td>
          <td>{{$row->created_at->diffForHumans()}}</td>
          <td><a href="{{ route ('update.courses', $row->id)}}" type="button" class="btn btn-success">Update</a>
                
        
              <td>  
           
            <button type="button" class="btn btn-danger" onclick="document.getElementById('form-{{$row->id}}').submit()">Hapus</button> 
            <form id="form-{{$row->id}}" action="{{ route('delete.courses', $row->id) }}" method="POST">
              @csrf
              @method('delete')
            </form>

            
         
           </td>
        </tr>
        @endforeach
        
       
      </tbody>
    </table>
  </div>
    @endsection