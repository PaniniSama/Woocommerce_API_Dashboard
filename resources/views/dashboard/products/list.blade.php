@extends('layouts.dashboard')

@section('content')

<div class="container-fluid">
<div class="page-title-box">
                            <div class="row align-items-center">
                                <div class="col-sm-6">
                                </div>
                                <div class="col-sm-6">
                                    <!-- <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="{{url('/dashboard/products')}}">Products</a></li>
                                    </ol> -->
                                </div>
                            </div> <!-- end row -->
                        </div>
<div class="row">
            <div class="col-lg-12">
                <div class="card m-b-30">
                    <div class="card-body">

                        <h4 class="mt-0 header-title">Products List </h4>
                        </p>
                        <div class="row">
                            <form method="post" action=" {{url('/dashboard/products/import')}}"  enctype="multipart/form-data">
                                @csrf
                                <input type="file" name="excelfile" required>
                                <button type="submit" class="btn-primary">Import Products</button>
                            </form>
                        </div>
                        <br>

                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Product Name</th>
                                        <th>Price</th>
                                        <th>Regular Price</th>
                                        <th>On Sale</th>
                                        <th>Edit Product</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($list_products as $product)
                                        <tr>
                                            <th scope="row">{{$product->id}}</th>
                                            <td>{{$product->name}}</td>
                                            <td>{{$product->price}}</td>
                                            <td>{{$product->regular_price}}</td>
                                            <td>@if($product->on_sale) yes @else no @endif</td>
                                            <td>
                                            <div class="row">
                                                <a class="btn btn-primary" href="{{url('/dashboard/products/show/'.$product->id.'')}}">Show Details</a>
                                                <a class="btn btn-primary offset-1" href="{{url('/dashboard/products/update/'.$product->id.'')}}">Update Product</a>
                            
                                                <form class="offset-1" action="{{url('/dashboard/products/delete')}}" method="post">
                                                @csrf
                                                {{method_field('DELETE')}}
                                                    <button class="btn btn-danger" type="submit" name="id" value="{{$product->id}}">Remove Product</button>
                                                </form>


                                            
                                            </div>
                                                
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div> <!-- end col -->
        </div>
</div>

@endsection