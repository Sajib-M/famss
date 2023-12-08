@extends('backend.layouts.master')

@section('content')
<section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
            <div class="card-header py-3 d-flex justify-content-between">
                <h3 class="m-0 font-weight-bold text-primary">Categories List</h3>
                <a class="btn btn-primary py-2" href="{{ route('category.create') }}">+Add New</a>
            </div>
              <!-- Table with stripped rows -->
              <table class="table datatable">
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
                    <td>{{ $category->status }}</td>
                    <td class="">
                      <a class="btn btn-info text-white"  href="{{ route('category.view',$category->id) }}">View</a>
                      <a class="btn btn-warning text-white"  href="{{ route('category.edit',$category->id) }}">Edit</a>
                      <form action="{{ route('category.delete',$category->id) }}" method="post">
                        @method("delete")
                        @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                      </form>
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