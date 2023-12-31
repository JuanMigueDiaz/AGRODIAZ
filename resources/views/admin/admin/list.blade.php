@extends('admin.layouts.app')
@section('style')
@endsection
@section('content')
<div class="content-wrapper">
  

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Admin List</h1>
          </div>
          <div class="col-sm-6" style="text-align: right;">
            <a hreft="{{ url('admin/admin/add')}}" class="btn btn-primary">Add new Admin</a>
          </div>
        </div>
      </div>
    </section>

  
    <section class="content">
      <div class="container-fluid">
        <div class="row">

   
          <div class="col-md-12">
    
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Admin List</h3>
              </div>
       
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>Update software</td>
                      <td>Update software</td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr> 
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

</div>

@endsection


@section('script')
@endsection

