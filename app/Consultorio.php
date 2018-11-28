<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $descripcion
 * @property string $created_at
 * @property string $updated_at
 * @property Consultum[] $consultas
 * @property Rentum[] $rentas
 */
class Consultorio extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'consultorio';

    /**
     * @var array
     */
    protected $fillable = ['descripcion', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function consultas()
    {
        return $this->hasMany('App\Consulta');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function rentas()
    {
        return $this->hasMany('App\Renta');
    }
}
