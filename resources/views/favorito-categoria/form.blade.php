<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_fav_cate') }}
            {{ Form::text('id_fav_cate', $favoritoCategoria->id_fav_cate, ['class' => 'form-control' . ($errors->has('id_fav_cate') ? ' is-invalid' : ''), 'placeholder' => 'Id Fav Cate']) }}
            {!! $errors->first('id_fav_cate', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fk_favorito_id') }}
            {{ Form::text('fk_favorito_id', $favoritoCategoria->fk_favorito_id, ['class' => 'form-control' . ($errors->has('fk_favorito_id') ? ' is-invalid' : ''), 'placeholder' => 'Fk Favorito Id']) }}
            {!! $errors->first('fk_favorito_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fk_categoria_id') }}
            {{ Form::text('fk_categoria_id', $favoritoCategoria->fk_categoria_id, ['class' => 'form-control' . ($errors->has('fk_categoria_id') ? ' is-invalid' : ''), 'placeholder' => 'Fk Categoria Id']) }}
            {!! $errors->first('fk_categoria_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>