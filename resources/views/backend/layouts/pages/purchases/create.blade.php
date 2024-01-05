@extends('backend.layouts.master')

@section('content')
<div class="card shadow mb-4">

    <div class="card-header py-3 d-flex justify-content-between">
        <h3 class="m-0 font-weight-bold text-primary">Add New purchase</h3>
        <a class="btn btn-primary py-2" href="{{ route('purchase.list') }}">Purchases List</a>
    </div>

    <div class="card-body">
        <form action="{{ route('purchase.store') }}" method="post">
            @csrf
            
            <div class="mb-3">
                <label for="" class="font-weight-bold">Category :</label>
                    <select name="category_id" class="form-control" id="">
                        <option>Select Category</option>
                        @forelse ($categories as $category)
                            <option value="{{ $category->id }}">{{$category->name }}</option>
                            @empty
                            <option class="bg-danger text-center"> -- Not Found -- </option>
                        @endforelse
                    </select>
            </div>

            <div class="mb-3">
                <label for="" class="font-weight-bold">Asset :</label>
                    <select name="item_id" class="form-control" id="">
                        <option>Select Asset</option>
                        @forelse ($items as $item)
                            <option value="{{ $item->id }}">{{$item->name }}</option>
                            @empty
                            <option class="bg-danger text-center"> -- Not Found -- </option>
                        @endforelse
                    </select>
            </div>

            
            <div class="mb-3">
                <label for="" class="font-weight-bold">Vendor :</label>
                    <select name="vendor_id" class="form-control" id="">
                        <option>Select Vendor</option>
                        @forelse ($vendors as $vendor)
                            <option value="{{ $vendor->id }}">{{$vendor->full_name }}</option>
                            @empty
                            <option class="bg-danger text-center"> -- Not Found -- </option>
                        @endforelse
                    </select>
            </div>

            <div class="mb-3">
                <label for="" class="font-weight-bold">Quantity :</label>
                <input type="number" name="quantity" class="form-control"  placeholder="Enter Quantity">
            </div>

            <div class="mb-3">
                <label for="" class="font-weight-bold">Price :</label>
                <input type="number" name="price" class="form-control"  placeholder="Enter number">
            </div>

            <div class="mb-3">
                <label for="" class="font-weight-bold">Warannty Date :</label>
                <input type="date" name="warannty" class="form-control">
            </div>

            <div class="mb-3">
                <label for="" class="font-weight-bold">Service Date :</label>
                <input type="date" name="service" class="form-control">
            </div>
            
            <button type="submit" class="btn btn-outline-primary">Submit</button>

        </form>
        
    </div>
</div>
@endsection