@extends('layouts/master')

@section('content')
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="body">
                <form action="{{ route('test_questions.store', $test) }}" method="POST">
                    @csrf
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 {{ getQuestionKey($test, 1) }}" >
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="question_1" placeholder="Taper la question N° 1" value="{{ old('question_1') }}">
                                </div>
                                @error('question_1')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 {{ getQuestionKey($test, 2) }}">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="question_2" placeholder="Taper la question N° 2" value="{{ old('question_2') }}">
                                </div>
                                @error('question_2')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 {{ getQuestionKey($test, 3) }}">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="question_3" placeholder="Taper la question N° 3" value="{{ old('question_3') }}">
                                </div>
                                @error('question_3')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 {{ getQuestionKey($test, 4) }}">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="question_4" placeholder="Taper la question N° 4" value="{{ old('question_4') }}">
                                </div>
                                @error('question_4')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 {{ getQuestionKey($test, 5) }}">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="question_5" placeholder="Taper la question N° 5" value="{{ old('question_5') }}">
                                </div>
                                @error('question_5')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 {{ getQuestionKey($test, 6) }}">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="question_6" placeholder="Taper la question N° 6" value="{{ old('question_6') }}">
                                </div>
                                @error('question_6')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 {{ getQuestionKey($test, 7) }}">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="question_7" placeholder="Taper la question N° 7" value="{{ old('question_7') }}">
                                </div>
                                @error('question_7')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 {{ getQuestionKey($test, 8) }}">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="question_8" placeholder="Taper la question N° 8" value="{{ old('question_8') }}">
                                </div>
                                @error('question_8')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 {{ getQuestionKey($test, 9) }}">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="question_9" placeholder="Taper la question N° 9" value="{{ old('question_9') }}">
                                </div>
                                @error('question_9')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 {{ getQuestionKey($test, 10) }}">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="question_10" placeholder="Taper la question N° 10" value="{{ old('question_10') }}">
                                </div>
                                @error('question_10')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 {{ getQuestionKey($test, 11) }}">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="question_11" placeholder="Taper la question N° 11" value="{{ old('question_11') }}">
                                </div>
                                @error('question_11')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 {{ getQuestionKey($test, 12) }}">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="question_12" placeholder="Taper la question N° 12" value="{{ old('question_12') }}">
                                </div>
                                @error('question_12')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 {{ getQuestionKey($test, 13) }}">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="question_13" placeholder="Taper la question N° 13" value="{{ old('question_13') }}">
                                </div>
                                @error('question_13')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 {{ getQuestionKey($test, 14) }}">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="question_14" placeholder="Taper la question N° 14" value="{{ old('question_14') }}">
                                </div>
                                @error('question_14')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 {{ getQuestionKey($test, 15) }}">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="question_15" placeholder="Taper la question N° 15" value="{{ old('question_15') }}">
                                </div>
                                @error('question_15')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 {{ getQuestionKey($test, 16) }}">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="question_16" placeholder="Taper la question N° 16" value="{{ old('question_16') }}">
                                </div>
                                @error('question_16')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 {{ getQuestionKey($test, 17) }}">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="question_17" placeholder="Taper la question N° 17" value="{{ old('question_17') }}">
                                </div>
                                @error('question_17')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 {{ getQuestionKey($test, 18) }}">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="question_18" placeholder="Taper la question N° 18" value="{{ old('question_18') }}">
                                </div>
                                @error('question_18')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 {{ getQuestionKey($test, 19) }}">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="question_19" placeholder="Taper la question N° 19" value="{{ old('question_19') }}">
                                </div>
                                @error('question_19')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 {{ getQuestionKey($test, 20) }}">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="question_20" placeholder="Taper la question N° 20" value="{{ old('question_20') }}">
                                </div>
                                @error('question_20')
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
