<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Favorito
 *
 * @property $id_favorito
 * @property $titulo_favorito
 * @property $descripcion_favorito
 * @property $url_favorito
 * @property $estado_favorito
 * @property $fk_users
 * @property $created_at
 * @property $updated_at
 *
 * @property FavoritoCategoria[] $favoritoCategorias
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Favorito extends Model
{
    
    static $rules = [
		'titulo_favorito' => 'required',
		'descripcion_favorito' => 'required',
		'url_favorito' => 'required',
		'estado_favorito' => 'required',
		'fk_users' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_favorito','titulo_favorito','descripcion_favorito','url_favorito','estado_favorito','fk_users'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function favoritoCategorias()
    {
        return $this->hasMany('App\Models\FavoritoCategoria', 'fk_favorito_id', 'id_favorito');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'fk_users');
    }
    

}
