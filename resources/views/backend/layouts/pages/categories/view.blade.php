@extends('backend.layouts.master')

@section('content')
<section class="section">
     <h3>Category View</h3>
        <hr>
              <table class="table">
                <thead>
                  <tr>
             
                    <th>Name</th>
                    <th>Descriptions</th>
                    <th>Status</th>
      
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->description }}</td>
                    <td class="text-success">{{ $category->status }}</td>                 
                  </tr>
                </tbody>
              </table>
              
    </section>
@endsection