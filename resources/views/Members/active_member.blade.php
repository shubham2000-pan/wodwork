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
            <h1>Active Members</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Active Members</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
   <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
           
    <div class="card card-danger">
      <div class="Even">
              <div class="card-body bg">
                <div class="row">
                  <div class="col-1">
                    <label>Number</label>
                    <input type="text" class="form-control">
                  </div>
                  <div class="col-2">
                    <label>Name</label>
                    <input type="text" class="form-control">
                  </div>
                  <div class="col-2">
                    <label>Phone</label>
                    <input type="text" class="form-control">
                  </div>
                  <div class="col-2">
                    <label>Email</label>
                    <input type="text" class="form-control">
                  </div>
                  <div class="col-2 btn1">
                    <button class="btn btn-primary">Search</button>
                    <button class="btn btn-default">Reset</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </section>

<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
           <div class="card">
              <div class="card-header">
                <h3 class="card-title">Active Members</h3>
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
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>DOB</th>
                    <th>Last Plan</th>
                    <th>Signup date</th>
                    
                    
                  </tr>
                  </thead>
                  
                  <tbody> 
                  @foreach($result as $key=>$value)  
                <tr>
                  <td><h6></h6></td>
                  <td>{{ '#'.$value->uuid }}</td>
                  <td>{{ $value->fullName }}</td>
                  <td>{{ $value->phoneNumber }}</td>
                  <td>{{ $value->email }}</td>
                  <td>{{ gender($value->gender) }}</td>
                  <td>{{ dob($value->dob) }}</td>
                  <td>{{ $value->import_plan }}</td>
                  <td>{{ dob($value->created_at) }}</td>
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
    <!-- /.content -->
  </div>

@endsection

