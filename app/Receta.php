<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $descripcion
 * @property string $created_at
 * @property string $updated_at
 * @property Medicamento[] $medicamentos
 */
class Receta extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'receta';

    /**
     * @var array
     */
    protected $fillable = ['descripcion', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function medicamentos()
    {
        return $this->hasMany('App\Medicamento', 'receta_id');
    }
}
