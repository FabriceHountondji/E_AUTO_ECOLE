@extends('layouts/master')

@section('content')
    <!-- #START# Table With State Save -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">

                <div class="body">
                    <div class="table-responsive">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <div class="btn-group m-l-15">
                                    <a href="{{ route('users.create') }}" id="addRow" class="btn btn-info">
                                        <i class="fa fa-plus"></i>
                                        Nouveau Moniteur
                                    </a>
                                </div>
                            </div>
                        </div>
                        <table class="table table-bordered table-striped table-hover save-stage dataTable"
                            style="width:100%;">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nom & Prénom(s)</th>
                                    <th>Numéro Téléphone</th>
                                    <th>Email</th>
                                    <th>Age</th>
                                    <th>Statut</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $index => $user)
                                <tr>
                                    <td>
                                        {{ $index +1 }}
                                    </td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->phone }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->birthday }}</td>
                                    <td class="{{ $user->role->name == 'superAdmin' ? 'text-warning' : ''}} ">{{ $user->role->role }}</td>
                                    <td>
                                        <a href="{{ route('users.show', $user) }}">
                                            <i data-feather="eye" class="text-primary"></i>
                                        </a>|
                                        <a href="{{ route('users.delete', $user) }}">
                                            <i data-feather="trash-2" class="text-danger"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Table With State Save -->
@stop
