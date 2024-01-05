@extends('backend.layouts.master')

@section('content')
<section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card shadow p-4">
            <div class="card-body">
            <div class="card-header py-3 d-flex justify-content-between">
                <h3 class="m-0 font-weight-bold text-primary">Categories List</h3>
                <a class="btn btn-primary py-2" href="{{ route('category.create') }}">+Add New</a>
            </div>
              <!-- Table with stripped rows -->
              <table class="table datatable table-bordered">
                <thead>
                  <tr>
                    <th>SL</th>
                    <th>Name</th>
                    <th>Descriptions</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($categories as $categoroyId => $category)
                    
                  <tr>
                    <td>{{ ++$categoroyId }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->description }}</td>
                    <td>{{ $category->status == 'active' ? "Active" :"Inactive"}}</td>
                    <td class="">
                      <a class="btn btn-info text-white "  href="{{ route('category.view',$category->id) }}">View</a>
                      <a class="btn btn-warning text-white "  href="{{ route('category.edit',$category->id) }}">Edit</a>
                      <a class="btn btn-danger text-white "  href="{{ route('category.delete',$category->id) }}">Delete</a>
                   
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

{{ $categories->links() }}

@endsection