<div class="main-panel">
    @if(session('featuredMessages'))
    <div class="alert alert-dark" role="alert">

        {{session('featuredMessages')}}

    </div>
    @endif

    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Home Page </h3>
            <h3 class="page-title" style="color:red;"> You can only have 3 data exist for featured games, make sure to
                delete
                or edit it before adding another data </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Navigation</li>
                    <li class="breadcrumb-item active" aria-current="page">Home Page / Featured Games</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Featured Games Form</h4>
                        <div class="form-group">
                            <label for="featuredtitle">Title</label>
                            <input wire:model="title" style="color:white;" type="text" name="featuredtitle"
                                class="form-control" id="featuredtitle" placeholder="Title" required>
                        </div>
                        <div class="form-group">
                            <label for="featureddescription">Description</label>
                            <input wire:model="description" style="color:white;" type="text" name="featureddescription"
                                class="form-control" id="featureddescription" placeholder="Description" required>
                        </div>
                        <button wire:click="createFeatured" type="submit" class="btn btn-primary me-2"
                            value="Save">Submit</button>
                        <button wire:click="cancelForm" class="btn btn-dark">Cancel</button>


                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Featured Games Form</h4>
                        <div class="form-group">
                            <label for="featuredtitle">Title</label>
                            <input wire:model="title" style="color:white;" type="text" name="featuredtitle"
                                class="form-control" id="featuredtitle" placeholder="Title" required>
                        </div>
                        <div class="form-group">
                            <label for="featureddescription">Description</label>
                            <input wire:model="description" style="color:white;" type="text" name="featureddescription"
                                class="form-control" id="featureddescription" placeholder="Description" required>
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <div class="input-group col-xs-12">
                                <input wire:model="image" type="file" name="featuredimage" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="gametitle">Game Title</label>
                            <input wire:model="game_title" style="color:white;" type="text" name="gametitle"
                                class="form-control" id="gametitle" placeholder="Game Title" required>
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input wire:model="price" style="color:white;" type="text" name="price" class="form-control"
                                id="price" placeholder="$" required>
                        </div>
                        <button wire:click="createFeatured" type="submit" class="btn btn-primary me-2"
                            value="Save">Submit</button>
                        <button wire:click="cancelForm" class="btn btn-dark">Cancel</button>


                    </div>
                </div>
            </div>
        </div>

        <!-- Show Current Highlight Data -->
        <div>
            <h3 class="page-title mb-5 mt-3"> Current Data </h3>
            <table class="table table-bordered table-dark" style="color:white;">
                <thead>
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Image</th>
                        <th scole="col">Game Title</th>
                        <th scole="col">Price</th>
                        <th scole="col">Edit</th>
                        <th scole="col">Delete</th>
                    </tr>
                </thead>


                @foreach($featureds as $featured)
                <tbody>
                    @if ($updateFeaturedId !== $featured->id)
                    <tr>
                        <td>{{$featured->title}}</td>
                        <td>{{$featured->description}}</td>
                        <td><img src="{{asset('storage/'.$featured->image)}}" alt=""></td>
                        <td>{{$featured->game_title}}</td>
                        <td>{{$featured->price}}</td>
                        <td><button wire:click="updateFeatured({{$featured->id}})" type="submit"
                                class="btn btn-primary  pd-0" value="Save">Edit</button></td>
                        <td><button
                                onclick="return confirm('Are you sure you want to delete this data?') || event.stopImmediatePropagation()"
                                wire:click="deleteFeatured({{$featured->id}})" type="submit"
                                class="btn btn-primary  pd-0" value="Save">Delete</button></td>
                    </tr>
                    @endif

                    @if ($updateFeaturedId === $featured->id)
                    <td><input wire:model="title" style="color:white;" type="text" name="featuredtitle"
                            class="form-control" id="featuredtitle" placeholder="Title" required></td>
                    <td><input wire:model="description" style="color:white;" type="text" name="featureddescription"
                            class="form-control" id="featureddescription" placeholder="Description" required>
                    </td>
                    <td><input wire:model="image" type="file" name="featuredimage" required></td>
                    <td><input wire:model="game_title" style="color:white;" type="text" name="gametitle"
                            class="form-control" id="gametitle" placeholder="Game Title" required></td>
                    <td><input wire:model="price" style="color:white;" type="text" name="price" class="form-control"
                            id="price" placeholder="$" required></td>
                    <td><button wire:click="updateForm({{$featured->id}})" type="submit" class="btn btn-primary me-2" value="Save">Save</button></td>
                    <td><button wire:click="cancelForm" class="btn btn-primary me-2">Cancel</button></td>
                    @endif
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
