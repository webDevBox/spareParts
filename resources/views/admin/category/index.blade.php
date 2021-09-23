@extends('admin.layout.app')

@section('content')
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
    <div class="content-header row">
    </div>
    <div class="content-body">
    <!-- Dashboard Ecommerce Starts -->
    <section id="dashboard-ecommerce">
    
        <div class="row match-height">
            <div class="col-6">
                <a href="#" data-toggle="modal" data-target="#addCat">
                    <div class="card earnings-card">
                        <div class="card-body">
                            <h2 class="text-center py-1"><strong>Add Categories</strong></h2>
                            <h4 class="text-center text-success"><i class="fa fa-plus" aria-hidden="true"></i></h4>
                        </div>
                    </div>
                </a>
            </div>
            <div  class="col-6">
                <div class="card earnings-card">
                    <div class="card-body">
                        <h2 class="text-center  py-1"><strong>Total Categories</strong></h2>
                        <h4 class="text-center text-success">{{count($categories)}}</h4>
                    </div>
                </div>
            </div>
    
            
        </div>
        
    
    <div class="row match-height">
        
        <table id="ecom-products" class="table table-bordered table-striped table-vcenter">
    
            <thead>
    
                <tr>
    
                    <th class="text-center" style="width: 70px;">ID</th>
    
                    <th class="text-center">Category Name</th>
    
                    <th class="text-center">Category Image</th>
                    
                    <th class="text-center">Added</th>

                    <th class="text-center">Action</th>
    
                </tr>
    
            </thead>
    
            <tbody>
                @if(count($categories) > 0)

            @foreach($categories as $row)

            <tr>

                <td class="text-center">  CAT.{{$row->id}}  </td>

                <td class="text-center">  {{$row->name}}  </td>

                <td class="text-center"> <img src="{{asset('files/'. $row->image)}}" alt=""> </td>

                <td class="text-center">{{$row->created_at}}</td>

                <td class="text-center">

                    <div class="btn-group btn-group-xs">

                        <a href="#" data-toggle="tooltip" title="Edit" class="btn btn-primary"><i class="fa fa-pencil"></i></a>

                        <a href="{{route('delete', array('id' => $row->id))}}" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>

                    </div>

                </td>

            </tr>
            
            @endforeach
            <tr>
                <td colspan="10">
                    <div class="offset-lg-5 offset-md-5">
                        {{ $categories->links() }} 
                    </div>
                </td>
            </tr>
            @else

            <p>No Category Found</p>

            @endif
            
            </tbody>

           
    
        </table>
    
      
    
    
    </div>
    </section>
    <div class="modal fade" id="addCat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form action="" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label> Category Name </label>
                <input type="text" name="name" class="form-control" placeholder="Enter Category Name" required>
            </div>
            <div class="form-group">
                <div class="rounded-pill p-3 border border-success pointer">
                    <h3 class="text-center"> Select Category Image </h3>
                </div>
            </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save</button>
            </form>
            </div>
          </div>
        </div>
      </div>
    <!-- Dashboard Ecommerce ends -->
    
    </div>
    </div>
    </div>
@endsection

@section('script')
    <script>
        $('.pointer').click(function(){
            alert('....');
        });
    </script>
@endsection