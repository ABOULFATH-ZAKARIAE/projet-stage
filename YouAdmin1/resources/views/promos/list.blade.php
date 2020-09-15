@extends('layouts.admin')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Promotions</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">ACCUEIL</a></li>
              <li class="breadcrumb-item active">PROMOTIONS</li>
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
                <h3 class="card-title">Tableau des promotions </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Promotions</th>
                    <th>Lieu</th>
                    <th>Commencer à</th>
                    <th>Date d'expiration</th>
                    <th>Organisé par</th>
                    <th width=80>action </th>
                  </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Trident</td>
                      <td>Internet
                        Explorer 4.0
                      </td>
                      <td>Win 95+</td>
                      <td> 4</td>
                      <td> 4</td>
                      <td>
                        <a href="modifier-promo" class="col-6 text-success"><i class="fas fa-edit"></i></a>
                        <a href="#"  class="col-6 text-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td>Trident</td>
                      <td>Internet
                        Explorer 4.0
                      </td>
                      <td>Win 95+</td>
                      <td> 4</td>
                      <td> 4</td>
                      <td>
                        <a href="#" class="col-6 text-success"><i class="fas fa-edit"></i></a>
                        <a href="#"  class="col-6 text-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td>Trident</td>
                      <td>Internet
                        Explorer 4.0
                      </td>
                      <td>Win 95+</td>
                      <td> 4</td>
                      <td> 4</td>
                      <td>
                        <a href="#" class="col-6 text-success"><i class="fas fa-edit"></i></a>
                        <a href="#"  class="col-6 text-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td>Trident</td>
                      <td>Internet
                        Explorer 4.0
                      </td>
                      <td>Win 95+</td>
                      <td> 4</td>
                      <td> 4</td>
                      <td>
                        <a href="#" class="col-6 text-success"><i class="fas fa-edit"></i></a>
                        <a href="#"  class="col-6 text-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                      </td>
                    </tr>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Promotions</th>
                    <th>Lieu</th>
                    <th>Commencer à</th>
                    <th>Date d'expiration</th>
                    <th>Organisé par</th>
                    <th width=80>action </th>
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

