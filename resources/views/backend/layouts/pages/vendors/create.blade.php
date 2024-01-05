@extends('backend.layouts.master')

@section('content')
<section class="category_create">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <h2 class="card-header text-center mb-3"><strong> Create vendor </strong></h2>
                <div class="card-body">

                    <form action="{{route('vendor.store')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="">First Name:</label>
                                            <input type="text" name="first_name" class="form-control" placeholder="First Name" value="{{old('first_name')}}">

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="">Last Name:</label>
                                            <input type="text" name="last_name" class="form-control" placeholder="Last Name" value="{{old('last_name')}}"> 
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="">vendor Email:</label>
                                    <input type="email" name="email" class="form-control " placeholder="vendor email" value="{{old('email')}}">

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
                                    <input type="number" name="phone" class="form-control" placeholder="+8801xxx" value="{{old('phone')}}">
                                </div>

                                <div class="mb-3">
                                    <label for="">Address:</label>
                                    <input type="text" name="address" class="form-control" placeholder="address" value="{{old('address')}}">

                                </div>
                               
                            </div>
                        </div><!-- row -->
                        
                        

                        <button type="submit ritht-pull" class="btn btn-md btn-success">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection