@extends('admin.layouts.layout')

@section('content')
    <div class="content-wrapper" style="min-height: 1302.4px;">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Registered Cab</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{url('/')}}/">Home</a></li>
                            <li class="breadcrumb-item active">Registered Cab</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card card-warning">
                            <div class="card-header">
                                <h3 class="card-title">Registered Cab</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form method="post" action="" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                         {{-- type --}}
                                         <input type="hidden" name="type" class="form-control" value="Cab-Owner">
                                        <div class="col-sm-4">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" name="name" @if($getcabownerdata!=null) value="{{$getcabownerdata->name}}" @else value="{{old('name')}}" @endif  class="form-control @error('name') is-invalid @enderror" placeholder="Enter name...">
                                                @error('name')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                               @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Mobile</label>
                                                <input type="number" name="mobile" @if($getcabownerdata!=null) value="{{$getcabownerdata->mobile}}" @else value="{{old('mobile')}}" @endif  onKeyDown="if(this.value.length==10 && event.keyCode>47 && event.keyCode < 58)return false;" 
                                                class="form-control @error('phone') is-invalid @enderror" class="form-control @error('mobile') is-invalid @enderror" placeholder="Enter Mobile..." >
                                                @error('mobile')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                               @enderror
                                            </div>
                                        </div>
                                        @if($getcabownerdata!=null)
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="text"    @if($getcabownerdata!=null) value="{{$getcabownerdata->email}}" @endif  class="form-control @error('email') is-invalid @enderror" placeholder="Enter email ..." readonly>
                                                @error('email')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                               @enderror
                                            </div>
                                        </div>
                                        @else
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="text" name="email"   value="{{old('email')}}"  class="form-control @error('email') is-invalid @enderror" placeholder="Enter email ...">
                                                @error('email')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                               @enderror
                                            </div>
                                        </div>
                                        @endif
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label>Registration Fee</label>
                                                <input type="text" name="registration_fee" @if($getcabownerdata!=null) value="{{$getcabownerdata->registration_fee}}" @else value="{{old('registration_fee')}}" @endif  class="form-control @error('registration_fee') is-invalid @enderror" placeholder="Registration Fee ...">
                                                @error('registration_fee')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                               @enderror
                                            </div>
                                        </div>
                                        
                                        <div class="col-sm-4">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="password" name="password" value="{{old('password')}}" class="form-control @error('password') is-invalid @enderror" placeholder="Password ...">
                                                @error('password')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                               @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label>Confirm Password</label>
                                                <input type="password" name="confrim_password" value="{{old('confirm_password')}}" class="form-control @error('confrim_password') is-invalid @enderror" placeholder="confrim_password  ...">
                                                @error('confrim_password')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                               @enderror
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" name="address" @if($getcabownerdata!=null) value="{{$getcabownerdata->address}}" @else value="{{old('address')}}" @endif  class="form-control @error('address') is-invalid @enderror" placeholder="address  ...">
                                                @error('address')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                               @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Image</label>
                                                <input type="file" value="{{old('image')}}" class="form-control  @error('image') is-invalid @enderror" name="image">
                                                @error('image')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                            </div>
                                    </div>
                                    <div class="card-footer" align="center">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                    
    
                                     
                                </form>
                            </div>
                            <!-- /.card-body -->
                        </div>

                    </div>
                   

                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>

    </div>
@endsection
