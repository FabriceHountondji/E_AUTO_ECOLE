@extends('layouts/master')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card ">
                <div class="card-header">
                    <h3 class="card-title">
                        <div class="row ">
                            <div class="btn-group ">
                                <a href="{{ route('questions.create') }}" id="addRow" class="btn btn-info">
                                <i class="fa fa-plus"></i>

                                    Nouvelle Question

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
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($questions as $index => $question)
                                <tr>
                                    <td>
                                        {{ $index +1 }}
                                    </td>
                                    <td>{{ $question->label }}</td>
                                    <td>
                                        <!-- {{ count($question->answers) }} -->
                                        @if(count($question->answers) <= 2 )
                                            <a class="text-info" href="{{ route('questionAnswers.create', $question) }}">
                                                Réponses
                                            </a>
                                        @else
                                            <a class="text-primary" href="{{ route('questions.show', $question) }}">
                                                Détails
                                            </a>
                                            |
                                            <a class="text-warning" href="{{ route('questions.show', $question) }}">
                                                Modifier
                                            </a>
                                            |
                                            <a class="text-danger" href="{{ route('questions.show', $question) }}">
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
