@extends('layouts/master')

@section('content')
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="body">
                <form action="{{ route('tests.update', $test) }}" method="POST">
                    @csrf
                    {{ method_field('PUT') }}
                    <div class="row clearfix">
                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="Libellé de l'épreuve" name="label" value="{{ old('label') ? old('label') : $test->label }}" required>
                                </div>
                                @error('label')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number" class="form-control" placeholder="La durée de l'épreuve" name="duration" value="{{ old('duration') ? old('duration') : $test->duration }}" required>
                                </div>
                                @error('duration')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row clearfix">
                        <div class="col-md-6 col-lg-6">
                            <select class="browser-default" name="type">
                                @foreach ($types as $type)
                                    <option value="{{ $type->id }}" {{ $test->typePermis->label == $type->label ? 'selected' : '' }}>{{ $type->label }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <select class="browser-default" name="category">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" {{ $test->category->label == $category->label ? 'selected' : '' }}>{{ $category->label }}</option>
                                @endforeach

                            </select>
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
