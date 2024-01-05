@extends('backend.layouts.master')

@section('content')
<section class="category_create">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <h2 class="card-header text-center mb-3"><strong> Edit Vendor </strong></h2>
                <div class="card-body">

                    <form action="{{route('vendor.update',$vendor->id)}}" method="post">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="">First Name:</label>
                                            <input type="text" name="first_name" class="form-control" placeholder="First Name" value="{{$vendor->first_name}}">

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="">Last Name:</label>
                                            <input type="text" name="last_name" class="form-control" placeholder="Last Name" value="{{$vendor->last_name}}"> 
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="">vendor Email:</label>
                                    <input type="text" name="email" class="form-control " placeholder="vendor email" value="{{$vendor->email}}">

                                </div>
                               

                                <div class="mb-3">
                                    <label for="">Gender:</label><br>
                                    <input type="radio" name="gender"   value="male"> <span>Male</span>
                                    <input type="radio" name="gender"   value="female"> <span>Female</span>
                                    <input type="radio" name="gender"   value="oteher"> <span>Other</span>
                                </div>
                     

                            </div><!-- col-md-6 -->
                            
                               
                            <div class="col-md-6">
                                
                            <div class="mb-3">
                                    <label for="">Phone Number:</label>
                                    <input type="text" name="phone" class="form-control" placeholder="+8801xxx" value="{{$vendor->phone}}">
                                </div>

                                <div class="mb-3">
                                    <label for="">Address:</label>
                                    <input type="text" name="address" class="form-control" placeholder="address" value="{{$vendor->address}}">

                                </div>
                            </div>
                        </div><!-- row -->
                        
                        

                        <button type="submit ritht-pull" class="btn btn-md btn-success">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection