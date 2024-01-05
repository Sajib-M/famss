@extends('backend.layouts.master')

@section('content')
<section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
            <div class="card-header py-3 d-flex justify-content-between">
                <h3 class="m-0 font-weight-bold text-primary">Vendors List</h3>
                <a class="btn btn-primary py-2" href="{{ route('vendor.create') }}">+Add New</a>
            </div>
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>SL</th>
                 
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($vendors as $id=>$vendor)
                    <tr>
                      <td>{{ ++$id }}</td>
          
                      <td>{{ $vendor->full_name }}</td>
                      <td>{{ $vendor->email }}</td>
                      <td>{{ $vendor->gender }}</td>
                      <td>{{ $vendor->phone }}</td>
                      <td>{{ $vendor->address }}</td>
                      <td>
                        <a class="btn btn-info" href="{{ route('vendor.view',$vendor->id) }}">View</a>
                        <a class="btn btn-warning" href="{{ route('vendor.edit',$vendor->id) }}">Edit</a>
                        <a class="btn btn-danger" href="{{ route('vendor.delete',$vendor->id) }}">Delete</a>
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