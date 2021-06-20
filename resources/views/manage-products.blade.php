@extends('admin-master')
@section('manage_products')
<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <!-- ============================================================== -->
            <!-- pageheader  -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                        <h2 class="pageheader-title">E-commerce Dashboard  </h2>
                        @if (Session::has('success'))
                           <div class="alert alert-success mt-4">
                                {{Session::get('success')}}
                            </div>
                        @endif
                        @php
                         Session::forget('success') 
                        @endphp
                        @if(Session::has('error'))
                            <div class="alert alert-danger mt-4">
                                {{Session::get('error')}}
                            </div>
                        @endif
                        @php
                            Session::forget('error')
                        @endphp
                        <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">E-Commerce Dashboard </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
  
            <div class="ecommerce-widget">

               
                <div class="row">
                    
                    <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Recent Orders</h5>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="bg-light">
                                            <tr class="border-0">
                                                <th class="border-0">#</th>
                                                <th class="border-0">Imagen</th>
                                                <th class="border-0">Nombre</th>
                                            
                                              
                                                <th class="border-0">Precio</th>
                                                <th class="border-0">Categoria</th>
                                                <th class="border-0">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                @php
                                                 $count = 1;   
                                                @endphp
                                            @foreach ($products as $product)
                                            <tr>
                                                <td>{{$count++}}</td>
                                                <td>
                                                    <div class="m-r-10"><img src="{{url('assets/images/'.$product['gallery'])}}" alt="product" class="rounded" width="45"></div>
                                                </td>
                                                <td>{{$product['name']}} </td>
                                               
                                               
                                                <td>{{$product['price']}}</td>
                                                <td>{{$product['category']}}</td>
                                                <td style="display:flex;" class="my-2">
                                                    <a href="/edit/{{$product['id']}}">
                                                        <i class="fas fa-edit mr-2 text-primary"></i>
                                                    </a>
                                                    <a href="/delete/{{$product['id']}}">
                                                        <i class="fas fa-trash mr-2 text-danger"></i>
                                                    </a> 
                                                </td>
                                            </tr>
                                            @endforeach
                                            
                                            <tr>
                                                <td colspan="9"><a href="#" class="btn btn-outline-light float-right">View Details</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end manage  products  -->

@endsection