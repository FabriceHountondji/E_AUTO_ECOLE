@extends('layouts/master')

@section('content')
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="body">
                <form action="{{ route('candidats.store', Route::currentRouteName()) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row clearfix">
                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="Nom & Prénom(s)" name="name" value="{{ old('name') }}" required>
                                </div>
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="Numéro de Téléphone" name="phone" value="{{ old('phone') }}" required>
                                </div>
                                @error('phone')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required>
                                </div>
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="Adresse" name="address" value="{{ old('address') }}" required>
                                </div>
                                @error('address')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="date" class="form-control" placeholder="Date de Naissance" name="birthday" value="{{ old('birthday') }}" required>
                                </div>
                                @error('birthday')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <select class="browser-default" name="sex">
                                <option value="Masculin">Masculin</option>
                                <option value="Féminin">Féminin</option>
                            </select>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-md-6 col-lg-6">
                            @foreach ($roles as $role)
                            <div class="form-check form-check-radio " @if(Auth::user()->role->name == 'instructor') @if($role->name == 'instructor' || $role->name == 'superAdmin'){{ 'hidden' }} @endif @endif>

                                    <label>
                                        <input value="{{ $role->id }}" name="role" type="radio" @if($role->name == 'instructor'){{ 'checked' }} @endif>
                                        <span>{{ $role->role }}</span>
                                    </label>

                            </div>
                            @endforeach
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="file-field input-fild">
                                <div class="btn">
                                    <span>File</span>
                                    <input type="file" name="photo" required placeholder="Télécharger une photo de profile">
                                </div>
                                @error('photo')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-12">
                            <a href="{{ route('users.index') }}" class="btn-hover color-3 m-2">Retour Liste</a>
                            <div class="button-demo">

                                <button type="submit" class="btn-hover color-1 float-right">Ajouter</button>
                                <button type="reset" class="btn-hover color-2 float-right">Annuler</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
