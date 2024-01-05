@extends('backend.layouts.master')

@section('content')
<section class="section">
     <h3>Asset View</h3>
        <hr>
              <table class="table">
                <thead>
                <tr>
      
                    <th>Image</th>
                    <th>Category</th>
                    <th>Name</th>
                    <th>Status</th>
                    <th>Descriptions</th>
        
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
                          src="{{ url('/uploads/items',$item->image)}}" alt="image">
                      </td>
                      <td>{{ $item->category->name ?? "N/A"}}</td>
                      <td>{{ $item->name }}</td>
                      <td class="text-success">{{ $item->status }}</td>
                      <td>{{ $item->description }}</td>
                </tbody>
              </table>
              
    </section>
@endsection