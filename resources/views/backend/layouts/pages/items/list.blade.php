@extends('backend.layouts.master')

@section('content')
<section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
            <div class="card-header py-3 d-flex justify-content-between">
                <h3 class="m-0 font-weight-bold text-primary">Assets List</h3>
                <a class="btn btn-primary py-2" href="{{ route('item.create') }}">+Add New</a>
            </div>
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>SL</th>
                    <th>Image</th>
                    <th>Category</th>
                    <th>Name</th>
                    <th>Status</th>
                    <th>Descriptions</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
             @foreach ($items as $itemId => $item)
                    
                  <tr>
                    <td>{{ ++$itemId }}</td>
                    <td>
                      <img style="width:60px;
                                  height:60px;
                                  border:1px solid green;
                                  border-radius: 10px 40px 40px 10px;
                                  padding:7px;" 
                        src="{{ url('/uploads/items',$item->image)}}" alt="image">
                    </td>
                    <td>{{ $item->category->name}}</td>
                    <td>{{ $item->name }}</td>
                    <td class="text-success">{{ $item->status }}</td>
                    <td>{{ $item->description }}</td>
            
                    <td class="">
                      <a class="btn btn-info text-white"  href="{{ route('item.view',$item->id) }}">View</a>
                      <a class="btn btn-warning text-white"  href="{{ route('item.edit',$item->id) }}">Edit</a>
                      <a class="btn btn-danger text-white "  href="{{ route('item.delete',$item->id) }}">Delete</a>
                    
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

    {{ $items->links() }}
@endsection