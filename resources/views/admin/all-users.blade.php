@extends('admin.layout')

@section('content')


    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="justify-center text-center mt-10 mb-10">
                <h1>All registered users</h1>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            {{-- <th width="280px">Action</th> --}}
        </tr>
        @foreach ($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            {{-- <td>
                <form action="{{ route('products.destroy',$user->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('products.show',$user->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('products.edit',$user->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td> --}}
        </tr>
        @endforeach
    </table>

@endsection
