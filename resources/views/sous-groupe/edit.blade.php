{{-- \resources\views\permissions\create.blade.php --}}
@extends('layout')

@section('title', '| Modifier SOUS GROUPE')

@section('content')

    <div class="content-wrapper">

        <div class="container">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-info">GESTION DES SOUS GROUPES</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}" role="button" class="btn btn-success">ACCUEIL</a></li>
                        <li class="breadcrumb-item active"><a href="{{ route('sous-groupe.index') }}" role="button" class="btn btn-success">RETOUR</a></li>

                        </ol>
                    </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>

        {!! Form::model($sousGroupe, ['method'=>'PATCH','route'=>['sous-groupe.update', $sousGroupe->id]]) !!}
            @csrf
             <div class="card border-danger border-0">
                        <div class="card-header bg-success text-center">FORMULAIRE DE MODIFICATION D'UN SOUS GROUPE</div>
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
                                        <label>Nom d'un sous groupe</label>
                                    <input type="text" name="nom" class="form-control" value="{{$sousGroupe->nom}}"   required>
                                    </div>
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

