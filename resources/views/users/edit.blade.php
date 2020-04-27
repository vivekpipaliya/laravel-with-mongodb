@extends('../layouts/app')


@section('content')
    {{--  <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2></h2>
            </div>
            <div class="pull-right">
                
            </div>
        </div>
    </div>  --}}


    
<div class="row justify-content-center">
	
        <div class="col-md-10">
			<a class="btn btn-success m-2" href="{{ route('users.index') }}" style="float: right;"> Back</a>
		</div> 
		
        <div class="col-md-10"> 
            <div class="card">
                <div class="card-header">Edit User</div>

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


					<form action="{{ route('users.update',$user->id) }}" method="POST">
						@csrf
						@method('PUT') 
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="form-group">
									<strong>Name:</strong>
									<input type="text" name="name" value="{{ $user->name }}" class="form-control" placeholder="Enter Name">
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="form-group">
									<strong>Email:</strong>
									<input type="email" name="email"  value="{{ $user->email }}" class="form-control" placeholder="Enter Email">
								</div>
							</div>
					   
							<div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Password:</strong>
									<input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
									 name="password"  autocomplete="password"
									 placeholder="Enter Password">
									 {{--  required  --}}
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
									<input type="number" name="mobile"  value="{{ $user->mobile }}" class="form-control" placeholder="Enter Mobile">
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="form-group">
									<strong>Age:</strong>
									<input type="number" name="age"  value="{{ $user->age }}" class="form-control" placeholder="Enter Age">
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
