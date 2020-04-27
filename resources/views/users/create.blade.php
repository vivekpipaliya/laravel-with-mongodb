@extends('../layouts/app')


@section('content')
    {{--  <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2></h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
            </div>
        </div>
    </div>  --}}
 
<div class="row justify-content-center">
         <div class="col-md-10">
			<a class="btn btn-success m-2" href="{{ route('users.index') }}" style="float: right;"> Back</a>
		</div> 
        <div class="col-md-10">
             <div class="card">
                <div class="card-header">Add New User</div>
                <div class="card-body">

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif


                      <form action="{{ route('users.store') }}" method="POST">
                        @csrf
                        <div class="row">

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Name:</strong>
                                    <input type="text" name="name" class="form-control" placeholder="Enter Name">
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Email:</strong>
                                    <input type="email" name="email" class="form-control" placeholder="Enter Email">
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Password:</strong>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                                    autocomplete="password"
                                     placeholder="Enter Password">
                                     {{--   required   --}}
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Mobile:</strong>
                                    <input type="number" name="mobile" class="form-control" placeholder="Enter Mobile">
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Age:</strong>
                                    <input type="number" name="age" class="form-control" placeholder="Enter Age">
                                </div>
                            </div> 

                            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div> 
                    </form>
                </div>
            </div>
        </div>
    </div>

  

@endsection
