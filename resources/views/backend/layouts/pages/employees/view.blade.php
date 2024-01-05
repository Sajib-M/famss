@extends('backend.layouts.master')

@section('content')
<section class="section">
     <h3>Employees View</h3>
        <hr>
              <table class="table">
                <thead>
                  <tr>
             
                    <th>Image</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Phone</th>
                    <th>Salary</th>
                    <th>Address</th>
                    <th>Age</th>
                    <th>Join Date</th>
                    <th>Date of Birth</th>
      
                  </tr>
                </thead>
                <tbody>
                  <tr>
                  <td>
                      <img style="width:60px;
                                  height:60px;
                                  border:1px solid green;
                                  border-radius: 50%;
                                  padding:7px;" 
                        src="{{ url('/uploads/employees',$employee->image)}}" alt="image">
                      </td>
                      <td>{{ $employee->full_name }}</td>
                      <td>{{ $employee->email }}</td>
                      <td>{{ $employee->gender }}</td>
                      <td>{{ $employee->phone }}</td>
                      <td>{{ $employee->salary }}</td>
                      <td>{{ $employee->address }}</td>
                      <td>{{ $employee->age }}</td>
                      <td>{{ $employee->join_date }}</td>
                      <td>{{ $employee->date_of_birth }}</td>                
                  </tr>
                </tbody>
              </table>
              
    </section>
@endsection