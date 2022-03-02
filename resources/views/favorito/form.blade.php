<div class="box box-info padding-1">
    <div class="box-body">        
  
        <div class="form-group">
            {{ Form::label('titulo_favorito') }}
            {{ Form::text('titulo_favorito', $favorito->titulo_favorito, ['class' => 'form-control' . ($errors->has('titulo_favorito') ? ' is-invalid' : ''), 'placeholder' => 'Titulo Favorito']) }}
            {!! $errors->first('titulo_favorito', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcion_favorito') }}
            {{ Form::text('descripcion_favorito', $favorito->descripcion_favorito, ['class' => 'form-control' . ($errors->has('descripcion_favorito') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion Favorito']) }}
            {!! $errors->first('descripcion_favorito', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('url_favorito') }}
            {{ Form::text('url_favorito', $favorito->url_favorito, ['class' => 'form-control' . ($errors->has('url_favorito') ? ' is-invalid' : ''), 'placeholder' => 'Url Favorito']) }}
            {!! $errors->first('url_favorito', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estado_favorito') }}
            {{ Form::text('estado_favorito', $favorito->estado_favorito, ['class' => 'form-control' . ($errors->has('estado_favorito') ? ' is-invalid' : ''), 'placeholder' => 'Estado Favorito']) }}
            {!! $errors->first('estado_favorito', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
           
            {{ Form::hidden('fk_users', Auth::user()->id, ['class' => 'form-control' . ($errors->has('fk_users') ? ' is-invalid' : ''), 'placeholder' => 'Fk Users']) }}
            {!! $errors->first('fk_users', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <br>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-success">Registrar</button>
    </div>
</div>