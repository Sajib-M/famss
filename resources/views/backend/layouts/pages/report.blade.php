@extends('backend.layouts.master')

@section('content')

<div class="row">
  <div class="col-md-10 offset-md-1">
    <div class="card m-3 p-3">
      <div class="card-body">
        <h2 class="text-center"><strong>Create Stock Report</strong></h2>
        <hr class="mb-3">

          <form action="{{route('report.search')}}" method="get">
              @csrf

            <div class="row">
                <div class="col-md-4">
                  <label><strong>From Date</strong></label>
                    <input type="date" name="form_date" class="form-control" value="{{request()->form_date}}">
                </div>
                <div class="col-md-4">
                    <label><strong>To Date</strong></label>
                    <input type="date" name="to_date" class="form-control" value="{{request()->to_date}}">
                </div>
            
                <div class="col-md-4">
                    <button type="submit" class="btn btn-success mt-4">Search</button>
                </div>
              </div>
          </form>
  <div id="stockReport">
    <h2 class="mt-4"><strong>Report of - {{request()->form_date}} to {{request()->to_date}}</strong></h2>
    <hr>

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
                   
                  </tr>
                </thead>
                <tbody>
                @if (isset($stockReport))
                    @foreach ($stockReport  as $id=>$stock)
                    <tr>
                        <td>{{++$id}}</td>
                      
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
                     
                    </tr>
                    @endforeach

                    @endif
                </tbody>
              </table>
    
</div>
<div class="d-grid gap-2">
    <button onclick="printDiv('stockReport')" class="btn btn-outline-info">Print</button>

    <script>
    function printDiv(divId) {
        var printContents = document.getElementById(divId).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
    </script>
</div>
</div>
 </div>
 </div>
@endsection
