@extends('layouts/master')

@section('content')

    <!-- Your content goes here  -->
    <!-- <div class="row clearfix">
        <div class="col-lg-4 col-md-12">
            <div class="card">
                <div class="m-b-20">
                    <div class="contact-grid">
                        <div class="profile-header bg-dark">
                            <div class="user-name">{{ $user->name }}</div>
                            <div class="name-center">{{ $user->role->role }}</div>
                        </div>
                        <img src="{{ asset($user->avatar) }}" class="user-img" alt="">
                        <p>
                            {{ $user->address }}
                        </p>
                        <div>
                            <span class="phone">
                                <i class="material-icons">phone</i>{{ $user->phone }}</span>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <h5>564</h5>
                                <small>Following</small>
                            </div>
                            <div class="col-4">
                                <h5>18k</h5>
                                <small>Followers</small>
                            </div>
                            <div class="col-4">
                                <h5>565</h5>
                                <small>Post</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-md-12">
            <div class="card">
                <div class="profile-tab-box">
                    <div class="p-l-20">
                        <ul class="nav ">
                            <li class="nav-item tab-all">
                                <a class="nav-link active show" href="#project" data-toggle="tab">Informations</a>
                            </li>
                            <li class="nav-item tab-all p-l-20">
                                <a class="nav-link" href="#usersettings" data-toggle="tab">Modification</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="project" aria-expanded="true">
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="card project_widget">
                                <div class="header">
                                    <h2>A Propos</h2>
                                </div>
                                <div class="body">
                                    <div class="row">
                                        <div class="col-md-3 col-6 b-r">
                                            <strong>Nom Complet</strong>
                                            <br>
                                            <p class="text-muted">{{ $user->name }}</p>
                                        </div>
                                        <div class="col-md-3 col-6 b-r">
                                            <strong>Téléphone</strong>
                                            <br>
                                            <p class="text-muted">{{ $user->phone }}</p>
                                        </div>
                                        <div class="col-md-3 col-6 b-r">
                                            <strong>Email</strong>
                                            <br>
                                            <p class="text-muted">{{ $user->email }}</p>
                                        </div>
                                        <div class="col-md-3 col-6">
                                            <strong>Pays</strong>
                                            <br>
                                            <p class="text-muted">Bénin</p>
                                        </div>
                                    </div>
                                    <p class="m-t-30">
                                        Le {{ getPermission($user) }}
                                    </p>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="timeline" aria-expanded="false">
                </div>
                <div role="tabpanel" class="tab-pane" id="usersettings" aria-expanded="false">
                    @if(Auth::id() == $user->id)
                        <div class="card">
                            <div class="header">
                                <h2>
                                    <strong>Sécurité</strong></h2>
                            </div>
                            <div class="body">
                                <form action="#" method="POST">
                                    @csrf
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
                    @endif-->
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>Compte Utilisateur</strong></h2>
                        </div>
                        <div class="body">
                            <form action="#" method="POST">
                                @csrf
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" placeholder="Nom Complet" value="{{ old('name') ? old('name') : $user->name }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="phone" class="form-control" placeholder="Téléphone" value="{{ old('phone') ? old('phone') : $user->phone }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="email" class="form-control" placeholder="E-mail" value="{{ old('email') ? old('email') : $user->email }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="birthday" class="form-control" placeholder="Date de Naissance" value="{{ old('birthday') ? old('birthday') : $user->birthday }}">
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-12">
                                        <div class="form-group">
                                            <select name="sex" id="sex" class="form-control">
                                                <option value="Masculin" {{ $user->sex == 'Masculin' ? 'selected' : '' }}>Masculin</option>
                                                <option value="Féminin" {{ $user->sex == 'Féminin' ? 'selected' : '' }}>Féminin</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea rows="3" class="form-control no-resize"
                                                placeholder="Infos Adresse" name="address">
                                                {{ old('address') ? old('address') : $user->address }}
                                            </textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button class="btn btn-primary btn-round">Sauvegarder</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!--</div>
            </div>
        </div>
    </div> -->
    <!-- <div class="row"> -->
        <!-- <div class="col-md-4"> -->
            <!-- Widget: user widget style 1 -->
            <!-- <div class="card card-widget widget-user"> -->
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <!-- <div class="widget-user-header bg-info">
                <h3 class="widget-user-username">Alexander Pierce</h3>
                <h5 class="widget-user-desc">Founder & CEO</h5>
              </div>
              <div class="widget-user-image">
                <img class="img-circle elevation-2" src="{{ asset(Auth::user()->avatar) }}" alt="User Avatar">
              </div>
              <div class="card-footer">
                <div class="row">
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header">3,200</h5>
                      <span class="description-text">SALES</span> -->
                    <!-- </div> -->
                    <!-- /.description-block -->
                  <!-- </div> -->
                  <!-- /.col -->
                  <!-- <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header">13,000</h5>
                      <span class="description-text">FOLLOWERS</span>
                    </div> -->
                    <!-- /.description-block -->
                  <!-- </div> -->
                  <!-- /.col -->
                  <!-- <div class="col-sm-4">
                    <div class="description-block">
                      <h5 class="description-header">35</h5>
                      <span class="description-text">PRODUCTS</span>
                    </div> -->
                    <!-- /.description-block -->
                  <!-- </div> -->
                  <!-- /.col -->
                <!-- </div> -->
                <!-- /.row -->
              <!-- </div> -->
            <!-- </div> -->
            <!-- /.widget-user -->
          <!-- </div> -->
          <!-- /.col -->
          <!-- <div class="col-md-4"> -->
            <!-- Widget: user widget style 1 -->
            <!-- <div class="card card-widget widget-user"> -->
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <!-- <div class="widget-user-header text-white"
                   style="background: url('storage/assets/img/user1-128x128.jpg') center center;">
                <h3 class="widget-user-username text-right">Elizabeth Pierce</h3>
                <h5 class="widget-user-desc text-right">Web Designer</h5>
              </div>
              <div class="widget-user-image">
                <img class="img-circle" src="{{ asset(Auth::user()->avatar) }}" alt="User Avatar">
              </div>
              <div class="card-footer">
                <div class="row">
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header">3,200</h5>
                      <span class="description-text">SALES</span>
                    </div> -->
                    <!-- /.description-block -->
                  <!-- </div> -->
                  <!-- /.col -->
                  <!-- <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header">13,000</h5>
                      <span class="description-text">FOLLOWERS</span>
                    </div> -->
                    <!-- /.description-block -->
                  <!-- </div> -->
                  <!-- /.col -->
                  <!-- <div class="col-sm-4">
                    <div class="description-block">
                      <h5 class="description-header">35</h5>
                      <span class="description-text">PRODUCTS</span>
                    </div> -->
                    <!-- /.description-block -->
                  <!-- </div> -->
                  <!-- /.col -->
                <!-- </div> -->
                <!-- /.row -->
              <!-- </div>
            </div> -->
            <!-- /.widget-user -->
          <!-- </div> -->
          <!-- /.col -->
    <!-- </div> -->

@endsection
