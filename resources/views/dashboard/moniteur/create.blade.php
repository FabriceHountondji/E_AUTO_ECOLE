@extends('layouts/master')

@section('content')
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="body">
                <form action="{{ route('candidats.store', Route::currentRouteName()) }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Nouveau Moniteur</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row col-12">
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Nom & Prénom(s)</label>
                                    <input type="text" class="form-control" placeholder="Nom & Prénom(s)" name="name" value="{{ old('name') }}" required>
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="exampleInputEmail1">Téléphone</label>
                                    <input type="text" class="form-control" placeholder="Numéro de Téléphone" name="phone" value="{{ old('phone') }}" required>
                                    @error('phone')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="email" class="form-control" placeholder="Email du monoteur" name="email" value="{{ old('email') }}" required>
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="exampleInputEmail1">Adresse</label>
                                    <input type="text" class="form-control" placeholder="Adresse du moniteur" name="address" value="{{ old('address') }}" required>
                                    @error('address')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Date Naissance</label>
                                    <input type="date" class="form-control" placeholder="Date de Naissance du moniteur" name="birthday" value="{{ old('birthday') }}" required>
                                    @error('birthday')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group col-sm-6">
                                    <label>Sexe</label>
                                    <select class="form-control select2" name="sex">
                                        <option value="Masculin">Masculin</option>
                                        <option value="Féminin">Féminin</option>
                                    </select>
                                    @error('sexe')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group col-md-6">
                                    <input value="2" name="role" type="hidden">
                                    <label for="exampleInputFile">Profil</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="photo" required placeholder="Télécharger une photo de profil" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choisir un fichier</label>
                                        </div>
                                        @error('photo')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        <div class="input-group-append">
                                            <span class="input-group-text">Charger</span>
                                        </div>
                                    </div>
                                </div>


                            </div>


                            <div class="">
                                <a href="{{ route('candidats.index') }}" class="btn-hover color-primary m-2">Retour à la liste</a>
                                <button type="reset" class="btn bg-gradient-danger float-right m-2" >Annuler</button>
                                <button type="submit" class="btn bg-gradient-green float-right m-2" >Ajouter</button>
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </form>
            </div>
        </div>
    </div>
</div>
@endsection




