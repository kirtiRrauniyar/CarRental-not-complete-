@extends('admin.layouts.layout')

@section('content')
<div class="content-wrapper" style="min-height: 1302.4px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Cab Registration</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Cab Registration</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
         
        <!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Cab Registration List</h3>
                <br>
                <a href="{{url('/')}}/admin/Add-cab-regitration" class="btn btn-info">+Add</a>

                <div class="card-tools">
                    
                  <div class="input-group input-group-sm" style="width: 150px;">
                    
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                         
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap dataTables_wrapper dt-bootstrap4" id="example1_wrapper" >
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Mobile</th>
                      <th>Email</th>
                      <th>Registration Fee</th>
                      <th>Address</th>
                      <th>Image</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($getcabownerdata as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->mobile }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->registration_fee }}</td>
                        <td>{{ $item->address }}</td>
                        <td>
                            <img src="{{ asset('admin/uploads/cabowner/' . $item->image) }}" alt="Image here"
                                class="cate-image" style="height: 20px;">
                        </td>
                        
                        <td class="td-actions">
                            <a href="{{url('admin/Edit-cab-regitration/'.$item->id)}}" class="btn btn-primary " >
                                <i class="fa fa-edit"></i>
                             </a>
                            <a href="{{url('admin/Delete-cab-regitration/'.$item->id)}}" class="btn btn-danger ">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                            
                         
                     </tr>
                      @endforeach

                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection
