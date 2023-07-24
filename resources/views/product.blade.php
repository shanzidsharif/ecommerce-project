@extends('master')

@section('content')

    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-1">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="text-center">Product List</h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover table-danger">
                                <tr>
                                    <th>sl</th>
                                    <th>Name</th>
                                    <th>Category Id</th>
                                    <th>Price</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                                @php
                                    $i = 1
                                @endphp
                                @foreach($products as $product)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->category_id }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ $product->description }}</td>
                                    <td>{{ $product->image }}</td>
                                    <td class="btn-group">
                                        <a href="{{ route('edit.product', ['id'=>$product['id']]) }}" class="btn btn-success btn-sm mx-1">Edit</a>
{{--                                        <a href="{{ route('delete.product', ['id'=>$product['id']]) }}" class="btn btn-danger btn-sm" onclick="return confirm('You want to Delete')">Delete</a>--}}
                                        <form action="{{ route('delete.product') }}" method="post">
                                            @csrf
                                            <input type="hidden" value="{{ $product->id }}" name="id">
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Delete?')">Delete</button>
                                        </form>

                                    </td>
                                </tr>
                                @endforeach
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
