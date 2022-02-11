@extends('layouts/master')

@section('content')
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="body">
                <form action="{{ route('tests.store') }}" method="POST">
                    @csrf
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Nouveau Test</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row col-12">
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Libellé</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Libellé de l'épreuve" name="label" value="{{ old('label') }}" required>
                                    @error('label')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="exampleInputEmail1">Durée</label>
                                    <input type="number" class="form-control" id="exampleInputEmail1" placeholder="La durée de l'épreuve" name="duration" value="{{ old('duration') }}"required>
                                    @error('duration')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                            </div>

                            <div class="row col-12">
                                <div class="form-group col-md-6">
                                    <label>Type permis</label>
                                    <select class="form-control select2" name="type">
                                        @foreach ($types as $type)
                                            <option value="{{ $type->id }}">{{ $type->label }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-sm-6">
                                    <label>Catégorie permis</label>
                                    <select class="form-control select2" name="category">
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->label }}</option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>

                            <div class="">
                                <a href="{{ route('tests.index') }}" class="btn-hover color-primary m-2">Retour à la liste</a>
                                <button type="reset" class="btn bg-gradient-danger float-right m-2" >Annuler</button>
                                <button type="submit" class="btn bg-gradient-green float-right m-2" >Ajouter</button>
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </form>
            </div>
        </div>
    </div>
</div>
@endsection


