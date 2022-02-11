@extends('layouts/master')

@section('content')

<div class="row">
    @if($note < 5)

        <div class="card-body">
            <div class="alert alert-danger alert-dismissible">
                <!-- <button type="button" data-dismiss="alert" aria-hidden="true">&times;</button> -->
                <h1><strong>{{ $note . '/20' }}</strong></h1>

                <h5><i class="icon fas fa-ban"></i> Alert!</h5>
                Votre résultat est en dessous de la moyenne. Résultat très médiocre !
            </div>
        </div>

    @else

        @if($note < 10)
            <div class="card-body">
                <div class="alert alert-danger alert-dismissible">
                    <!-- <button type="button" data-dismiss="alert" aria-hidden="true">&times;</button> -->
                    <h1><strong>{{ $note . '/20' }}</strong></h1>

                    <h5><i class="icon fas fa-ban"></i> Alert!</h5>
                    Votre résultat est en dessous de la moyenne. Résultat médiocre !
                </div>
            </div>
        @else

            @if($note < 12)
                <div class="card-body">
                    <div class="alert alert-warning alert-dismissible">
                        <!-- <button type="button" data-dismiss="alert" aria-hidden="true">&times;</button> -->
                        <h1><strong>{{ $note . '/20' }}</strong></h1>
                        <h5><i class="icon fas fa-exclamation-triangle"></i> Alert!</h5>
                        Votre résultat est conforme à la moyenne. Résultat passable !
                    </div>
                </div>


            @else

                @if($note < 16)
                    <div class="card-body">
                        <div class="alert alert-info alert-dismissible">
                            <!-- <button type="button" data-dismiss="alert" aria-hidden="true">&times;</button> -->
                            <h1><strong>{{ $note . '/20' }}</strong></h1>
                            <h5><i class="icon fas fa-info"></i> Alert!</h5>
                            Votre résultat est conforme à la moyenne. Mention Bien !
                        </div>
                    </div>

                @else

                    @if($note < 20 )
                        <div class="card-body">
                            <div class="alert alert-success alert-dismissible">
                                <!-- <button type="button" data-dismiss="alert" aria-hidden="true">&times;</button> -->
                                <h1><strong>{{ $note . '/20' }}</strong></h1>
                                <h5><i class="icon fas fa-check"></i> Alert!</h5>
                                Votre résultat est conforme à la moyenne. Mention Très bien !
                            </div>
                        </div>
                    @else
                        <div class="card-body">
                            <div class="alert alert-success alert-dismissible">
                                <!-- <button type="button" data-dismiss="alert" aria-hidden="true">&times;</button> -->
                                <h1><strong>{{ $note . '/20' }}</strong></h1>
                                <h5><i class="icon fas fa-check"></i> Alert!</h5>
                                Votre résultat est conforme à la moyenne. Mention Excellente. Bravo !
                            </div>
                        </div>
                    @endif
                @endif
            @endif
        @endif
    @endif
</div>


<div class="row">
    <div class="card-body">
        <div class="alert alert-success alert-dismissible">
            <!-- <button type="button" data-dismiss="alert" aria-hidden="true">&times;</button> -->
            <h1><strong>Corriger-type</strong></h1>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
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
                                <hr>
                                <div class="card-body">

                                    @foreach ($question->answers as $index => $answer)
                                        {{ getAlphaOrder($index + 1) . ') ' }}
                                        <span class="{{ DB::table('question_user')->select('status')->where([ ['question_id','=',$question->pivot->numOrder] , ['alphaOrder' , '=' ,getAlphaOrder($index + 1) ] , ['user_id' , '=' , Auth::id() ] ])->value('status') == 1 ? 'text-success' : ''}} ">{{ $answer->label }}</span> <br>
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

@stop
