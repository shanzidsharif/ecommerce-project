@extends('master')

@section('content')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-1">
                    <div class="card">
                        <div class="card-header">
                            Product Form
                        </div>
                        <div class="card-body">
                            <form action="{{ route('add.product') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row my-3">
                                    <label for="" class="col-md-2 col-form-label">Product Name</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="name" placeholder="Product Name">
                                    </div>
                                </div>
                                <div class="form-group row my-3">
                                    <label for="" class="col-md-2 col-form-label">Product price</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="price" placeholder="Product price">
                                    </div>
                                </div>
                                <div class="form-group row my-3">
                                    <label for="" class="col-md-2 col-form-label">Category Id</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="category_id" placeholder="Cat ID">
                                    </div>
                                </div>
                                <div class="form-group row my-3">
                                    <label for="" class="col-md-2 col-form-label">Description</label>
                                    <div class="col-md-10">
                                        <textarea name="description" class="form-control" placeholder="Write any message here" ></textarea>
                                    </div>
                                </div>
                                <div class="form-group row my-3">
                                    <label for="" class="col-md-2 col-form-label">Product Image</label>
                                    <div class="col-md-10">
                                        <input type="file" class="form-control" name="image" placeholder="Product Image">
                                    </div>
                                </div>
                                <div class="form-group row my-3">

                                    <div class="col-md-12">
                                        <input type="submit" class="btn btn-outline-secondary form-control"  value="Submit">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>
@endsection
