@extends('layout')

@section('title', '| Modifier Parametre')

@section('content')

    <div class="content-wrapper">

        <div class="container">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-info">GESTION DES PARAMETRES</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}" role="button" class="btn btn-success">ACCUEIL</a></li>
                        <li class="breadcrumb-item active"><a href="{{ route('parametre.index') }}" role="button" class="btn btn-success">RETOUR</a></li>

                        </ol>
                    </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>

        {!! Form::model($parametre, ['method'=>'PATCH','route'=>['parametre.update', $parametre->id]]) !!}
            @csrf
             <div class="card border-danger border-0">
                        <div class="card-header bg-success text-center">FORMULAIRE DE MODIFICATION D'UN PARAMETRE</div>
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
                                        <label>Nom PARAMETRE</label>
                                        <input type="text" name="nomp"  value="{{ $parametre->nomp }}" class="form-control"  required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Unité</label>
                                        <input type="text" name="unite"  value="{{ $parametre->unite }}" class="form-control"  required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <label>Sous Groupe</label>
                                    <select class="form-control  js-example-basic-single"  name="sous_groupe_id" required="">
                                        @foreach ($sousGroupes as $sousGroupe)
                                        <option value="{{$sousGroupe->id}}" {{ $parametre->sous_groupe_id == $sousGroupe->id ? 'selected' : ''}}>{{$sousGroupe->nom}}</option>
                                            @endforeach

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
