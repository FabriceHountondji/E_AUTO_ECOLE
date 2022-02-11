@extends(layaouts/master)

@section('content')
    <div class="row clearfix">
        <div class="col-lg-8 col-md-12">
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane" id="usersettings" aria-expanded="false">
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
                </div>
            </div>
        </div>
    </div>
@endsection
