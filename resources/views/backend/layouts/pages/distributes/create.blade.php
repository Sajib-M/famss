@extends('backend.layouts.master')

@section('content')
<div class="card shadow mb-4">

    <div class="card-header py-3 d-flex justify-content-between">
        <h3 class="m-0 font-weight-bold text-primary">Add New Distribute</h3>
        <a class="btn btn-primary py-2" href="{{ route('distribute.list') }}">Distributes List</a>
    </div>

    <div class="card-body">
        <form action="{{ route('distribute.store') }}" method="post">
            @csrf
            
            <div class="mb-3">
                <label for="" class="font-weight-bold">Employee :</label>
                    <select name="employee_id" class="form-control" id="">
                        <option>Select Employee</option>
                        @forelse ($employees as $employee)
                            <option value="{{ $employee->id }}">{{$employee->full_name }}</option>
                            @empty
                            <option class="bg-danger text-center"> -- Not Found -- </option>
                        @endforelse
                    </select>
            </div>

            <div class="mb-3">
                <label for="" class="font-weight-bold">Asset :</label>
                    <select name="stock_id" class="form-control" id="">
                        <option>Select Asset</option>
                      
                        @forelse ($stocks as $item)
                            <option value="{{ $item->id }}">{{$item->item->name }}</option>
                            @empty
                            <option class="bg-danger text-center"> -- Not Found -- </option>
                        @endforelse
                    </select>
            </div>

            <div class="mb-3">
                <label for="" class="font-weight-bold">Quantity Distributed:</label>
                <input type="number" name="quantity_distributed" class="form-control"  placeholder="Number" value="{{old('quantity_distributed')}}">
            </div>

            <div class="mb-3">
                <label for="" class="font-weight-bold">Distributed Date :</label>
                <input type="date" name="date_distributed" class="form-control" value="{{old('date_distributed')}}">
            </div>

            <div class="mb-3">
                <label for="" class="font-weight-bold">Damage :</label>
                <input type="number" name="damage" class="form-control"  placeholder="Enter number">
            </div>

            <div class="mb-3">
                <label for="" class="font-weight-bold">Note :</label>
                <input type="text" name="note" class="form-control" placeholder="note">
            </div>

           
            
            <button type="submit" class="btn btn-outline-primary">Submit</button>

        </form>
        
    </div>
</div>
@endsection