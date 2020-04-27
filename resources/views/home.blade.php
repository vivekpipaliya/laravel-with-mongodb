@extends('layouts.app')

@section('content')
<div class="container">
    {{--  <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>  --}}

 <div class="col-md-10">
            <div class="pull-right m-2"> 
                <a class="btn btn-success " href="{{ route('users.create') }}"> Create New User</a>
            </div>
            <div class="card">
                <div class="card-header">
                    <div class="pull-left"> Users </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered ">
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Age</th>
                            <th width="280px">Action</th>
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
