<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $descripcion
 * @property EmpleadoPuesto[] $empleadoPuestos
 */
class Puesto extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'puesto';

    /**
     * @var array
     */
    protected $fillable = ['descripcion'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function empleadoPuestos()
    {
        return $this->hasMany('App\EmpleadoPuesto');
    }
}
