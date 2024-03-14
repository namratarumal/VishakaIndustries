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
    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputStatus" class="form-label">Select Category</label>
                            <select class="form-select" name="cid" id="exampleInputStatus">
                                <option class="form-control" value="" selected> --- Select Category --- </option>
                                @foreach($category as $c)
                                <option value="{{$c->id}}">{{$c->category_name}}</option>
                                @endforeach
                            </select>
                            @error('cid')
                            <p style="color:red;">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" name="title" class="form-control inputTextBox">
                            <label class="text-danger checkname">Numbers Not Allowed!</label>
                            @error('title')
                            <p style="color:red;">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="materials" class="form-label">Materials</label>
                            <input type="text" name="materials" class="form-control">
                            @error('materials')
                            <p style="color:red;">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="quality" class="form-label">Quality</label>
                            <input type="text" name="quality" class="form-control">
                            @error('quality')
                            <p style="color:red;">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="use" class="form-label">Use</label>
                            <input type="text" name="use" class="form-control">
                            @error('use')
                            <p style="color:red;">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="size" class="form-label">Sizes</label>
                            <input type="text" name="size" class="form-control">
                            @error('size')
                            <p style="color:red;">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="gms" class="form-label">GMS</label>
                            <input type="text" name="gms" class="form-control">
                            @error('gms')
                            <p style="color:red;">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="color" class="form-label">Colors</label>
                            <input type="text" name="color" class="form-control">
                            @error('color')
                            <p style="color:red;">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputImage" class="form-label">Select Image</label>
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
                <form action="/product" id="editform" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Update Product</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="cid" class="form-label">Select Category</label>
                            <select class="form-select" name="cid" id="cid">
                                <option class="form-control" value="" selected> --- Select Category --- </option>
                                @foreach($category as $c)
                                <option value="{{$c->id}}">{{$c->category_name}}</option>
                                @endforeach
                            </select>
                            @error('cid')
                            <p style="color:red;">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" name="title" class="form-control inputTextBox" id="title">
                            <label class="text-danger checkname">Numbers Not Allowed!</label>
                            @error('title')
                            <p style="color:red;">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="materials" class="form-label">Materials</label>
                            <input type="text" name="materials" class="form-control" id="materials">
                            @error('materials')
                            <p style="color:red;">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="quality" class="form-label">Quality</label>
                            <input type="text" name="quality" class="form-control" id="quality">
                            @error('quality')
                            <p style="color:red;">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="use" class="form-label">Use</label>
                            <input type="text" name="use" class="form-control" id="use">
                            @error('use')
                            <p style="color:red;">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="size" class="form-label">Sizes</label>
                            <input type="text" name="size" class="form-control" id="size">
                            @error('size')
                            <p style="color:red;">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="gms" class="form-label">GMS</label>
                            <input type="text" name="gms" class="form-control" id="gms">
                            @error('gms')
                            <p style="color:red;">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="color" class="form-label">Colors</label>
                            <input type="text" name="color" class="form-control" id="color">
                            @error('color')
                            <p style="color:red;">{{$message}}</p>
                            @enderror
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
                            <label for="status" class="form-label">Status</label>
                            <select class="form-select" name="status" id="status">
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

                    <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addModal">Add Product</button>
                    <h5 class="card-title fw-semibold mb-4">Products Data</h5>
                    <div class="table-responsive">
                        <table id="dtBasicExample" class="table text-nowrap mb-0 align-middle table-bordered">
                            <thead class="text-dark fs-4">
                                <tr>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">ID</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Category_ID</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Title</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Image</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Materials</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Quality</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Use</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Sizes</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">GMS</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Colors</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Status</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Delete</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Update</h6>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $p)
                                <tr>
                                    <td class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">{{$p->id}}</h6>
                                    </td>
                                    <td class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">{{$p->category_id}}</h6>
                                    </td>
                                    <td class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">{{$p->title}}</h6>
                                    </td>
                                    <td class="border-bottom-0">
                                        <img src="images/products/{{$p->product_image}}" class="border border-primary rounded" alt="{{$p->product_image}}" width="80px" height="80px">
                                    </td>
                                    <td class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">{{$p->materials}}</h6>
                                    </td>
                                    <td class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">{{$p->quality}}</h6>
                                    </td>
                                    <td class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">{{$p->use}}</h6>
                                    </td>
                                    <td class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">{{$p->sizes}}</h6>
                                    </td>
                                    <td class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">{{$p->gms}}</h6>
                                    </td>
                                    <td class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">{{$p->colors}}</h6>
                                    </td>
                                    @php
                                    $status = 'danger';
                                    if($p->product_status == 'active')
                                    $status = 'success'
                                    @endphp
                                    <td class="border-bottom-0">
                                        <div class="d-flex align-items-center gap-2">
                                            <span class="badge bg-{{$status}} rounded-3 fw-semibold">{{$p->product_status}}</span>
                                        </div>
                                    </td>
                                    <td class="border-bottom-0">
                                        <form action="{{route('product.destroy', $p->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger btn-sm">Delete</button>
                                        </form>
                                        <!-- <button type="submit" value="{{$c->id}}" class="btn btn-outline-danger btn-sm">Delete</button> -->
                                    </td>

                                    <td class="border-bottom-0">
                                        <!-- <a href="{{route('category.edit', $c->id)}}"><button type="submit" class="btn btn-outline-success btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">Update</button></a> -->
                                        <button class="btn btn-outline-success editbtn btn-sm" value="{{$p->id}}">edit</button>

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
                url: "/product/" + id,
                success: function(res) {
                    console.log(res);
                    $('#editform').attr('action', '/product/' + res.id);
                    $('#title').val(res.title);
                    $('#materials').val(res.materials);
                    $('#quality').val(res.quality);
                    $('#use').val(res.use);
                    $('#size').val(res.sizes);
                    $('#gms').val(res.gms);
                    $('#color').val(res.colors);
                    let img = "images/products/" + res.product_image;
                    // console.log(img);
                    $('#image').attr("src", img);
                    $('#image').attr("alt", res.product_image);
                    jQuery("select option[value=" + res.product_status + "]").attr('selected', 'selected');
                    jQuery("select option[value=" + res.cid + "]").attr('selected', 'selected');
                }
            })
        })
    });
</script>
@endsection