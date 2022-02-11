@extends('layouts/master')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card ">
                <div class="card-header">
                    <h3 class="card-title">
                        <div class="row ">
                            <div class="btn-group ">
                                <a href="{{ route('tests.create') }}" id="addRow" class="btn btn-info">
                                <i class="fa fa-plus"></i>

                                    Nouveau Test

                                </a>
                            </div>
                        </div>
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Libellé</th>
                                <th>Catégorie</th>
                                <th>Type Permis</th>
                                <th>Durée</th>
                                <th>Auteur</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tests as $index => $test)
                            <tr>
                                <td>
                                    {{ $index +1 }}
                                </td>
                                <td>{{ $test->label }}</td>
                                <td>{{ $test->category->label }}</td>
                                <td>{{ $test->typePermis->label }}</td>
                                <td>{{ $test->duration }}</td>
                                <td><a class="text-info" href="{{ route('users.show', $test->user) }}">{{ $test->user->name }}</a></td>
                                <td>
                                    <a class="text-primary" href="{{ route('tests.show', $test) }}">
                                        Details
                                    </a>
                                    @if(count($test->questions) <= 19)
                                        |
                                        <a class="text-info" href="{{ route('test_questions.create', $test) }}">
                                            questions
                                        </a>
                                    @else
                                        |
                                        <a class="text-warning" href="{{ route('tests.show', $test) }}">
                                            Modifier
                                        </a>
                                        |
                                        <a class="text-danger" href="{{ route('tests.show', $test) }}">
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
                                <th>Libellé</th>
                                <th>Catégorie</th>
                                <th>Type Permis</th>
                                <th>Durée</th>
                                <th>Auteur</th>
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



