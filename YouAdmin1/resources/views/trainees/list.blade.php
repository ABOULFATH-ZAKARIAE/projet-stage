@extends('layouts.admin')
@section('content')
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Apprenants</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">ACCUEIL</a></li>
              <li class="breadcrumb-item active">APPRENANTS</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Tableau des apprenants </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nom & Prenom</th>
                    <th>Tél</th>
                    <th>Email</th>
                    <th>Classe</th>
                    <th>Adresse</th>
                    <th width=80>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Trident</td>
                      <td>Win 95+</td>
                      <td> 4</td>
                      <td>C</td>
                      <td> 4</td>
                      <td>
                        <a href="#" class="col-6 text-success"><i class="fas fa-edit"></i></a>
                        <a href="#"  class="col-6 text-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                      </td>
                    </tr>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Nom & Prenom</th>
                    <th>Tél</th>
                    <th>Email</th>
                    <th>Classe</th>
                    <th>Adresse</th>
                    <th width=80>Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
@endsection

