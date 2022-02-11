@extends('layouts/master')

@section('content')
    @if(getPermission(Auth::user()) == 'instructor')
    <div class="row">
        <div class="col-12">
            <div class="card ">
                <div class="card-header">
                    <h3 class="card-title">
                        <div class="row ">
                            <div class="btn-group ">
                                <a href="{{ route('candidats.create') }}" id="addRow" class="btn btn-info">
                                <i class="fa fa-plus"></i>

                                    Nouveau Candidat

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
                                <th>Sexe</th>
                                <th>Date de naissance</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($candidates as $index => $candidate)
                                <tr>
                                    <td>
                                        {{ $index +1 }}
                                    </td>
                                    <td>{{ $candidate->name }}</td>
                                    <td>+229 {{ $candidate->phone }}</td>
                                    <td>{{ $candidate->email }}</td>
                                    <td>{{ $candidate->sex }}</td>
                                    <td>{{ date('d/m/Y', strtotime($candidate->birthday)) }}</td>
                                    <td>
                                        <a class="text-primary" href="{{ route('users.show', $candidate) }}">
                                            Details
                                        </a>
                                        |
                                        <a class="text-warning" href="{{ route('users.show', $candidate) }}">
                                            Modifier
                                        </a>
                                        |
                                        <a class="text-danger" href="{{ route('users.delete', $candidate) }}" onclick="return confirm('Voulez-vous vraiment effectuer la suppression ?')">
                                            Supprimer
                                        </a>
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
                                <th>Sexe</th>
                                <th>Date de naissance</th>
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
