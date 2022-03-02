@extends('layouts.app')

@section('template_title')
    {{ $favorito->name ?? 'Show Favorito' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Favorito</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('favoritos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Favorito:</strong>
                            {{ $favorito->id }}
                        </div>
                        <div class="form-group">
                            <strong>Titulo Favorito:</strong>
                            {{ $favorito->titulo_favorito }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion Favorito:</strong>
                            {{ $favorito->descripcion_favorito }}
                        </div>
                        <div class="form-group">
                            <strong>Url Favorito:</strong>
                            {{ $favorito->url_favorito }}
                        </div>
                        <div class="form-group">
                            <strong>Estado Favorito:</strong>
                            {{ $favorito->estado_favorito }}
                        </div>
                        <div class="form-group">
                            <strong>Fk Users:</strong>
                            {{ $favorito->fk_users }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
