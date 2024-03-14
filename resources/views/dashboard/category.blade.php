@extends('header')
@section('backend')

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

    <!-- add modal  -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{route('category.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputName" class="form-label">Category Name</label>
                            <input type="text" name="name" class="form-control inputTextBox" id="exampleInputName">
                            <label class="text-danger checkname">Numbers Not Allowed!</label>
                            @error('name')
                            <p style="color:red;">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputImage" class="form-label">Image</label>
                            <input type="file" name="image" accept="image/png, image/gif, image/jpeg, image/jpg, image/webp" class="form-control" id="exampleInputImage" required>
                            @error('image')
                            <p style="color:red;">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputStatus" class="form-label">Status</label>
                            <select class="form-select" name="status" id="exampleInputStatus">
                                <option class="form-control" value="" selected> --- Select Status --- </option>
                                <option value="active"> Active </option>
                                <option value="inactive"> Inactive </option>
                            </select>
                            @error('status')
                            <p style="color:red;">{{$message}}</p>
                            @enderror
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end modal  -->

    <!-- Update Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="/category" id="editform" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Update Category</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="name" class="form-label">Category Name</label>
                            <input type="text" name="name" class="form-control inputTextBox" id="name">
                            <label class="text-danger checkname">Numbers Not Allowed!</label>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Current Image</label><br>
                            <img src="" id="image" alt="" class="border border-primary rounded" width="90px">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputImage" class="form-label">Select Image</label>
                            <input type="file" name="image" accept="image/png, image/gif, image/jpeg, image/jpg, image/webp" class="form-control" id="exampleInputImage">
                            @error('image')
                            <p style="color:red;">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputStatus" class="form-label">Status</label>
                            <select class="form-select" name="status" id="exampleInputStatus">
                                <option class="form-control" value="" id="select" selected> --- Select Status --- </option>
                                <option value="active"> Active </option>
                                <option value="inactive"> Inactive </option>
                            </select>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Update Modal  -->


    <div class="container-fluid">
        <div class="col-lg-12 d-flex align-items-stretch">
            <div class="card w-100">
                <div class="card-body p-4">
                    @if(Session::has('add'))
                    <div class="alert alert-success" role="alert">
                        <span><strong>( {{ Session::get('add') }} ) Added</strong></span>
                    </div>
                    @endif

                    @if(Session::has('updated'))
                    <div class="alert alert-success" role="alert">
                        <span><strong>( {{ Session::get('updated') }} ) Updated</strong></span>
                    </div>
                    @endif

                    @if(Session::has('delete'))
                    <div class="alert alert-danger" role="alert">
                        <span><strong>( {{ Session::get('delete') }} ) Deleted</strong></span>
                    </div>
                    @endif

                    @error('image')
                    <p style="color:red;">{{$message}}</p>
                    @enderror

                    @error('name')
                    <p style="color:red;">{{$message}}</p>
                    @enderror

                    @error('status')
                    <p style="color:red;">{{$message}}</p>
                    @enderror

                    <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Category</button>
                    <h5 class="card-title fw-semibold mb-4">Category Data</h5>
                    <div class="table-responsive">
                        <!-- asdasd -->
                        <table id="dtBasicExample" class="table table-bordered text-nowrap mb-0 align-middle" cellspacing="0" width="100%">
                            <thead class="text-dark fs-4">
                                <tr>
                                    <th class="th-sm border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Id</h6>
                                    </th>
                                    <th class="th-sm border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Name</h6>
                                    </th>
                                    <th class="th-sm border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Image</h6>
                                    </th>
                                    <th class="th-sm border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Status</h6>
                                    </th>
                                    <th class="th-sm border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Delete</h6>
                                    </th>
                                    <th class="th-sm border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Update</h6>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($category as $c)
                                <tr>
                                    <td class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">{{$c->id}}</h6>
                                    </td>
                                    <td class="border-bottom-0">
                                        <h6 class="fw-semibold mb-1">{{$c->category_name}}</h6>
                                    </td>
                                    <td class="border-bottom-0">
                                        <img src="images/category/{{$c->category_image}}" class="border border-primary rounded" alt="{{$c->category_image}}" width="80px" height="80px">
                                    </td>
                                    @php
                                    $status = 'danger';
                                    if($c->category_status == 'active')
                                    $status = 'success'
                                    @endphp
                                    <td class="border-bottom-0">
                                        <div class="d-flex align-items-center gap-2">
                                            <span class="badge bg-{{$status}} rounded-3 fw-semibold">{{$c->category_status}}</span>
                                        </div>
                                    </td>
                                    <td class="border-bottom-0">
                                        <form action="{{route('category.destroy', $c->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger btn-sm">Delete</button>
                                        </form>
                                        <!-- <button type="submit" value="{{$c->id}}" class="btn btn-outline-danger btn-sm">Delete</button> -->
                                    </td>
                                    <td class="border-bottom-0">
                                        <button class="btn btn-outline-success editbtn btn-sm" value="{{$c->id}}">edit</button>
                                        <!-- <a href="{{route('category.edit', $c->id)}}"><button type="submit" class="btn btn-outline-success btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">Update</button></a> -->

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
<!-- Page level plugins -->
<script src="assets/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="assets/js/demo/datatables-demo.js"></script>
<script>
    $(document).ready(function() {

        $('#dtBasicExample').DataTable();
        $('.dataTables_length').addClass('bs-select');

        // alert 
        window.setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(500, function() {
                $(this).remove();
            });
        }, 2000);

        // only allow alphabets validation 
        $('.checkname').hide();
        $(".inputTextBox").keypress(function(event) {
            var inputValue = event.charCode;
            if (!(inputValue >= 65 && inputValue <= 122) && (inputValue != 32 && inputValue != 0)) {
                event.preventDefault();
                $('.checkname').show();
            } else {
                $('.checkname').hide();
            }
        });

        $(document).on('click', '.editbtn', function() {
            var id = $(this).val();
            // alert(id);
            $('#editModal').modal('show');
            $.ajax({
                type: "GET",
                url: "/category/" + id,
                success: function(res) {
                    // console.log(res.id);
                    $('#editform').attr('action', '/category/' + res.id);
                    $('#name').val(res.category_name);
                    let img = "images/category/" + res.category_image;
                    console.log(img);
                    $('#image').attr("src", img);
                    $('#image').attr("alt", res.category_image);
                    jQuery("select option[value=" + res.category_status + "]").attr('selected', 'selected');
                }
            })
        })
    });
</script>
@endsection