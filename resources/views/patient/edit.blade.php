{{-- \resources\views\permissions\create.blade.php --}}
@extends('layout')

@section('title', '| Modifier PATIENT')

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
                        <li class="breadcrumb-item active"><a href="{{ route('patient.index') }}" role="button" class="btn btn-success">RETOUR</a></li>

                        </ol>
                    </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>

        {!! Form::model($patient, ['method'=>'PATCH','route'=>['patient.update', $patient->id]]) !!}
            @csrf
             <div class="card border-danger border-0">
                        <div class="card-header bg-success text-center">FORMULAIRE DE MODIFICATION D'UN PATIENT</div>
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
                                        <input type="text" name="prenomp"  value="{{ $patient->prenomp }}" class="form-control"  required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>NOM PATIENT</label>
                                        <input type="text" name="nomp"  value="{{ $patient->nomp }}" class="form-control"  required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>PROVENANCE</label>
                                        <input type="text" name="provenance"  value="{{ $patient->provenance }}" class="form-control"  required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>AGE</label>
                                        <input type="number" name="age"  value="{{ $patient->age}}" class="form-control"  required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <label>Sexe</label>
                                    <select class="form-control  js-example-basic-single"  name="sexe" required="">
                                        <option value="">Veuillez choisir</option>
                                        <option value="homme" {{ $patient->sexe=='homme' ? 'selected' : '' }}>Homme</option>
                                        <option value="femme" {{ $patient->sexe=='femme' ? 'selected' : '' }}>Femme</option>
                                    </select>
                                </div>
                                <div>
                                    <center>
                                        <button type="submit" class="btn btn-success btn btn-lg "> MODIFIER</button>
                                    </center>
                                </div>


                            </div>
                        </div>
    {!! Form::close() !!}
                </div>
        </div>

    </div>

@endsection

