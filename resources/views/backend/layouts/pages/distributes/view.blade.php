@extends('backend.layouts.master')

@section('content')
<section class="section">
     <h3>Distribute View</h3>
        <hr>
              <table class="table">
                <thead>
                <tr>
                    <th>Employee Name</th>
                    <th>Asset</th>
                    <th>Status</th>
                    <th>Quantity Distributed</th>
                    <th>date Distributed</th>
                    <th>Damage</th>
                    <th>Note</th>
        
                  </tr>
                </thead>
                <tbody> 
                  <tr>
                      
                   <td>{{ $distribute->employee->full_name ?? "N/A"}}</td>
                    <td>{{ $distribute->stock->item->name ?? "N/A"}}</td>
                    <td>{{ $distribute->status ==1 ? "Active": "Inactive" }}</td>
                    <td>{{ $distribute->quantity_distributed }}</td>
                    <td>{{ $distribute->date_distributed }}</td>
                    <td>{{ $distribute->damage }}</td>
                    <td>{{ $distribute->note }}</td>
                    
                </tbody>
              </table>
              
    </section>
@endsection