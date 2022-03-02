<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class FavoritoCategoria
 *
 * @property $id_fav_cate
 * @property $fk_favorito_id
 * @property $fk_categoria_id
 *
 * @property Categoria $categoria
 * @property Favorito $favorito
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class FavoritoCategoria extends Model
{
    
    static $rules = [
		'id_fav_cate' => 'required',
		'fk_favorito_id' => 'required',
		'fk_categoria_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_fav_cate','fk_favorito_id','fk_categoria_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function categoria()
    {
        return $this->hasOne('App\Models\Categoria', 'id_categoria', 'fk_categoria_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function favorito()
    {
        return $this->hasOne('App\Models\Favorito', 'id_favorito', 'fk_favorito_id');
    }
    

}
