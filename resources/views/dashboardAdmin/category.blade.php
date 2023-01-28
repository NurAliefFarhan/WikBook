@extends('layout-admin')
@section('content')
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/wikbook/dashboardAdmin/admin">
                <div class="sidebar-brand-icon">
                    {{-- <i class="fas fa-laugh-wink"></i>  --}} 
                    {{-- <img src="{{asset("assets/img/buku.png")}}" width="50" height="50"> --}}
                    <img class="img-profile rounded-circle" src="{{asset('assets/img/buku.png')}}" width="50" height="50">

                </div>
                <div class="sidebar-brand-text mx-0" style="font-size: 16px;">WIKBOOK</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="/wikbook/dashboardAdmin/admin"><i class="fa-solid fa-house"></i><span>Dashboard</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="/wikbook/dashboardAdmin/userAdmin"><i class="fa-regular fa-user"></i><span>User</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/wikbook/dashboardAdmin/book"><i class="fa-solid fa-book"></i><span>Book</span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="/wikbook/dashboardAdmin/category"><i class="fa-regular fa-bookmark"></i><span>Category Book</span></a>
            </li>
            <!-- Divider -->
            {{-- <hr class="sidebar-divider"> --}}

            <!-- Heading -->
            {{-- <div class="sidebar-heading">
                Interface
            </div> --}}

            <!-- Nav Item - Pages Collapse Menu -->
            {{-- <li class="nav-item active">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
                    aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Components</span>
                </a>
                <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Components:</h6>
                        <a class="collapse-item" href="buttons.html">Students</a>
                        <a class="collapse-item active" href="cards.html">Pembayaran</a>
                    </div>
                </div>
            </li> --}}

            <!-- Nav Item - Utilities Collapse Menu -->
            {{-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Utilities</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item" href="utilities-color.html">Colors</a>
                        <a class="collapse-item" href="utilities-border.html">Borders</a>
                        <a class="collapse-item" href="utilities-animation.html">Animations</a>
                        <a class="collapse-item" href="utilities-other.html">Other</a>
                    </div>
                </div>
            </li> --}}

            <!-- Divider -->
            {{-- <hr class="sidebar-divider"> --}}

            <!-- Heading -->
            {{-- <div class="sidebar-heading">Addons</div> --}}

            <!-- Nav Item - Pages Collapse Menu -->
            {{-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="login.html">Login</a>
                        <a class="collapse-item" href="register.html">Register</a>
                        <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="404.html">404 Page</a>
                        <a class="collapse-item" href="blank.html">Blank Page</a>
                    </div>
                </div>
            </li> --}}

            <!-- Nav Item - Charts -->
            {{-- <li class="nav-item">
                <a class="nav-link" href="charts.html"><i class="fas fa-fw fa-chart-area"></i><span>Charts</span></a>
            </li> --}}

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    {{-- <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>  --}}

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li> -->

                        <!-- Nav Item - Messages -->
                        <!-- <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg"
                                            alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                            alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li> -->

                        <!-- <div class="topbar-divider d-none d-sm-block"></div> -->

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->nama }}</span>
                                <img class="img-profile rounded-circle" src="{{asset('assets/img/admin.jpg')}}">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    {{-- Alert untuk sessionnya  --}}
                    {{-- Alert untuk sessionnya  --}}
                    @if(Session::get('successAdd'))
                        <div class="alert alert-success w-70">
                            {{Session::get('successAdd')}} 
                        </div>
                    @endif
                 
                    @if(Session::get('successDelete'))
                        <div class="alert alert-danger w-70">
                            {{Session::get('successDelete')}} 
                        </div>
                    @endif
                    
                    @if(Session::get('successUpdate'))
                        <div class="alert alert-success w-70">
                            {{Session::get('successUpdate')}} 
                        </div>
                    @endif


                         <!-- Begin Page Content -->
                        
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Create Category</h1>
                    <div class="row" style="width: 100%;">
                        {{-- <div class="col-lg-8">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Hi' {{ Auth::user()->nama }}</h6>
                                    <p>Selamat datang di WikBook Online</p>
                                </div>
                            </div>
                        </div> --}}

                        {{-- BOOK Create --}}
                        <div class=" container-fluid my-6 ">
                            <div class="row justify-content-center ">
                                <div class="col-xl-10">
                                    <div class="card shadow-lg ">
                                        <div class="row p-2 mt-3 justify-content-between mx-sm-2">
                                            {{-- <div class="col">
                                                <p class="text-muted space mb-0 shop"> Shop No.78618K</p> 
                                                <p class="text-muted space mb-0 shop">Store Locator</p>   
                                            </div> --}}
                                            <div class="col" style="margin-left: 43%;">
                                                <div class="row justify-content-start ">
                                                    <div class="col">
                                                        <img class="irc_mi img-fluid cursor-pointer" src="{{asset('assets/img/book.png')}}"  width="70" height="70" >
                                                    </div>
                                                </div>
                                            </div>
                                         
                                        </div>
                                        <div class="row  mx-auto justify-content-center text-center">
                                            <div class="col-12 mt-3 ">
                                                <nav aria-label="breadcrumb" class="second ">
                                                    <ol class="breadcrumb indigo lighten-6 first  ">
                                                        {{-- <li class="breadcrumb-item font-weight-bold "><a class="black-text text-uppercase " href="#"><span class="mr-md-3 mr-1">BACK TO SHOP</span></a><i class="fa fa-angle-double-right " aria-hidden="true"></i></li> --}}
                                                        {{-- <li class="breadcrumb-item font-weight-bold"><a class="black-text text-uppercase" href="#"><span class="mr-md-3 mr-1">SHOPPING BAG</span></a><i class="fa fa-angle-double-right text-uppercase " aria-hidden="true"></i></li> --}}
                                                        {{-- <li class="breadcrumb-item font-weight-bold"><a class="black-text text-uppercase active-2" href="#"><span class="mr-md-3 mr-1">CHECKOUT</span></a></li> --}}
                                                    </ol>
                                                </nav>
                                            </div>
                                        </div>
                                    
                                        <div class="row justify-content-around">
                                            <div class="row-md-8" style="width: 90%;">
                                                <div class="card border-0" style="width: 100%;">
                                                    <div class="card-header pb-0">
                                                        <center>
                                                            <h2 class="card-title space">Form Category</h2>
                                                        </center>
                                                        {{-- <p class="card-text text-muted mt-4  space">SHIPPING DETAILS</p> --}}
                                                        <hr class="my-0">
                                                    </div>

                                                    <form action="{{route('wikbook.category.post')}}" method="POST">
                                                        @csrf 

                                                        <div class="card-body">
                                                            <div class="form-group">
                                                                <label for="NAME" class="small text-muted mb-1">category Name</label>
                                                                <input type="text" class="form-control form-control-sm" name="category" id="NAME" aria-describedby="helpId" placeholder="Masukkan Category Buku">
                                                            </div>
                                                            {{-- <div class="form-group">
                                                                <label for="NAME" class="small text-muted mb-1">Writer</label>
                                                                <input type="text" class="form-control form-control-sm" name="writer" id="NAME" aria-describedby="helpId" placeholder="Masukkan Nama penulis">
                                                            </div>
    
                                                            <div class="row no-gutters">
                                                                <div class="col-sm-6 pr-sm-2">
                                                                    <div class="form-group">
                                                                        <label for="NAME" class="small text-muted mb-1">Publisher</label>
                                                                        <input type="text" class="form-control form-control-sm" name="publisher" id="NAME" aria-describedby="helpId" placeholder="Masukkan Nama Penerbit">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="NAME" class="small text-muted mb-1">No.ISBN</label>
                                                                        <input type="number" class="form-control form-control-sm" name="isbn" id="NAME" aria-describedby="helpId" placeholder="978-602-8519-93-9">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6 pr-sm-2">
                                                                    <div class="form-group">
                                                                        <label for="sekolah" class="small text-muted mb-1">Category Book</label>
                                                                        <select name="category" class="select2 form-control w-100 ml-0" aria-describedy="helpId" onchange='checkvalue(this.value)'>
                                                                            <option hidden disabled selected>--Pilih Category Book--</option>
                                                                            <option value="Novel">Novel</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="NAME" class="small text-muted mb-1 form-label">Synopsis</label>
                                                                        <textarea class="form-control" id="NAME" rows="1" aria-describedby="helpId" placeholder="Masukkan Synopsis"></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="formFile" class="small text-muted mb-1 form-label">Masukkan file</label>
                                                                        <input class="form-control" type="file" id="formFile">
                                                                    </div>
                                                                </div>
                                                            </div> --}}
                                                            
    
                                                            <div class="row mb-md-5 mt-4">
                                                                <div class="col">
                                                                    <button type="submit" name="submit" id="" class="btn btn-lg btn-block ">Simpan</button>
                                                                </div>
                                                            </div>    
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            {{-- <div class="col-md-5">
                                                <div class="card border-0 ">
                                                    <div class="card-header card-2">
                                                        <p class="card-text text-muted mt-md-4  mb-2 space">YOUR ORDER <span class=" small text-muted ml-2 cursor-pointer">EDIT SHOPPING BAG</span> </p>
                                                        <hr class="my-2">
                                                    </div>
                                                    <div class="card-body pt-0">
                                                        <div class="row  justify-content-between">
                                                            <div class="col-auto col-md-7">
                                                                <div class="media flex-column flex-sm-row">
                                                                    <img class=" img-fluid" src="https://i.imgur.com/6oHix28.jpg" width="62" height="62">
                                                                    <div class="media-body  my-auto">
                                                                        <div class="row ">
                                                                            <div class="col-auto"><p class="mb-0"><b>EC-GO Bag Standard</b></p><small class="text-muted">1 Week Subscription</small></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=" pl-0 flex-sm-col col-auto  my-auto"> <p class="boxed-1">2</p></div>
                                                            <div class=" pl-0 flex-sm-col col-auto  my-auto "><p><b>179 SEK</b></p></div>
                                                        </div>
                                                        <hr class="my-2">
                                                        <div class="row  justify-content-between">
                                                            <div class="col-auto col-md-7">
                                                                <div class="media flex-column flex-sm-row">
                                                                    <img class=" img-fluid " src="https://i.imgur.com/9MHvALb.jpg" width="62" height="62">
                                                                    <div class="media-body  my-auto">
                                                                        <div class="row ">
                                                                            <div class="col"><p class="mb-0"><b>EC-GO Bag Standard</b></p><small class="text-muted">2 Week Subscription</small></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="pl-0 flex-sm-col col-auto  my-auto"> <p class="boxed">3</p></div>
                                                            <div class="pl-0 flex-sm-col col-auto my-auto"><p><b>179 SEK</b></p></div>
                                                        </div>
                                                        <hr class="my-2">
                                                        <div class="row  justify-content-between">
                                                            <div class="col-auto col-md-7">
                                                                <div class="media flex-column flex-sm-row">
                                                                    <img class=" img-fluid " src="https://i.imgur.com/6oHix28.jpg" width="62" height="62">
                                                                    <div class="media-body  my-auto">
                                                                        <div class="row ">
                                                                            <div class="col"><p class="mb-0"><b>EC-GO Bag Standard</b></p><small class="text-muted">2 Week Subscription</small></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="pl-0 flex-sm-col col-auto  my-auto"> <p class="boxed-1">2</p></div>
                                                            <div class="pl-0 flex-sm-col col-auto my-auto"><p><b>179 SEK</b></p></div>
                                                        </div>
                                                        <hr class="my-2">
                                                        <div class="row ">
                                                            <div class="col">
                                                                <div class="row justify-content-between">
                                                                    <div class="col-4"><p class="mb-1"><b>Subtotal</b></p></div>
                                                                    <div class="flex-sm-col col-auto"><p class="mb-1"><b>179 SEK</b></p></div>
                                                                </div>
                                                                <div class="row justify-content-between">
                                                                    <div class="col"><p class="mb-1"><b>Shipping</b></p></div>
                                                                    <div class="flex-sm-col col-auto"><p class="mb-1"><b>0 SEK</b></p></div>
                                                                </div>
                                                                <div class="row justify-content-between">
                                                                    <div class="col-4"><p ><b>Total</b></p></div>
                                                                    <div class="flex-sm-col col-auto"><p  class="mb-1"><b>537 SEK</b></p> </div>
                                                                </div><hr class="my-0">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-5 mt-4 ">
                                                            <div class="col-md-7 col-lg-6 mx-auto"><button type="button" class="btn btn-block btn-outline-primary btn-lg">ADD GIFT CODE</button></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> --}}


                                         
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Page Heading -->
                        {{-- <h1 class="h3 mb-4 text-gray-800">{{ Auth::user()->nama }}</h1>
                        <p>Selamat datang</p> --}}
                            <div class="row" style="margin-top: 20%; width: 120%;">
                                <div class="card" style="width: 100%;">
                                    <div class="card-header">
                                        <div class="row">
                                            <div class="col"><b>WikBook Data</b></div>

                                            {{-- <form action="{{route('category')}}" method="GET" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                                                <div class="input-group">
                                                    <input type="search" class="form-control bg-light border-0 medium mt-1" placeholder="Search category..." aria-label="Search" aria-describedby="basic-addon2">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-primary" type="submit">
                                                            <i class="fas fa-search fa-sm"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </form> --}}

                                        </div>
                                    </div>
                                    <div class="col">
                                        <p class="text-muted space mb-0 shop">Data Category</p> 
                                    </div>
                                    <div class="card-body" style="font-size: 100%;">
                                        <table class="table table-bordered">
                                            <tr>
                                                <th>No</th>
                                                <th>Id</th>
                                                <th>Category Name</th>
                                                <th>Action</th>
                                            </tr>
                                            @foreach ($category as $category)
                                            <tr>
                                                <th>{{++$no}}</th>
                                                <th>{{$category->id}}</th>
                                                <th>{{$category->category}}</th>
                                                <th>
                                                     <form action="{{route('wikbook.delete', $category['id'])}}" method="POST">
                                                        @csrf 
                                                        @method('DELETE') 
                                                        <button class="text-danger btn"><i class="fa-solid fa-trash"></i></button>
                                                                                                            
                                                    </form> 
    
                                                </th>
                                            </tr>
                                            @endforeach
                                        </table>
                                    </div>
                                </div>            
                            </div>

                        <div class="col-lg-6">
                        
                            <!-- <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Split Buttons with Icon</h6>
                                </div>
                                <div class="card-body">
                                    <p>Works with any button colors, just use the <code>.btn-icon-split</code> class and
                                        the markup in the examples below. The examples below also use the
                                        <code>.text-white-50</code> helper class on the icons for additional styling,
                                        but it is not required.</p>
                                    <a href="#" class="btn btn-primary btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-flag"></i>
                                        </span>
                                        <span class="text">Split Button Primary</span>
                                    </a>
                                    <div class="my-2"></div>
                                    <a href="#" class="btn btn-success btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-check"></i>
                                        </span>
                                        <span class="text">Split Button Success</span>
                                    </a>
                                    <div class="my-2"></div>
                                    <a href="#" class="btn btn-info btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-info-circle"></i>
                                        </span>
                                        <span class="text">Split Button Info</span>
                                    </a>
                                    <div class="my-2"></div>
                                    <a href="#" class="btn btn-warning btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-exclamation-triangle"></i>
                                        </span>
                                        <span class="text">Split Button Warning</span>
                                    </a>
                                    <div class="my-2"></div>
                                    <a href="#" class="btn btn-danger btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-trash"></i>
                                        </span>
                                        <span class="text">Split Button Danger</span>
                                    </a>
                                    <div class="my-2"></div>
                                    <a href="#" class="btn btn-secondary btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-arrow-right"></i>
                                        </span>
                                        <span class="text">Split Button Secondary</span>
                                    </a>
                                    <div class="my-2"></div>
                                    <a href="#" class="btn btn-light btn-icon-split">
                                        <span class="icon text-gray-600">
                                            <i class="fas fa-arrow-right"></i>
                                        </span>
                                        <span class="text">Split Button Light</span>
                                    </a>
                                    <div class="mb-4"></div>
                                    <p>Also works with small and large button classes!</p>
                                    <a href="#" class="btn btn-primary btn-icon-split btn-sm">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-flag"></i>
                                        </span>
                                        <span class="text">Split Button Small</span>
                                    </a>
                                    <div class="my-2"></div>
                                    <a href="#" class="btn btn-primary btn-icon-split btn-lg">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-flag"></i>
                                        </span>
                                        <span class="text">Split Button Large</span>
                                    </a>
                                </div>
                            </div> -->
                        
                        </div>
                                                        
                    </div>
                                                    
                </div>
                <!-- /.container-fluid -->

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Apakah anda ingin keluar?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Pilih Logout jika anda ingin keluar dari account ini</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="/logout">Logout</a>
                </div>
            </div>
        </div>
    </div>

@endsection


