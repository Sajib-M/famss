@extends('backend.layouts.master')

@section('content')
<div class="card shadow mb-4">

    <div class="card-header py-3 d-flex justify-content-between">
        <h3 class="m-0 font-weight-bold text-primary">Edit Stock</h3>
        <a class="btn btn-primary py-2" href="{{ route('stock.list') }}">Stocks List</a>
    </div>

    <div class="card-body">
        <form action="{{ route('stock.update',$stock->id) }}" method="post">
            @method("put")
            @csrf
            <div class="mb-3">
                <label for="" class="font-weight-bold">Category :</label>
                    <select name="category_id" class="form-control" id="">
                        <option value="">Select Category</option>
                        @forelse ($categories as $category)
                            <option @if ($category->id == $stock->category_id)selected
                                
                                @endif  value="{{ $category->id }}">{{$category->name }}</option>
                            @empty
                            <option class="bg-danger text-center"> -- Not Found -- </option>
                        @endforelse
                    </select>
            </div>

            <div class="mb-3">
                <label for="" class="font-weight-bold">Asset :</label>
                    <select name="item_id" class="form-control" id="">
                        <option value="">Select Asset</option>
                        @forelse ($items as $item)
                            <option @if ($item->id == $stock->item_id)selected
                                
                            @endif value="{{ $item->id }}">{{$item->name }}</option>
                            @empty
                            <option class="bg-danger text-center"> -- Not Found -- </option>
                        @endforelse
                    </select>
            </div>

            <div class="mb-3">
                <label for="" class="font-weight-bold">Quantity :</label>
                <input type="number" name="quantity" class="form-control" value="{{ $stock->quantity }}"  placeholder="Enter Quantity">
            </div>

            <div class="mb-3">
                <label for="" class="font-weight-bold">Price :</label>
                <input type="number" name="price" class="form-control"  value="{{ $stock->price }}" placeholder="Enter number">
            </div>

            <div class="mb-3">
                <label for="" class="font-weight-bold">Warannty Date :</label>
                <input type="date" name="warannty" class="form-control"  value="{{ $stock->warranty }}">
            </div>

            <div class="mb-3">
                <label for="" class="font-weight-bold">Service Date :</label>
                <input type="date" name="service" class="form-control"  value="{{ $stock->service_date }}">
            </div>
            
            <button type="submit" class="btn btn-outline-primary">Update</button>

        </form>
        
    </div>
</div>
@endsection