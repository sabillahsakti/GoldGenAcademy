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
          <th scope="col" style="width: 40%">Payment Recieve</th>
          <th scope="col">Status</th>
          <th scope="col">Dibuat</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($orders as $row)
        <tr>
          <th scope="row" style="padding-left: 30px">{{$row->id}}</th>
          <td>{{$row->user->name}}</td>
          <td>{{$row->user_id}}</td>
          <td>{{$row->course_id}}</td>
          <td>
            <img style="width: 40%" src="{{ asset('storage/' . $row->payment_image_path) }}" alt="">
          </td>
          <td>{{$row->status}}</td>
          <td>{{$row->created_at->diffForHumans()}}</td>
          <td><a href="{{ route ('edit.orders', $row->id) }}" type="button" class="btn btn-success">Edit</a></td>
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