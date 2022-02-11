@extends('layouts/master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <!-- Widget: user widget style 1 -->
            <div class="card card-widget widget-user">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-info">
                <h3 class="widget-user-username">{{ $user->name }}</h3>
                <h5 class="widget-user-desc">{{ $user->role->role }}</h5>
              </div>
              <div class="widget-user-image">
                <img class="img-circle elevation-2" src="{{ asset($user->avatar) }}" alt="User Avatar">
              </div>
              <div class="card-footer">
                <div class="row">
                  <div class="col-sm-3 border-right">
                    <div class="description-block">
                      <h5 class="description-header">ADRESSE</h5>
                      <span class="description-text">{{ $user->address }}</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <div class="col-sm-3 border-right">
                    <div class="description-block">
                      <h5 class="description-header">PHONE</h5>
                      <span class="description-text">+229 {{ $user->phone }}</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-3 border-right">
                    <div class="description-block">
                      <h5 class="description-header">E-MAIL</h5>
                      <span class="description-text">{{ $user->email }}</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-3">
                    <div class="description-block">
                      <h5 class="description-header">BIRTHDAY</h5>
                      <span class="description-text">{{ $user->birthday }}</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
            </div>
            <!-- /.widget-user -->
        </div>
        <!-- /.col -->

    </div>

    <!-- /.card-header -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="body">
                    <form action="{{ route('candidats.update', $user) }}" method="POST">
                        @csrf
                        @method('put')

                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Modifications de {{ $user->name }}</h3>

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
                                        <input type="text" class="form-control" placeholder="Nom & Prénom(s)" name="name" value="{{ old('name') ? old('name') : $user->name }}">
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="exampleInputEmail1">Téléphone</label>
                                        <input type="text" class="form-control" placeholder="Numéro de Téléphone" name="phone" value="{{ old('phone') ? old('phone') : $user->phone }}">
                                        @error('phone')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input type="email" class="form-control" placeholder="Email du monoteur" name="email" value="{{ old('email') ? old('email') : $user->email }}">
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="exampleInputEmail1">Adresse</label>
                                        <input type="text" class="form-control" placeholder="Adresse du moniteur" name="address" value="{{ old('address') ? old('address') : $user->address  }}">
                                        @error('address')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Date Naissance</label>
                                        <input type="date" class="form-control" placeholder="Date de Naissance du moniteur" name="birthday" value="{{ old('birthday') ? old('birthday') : $user->birthday }}">
                                        @error('birthday')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label>Sexe</label>
                                        <select class="form-control select2" name="sex">
                                            <option value="Masculin" {{ $user->sex == 'Masculin' ? 'selected' : '' }}>Masculin</option>
                                            <option value="Féminin" {{ $user->sex == 'Féminin' ? 'selected' : '' }}>Féminin</option>
                                        </select>
                                        @error('address')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    @if(Auth::id() == $user->id)

                                        <div class="form-group col-sm-6">
                                            <label>Mot de passe actuel</label>
                                            <input type="password" class="form-control" placeholder="Ancien mot de passe" name="oldPassword" value="{{ old('oldPassword') ? old('oldPassword') : $user->password  }}" disabled>
                                            @error('oldPassword')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label>Nouveau mot de passe</label>
                                            <input type="password" class="form-control" placeholder="Nouveau mot de passe" name="password" value="{{ old('password') }}" required>
                                            @error('password')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    @endif

                                </div>


                                <div class="">
                                    <button class="btn bg-gradient-green float-right m-2" >Enregistrer</button>
                                    <!-- <div class="card-header">
                                        <div class="row ">
                                            <div class="btn-group ">
                                                <a href="{{ route('candidats.index') }}" id="addRow" class="btn btn-warning">
                                                <i class="fas fa-undo-alt"></i>

                                                    Retour à la liste

                                                </a>
                                            </div>
                                        </div>
                                    </div> -->
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







<!-- <div role="tabpanel" class="tab-pane" id="usersettings" aria-expanded="false">
    @if(Auth::id() == $user->id)
        <div class="card">
            <div class="header">
                <h2>
                    <strong>Sécurité</strong></h2>
            </div>
            <div class="body">
                <form action="{{ route('users.update', $user) }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <input type="password" name="oldPassword" class="form-control" placeholder="Mot de passe actuel">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Nouveau Mot de passe">
                    </div>
                    <div class="form-group">
                        <input type="password" name="passwor_confirmation" class="form-control" placeholder="Retaper Nouveau Mot de passe">
                    </div>
                    <button class="btn btn-info btn-round float-right">Modifier</button>
                </form>
            </div>
        </div>
    @endif
    <div class="card">
        <div class="header">
            <h2>
                <strong>Compte Utilisateur</strong></h2>
        </div>
        <div class="body">
            <form action="{{ route('users.update', $user) }}" method="POST">
                @csrf
                @method('put')
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Nom Complet" value="{{ old('name') ? old('name') : $user->name }}">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="form-group">
                            <input type="text" name="phone" class="form-control" placeholder="Téléphone" value="{{ old('phone') ? old('phone') : $user->phone }}">
                            @error('phone')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="form-group">
                            <input type="text" name="email" class="form-control" placeholder="E-mail" value="{{ old('email') ? old('email') : $user->email }}">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="form-group">
                            <input type="text" name="birthday" class="form-control" placeholder="Date de Naissance" value="{{ old('birthday') ? old('birthday') : $user->birthday }}">
                        @error('birthday')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12">
                        <div class="form-group">
                            <select name="sex" id="sex" class="form-control">
                                <option value="Masculin" {{ $user->sex == 'Masculin' ? 'selected' : '' }}>Masculin</option>
                                <option value="Féminin" {{ $user->sex == 'Féminin' ? 'selected' : '' }}>Féminin</option>
                            </select>
                            @error('sex')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <textarea rows="3" class="form-control no-resize"
                                placeholder="Infos Adresse" name="address">
                                {{ old('address') ? old('address') : $user->address }}
                            </textarea>
                            @error('address')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button class="btn btn-primary btn-round">Sauvegarder</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div> -->
