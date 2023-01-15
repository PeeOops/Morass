<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Home Page </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Navigation</li>
                    <li class="breadcrumb-item active" aria-current="page">Home Page / Highlights</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Highlight Form</h4>
                        <div class="form-group">
                            <label for="highlighttitle">Title</label>
                            <input wire:model="title" style="color:white;" type="text" name="highlighttitle"
                                class="form-control" id="highlighttitle" placeholder="Title" required>
                        </div>
                        <div class="form-group">
                            <label for="highlightdescription">Description</label>
                            <input wire:model="description" style="color:white;" type="text" name="highlightdescription"
                                class="form-control" id="highlightdescription" placeholder="Description" required>
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <div class="input-group col-xs-12">
                                <input wire:model="image" type="file" name="highlightimage" required>
                            </div>
                        </div>
                        <button wire:click="createHighlight" type="submit" class="btn btn-primary me-2"
                            value="Save">Submit</button>
                        <button class="btn btn-dark">Cancel</button>


                    </div>
                </div>
            </div>
        </div>

        <!-- Show Current Highlight Data -->
        <div>
            <h3 class="page-title mb-5 mt-3"> Data </h3>
            <table class="table table-bordered table-dark" style="color:white;">
                <thead>
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Image</th>
                    </tr>
                </thead>
                @foreach($highlights as $highlight)
                <tbody>
                    <tr>
                        <th>{{$highlight->title}}</th>
                        <td>{{$highlight->description}}</td>
                        <td><img src="{{asset('storage/'.$highlight->image)}}" alt=""></td>
                        <td>{{$highlight->image}}</td>
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
