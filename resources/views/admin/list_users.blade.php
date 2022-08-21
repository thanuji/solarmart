@extends('layouts.admin')
@section('admin_header')
<div class="container-fluid text-white">
    <div class="row p-t-b-10 ">
        <div class="col">
            <h4><i class="icon-package"></i> Users</h4>
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
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th class="text-center">Modify</th>
                                    </tr>    
                                </thead>
                                    <tbody>
                                    @foreach($users as $key => $user)
                                        <tr>

                                            <td>
                                                <h6>{{$user->name}}</h6>
                                            </td>
                                            <td>
                                                <h6>{{$user->email}}</h6>
                                            </td>
                                            <td>
                                                @if($user->role == "seller")
                                                <span class="badge badge-success">Seller</span>
                                                @endif
                                                @if($user->role == "buyer")
                                                <span class="badge badge-success">Buyer</span>
                                                @endif
                                            </td>
                                            <td>
                                                    <a type="button" href="delete_user/{{ $user->id }}" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-block btn-sm">Delete</a>
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
    </div>
</div>
@endsection