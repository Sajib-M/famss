@extends('backend.layouts.master')

@section('content')
<section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
            <div class="card-header py-3 d-flex justify-content-between">
                <h3 class="m-0 font-weight-bold text-primary">purchases List</h3>
                <a class="btn btn-primary py-2" href="{{ route('purchase.create') }}">+Add New</a>
            </div>
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>SL</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Vendor</th>
                    <th>Status</th>
                    <th>Quantity</th>
                    <th>Price</th>
                 
                    <th>Warrenty</th>
                    <th>Service Date</th>
                   
                  </tr>
                </thead>
                <tbody>
                    @foreach ($purchases  as $id=>$purchase)
                    <tr>

                      <td>{{ ++$id }}</td>
                      <td>{{ $purchase->vendor->full_name ?? "N/A" }}</td>
                      <td>{{ $purchase->category->name ?? "N/A" }}</td>
                      <td>{{ $purchase->vendor->full_name ?? "N/A"}}</td>
                      <td>{{ $purchase->status }}</td>
                      <td>{{ $purchase->quantity }}</td>
                      <td>{{ $purchase->price }}.00 TK.</td>
                     
                      <td>{{ $purchase->warranty }}</td>
                      <td>{{ $purchase->service_date }}</td>
                    
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