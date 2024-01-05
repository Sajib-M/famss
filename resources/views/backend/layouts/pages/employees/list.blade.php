@extends('backend.layouts.master')

@section('content')
<section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
            <div class="card-header py-3 d-flex justify-content-between">
                <h3 class="m-0 font-weight-bold text-primary">Employees List</h3>
                <a class="btn btn-primary py-2" href="{{ route('employee.create') }}">+Add New</a>
            </div>
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>SL</th>
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
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($employees as $id=>$employee)
                    <tr>
                      <td>{{ ++$id }}</td>
                      <td>
                      <img style="width:70px;
                                  height:70px;
                                  border:2px solid green;
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
                      <td>
                        <a class="btn btn-info" href="{{ route('employee.view',$employee->id) }}">View</a>
                        <a class="btn btn-warning" href="{{ route('employee.edit',$employee->id) }}">Edit</a>
                        <a class="btn btn-danger" href="{{ route('employee.delete',$employee->id) }}">Delete</a>
                      </td>

                    </tr>
                @endforeach
                 
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>



@endsection