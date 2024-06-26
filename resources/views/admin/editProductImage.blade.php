@extends('layouts.admin')

@section('body')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="table-responsive">

        <h2>Edit Product Image</h2>

        <form action="/admin/updateProductImage" method="post" enctype="multipart/form-data">

            {{ csrf_field() }}

            <div class="form-group">
                <input type="hidden" name="id" value={{ $product->id }}>

                <div>
                  <img src="{{ asset('storage') }}/product_image/{{ $product->image }}" alt="" width="250px" height="250px">
                </div>
                <label for="image">Image</label>
                <input type="file" class="form-control" name="image" id="image">
            </div>
            <button type="submit" name="submit" class="btn btn-success">Save</button>
        </form>

    </div>
@endsection
