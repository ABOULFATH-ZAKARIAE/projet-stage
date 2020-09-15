@extends('layouts.admin')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Ajouter nouveau apprenant</h1>
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
    <section>
      <!-- form start -->
      <form class="form-horizontal">
        <div class="card-body">
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Nom complet</label>
            <div class="col-sm-10">
              <div class="row">
                <div class="form-group col-sm-6">
                  <input type="firstname" class="form-control" id="inputEmail3" placeholder="Nom">
                </div>
                <div class="form-group col-sm-6">
                  <input type="lastname" class="form-control" id="inputEmail3" placeholder="Prenom">
                </div>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">sexe & date naissance </label>
            <div class="col-sm-10">
              <div class="row">
                <div class="form-group col-sm-6">
                  <!-- radio -->
                  <div class="clearfix">
                    <div class="icheck-primary d-inline mr-2">
                      <input type="radio" id="radioPrimary1" name="r1" checked>
                      <label for="radioPrimary1">
                        Femme
                      </label>
                    </div>
                    <div class="icheck-primary d-inline">
                      <input type="radio" id="radioPrimary2" name="r1">
                      <label for="radioPrimary2">
                        Homme
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group col-sm-6">
                  <input type="date" class="form-control" id="inputEmail3" placeholder="date naissance">
                </div>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="exampleInputFile" class="col-sm-2 col-form-label">Image</label>
            <div class="input-group col-sm-10">
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="exampleInputFile">
                <label class="custom-file-label" for="exampleInputFile">Selectionez une image</label>
              </div>
              <div class="input-group-append">
                <span class="input-group-text" id="">Upload</span>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="exampleInputFile" class="col-sm-2 col-form-label">Curriculum vitae</label>
            <div class="input-group col-sm-10">
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="exampleInputFile">
                <label class="custom-file-label" for="exampleInputFile">Selectionez file</label>
              </div>
              <div class="input-group-append">
                <span class="input-group-text" id="">Upload</span>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Adresse origin</label>
            <div class="col-sm-10">
              <div class="row">
                <div class="form-group col-sm-4">
                  <input type="firstname" class="form-control" id="inputEmail3" placeholder="Pays">
                </div>
                <div class="form-group col-sm-4">
                  <input type="lastname" class="form-control" id="inputEmail3" placeholder="Ville">
                </div>
                <div class="form-group col-sm-4">
                  <input type="lastname" class="form-control" id="inputEmail3" placeholder="Zip code">
                </div>
              </div>
              <div class="row">
                <div class="form-group col">
                  <textarea type="text" class="form-control" id="inputEmail3" placeholder="Adresse"></textarea>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Adresse Actuel</label>
            <div class="col-sm-10">
              <div class="row">
                <div class="form-group col-sm-4">
                  <input type="text" class="form-control" id="inputEmail3" placeholder="Pays">
                </div>
                <div class="form-group col-sm-4">
                  <input type="city" class="form-control" id="inputEmail3" placeholder="Ville">
                </div>
                <div class="form-group col-sm-4">
                  <input type="zip" class="form-control" id="inputEmail3" placeholder="Zip code">
                </div>
              </div>
              <div class="row">
                <div class="form-group col">
                  <textarea type="text" class="form-control" id="inputEmail3" placeholder="Adresse"></textarea>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Téléphone & Email</label>
            <div class="col-sm-10">
              <div class="row">
                <div class="form-group col-sm-6">
                  <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                </div>
                <div class="form-group col-sm-6">
                  <input type="phone" class="form-control" id="inputEmail3" placeholder="Mobile">
                </div>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Problémes du santé</label>
            <div class="offset-sm-2 col-sm-10">
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck2">
                <label class="form-check-label" for="exampleCheck2">Remember me</label>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-2">
              <input type="button" class="form-control btn btn-primary" id="inputPassword3" value="add_trainee">
            </div>
          </div>
        </div>
        <!-- /.card-footer -->
      </form>
    <!-- /.card -->
  </section>
@endsection

