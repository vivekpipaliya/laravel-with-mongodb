@extends('../layouts/app')


@section('content')
    {{--  <div class="card">
        <div class="col-lg-12 ">
            <div class="pull-left">
                <h2> Show User</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
            </div>
        </div>
    </div>  --}}


    <div class="  ">

        <div class="row justify-content-center">
            <div class="col-md-10">
            <a class="btn btn-success m-2" href="{{ route('users.index') }}" style="float: right;"> Back</a>
        </div> 
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">User:- <b>{{ $user->name }}</b></div>
                <div class="card-body">
               <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $user->name  ?? '-' }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                {{ $user->email  ?? '-' }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Mobile:</strong>
                {{ $user->mobile ?? '-' }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Age:</strong>
                {{ $user->age ?? '-' }}
            </div>
        </div>
                </div>
            </div>
        </div>
    </div>


      
    </div>
@endsection
