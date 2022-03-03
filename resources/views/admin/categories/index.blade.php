@extends('admin.products.layout')

@section('content')


    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="justify-center text-center mt-10 mb-10">
                <h2>All products ready to be delivered</h2>
            </div>
            <div class="justify-center text-center mb-5">
                <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>
            </div>

            <ul class="nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('categories.index') }}">{{ __('Categories') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('categories.create') }}">{{ __('Create category') }}</a>
                </li>
            </ul>

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
            <th>Details</th>
            <th>Type</th>
            <th>Value</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($categories as $category)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $category->name }}</td>
            <td>{{ $category->detail }}</td>
            <td>{{ $category->type }}</td>
            <td>{{ $category->value }}</td>
            <td>
                <form action="{{ route('categories.destroy',$product->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('categories.show',$category->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('categories.edit',$category->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $products->links() !!}

@endsection
