@extends('layouts.app')

@section('template_title')
    Favorito
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Mis Favoritos') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('favoritos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Favorito') }}
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
                                        
										
										<th>Titulo Favorito</th>
										<th>Descripcion Favorito</th>
										<th>Url Favorito</th>
										<th>Estado Favorito</th>
										

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($favoritos as $favorito)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											
											<td>{{ $favorito->titulo_favorito }}</td>
											<td>{{ $favorito->descripcion_favorito }}</td>
											<td>{{ $favorito->url_favorito }}</td>
											<td>{{ $favorito->estado_favorito }}</td>
										

                                            <td>
                                                <form action="{{ route('favoritos.destroy',$favorito->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('favoritos.show',$favorito->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('favoritos.edit',$favorito->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $favoritos->links() !!}
            </div>
        </div>
    </div>
@endsection
