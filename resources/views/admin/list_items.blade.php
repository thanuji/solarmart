@extends('layouts.admin')
@section('admin_header')
<div class="container-fluid text-white">
    <div class="row p-t-b-10 ">
        <div class="col">
            <h4><i class="icon-package"></i> Products</h4>
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="content-wrapper animatedParent animateOnce">
    @if (\Session::has('success'))
    <div class="alert alert-success">
        <strong>{{ \Session::get('success') }}</strong>
    </div>
    @endif
    @if (\Session::has('delete'))
        <div class="alert alert-danger">
            <strong>{{ \Session::get('delete') }}</strong>
        </div>
    @endif
    @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card no-b">
                    <div class="collapse show" id="salesCard">
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-hover ">
                                <thead>
                                    <tr>
                                        <th>Item</th>
                                        <th>Item Name</th>
                                        <th>Item Brand</th>
                                        <th>Catergory</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>Discount</th>
                                        <th>Status</th>
                                        <th class="text-center">Modify</th>
                                    </tr>    
                                </thead>
                                    <tbody>
                                    @foreach($items as $key => $item)
                                        <tr>
                                            <td class="w-10"> <img src="{{ asset('uploads/' . $item->image_name) }}" alt=""></td>
                                            <td>
                                                <h6>{{$item->name}}</h6>
                                            </td>
                                            <td>
                                                <h6>{{$item->brand}}</h6>
                                            </td>
                                            <td>
                                                <h6>{{$item->catergory_id}}</h6>
                                            </td>
                                            <td>
                                                <h6>{{$item->quantity}}</h6>
                                            </td>
                                            <td>$ {{$item->price}}</td>
                                            <td>{{$item->discount}} %</td>
                                            <td>
                                                @if($item->status == 1)
                                                <span class="badge badge-success">Published</span>
                                                @endif
                                                @if($item->status == 2)
                                                <span class="badge badge-warning">Draft</span>
                                                @endif
                                            </td>
                                            <td>
                                                    <a type="button" href="#" class="btn btn-primary btn-block btn-sm">Edit Item</a>
                                                    <a type="button" href="delete_item/{{ $item->id }}" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-block btn-sm">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <nav class="p-t-b-20" aria-label="Page navigation">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav> -->
    </div>
</div>
@endsection