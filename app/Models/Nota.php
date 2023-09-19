<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Nota
 *
 * @property $id
 * @property $userId
 * @property $departamento
 * @property $descripcion
 * @property $clientePersona
 * @property $empresa
 * @property $telefonoContacto
 * @property $estado
 * @property $observaciones
 * @property $fechaCrea
 * @property $fechaGuarda
 * @property $fechaElimina
 * @property $fechaReactiva
 * @property $created_at
 * @property $updated_at
 *
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Nota extends Model
{
    
    static $rules = [
		'userId'          => 'required',
		'departamento'    => 'required',
		'descripcion'     => 'required',
		'clientePersona'   => 'required',
		'empresa'             => 'required',
		'telefonoContacto' => 'required',
		'estado' => 'required',
		'observaciones' => 'required',
		'fechaCrea' => 'required',

    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['userId','departamento','descripcion','clientePersona','empresa','telefonoContacto','estado','observaciones','fechaCrea','fechaGuarda','fechaElimina','fechaReactiva'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'userId');
    }
    

}
