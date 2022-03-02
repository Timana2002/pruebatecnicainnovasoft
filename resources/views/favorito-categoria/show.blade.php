@extends('layouts.app')

@section('template_title')
    {{ $favoritoCategoria->name ?? 'Show Favorito Categoria' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Favorito Categoria</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('favorito-categorias.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Fav Cate:</strong>
                            {{ $favoritoCategoria->id_fav_cate }}
                        </div>
                        <div class="form-group">
                            <strong>Fk Favorito Id:</strong>
                            {{ $favoritoCategoria->fk_favorito_id }}
                        </div>
                        <div class="form-group">
                            <strong>Fk Categoria Id:</strong>
                            {{ $favoritoCategoria->fk_categoria_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
