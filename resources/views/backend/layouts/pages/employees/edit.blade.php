@extends('backend.layouts.master')

@section('content')
<section class="category_create">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <h2 class="card-header text-center mb-3"><strong> Employee Update </strong></h2>
                <div class="card-body">

                    <form action="{{route('employee.update',$employee->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method("put")
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="">First Name:</label>
                                            <input type="text" name="first_name" class="form-control" placeholder="First Name" value="{{$employee->first_name}}">

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="">Last Name:</label>
                                            <input type="text" name="last_name" class="form-control" placeholder="Last Name" value="{{$employee->last_name}}"> 
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="">Employee Email:</label>
                                    <input type="text" name="email" class="form-control " placeholder="employee email" value="{{$employee->email}}">

                                </div>
                                <div class="mb-3">
                                    <label for="">Date Of Birth:</label>
                                    <input type="date" name="DOB" class="form-control"  value="{{$employee->date_of_birth}}">
                                </div>

                                <div class="mb-3">
                                    <label for="">Gender:</label><br>
                                    <input type="radio" name="gender"   value="male" {{$employee->gender == 'male' ? "checked" : " "}}> <span>Male</span>
                                    <input type="radio" name="gender"   value="female" {{$employee->gender == 'female' ? "checked": " "}}> <span>Female</span>
                                    <input type="radio" name="gender"   value="other" {{$employee->gender == 'other' ? "checked": " "}}> <span>Other</span>
                                </div>
                                <div class="mb-3">
                                    <label for="">Salary:</label>
                                    <input type="number" name="salary" class="form-control" placeholder="Number" value="{{$employee->salary}}">
                                </div>

                            </div><!-- col-md-6 -->
                            
                               
                            <div class="col-md-6">
                                
                            <div class="mb-3">
                                    <label for="">Phone Number:</label>
                                    <input type="text" name="phone" class="form-control" placeholder="+8801xxx" value="{{ $employee->phone}}">
                                </div>

                                <div class="mb-3">
                                    <label for="">Address:</label>
                                    <input type="text" name="address" class="form-control" placeholder="address" value="{{$employee->address}}">

                                </div>
                                <div class="mb-3">
                                    <label for="">Join Date:</label>
                                    <input type="date" name="join_date" class="form-control" value="{{ $employee->join_date }}">
                                </div>

                                <div class="mb-3">
                                    <label for="">Age:</label>
                                    <input type="number" name="age" class="form-control" value="{{$employee->age}}">
                                </div>
                    
                                <div class="mb-3">
                                    <label for="">Image </label>
                                    <input type="file" name="image" class="form-control">
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