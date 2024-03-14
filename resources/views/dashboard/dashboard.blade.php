@extends('header')
@section('backend')

<!--  Main wrapper -->
<div class="body-wrapper">
    <!--  Header Start -->
    <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item d-block d-xl-none">
                    <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                        <i class="ti ti-menu-2"></i>
                    </a>
                </li>

            </ul>
            <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                    <li class="nav-item dropdown">
                        <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="../assets/images/profile/user-1.jpg" alt="" width="35" height="35" class="rounded-circle">
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                            <div class="message-body">
                                <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                                    <i class="ti ti-user fs-6"></i>
                                    <p class="mb-0 fs-3">{{ session('adminlogin') }}</p>
                                </a>
                                <a href="logout" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!--  Header End -->
    @php
    use App\Models\category_tbl;
    use App\Models\products_tbl;
    use App\Models\contact_tbl;
    use App\Models\enquiry_tbl;
    use App\Models\feedback_tbl;

    $category_count = category_tbl::count();
    $product_count = products_tbl::count();
    $feedback_count = feedback_tbl::count();
    $enquiry_count = enquiry_tbl::count();
    $contact_count = contact_tbl::count();

    @endphp
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col">
                    <!-- Category -->
                    <div class="card overflow-hidden border border-primary shadow">
                        <div class="card-body p-4">
                            <h5 class="card-title mb-9 fw-semibold">Total Categories</h5>
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h4 class="fw-semibold mb-3">{{$category_count}}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <!-- Product -->
                    <div class="card overflow-hidden border border-primary shadow">
                        <div class="card-body p-4">
                            <h5 class="card-title mb-9 fw-semibold">Total Products</h5>
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h4 class="fw-semibold mb-3">{{$product_count}}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <!-- Contact -->
                    <div class="card overflow-hidden border border-primary shadow">
                        <div class="card-body p-4">
                            <h5 class="card-title mb-9 fw-semibold">Total Contacts</h5>
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h4 class="fw-semibold mb-3">{{$contact_count}}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <!-- Feedback -->
                    <div class="card overflow-hidden border border-primary shadow">
                        <div class="card-body p-4">
                            <h5 class="card-title mb-9 fw-semibold">Total Feedbacks</h5>
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h4 class="fw-semibold mb-3">{{$feedback_count}}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <!-- Enquiry -->
                    <div class="card overflow-hidden border border-primary shadow">
                        <div class="card-body p-4">
                            <h5 class="card-title mb-9 fw-semibold">Total Enquiries</h5>
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h4 class="fw-semibold mb-3">{{$enquiry_count}}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection