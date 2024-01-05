@extends('backend.layouts.master')

@section('content')
<section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
            <div class="card-header py-3 d-flex justify-content-between">
                <h3 class="m-0 font-weight-bold text-primary">Distributes List</h3>
                <a class="btn btn-primary py-2" href="{{ route('distribute.create') }}">+Add New</a>
            </div>
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>SL</th>
                    <th>Employee Name</th>
                    <th>Asset </th>
                    <th>Status</th>
                    <th>Quantity Distribution</th>
                    <th>Distribution Date</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($distributes as $id=> $distribute)
                  <tr>
                    <td>{{ ++$id }}</td>
                    <td>{{ $distribute->employee->full_name ?? 'N/A'}}</td>
                    <td>{{ $distribute->stock->item->name ?? 'N/A'}}</td>
                    <td>{{ $distribute->status ==1 ? "Active" : "Inactive" }}</td>
                    <td>{{ $distribute->quantity_distributed }}</td>
                    <td>{{ $distribute->date_distributed }}</td>
      
                    <td>
                      <a class="btn btn-info" href="{{ route('distribute.view',$distribute->id)}}">View</a>
                      <a class="btn btn-warning" href="{{ route('distribute.edit',$distribute->id)}}">Edit</a>
                      <a class="btn btn-danger" href="{{ route('distribute.delete',$distribute->id)}}">Delete</a>
                    </td>
                    
                  </tr>

                  @endforeach
                  
                </tbody>
              </table>
         

            </div>
          </div>

        </div>
      </div>
    </section>

@endsection