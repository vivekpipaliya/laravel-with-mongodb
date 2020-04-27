@extends('../layouts/app')


@section('content')
    {{--  <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left"> 
            </div> 
        </div>
    </div>  --}}




    <div class="row justify-content-center">
        <div class="col-md-10">
            <a class="btn btn-success m-2" href="{{ route('users.create') }}" style="float: right;"> Create New User</a>
        </div>
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <div class="pull-left"> Registered Users List.</div>
                </div>
                <div class="card-body">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif  
                    <table class="table table-bordered ">
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Age</th>
                            <th width="280px">
                                <center>Action</center>
                            </th>
                        </tr>
                        @foreach ($users as $book)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $book->name  }}</td>
                            <td>{{ $book->email ?? '-' }}</td>
                            <td>{{ $book->mobile ?? '-' }}</td>
                            <td>{{ $book->age ?? '-' }}</td>
                            <td>
                                <form action="{{ route('users.destroy',$book->id) }}" method="POST">
                                    <a class="btn btn-info" href="{{ route('users.show',$book->id) }}">Show</a>
                                    <a class="btn btn-primary" href="{{ route('users.edit',$book->id) }}">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>    
                </div>
            </div>
        </div>
    </div>
   


@endsection
