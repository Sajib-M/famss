@extends('backend.layouts.master')

@section('content')
<div class="card shadow mb-4">

    <div class="card-header py-3 d-flex justify-content-between">
        <h3 class="m-0 font-weight-bold text-primary">Add New Category</h3>
        <a class="btn btn-primary py-2" href="{{ route('category.list') }}">Categories List</a>
    </div>

    <div class="card-body">
        <form action="{{ route('category.store') }}" method="post">
            @csrf

            <div class="mb-3">
                <label for="categoryId" class="font-weight-bold">Category Name :</label>
                <input type="text" name="name" class="form-control" placeholder="Enter Category Name" value="{{ old('name') }}" id="categoryId">
            </div>
            <div class="mb-3">
                <label for="des" class="font-weight-bold">Category Descriptions :</label>
                <textarea name="description" class="form-control" id="des" cols="30" rows="5">
                   
                </textarea>

            </div>

            <button type="submit" class="btn btn-outline-primary">Submit</button>

        </form>
        
    </div>
</div>
@endsection