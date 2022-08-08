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
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card no-b">
                    <div class="collapse show" id="salesCard">
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-hover ">
                                    <tbody>
                                        <tr>
                                            <td class="w-10"> <img src="{{asset('main_theme/assets/img/demo/s1.png')}}"
                                                    alt=""></td>
                                            <td>
                                                <h6>Apple Product</h6><small class="text-muted">Mobile
                                                    Phones</small>
                                            </td>
                                            <td>$250</td>
                                            <td><span class="badge badge-success">Published</span></td>
                                            <td><span><i class="icon icon-data_usage"></i> 5 days
                                                    ago</span><br><span><i class="icon icon-timer"></i> 5
                                                    September, 2017</span></td>
                                            <td><a href="#"><i class="icon icon-pencil-square-o"></i> Edit
                                                    item</a></td>
                                        </tr>
                                        <tr>
                                            <td class="w-10"> <img src="{{asset('main_theme/assets/img/demo/s2.png')}}"
                                                    alt=""></td>
                                            <td>
                                                <h6>Apple Product</h6><small class="text-muted">Mobile
                                                    Phones</small>
                                            </td>
                                            <td>$250</td>
                                            <td><span class="badge badge-success">Published</span></td>
                                            <td><span><i class="icon icon-data_usage"></i> 5 days
                                                    ago</span><br><span><i class="icon icon-timer"></i> 5
                                                    September, 2017</span></td>
                                            <td><a href="#"><i class="icon icon-pencil-square-o"></i> Edit
                                                    item</a></td>
                                        </tr>
                                        <tr>
                                            <td class="w-10"> <img src="{{asset('main_theme/assets/img/demo/s3.png')}}"
                                                    alt=""></td>
                                            <td>
                                                <h6>Apple Product</h6><small class="text-muted">Mobile
                                                    Phones</small>
                                            </td>
                                            <td>$250</td>
                                            <td><span class="badge badge-danger">Pending</span></td>
                                            <td><span><i class="icon icon-data_usage"></i> 5 days
                                                    ago</span><br><span><i class="icon icon-timer"></i> 5
                                                    September, 2017</span></td>
                                            <td><a href="#"><i class="icon icon-pencil-square-o"></i> Edit
                                                    item</a></td>
                                        </tr>
                                        <tr>
                                            <td class="w-10"> <img src="{{asset('main_theme/assets/img/demo/s4.png')}}"
                                                    alt=""></td>
                                            <td>
                                                <h6>Apple Product</h6><small class="text-muted">Mobile
                                                    Phones</small>
                                            </td>
                                            <td>$250</td>
                                            <td><span class="badge badge-success">Published</span></td>
                                            <td><span><i class="icon icon-data_usage"></i> 5 days
                                                    ago</span><br><span><i class="icon icon-timer"></i> 5
                                                    September, 2017</span></td>
                                            <td><a href="#"><i class="icon icon-pencil-square-o"></i> Edit
                                                    item</a></td>
                                        </tr>
                                        <tr>
                                            <td class="w-10"> <img src="{{asset('main_theme/assets/img/demo/s5.png')}}"
                                                    alt=""></td>
                                            <td>
                                                <h6>Apple Product</h6><small class="text-muted">Mobile
                                                    Phones</small>
                                            </td>
                                            <td>$250</td>
                                            <td><span class="badge badge-primary">Sold Out</span></td>
                                            <td><span><i class="icon icon-data_usage"></i> 5 days
                                                    ago</span><br><span><i class="icon icon-timer"></i> 5
                                                    September, 2017</span></td>
                                            <td><a href="#"><i class="icon icon-pencil-square-o"></i> Edit
                                                    item</a></td>
                                        </tr>
                                        <tr>
                                            <td class="w-10"> <img src="{{asset('main_theme/assets/img/demo/s6.png')}}"
                                                    alt=""></td>
                                            <td>
                                                <h6>Apple Product</h6><small class="text-muted">Mobile
                                                    Phones</small>
                                            </td>
                                            <td>$250</td>
                                            <td><span class="badge badge-warning">Low Stock</span></td>
                                            <td><span><i class="icon icon-data_usage"></i> 5 days
                                                    ago</span><br><span><i class="icon icon-timer"></i> 5
                                                    September, 2017</span></td>
                                            <td><a href="#"><i class="icon icon-pencil-square-o"></i> Edit
                                                    item</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="p-t-b-20" aria-label="Page navigation">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>
    </div>
</div>
@endsection