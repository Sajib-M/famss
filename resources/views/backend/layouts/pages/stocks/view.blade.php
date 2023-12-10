@extends('backend.layouts.master')

@section('content')
<section class="section">
     <h3>Stocks View</h3>
        <hr>
              <table class="table">
                <thead>
                <tr>
      
                    <th>Image</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Status</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Warranty Date</th>
                    <th>Service Date</th>
        
                  </tr>
                </thead>
                <tbody> 
                  <tr>
                      <td>
                        <img style="width:60px;
                                    height:60px;
                                    border:1px solid green;
                                    border-radius: 10px 40px 40px 10px;
                                    padding:7px;" 
                          src="{{ url('/uploads/items',$stock->item->image)}}" alt="image">
                      </td>
                      <td>{{ $stock->category->name}}</td>
                      <td>{{ $stock->category->name }}</td>
                      <td class="text-success">{{ $stock->status }}</td>
                      <td>{{ $stock->quantity }}</td>
                      <td>{{ $stock->price }}</td>
                      <td>{{ $stock->warranty }}</td>
                      <td>{{ $stock->service_date }}</td>
                </tbody>
              </table>
              
    </section>
@endsection