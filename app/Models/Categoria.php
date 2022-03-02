<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Categoria
 *
 * @property $id_categoria
 * @property $descripcion_categoria
 *
 * @property FavoritoCategoria[] $favoritoCategorias
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Categoria extends Model
{
    
    static $rules = [
		'descripcion_categoria' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_categoria','descripcion_categoria'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function favoritoCategorias()
    {
        return $this->hasMany('App\Models\FavoritoCategoria', 'fk_categoria_id', 'id_categoria');
    }
    

}
