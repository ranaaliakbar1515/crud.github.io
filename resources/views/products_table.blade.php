@extends('master')
@section ('content')


<table class="table table-hover">
  <thead>
    <tr>
      <th scope="row">#</th>
      <th >Product Name</th>
      <th >Product Price </th>
      <th >Date</th>
      <th >Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($products as $p)
  <tr>
       
      <td scope="row">{{$p->id}}</td>
      <td>{{$p->products_name}}</td>
      <td>{{$p->products_price}}</td>
      <td>{{$p->created_at}}</td>
      <td>
        <a href="{{URL('edit/'.$p->id)}}" class="btn btn-warning">Edit</a>
        <a href="{{URL('delete/'.$p->id)}}" class="btn btn-danger">Delete</a>
      </td>
    </tr>
    
    @endforeach
  </tbody>
</table>
@endsection()
