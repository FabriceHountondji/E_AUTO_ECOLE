@extends('layouts/master')

@section('content')
<!-- #START# Table With State Save -->
<div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">

                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover save-stage dataTable"
                            style="width:100%;">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Libellé</th>
                                    <th>Catégorie</th>
                                    <th>Type Permis</th>
                                    <th>Durée</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tests as $index => $test)
                                <tr {{ count($test->questions) < 20 ? 'hidden' : ''  }}>
                                    <td>
                                        {{ $index +1 }}
                                    </td>
                                    <td>{{ $test->label }}</td>
                                    <td>{{ $test->category->label }}</td>
                                    <td>{{ $test->typePermis->label }}</td>
                                    <td>{{ $test->duration }}</td>
                                    <td>
                                        <a class="text-warning" href="{{ route('tests.compose', ['cpt' => 0, 'test' => $test ]) }}" onclick="return confirm('Voulez-vous vraiment passer ce test ?')">
                                            Composer
                                        </a>

                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Table With State Save -->
@stop
