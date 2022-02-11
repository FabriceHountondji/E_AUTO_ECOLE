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
    <div class="card-header">
        <div class="row ">
            <div class="btn-group ">
                <a href="{{ route('candidats.index') }}" id="addRow" class="btn btn-warning">
                <i class="fas fa-undo-alt"></i>

                    Retour à la liste

                </a>
            </div>
        </div>
    </div>
    <!-- /.card-header -->

@endsection
