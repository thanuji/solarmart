@extends('layouts.admin')
@section('admin_header')
<div class="container-fluid text-white">
    <div class="row p-t-b-10 ">
        <div class="col">
            <h4><i class="icon-package"></i> Add Products</h4>
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="content-wrapper animatedParent animateOnce" style="min-height: 980px;">
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
        <form id="needs-validation" action="add_item" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-8 ">
                    <div class="row">
                        <div class="col-md-6 mb-3"> <label>Product Name</label> <input
                                type="text" class="form-control" name="name" placeholder="Product Name"
                                required=""></div>
                        <div class="col-md-6 mb-3"> <label>Product Brand</label> <input
                                type="text" name="brand" class="form-control" placeholder="Product Brand"
                                required=""></div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 mb-3"> <label for="category">Category</label> <select name="category"
                                class="custom-select form-control" required="">
                                <option value="Solar Cell">Solar Cell</option>
                                <option value="Accessories">Accessories</option>
                            </select>
                        </div>
                        <div class="col-md-3 mb-3"> <label >Discount</label> <input name="discount" min="0" type="number"
                            class="form-control" placeholder="%" value="0">
                        </div>
                        <div class="col-md-3 mb-3"> <label >Price</label> <input name="price" min="1" type="number"
                                class="form-control" placeholder="$" required="">
                        </div>
                        <div class="col-md-3 mb-3"> <label >Quantity</label> <input min="1" name="quantity" type="number"
                            class="form-control" required="">
                        </div>
                    </div>

                    <div class="form-group"> <label>Product Details</label>
                        <textarea class="form-control" name="description" rows="4" cols="50"></textarea>
                    </div>
                    <div class="form-group"> <label>Product Images</label>
                        <input required="" class="form-control" type="file" name="images[]" multiple>
                    </div>
           
                </div>
                <div class="col-md-3">
                    <div class="card mt-4">
                        <div class="card-body text-success">
                            <h6 class="card-title">Publish Box</h6> <label class="custom-control custom-checkbox"><input name="status"
                                    type="checkbox" class="custom-control-input"><span
                                    class="custom-control-indicator"></span> <span
                                    class="custom-control-description">Save Item as Draft</span></label>
                        </div>
                        <div class="card-footer bg-transparent"> <button class="btn btn-primary"
                                type="submit">Publish</button></div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection