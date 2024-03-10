<!DOCTYPE html>
<html>
  <head> 
  @include('admin.css')
  </head>
  <body>
  @include('admin.header')
    <div class="d-flex align-items-stretch">
  @include('admin.sidebar')
    <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <div>
                <h1>Add Category</h1>
                <div class="container mt-5">
                    @if(session('message'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('message') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="card">
                        <div class="card-header">
                            <h4 class="mb-0 text-center">Category</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{url('add_category')}}" method="POST"> 
                                @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="category" id="name" placeholder="Enter your category" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Add Category</button>
                            </form>
                        </div>
                            <div class="container mt-2">
                                <h2 class="text-center mb-3">Categories</h2>
                                <ul class="list-group">
                                    @foreach($data as $data)
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        {{ $data->cat_title }}
                                        <div class="btn-group" role="group" aria-label="Category Actions">
                                            <button type="submit" class="btn btn-warning text-white mr-2" data-href="{{url('cat_update',$data -> id)}}">
                                                Update</button>
                                            <button type="submit"class="btn btn-danger" onclick="confirmDelete(event)" data-href="{{url('cat_delete',$data -> id)}}">
                                                Delete</button>
                                        </div>
                                    </li>
                                        <!-- Update Modal -->
                                    <!-- <div class="modal fade" id="updateModal{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel{{$data->id}}" aria-hidden="true"> -->
                                         <!-- Update Modal -->
                                    <!-- <div class="modal fade" id="updateModal{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel{{$data->id}}" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="updateModalLabel{{$data->id}}">Update Category</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body"> -->
                                                    <!-- Add your update form here -->
                                                    <!-- <form>
                                                        <div class="form-group">
                                                            <label for="updateCategoryName">Category Name</label>
                                                            <input type="text" class="form-control" id="updateCategoryName" value="{{ $data->cat_title }}">
                                                        </div> -->
                                                        <!-- Add other update form fields as needed -->
                                                        <!-- <button type="submit" class="btn btn-primary">Update</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>          
                                    </div> -->
                                        <!-- Delete Modal -->
                                    <!-- <div class="modal fade" id="deleteModal{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel{{$data->id}}" aria-hidden="true"> -->
                                        <!-- Delete Modal -->
                                    <!-- <div class="modal fade" id="deleteModal{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel{{$data->id}}" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="deleteModalLabel{{$data->id}}">Delete Category</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Are you sure you want to delete the category "{{ $data->cat_title }}"?</p>
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                    <button type="button" class="btn btn-danger">Delete</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div> -->
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>  
                    </div>
                </div>
            </div>
          </div>
        </div>
    </div>

  @include('admin.footer')
  </body>
</html>