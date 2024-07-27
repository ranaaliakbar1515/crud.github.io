@extends('master')

@section('content')

@if (session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
<div class="container center mt-5">
 
<div class="alert alert-success">
    <h1 class="text-center"> Add Product Details</h1>

</div>
     
   
    <form action="{{URL('add')}}" method="post">
        @csrf
       <div class="row ">
        <div class="col-md-6" >
                <img src="{{ asset('upload/side1.jpg') }}" class=" d-block " style="width:100%;" alt="side photo">

        </div>
        <div class="col-md-6  mt-4 " >
            <div class="card p-5  " style="width: 100%; height:500px;background-color:gray;">
            <div class="form-group mt-5">
                <input type="text" class="form-control" name="products_name" required placeholder="Enter Product Name">
                </div>
                   
                <div class=" form-group  mt-5">   
                 <input type="number"  class="form-control"name="products_price" required placeholder="Enter Price">
                </div>
                <div class=" form-group  mt-5 text-end">   
                <button input type="submit" class="btn btn-primary" >Submitted</button>        
                </div>   
        </div>
        </div>
        </div>

    

      

    </form>


</div>

@endsection()


