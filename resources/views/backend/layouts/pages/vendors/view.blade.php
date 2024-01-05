@extends('backend.layouts.master')

@section('content')
<section class="section">
     <h3>vendors View</h3>
        <hr>
              <table class="table">
                <thead>
                  <tr>
             
                  
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Phone</th>
                    <th>Address</th>
      
                  </tr>
                </thead>
                <tbody>
                  <tr>
                  
                      <td>{{ $vendor->full_name }}</td>
                      <td>{{ $vendor->email }}</td>
                      <td>{{ $vendor->gender }}</td>
                      <td>{{ $vendor->phone }}</td>
                      <td>{{ $vendor->address }}</td>
                         
                  </tr>
                </tbody>
              </table>
              
    </section>
@endsection