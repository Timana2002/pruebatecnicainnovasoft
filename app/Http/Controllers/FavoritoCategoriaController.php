<?php

namespace App\Http\Controllers;

use App\Models\FavoritoCategoria;
use Illuminate\Http\Request;

/**
 * Class FavoritoCategoriaController
 * @package App\Http\Controllers
 */
class FavoritoCategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $favoritoCategorias = FavoritoCategoria::paginate();

        return view('favorito-categoria.index', compact('favoritoCategorias'))
            ->with('i', (request()->input('page', 1) - 1) * $favoritoCategorias->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $favoritoCategoria = new FavoritoCategoria();
        return view('favorito-categoria.create', compact('favoritoCategoria'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(FavoritoCategoria::$rules);

        $favoritoCategoria = FavoritoCategoria::create($request->all());

        return redirect()->route('favorito-categorias.index')
            ->with('success', 'FavoritoCategoria created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $favoritoCategoria = FavoritoCategoria::find($id);

        return view('favorito-categoria.show', compact('favoritoCategoria'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $favoritoCategoria = FavoritoCategoria::find($id);

        return view('favorito-categoria.edit', compact('favoritoCategoria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  FavoritoCategoria $favoritoCategoria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FavoritoCategoria $favoritoCategoria)
    {
        request()->validate(FavoritoCategoria::$rules);

        $favoritoCategoria->update($request->all());

        return redirect()->route('favorito-categorias.index')
            ->with('success', 'FavoritoCategoria updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $favoritoCategoria = FavoritoCategoria::find($id)->delete();

        return redirect()->route('favorito-categorias.index')
            ->with('success', 'FavoritoCategoria deleted successfully');
    }
}
