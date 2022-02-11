@extends('layouts/master')

@section('content')
<form action="{{ route('tests.compose_store', ['cpt' => $question->numOrder, 'test' => $test, 'question' => $question->question_id ]) }}" method="post">
    @csrf
    <div class="col-md-12">
        <div class="card card-warning">
            <div class="card-header">
                <h2 class="card-title">
                    <strong>Question N° {{ $question->numOrder }} </strong>
                </h2>

            </div>

            <div class="card-body">
                <h2 class="card-inside-title">{{ getQuestion($question->question_id)->label }}</h2>
                <div class="col-sm-6 col-lg-3">
                    @foreach(getQuestion($question->question_id)->answers as $answer)
                    <div class="form-check m-l-10">
                        <label class="form-check-label">
                            <input class="form-check-input" name="{{ 'checkbox'.$answer->pivot->alphaOrder }}" type="checkbox" value="{{ $answer->pivot->alphaOrder }}"> {{ $answer->label }}
                            <span class="form-check-sign">
                                <span class="check"></span>
                            </span>
                        </label>
                    </div>
                    @endforeach
                    <br>
                </div>
                <button class="btn btn-block btn-outline-primary col-md-1 float-right">Suivant</button>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- #END# Checkbox -->
</form>

@stop
