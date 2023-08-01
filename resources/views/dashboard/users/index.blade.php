@extends('dashboard.layouts.master')

@section('content')


<div class="row">

    <table class="table">
      <thead>
        <tr>
          <th scope="col" style="padding-left: 30px">No</th>
          <th scope="col">Nama</th>
          <th scope="col">Email</th>
          <th scope="col">Address</th>
          <th scope="col">Phone</th>
          <th scope="col">Dibuat</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($users as $row)
        <tr>
          <th scope="row" style="padding-left: 30px">{{$row->id}}</th>
          <td>{{$row->name}}</td>
          <td>{{$row->email}}</td>
          <td>{{$row->address}}</td>
          <td>{{$row->phone}}</td>
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