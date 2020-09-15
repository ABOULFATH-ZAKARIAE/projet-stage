@extends('layouts.admin')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Ajouter des promotions</h1>
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
    <section>
      <!-- form start -->
      <form class="form-horizontal" method="POST" action="{{ route('add-promo') }}">
        @csrf
        <div class="card-body">
            <div class="form-group row">
                <label for="framework" class="col-sm-2 col-form-label">Référentiel</label>
                <div class="col-sm-8">
                    <input type="text" name="framework" class="form-control" placeholder="référentiel">
                </div>
            </div>
            <div class="form-group row">
                <label for="city" class="col-sm-2 col-form-label">Ville</label>
                <div class="col-sm-8">
                    <input type="text" name="city" class="form-control" placeholder="ville">
                </div>
            </div>
            <div class="form-group row">
                <label for="country" class="col-sm-2 col-form-label">Pays</label>
                <div class="col-sm-8">
                    <input type="text" name="country" class="form-control"  placeholder="pays">
                </div>
            </div>
            <div class="form-group row">
                <label for="school" class="col-sm-2 col-form-label">Nom de la fabrique</label>
                <div class="col-sm-8">
                    <input type="text" name="school" class="form-control" placeholder="Nom de la fabrique">
                </div>
            </div>
            <div class="form-group row">
                <label for="start_date" class="col-sm-2 col-form-label">Date de début</label>
                <div class="col-sm-8">
                    <input type="date" name="start_date" class="form-control"  placeholder="dd-mm-yy ">
                </div>
            </div>
            <div class="form-group row">
                <label for="end_date" class="col-sm-2 col-form-label">Date de fin</label>
                <div class="col-sm-8">
                    <input type="date" name="end_date" class="form-control"  placeholder="dd-mm-yy">
                </div>
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <button type="submit" class="btn btn-info">Enregistrer</button>
          <button type="reset" class="btn btn-default float-right">Annuler</button>
        </div>
        <!-- /.card-footer -->
      </form>
    <!-- /.card -->
    </section>

@endsection