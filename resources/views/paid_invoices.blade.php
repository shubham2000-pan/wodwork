@extends('layouts.admin.app')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Paid Invoices</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Paid Invoices</li>
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
                <h3 class="card-title">Paid Invoices</h3>
              <div>
                
                 </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="eventtable" class="table table-bordered table-striped">

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
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                   
                  

                    </td>
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
    <!-- /.content -->
  </div>

@endsection


@section('footer_script')
 

@endsection
