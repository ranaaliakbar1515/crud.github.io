@extends('master')

@section('content')
<div class="container">

    <div class="row bg-primary" >
    <h1>edit page</h1>
    </div>
    <form action="{{URL('edit/'.$products->id)}}" method="get">
        @csrf
        <div class="row  col-md-9 m-3 form-group">
            <label for="producs name">Products Name </label>
            <input type="text" class="form-control" name="products_name"  value="{{$products->products_name}}" required placeholder="enter producs name">
            </div>
           
        <div class="row  col-md-9 m-3 form-group">
            <label for="producs name">Products Price </label>
            <input type="number"  class="form-control"name="products_price" value="{{$products->products_price}}" required placeholder="enter price">
            </div>
            <div class="row  col-md-3 m-3 ">
           <button input type="submit" name="submit" value="submit" class="btn btn-primary" >Edit</button>
            </div>

      

    </form>


</div>

@endsection()
@yield('form')

