@extends('layouts.admin')
@section('admin_header')
<div class="container-fluid text-white">
    <div class="row p-t-b-10 ">
        <div class="col">
            <h4><i class="icon-package"></i> Dashboard</h4>
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="content-wrapper animatedParent animateOnce">
    <div class="container-fluid">
        <section class="p-t-20">
            @if(Auth::user()->role == "admin")
            <div class="row">
                <div class="col-lg-3">
                    <div class="success text-white r-3 counter-box p-40">
                        <div><span class="icon icon-trophy7"></span></div>
                        <div>20</div>
                        <h3 class="counter-title">Sellers</h3>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="blue1 text-white r-3 counter-box p-40">
                        <div><span class="icon icon-startup"></span></div>
                        <div>100</div>
                        <h3 class="counter-title">Buyers</h3>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="success text-white r-3 counter-box p-40">
                        <div><span class="icon icon-trophy7"></span></div>
                        <div>1500</div>
                        <h3 class="counter-title">Items</h3>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="blue1 text-white r-3 counter-box p-40">
                        <div><span class="icon icon-startup"></span></div>
                        <div>550</div>
                        <h3 class="counter-title">Earnings</h3>
                    </div>
                </div>
            </div>
            @endif

            @if(Auth::user()->role == "seller")
            <div class="row">
                <div class="col-lg-3">
                    <div class="success text-white r-3 counter-box p-40">
                        <div><span class="icon icon-trophy7"></span></div>
                        <div>1500</div>
                        <h3 class="counter-title">Items</h3>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="blue1 text-white r-3 counter-box p-40">
                        <div><span class="icon icon-startup"></span></div>
                        <div>$550</div>
                        <h3 class="counter-title">Earnings</h3>
                    </div>
                </div>
            </div>
            @endif

            @if(Auth::user()->role == "buyer")
            <div class="row">
                <div class="col-lg-3">
                    <div class="success text-white r-3 counter-box p-40">
                        <div><span class="icon icon-trophy7"></span></div>
                        <div>1500</div>
                        <h3 class="counter-title">Items</h3>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="blue1 text-white r-3 counter-box p-40">
                        <div><span class="icon icon-startup"></span></div>
                        <div>$550</div>
                        <h3 class="counter-title">Spending</h3>
                    </div>
                </div>
            </div>
            @endif
        </section>
    </div>
</div>
@endsection