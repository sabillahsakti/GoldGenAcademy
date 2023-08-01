@extends('dashboard.layouts.master')

@section('content')


<div class="row">

    <table class="table">
      <thead>
        <tr>
          <th scope="col" style="padding-left: 30px">No</th>
          <th scope="col">Nama</th>
          <th scope="col">User ID</th>
          <th scope="col">Course ID</th>
          <th scope="col">Dibuat</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($orders as $row)
        <tr>
          <th scope="row" style="padding-left: 30px">{{$row->id}}</th>
          <td>{{$row->name}}</td>
          <td>{{$row->user_id}}</td>
         
          <td>{{$row->course_id}}</td>
          <td>{{$row->created_at->diffForHumans()}}</td>
          <td><a href="{{ route ('update.courses', $row->id)}}" type="button" class="btn btn-success">Update</a>
                
        
              <td>  
           
            <button type="button" class="btn btn-danger" onclick="document.getElementById('form-{{$row->id}}').submit()">Hapus</button> 
            <form id="form-{{$row->id}}" action="{{ rout('delete.courses', $row->id) }}" method="POST">
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