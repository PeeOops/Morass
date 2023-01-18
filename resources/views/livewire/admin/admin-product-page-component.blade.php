<div class="main-panel">
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
                        <h4 class="card-title">Product Form</h4>
                        <div class="form-group">
                            <label for="producttitle">Title</label>
                            <input wire:model="title" style="color:white;" type="text" name="producttitle"
                                class="form-control" id="producttitle" placeholder="Title" required>
                        </div>
                        <div class="form-group">
                            <label for="productdescription">Description</label>
                            <input wire:model="description" style="color:white;" type="text" name="productdescription"
                                class="form-control" id="productdescription" placeholder="Description" required>
                        </div>
                         <div class="form-group">
                            <label for="productcategory">Categories</label>
                            <div class="d-flex check-group">
                                @foreach($categories as $category)
                                    <div class="form-check my-0 me-2">
                                    <label class="form-check-label">
                                        <input wire:model="productcategories" type="checkbox" class="form-check-input" name="productcategory[]" value="{{$category->id}}"> {{$category->name}} </label>
                                    </div>
                                @endforeach
                            </div>  
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <div class="input-group col-xs-12">
                                <input wire:model="image" type="file" name="productimage" required>
                            </div>
                            @if ($image)
                                <img src="{{$image->temporaryUrl()}}">
                            @endif
                        </div>
                        <button wire:click="createProduct" type="submit" class="btn btn-primary me-2"
                            value="Save">Submit</button>
                        <button class="btn btn-dark" onclick="window.location.href=window.location.href">Cancel</button>


                    </div>
                </div>
            </div>
        </div>

        <!-- Show Current Product Data -->
        <div>
            <h3 class="page-title mb-5 mt-3"> Current Data </h3>
            <table class="table table-bordered table-dark" style="color:white;">
                <thead>
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Categories</th>
                        <th scope="col">Image</th>
                        <th scole="col">Delete</th>
                    </tr>
                </thead>
                @foreach($products as $product)
                
                <tbody>
                    <tr>
                        <td>{{$product->title}}</td>
                        <td>{{$product->description}}</td>
                        <td>
                            @foreach($product->categories as $category)
                            <span class="btn btn-light">{{ $category->name }}</span>
                            @endforeach
                        </td>
                        <td><img src="{{asset('storage/'.$product->image)}}" alt=""></td>
                        <td><button onclick="return confirm('Are you sure you want to delete this data?') || event.stopImmediatePropagation()" wire:click="deleteProduct({{ $product->id }})" type="submit" class="btn btn-primary  pd-0"
                            value="Save">Delete</button></td>
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
