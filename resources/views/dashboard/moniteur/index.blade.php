@extends('layouts/master')

@section('content')
    @if(getPermission(Auth::user()) == 'superAdmin')
    <div class="row">
        <div class="col-12">
            <div class="card ">
                <div class="card-header">
                    <h3 class="card-title">
                        <div class="row ">
                            <div class="btn-group ">
                                <a href="{{ route('users.create') }}" id="addRow" class="btn btn-info">
                                <i class="fa fa-plus"></i>

                                    Nouveau Moniteur

                                </a>
                            </div>
                        </div>
                    </h3>
                </div>
                @endif
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nom & Prénom(s)</th>
                                <th>Numéro Téléphone</th>
                                <th>Email</th>
                                <th>Date de naissance</th>
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
                                    <td>+229 {{ $user->phone }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ date('d/m/Y', strtotime($user->birthday)) }}</td>
                                    <td class="{{ $user->role->name == 'superAdmin' ? 'text-warning' : ''}} ">{{ $user->role->role }}</td>
                                    <td>
                                        <a class="text-primary" href="{{ route('users.show', $user) }}">
                                            Details
                                        </a>
                                        |
                                        <a class="text-warning" href="{{ route('users.show', $user) }}">
                                            Modifier
                                        </a>
                                        |
                                        @if(getPermission(Auth::user()) == 'superAdmin')
                                            <a class="text-danger" href="{{ route('users.delete', $user) }}" onclick="return confirm('Voulez-vous vraiment effectuer la suppression ?')">
                                                Supprimer
                                            </a>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Nom & Prénom(s)</th>
                                <th>Numéro Téléphone</th>
                                <th>Email</th>
                                <th>Date de naissance</th>
                                <th>Statut</th>
                                <th>Actions</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
@stop
