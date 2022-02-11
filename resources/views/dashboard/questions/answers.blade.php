@extends('layouts/master')

@section('content')
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="body">
                <form action="{{ route('questionAnswers.store', $question) }}" method="GET">
                    @csrf
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" >
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="answer_1" placeholder="Taper la réponse N° a" value="{{ old('answer_1') }}" required>
                                </div>
                                @error('answer_1')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" >
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="answer_2" placeholder="Taper la réponse N° b" value="{{ old('answer_2') }}" required>
                                </div>
                                @error('answer_2')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" >
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="answer_3" placeholder="Taper la réponse N° c" value="{{ old('answer_3') }}" required>
                                </div>
                                @error('answer_3')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" >
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="answer_4" placeholder="Taper la réponse N° d" value="{{ old('answer_4') }}">
                                </div>
                                @error('answer_4')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" >
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="answer_5" placeholder="Taper la réponse e" value="{{ old('answer_5') }}">
                                </div>
                                @error('answer_5')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-12">
                            <a href="{{ route('tests.index') }}" class="btn-hover color-3 m-2">Retour Liste</a>
                            <div class="button-demo">

                                <button type="submit" class="btn-hover color-1 float-right">Ajouter</button>
                                <button type="reset" class="btn-hover color-2 float-right">Annuler</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
