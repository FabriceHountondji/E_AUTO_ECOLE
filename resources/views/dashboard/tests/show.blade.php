@extends('layouts/master')

@section('content')

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="card-header">
                <div class="row ">
                    <div class="btn-group ">
                        <a href="{{ route('tests.index') }}" id="addRow" class="btn btn-warning">
                        <i class="fas fa-undo-alt"></i>

                            Retour à la liste

                        </a>
                    </div>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <!-- we are adding the accordion ID so Bootstrap's collapse plugin detects it -->
                <div id="accordion">
                    @foreach ($test->questions as $index => $question)

                        <div class="card card-primary">
                            <div class="card-header">

                                <h4 class="card-title w-100">
                                    <a class="d-block w-100" data-toggle="collapse" href="{{ '#collapseOne_'.$index}}" aria-expanded="true" aria-controls="{{ 'collapseOne_'.$index }}">
                                        {{ $question->pivot->numOrder }}. {{ $question->label }}
                                    </a>
                                </h4>

                            </div>

                            <div id="{{ 'collapseOne_'.$index}}" class="collapse show" data-parent="#accordion">

                                <div class="card-body">
                                    @foreach ($question->answers as $index => $answer)
                                        {{ getAlphaOrder($index + 1) . ') ' }}
                                        <span class="{{ $answer->status == true ? 'text-success' : '' }}">{{ $answer->label }}</span> <br>
                                    @endforeach
                                </div>

                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>

@endsection


