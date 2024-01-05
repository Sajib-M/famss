@extends('backend.layouts.master')

@section('content')
<section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
            <div class="card-header py-3 d-flex justify-content-between">
                <h3 class="m-0 font-weight-bold text-primary">Stocks List</h3>
                <a class="btn btn-primary py-2" href="{{ route('stock.create') }}">+Add New</a>
            </div>
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>SL</th>
                    <th>Image</th>
                    <th>Asset</th>
                    <th>Status</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Total Price</th>
                    <th>Warannty</th>
                    <th>Service </th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($stocks  as $id=>$stock)
                    <tr>

                      <td>{{ ++$id }}</td>
                      <td>
                      <img style="width:60px;
                                  height:60px;
                                  border:1px solid green;
                                  border-radius: 10px 40px 40px 10px;
                                  padding:7px;" 
                        src="{{ url('/uploads/items',$stock->item->image)}}" alt="image">
                      </td>
                      <td>{{ $stock->item->name }}</td>
                      <td>{{ $stock->status }}</td>
                      <td>{{ $stock->quantity }}</td>
                      <td>{{ $stock->price }}.00 TK.</td>
                      <td>{{ $stock->sub_total }}.00 TK.</td>
                      <td>{{ $stock->warranty }}</td>
                      <td>{{ $stock->service_date }}</td>
                      <td>
                          <a class="btn btn-info"  href="{{ route('stock.view',$stock->id) }}">View</a>
                          <a class="btn btn-warning" href="{{ route('stock.edit',$stock->id) }}">Edit</a>
                          <!-- <a class="btn btn-danger" href="{{ route('stock.delete',$stock->id) }}">Delete</a> -->
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

{{ $stocks->links() }}
@endsection