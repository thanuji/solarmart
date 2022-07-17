<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from xvelopers.com/demos/html/paper-1.8.2/dashboard-products.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 May 2022 08:29:20 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{asset('main_theme/assets/img/basic/favicon.ico')}}" type="image/x-icon">
    <title>Paper</title>
    <link rel="stylesheet" href="{{asset('main_theme/assets/css/app.css')}}">
    <style>
        .loader {
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: #f5f8fa;
            z-index: 9998;
            text-align: center
        }

        .plane-container {
            position: absolute;
            top: 50%;
            left: 50%
        }
    </style>
</head>

<body>
    <div id="loader" class="loader">
        <div class="plane-container">
            <div class="l-s-2 blink">LOADING</div>
        </div>
    </div>
    <div id="app" class="paper-loading">
        <div class="btn-fixed-top-left"><a href="documentations.html" class="btn-fab  btn-primary shadow1"><i
                    class="icon icon-clipboard-list"></i></a></div><a href="#" data-toggle="offcanvas"
            class="paper-nav-toggle fixed left"><i></i></a>
        <aside class="main-sidebar fixed offcanvas scroll shadow">
            <section class="sidebar">
                <div class="user-panel">
                    <div class="image float-left"> <img class="user_avatar" src="{{asset('main_theme/assets/img/dummy/u2.png')}}"
                            alt="User Image"></div>
                    <div class="info">
                        <h6 class="p-t-10">Alexander Pierce</h6><a href="#"><i
                                class="icon-circle text-primary blink"></i> Online</a>
                    </div>
                </div>
                <ul class="sidebar-menu scroll">
                    <li class="treeview"><a href="#"><i class="icon-sailing-boat-water purple-text"></i>
                            <span>Dashboard</span><i class="icon icon-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="dashboard.html"><i class="icon icon-circle-o"></i> User Dashboard</a></li>
                            <li><a href="dashboard2.html"><i class="icon icon-folder5"></i>Admin Dashboard 1</a></li>
                            <li><a href="dashboard3.html"><i class="icon icon-folder5"></i>Admin Dashboard 2</a></li>
                        </ul>
                    </li>
                    <li class="treeview"><a href="#"><i class="icon icon-package blue-text"></i> <span>Products</span>
                            <span class="badge badge-primary pull-right">4</span></a>
                        <ul class="treeview-menu">
                            <li><a href="dashboard-products.html"><i class="icon icon-circle-o"></i> All Products</a>
                            </li>
                            <li><a href="dashboard-products-create.html"><i class="icon icon-pencil"></i>Add New</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="dashboard-inbox.html"><i class="icon icon-package blue-text"></i> <span>Inbox</span>
                            <span class="badge badge-primary pull-right">20</span></a></li>
                    <li><a href="dashboard-forms.html"><i class="icon icon-input blue-text"></i> <span>Forms</span></a>
                    </li>
                    <li class="treeview "><a href="#"><i class="icon icon-package text-blue"></i>
                            <span>Multilevel</span><i class="icon icon-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="#"><i class="icon icon-circle-o"></i> Level One</a></li>
                            <li><a href="#"><i class="icon icon-circle-o"></i> Level One<i
                                        class="icon icon-angle-left pull-right"></i></a>
                                <ul class="treeview-menu">
                                    <li><a href="#"><i class="icon icon-circle-o"></i> Level Two</a></li>
                                    <li><a href="#"><i class="icon icon-circle-o"></i> Level Two<i
                                                class="icon icon-angle-left pull-right"></i></a>
                                        <ul class="treeview-menu">
                                            <li><a href="#"><i class="icon icon-circle-o"></i> Level Three</a></li>
                                            <li><a href="#"><i class="icon icon-circle-o"></i> Level Three</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#"><i class="icon icon-circle-o"></i> Level One</a></li>
                        </ul>
                    </li>
                    <li><a href="#production"><i class="icon icon-clipboard-list red-text"></i> <span>Build Production
                                Version</span></a></li>
                    <li><a href="#overlays"><i class="icon icon-clipboard-list amber-text"></i>
                            <span>Overlays</span></a></li>
                    <li class="treeview"><a href="#"><i class="icon icon-hand-grab-o"></i> <span>Plugins</span> <span
                                class="badge badge-primary pull-right">4</span></a>
                        <ul class="treeview-menu">
                            <li><a href="#scroll"><i class="icon icon-circle-o text-red"></i> Smooth Scroll</a></li>
                            <li><a href="#sticky"><i class="icon icon-circle-o text-yellow"></i> Sticky Element</a></li>
                            <li><a href="#plugins-list"><i class="icon icon-folder5 text-blue"></i>Plugins List</a></li>
                        </ul>
                    </li>
                    <li><a href="element-buttons.html"><i class="icon-touch_app text-green"></i>
                            <span>Buttons</span></a></li>
                    <li><a href="element-tabels.html"><i class="icon-table brown-text"></i> <span>Tabels</span></a></li>
                    <li class="treeview"><a href="#"><i class="icon icon-pie-chart"></i> <span>Charts</span><i
                                class="icon icon-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="#charts"><i class="icon icon-circle-o"></i> How to add</a></li>
                            <li><a href="http://www.chartjs.org/docs/latest/" target="_blank"><i
                                        class="icon icon-circle-o"></i> Complete Chart Docs</a></li>
                        </ul>
                    </li>
                    <li><a href="#contact"><i class="icon icon-envelope-o"></i> <span>Contact Form</span> <small
                                class="badge pull-right badge-primary">3</small></a></li>
                </ul>
            </section>
        </aside>
        <div class="page light offcanvas-page">
            <div class="pos-f-t">
                <div class="collapse" id="navbarToggleExternalContent">
                    <div class="bg-dark p-4">
                        <div class="search-bar"> <input
                                class="transparent s-24 text-white b-0 font-weight-lighter w-100 height-50" type="text"
                                placeholder="start typing..."></div><a href="#" data-toggle="collapse"
                            data-target="#navbarToggleExternalContent" aria-expanded="false"
                            aria-label="Toggle navigation" class="paper-nav-toggle paper-nav-white active "><i></i></a>
                    </div>
                </div>
            </div>
            <header class="blue accent-3 relative">
                <div class="navbar navbar-expand navbar-dark d-flex justify-content-end bd-navbar">
                    <ul class="navbar-nav p-t-10">
                        <li class="nav-item dropdown"><a href="#" class="nav-link" data-toggle="dropdown"
                                aria-expanded="false"><i class="icon-message s-18"></i> <span
                                    class="badge badge-success badge-mini rounded-circle">4</span></a>
                            <ul class="dropdown-menu width-250 p-0 dropdown-menu-right b-0 shadow1">
                                <li class="p-2 b-b"><span class="s-12"><i class="icon-message"></i> You have 4
                                        messages</span></li>
                                <li>
                                    <div class="slimScroll" data-height="225">
                                        <ul class="list-unstyled p-3">
                                            <li class="media"> <img class="mr-3 w-15" src="{{asset('main_theme/assets/img/dummy/u1.png')}}"
                                                    alt="">
                                                <div class="media-body">
                                                    <h6 class="mt-0 mb-0 font-weight-normal s-14">Doe Joe</h6> <small
                                                        class="s-12">7 minutes ago</small>
                                                </div>
                                            </li>
                                            <li class="media my-4"> <img class="mr-3 w-15" src="{{asset('main_theme/assets/img/dummy/u2.png')}}"
                                                    alt="">
                                                <div class="media-body">
                                                    <h6 class="mt-0 mb-0 font-weight-normal s-14">Doe Joe</h6> <small
                                                        class="s-12">7 minutes ago</small>
                                                </div>
                                            </li>
                                            <li class="media my-4"> <img class="mr-3 w-15" src="{{asset('main_theme/assets/img/dummy/u3.png')}}"
                                                    alt="">
                                                <div class="media-body">
                                                    <h6 class="mt-0 mb-0 font-weight-normal s-14">Doe Joe</h6> <small
                                                        class="s-12">7 minutes ago</small>
                                                </div>
                                            </li>
                                            <li class="media my-4"> <img class="mr-3 w-15" src="{{asset('main_theme/assets/img/dummy/u4.png')}}"
                                                    alt="">
                                                <div class="media-body">
                                                    <h6 class="mt-0 mb-0 font-weight-normal s-14">Doe Joe</h6> <small
                                                        class="s-12">7 minutes ago</small>
                                                </div>
                                            </li>
                                            <li class="media my-4"> <img class="mr-3 w-15" src="{{asset('main_theme/assets/img/dummy/u5.png')}}"
                                                    alt="">
                                                <div class="media-body">
                                                    <h6 class="mt-0 mb-0 font-weight-normal s-14">Doe Joe</h6> <small
                                                        class="s-12">7 minutes ago</small>
                                                </div>
                                            </li>
                                            <li class="media my-4"> <img class="mr-3 w-15" src="{{asset('main_theme/assets/img/dummy/u6.png')}}"
                                                    alt="">
                                                <div class="media-body">
                                                    <h6 class="mt-0 mb-0 font-weight-normal s-14">Doe Joe</h6> <small
                                                        class="s-12">7 minutes ago</small>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="p-1 b-t text-center"><a class="s-12" href="#">See All Messages</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown"><a href="#" class="nav-link" data-toggle="dropdown"
                                aria-expanded="false"><i class="icon-notifications s-18"></i> <span
                                    class="badge badge-danger badge-mini rounded-circle">4</span></a>
                            <ul class="dropdown-menu width-250 p-0 dropdown-menu-right b-0 shadow1">
                                <li class="p-2 b-b"><span class="s-12"><i class="icon-notifications text-danger"></i>You
                                        have 5 notifications</span></li>
                                <li>
                                    <div class="slimScroll" data-height="225">
                                        <ul class="list-unstyled list-group list-group-striped">
                                            <li class="p-2"><a href="#" class="s-12"><i
                                                        class="icon-data_usage text-blue"></i> 5 new members joined
                                                    today</a></li>
                                            <li class="p-2"><a href="#" class="s-12"><i
                                                        class="icon-data_usage text-success"></i> 5 new members joined
                                                    today</a></li>
                                            <li class="p-2"><a href="#" class="s-12"><i
                                                        class="icon-data_usage text-danger"></i> 5 new members joined
                                                    today</a></li>
                                            <li class="p-2"><a href="#" class="s-12"><i
                                                        class="icon-data_usage text-yellow"></i> 5 new members joined
                                                    today</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="p-1 b-t text-center"><a class="s-12" href="#">See All Messages</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" data-toggle="collapse"
                                data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"
                                aria-expanded="false" aria-label="Toggle navigation"><i
                                    class=" icon-search3 s-18"></i></a></li>
                        <li class="nav-item"><a class="nav-link" href="http://xvelopers.com/"><i
                                    class="icon-tasks s-18"></i></a></li>
                        <li class="nav-item dropdown"><a class="nav-item nav-link  mr-md-2" href="#" id="bd-versions"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                    class="icon-more_vert s-18"></i></a>
                            <div class="dropdown-menu dropdown-menu-right b-0 shadow1"><a class="dropdown-item"
                                    href="#"><i class="icon-profile"></i> View Profile</a><a class="dropdown-item"
                                    href="#"><i class="icon-cog"></i> Account Settings</a><a class="dropdown-item"
                                    href="#"><i class="icon-money"></i> Earning Reports</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i
                                        class="icon-money"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="container-fluid text-white">
                    <div class="row p-t-b-10 ">
                        <div class="col">
                            <h4><i class="icon-package"></i> Products</h4>
                        </div>
                    </div>
                    <div class="row ">
                        <ul class="nav nav-material nav-material-white">
                            <li class="nav-item"><a class="nav-link active" href="#"><i class="icon-list"></i> All</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="#"><i class="icon-clipboard-add"></i> Add New
                                    Product</a></li>
                            <li class="nav-item"><a class="nav-link" href="#"><i class="icon-trash-can"></i> Trash</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </header>
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
                                                        <td class="w-10"> <img src="{{asset('main_theme/assets/img/demo/s1.png')}}" alt=""></td>
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
                                                        <td class="w-10"> <img src="{{asset('main_theme/assets/img/demo/s2.png')}}" alt=""></td>
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
                                                        <td class="w-10"> <img src="{{asset('main_theme/assets/img/demo/s3.png')}}" alt=""></td>
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
                                                        <td class="w-10"> <img src="{{asset('main_theme/assets/img/demo/s4.png')}}" alt=""></td>
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
                                                        <td class="w-10"> <img src="{{asset('main_theme/assets/img/demo/s5.png')}}" alt=""></td>
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
                                                        <td class="w-10"> <img src="{{asset('main_theme/assets/img/demo/s6.png')}}" alt=""></td>
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
        </div>
        <div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog width-400" role="document">
                <div class="modal-content no-r "><a href="#" data-dismiss="modal" aria-label="Close"
                        class="paper-nav-toggle active"><i></i></a>
                    <div class="modal-body no-p">
                        <div class="text-center p-40 p-b-0"> <img src="{{asset('main_theme/assets/img/dummy/u4.png')}}" alt="">
                            <h3>Welcome Back</h3>
                            <p class="p-t-b-20">Hey Soldier welcome back signin now there is lot of new stuff waiting
                                for you</p>
                        </div>
                        <div class="light p-40 b-t-b">
                            <form action="http://xvelopers.com/demos/html/paper-1.8.2/dashboard2.html">
                                <div class="form-group has-icon"><i class="icon-envelope-o"></i> <input type="text"
                                        class="form-control form-control-lg" placeholder="Email Address"></div>
                                <div class="form-group has-icon"><i class="icon-user-secret"></i> <input type="text"
                                        class="form-control form-control-lg" placeholder="Password"></div> <input
                                    type="submit" class="btn btn-primary btn-lg btn-block" value="Log In"> <small
                                    class="forget-pass">Have you forgot your username or password ?</small>
                            </form>
                        </div>
                        <div class="p-40"><a href="#" class="btn btn-lg btn-block btn-social facebook"><i
                                    class="icon-facebook"></i> Login with Facebook</a><a href="#"
                                class="btn btn-lg btn-block btn-social twitter"><i class="icon-twitter"></i> Login with
                                Twitter</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modalSignUp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content no-r "><a href="#" data-dismiss="modal" aria-label="Close"
                        class="paper-nav-toggle active"><i></i></a>
                    <div class="modal-body no-p">
                        <div class="row">
                            <div class="col-lg-5 grid">
                                <div class="p-40">
                                    <h5 class="p-t-40">Sign Up Using Social Account</h5>
                                    <p class="p-t-b-20">Hey Soldier welcome back signin now there is lot of new stuff
                                        waiting for you</p><a href="#"
                                        class="btn btn-lg btn-block btn-social facebook"><i class="icon-facebook"></i>
                                        Login with Facebook</a><a href="#"
                                        class="btn btn-lg btn-block btn-social twitter"><i class="icon-twitter"></i>
                                        Login with Twitter</a>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="light p-t-b-40">
                                    <div class="p-40">
                                        <h5 class="p-b-20">Create New User Account</h5>
                                        <form action="http://xvelopers.com/demos/html/paper-1.8.2/dashboard2.html">
                                            <div class="form-group has-icon"><i class="icon-user-circle"></i> <input
                                                    type="text" class="form-control form-control-lg"
                                                    placeholder="Your Name"></div>
                                            <div class="form-group has-icon"><i class="icon-envelope-o"></i> <input
                                                    type="text" class="form-control form-control-lg"
                                                    placeholder="Email Address"></div>
                                            <div class="form-group has-icon"><i class="icon-user-secret"></i> <input
                                                    type="text" class="form-control form-control-lg"
                                                    placeholder="Password"></div>
                                            <div class="form-group has-icon"><i class="icon-repeat"></i> <input
                                                    type="text" class="form-control form-control-lg"
                                                    placeholder="Confirm Password"></div> <input type="submit"
                                                class="btn btn-primary btn-lg btn-block" value="Sign Up Now">
                                            <p class="forget-pass">A verification email wil be sent to you</p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('main_theme/assets/js/app.js')}}"></script>
</body>
<!-- Mirrored from xvelopers.com/demos/html/paper-1.8.2/dashboard-products.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 May 2022 08:29:20 GMT -->

</html>