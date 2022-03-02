@extends('layouts.app')

@section('template_title')
    Favorito Categoria
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Favorito Categoria') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('favorito-categorias.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Id Fav Cate</th>
										<th>Fk Favorito Id</th>
										<th>Fk Categoria Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($favoritoCategorias as $favoritoCategoria)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $favoritoCategoria->id_fav_cate }}</td>
											<td>{{ $favoritoCategoria->fk_favorito_id }}</td>
											<td>{{ $favoritoCategoria->fk_categoria_id }}</td>

                                            <td>
                                                <form action="{{ route('favorito-categorias.destroy',$favoritoCategoria->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('favorito-categorias.show',$favoritoCategoria->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('favorito-categorias.edit',$favoritoCategoria->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $favoritoCategorias->links() !!}
            </div>
        </div>
    </div>
@endsection
