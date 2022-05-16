{{-- \resources\views\permissions\create.blade.php --}}
@extends('layout')


@section('content')

    <div class="content-wrapper">

        <div class="container">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-info">GESTION DES PATIENTS</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}" role="button" class="btn btn-success">ACCUEIL</a></li>
                        <li class="breadcrumb-item active"><a href="{{ route('patient.index') }}" role="button" class="btn btn-success">LISTE D'ENREGISTREMENT DES PATIENTS</a></li>

                        </ol>
                    </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
        <form action="{{ route('patient.store') }}" method="POST">
            @csrf
             <div class="card border-danger border-0">
                        <div class="card-header bg-success text-center">FORMULAIRE D'ENREGISTREMENT D'UN PAYS</div>
                            <div class="card-body">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>PRENOM PATIENT</label>
                                        <input type="text" name="prenomp"  value="{{ old('prenomp') }}" class="form-control"  required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Nom PATIENT</label>
                                        <input type="text" name="nomp"  value="{{ old('nomp') }}" class="form-control"  required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>PROVENANCE</label>
                                        <input type="text" name="provenance"  value="{{ old('provenance') }}" class="form-control"  required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>AGE</label>
                                        <input type="number" name="age"  value="{{ old('age') }}" class="form-control"  required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <label>Sexe</label>
                                    <select class="form-control  js-example-basic-single"  name="sexe" required="">
                                        <option value="">Veuillez choisir</option>
                                        <option value="homme">Homme</option>
                                        <option value="homme">Femme</option>
                                    </select>
                                </div>
                                <div>
                                    <center>
                                        <button type="submit" class="btn btn-success btn btn-lg "> ENREGISTRER</button>
                                    </center>
                                </div>
                            </div>

                            </div>

            </form>
            </div>
        </div>



@endsection

