@extends('layouts.admin.app')

@section('internal_css')
  <style type="text/css">
  .bg{
    background-color: #ebeef1;
  }  
  .btn1{
    margin-top: 32px;
  }
  body {
  /* Set "my-sec-counter" to 0 */
  counter-reset: my-sec-counter;
}

h6::before {
  /* Increment "my-sec-counter" by 1 */
  counter-increment: my-sec-counter;
  content:counter(my-sec-counter);
}
  </style>
@endsection
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>UnPaid Invoices</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">UnPaid Invoices</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
           <div class="card">
              <div class="card-header">
                <h3 class="card-title">UnPaid Invoices</h3>
              <div>
                
                 </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">

                  <thead>

                      <tr>
                     <th>#</th>
                    <th>Number</th>
                    <th>Item(s)</th>
                    <th>Memmber</th>
                    <th>Total</th>
                    <th>Paid</th>
                    <th>Invoice Date</th>
                    <th>Due Date</th>
                    <th>Created By</th>
                    <th>Status</th>
                    
                  </tr>
                  </thead>
                  
                  <tbody>
                  @foreach($result as $key=>$value)   
                <tr>
                  <td><h6></h6>
                  </td>
                  <td>{{ '#'.$value->number }}</td>
                  <td>{{ item($value->orgUserPlan_id) }}</td>
                  <td>{{ member($value->orgUser_id) }}</td>
                  <td>{{ $value->total }}</td>
                  <td>{{ $value->totalPaid }}</td>
                  <td>{{ dateformate($value->invoiced_at) }}</td>
                  <td>{{ dateformate($value->due_at)}}</td>
                  <td>{{ create_by($value->created_by)}}</td>
                  
                  <td>
                    @if($value->status== 1)
                    <button type="button" class="btn btn-block btn-outline-danger btn-xs disabled">
                   Not Paid
                  </button> 
                    
                  @else
                    <button type="button" class="btn btn-block btn-outline-success btn-xs disabled">
                    Paid
                  </button>               
                  @endif

                  </td>
                </tr>
                   @endforeach
                  

                  </tbody>
                  


                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
      </div>


    </section>
    

@endsection


@section('footer_script')
 

@endsection
