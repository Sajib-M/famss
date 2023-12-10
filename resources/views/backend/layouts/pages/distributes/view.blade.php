@extends('backend.layouts.master')

@section('content')
<section class="section">
     <h3>Distribute View</h3>
        <hr>
              <table class="table">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Asset</th>
                    <th>Status</th>
                    <th>Quantity</th>
                    <th>Damage</th>
                    <th>Note</th>
        
                  </tr>
                </thead>
                <tbody> 
                  <tr>
                      
                   <td>{{ $distribute->employee->full_name }}</td>
                    <td>{{ $distribute->asset->name }}</td>
                    <td>{{ $distribute->status }}</td>
                    <td>{{ $distribute->quantity }}</td>
                    <td>{{ $distribute->damage }}</td>
                    <td>{{ $distribute->note }}</td>
                    
                </tbody>
              </table>
              
    </section>
@endsection