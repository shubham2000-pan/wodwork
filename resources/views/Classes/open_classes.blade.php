@extends('layouts.admin.app')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Open Class</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Open Class</li>
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
                <h3 class="card-title">Open Class</h3>
              <div>
                
                 </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="eventtable" class="table table-bordered table-striped">

                  <thead>

                      <tr>
                     <th>#</th>
                    <th>Class</th>
                    <th>Program</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Room</th>
                    <th>Capacity</th>
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
