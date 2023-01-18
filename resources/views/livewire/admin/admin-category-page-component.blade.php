<div class="main-panel">
    @if (Session::has('error'))
    <div class="alert alert-danger alert-dismissible fade show mx-4" role="alert">
        {{Session::get('error')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Home Page </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Navigation</li>
                    <li class="breadcrumb-item active" aria-current="page">Home Page / Category</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Category Form</h4>
                        <div class="form-group">
                            <label for="categoryname">Category Name</label>
                            <input wire:model="name" style="color:white;" type="text" name="categoryname"
                                class="form-control" id="categoryname" placeholder="Category Name" required>
                        </div>
                        <button wire:click="createCategory" type="submit" class="btn btn-primary me-2"
                            value="Save">Submit</button>
                        <button class="btn btn-dark" onclick="window.location.href=window.location.href">Cancel</button>


                    </div>
                </div>
            </div>
        </div>

        <!-- Show Current Category Data -->
        <div>
            <h3 class="page-title mb-5 mt-3"> Current Data </h3>
            <table class="table table-bordered table-dark" style="color:white;">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Category Name</th>
                        <th scole="col">Action</th>
                    </tr>
                </thead>
                
                
                @foreach($categories as $category)
                
                <tbody>
                    <tr>
                        <th>{{$category->id}}</th>
                        <td>{{$category->name}}</td>
                        <td><button onclick="return confirm('Are you sure you want to delete this data?') || event.stopImmediatePropagation()" wire:click="deleteCategory({{ $category->id }})" type="submit" class="btn btn-primary  pd-0"
                            value="Save">Delete</button>
                        </td>
                    </tr>
                </tbody>
                @endforeach
                
            </table>
        </div>

    </div>
    <!-- content-wrapper ends -->
    <!-- partial:../../partials/_footer.html -->
    <!-- partial -->
</div>
<!-- main-panel ends -->
</div>
