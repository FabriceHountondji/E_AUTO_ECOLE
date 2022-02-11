@extends('layouts/master')

@section('content')
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="body">
                <form action="{{ route('questions.store') }}" method="POST">
                    @csrf
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Nouvelle question</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row col-12">
                                <div class="form-group col-md-12">
                                    <label for="exampleInputEmail1">Libellé</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Libellé de la question" name="label" value="{{ old('label') }}" required>
                                    @error('label')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="">
                                <a href="{{ route('questions.index') }}" class="btn-hover color-primary m-2">Retour à la liste</a>
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

