@extends('layouts.admin')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Ajouter des classes</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">ACCUEIL</a></li>
              <li class="breadcrumb-item active">CLASSES</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section>
      <!-- form start -->
      <form class="form-horizontal" method="POST" action="{{ route('add-class') }}">
        @csrf
        <div class="card-body">
            <div class="form-group row">
                <label for="classroom" class="col-sm-2 col-form-label">Class</label>
                <div class="col-sm-8">
                    <input type="text" name="name" class="form-control" placeholder="nom de class">
                </div>
            </div>
            <div class="form-group row">
                <label for="classroom_number" class="col-sm-2 col-form-label">Nombre des apprenants du class </label>
                <div class="col-sm-8">
                    <input type="text" name="classroom_number" class="form-control" placeholder="nombre des apprenants du class">
                </div>
            </div>
            <div class="form-group row">
                <label for="formateur" class="col-sm-2 col-form-label">Formateur de class</label>
                <div class="col-sm-8">
                    <input type="text" name="formateur" class="form-control"  placeholder="formateur">
                </div>
            </div>
                    <div class="form-group row">
                  <label>Promotion</label>
                  <select name="promo_id" class="form-control">
                    @if ($promos->count()>0)
                    @foreach ($promos as $promo)
                    <option value="{{ $promo->id}}">{{ $promo->start_date}}</option>  
                    @endforeach
                    
                    @else
                        
                    @endif
                    

                  </select>
                </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <button type="submit" name="add-class" class="btn btn-info">Enregistrer</button>
          <button type="reset" class="btn btn-default float-right">Annuler</button>
        </div>
        <!-- /.card-footer -->
      </form>
    <!-- /.card -->
    </section>

@endsection