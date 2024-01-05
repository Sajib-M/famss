@extends('backend.layouts.master')

@section('content')
<section class="section">
     <h3>Stocks View</h3>
        <hr>
              <table class="table">
                <thead>
                <tr>
      
                    <th>Name</th>
                    <th>Category</th>
                    <th>Vendor</th>
                    <th>Status</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Warannty</th>
                    <th>Service </th>
        
                  </tr>
                </thead>
                <tbody> 
                  <tr>
                      <td>{{ $purchase->item->name }}</td>
                      <td>{{ $purchase->category->name }}</td>
                      <td>{{ $purchase->vendor->full_name }}</td>
                      <td>{{ $purchase->status }}</td>
                      <td>{{ $purchase->quantity }}</td>
                      <td>{{ $purchase->price }}.00 TK.</td>
                      <td>{{ $purchase->warranty }}</td>
                      <td>{{ $purchase->service_date }}</td>
                </tbody>
              </table>
              
    </section>
@endsection