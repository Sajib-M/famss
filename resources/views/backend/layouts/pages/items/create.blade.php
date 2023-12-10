@extends('backend.layouts.master')

@section('content')
<div class="card shadow mb-4">

    <div class="card-header py-3 d-flex justify-content-between">
        <h3 class="m-0 font-weight-bold text-primary">Add New item</h3>
        <a class="btn btn-primary py-2" href="{{ route('item.list') }}">Items List</a>
    </div>

    <div class="card-body">
        <form action="{{ route('item.store') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="itemId" class="font-weight-bold">Item Name :</label>
                <input type="text" name="name" class="form-control" placeholder="Enter item Name" value="{{ old('name') }}" id="itemId">
            </div>
            <div class="mb-3">
                <label for="" class="font-weight-bold">Category :</label>
                    <select name="category_id" class="form-control" id="">
                        <option value="">Select Category</option>
                        @forelse ($categories as $category)
                            <option value="{{ $category->id }}">{{$category->name }}</option>
                            @empty
                            <option class="bg-danger text-center"> -- Not Found -- </option>
                        @endforelse
                    </select>
            </div>
            

            <div class="mb-3">
                <label for="image" class="font-weight-bold">Choose Image :</label>
                <input type="file" name="image" class="form-control" value="{{ old('image') }}" id="image">
            </div>

            <div class="mb-3">
                <label for="des" class="font-weight-bold">item Descriptons :</label>
                <textarea name="description" class="form-control" id="des" cols="30" rows="5">
                   
                </textarea>
            </div>
            
            <button type="submit" class="btn btn-outline-primary">Submit</button>

        </form>
        
    </div>
</div>
@endsection