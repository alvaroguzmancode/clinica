<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $fecha_inicio
 * @property string $fecha_fin
 * @property string $isr
 * @property string $imss
 * @property string $neto
 * @property string $created_at
 * @property string $updated_at
 * @property Paga[] $pagas
 */
class Sueldo extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'sueldo';

    /**
     * @var array
     */
    protected $fillable = ['fecha_inicio', 'fecha_fin', 'isr', 'imss', 'neto', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pagas()
    {
        return $this->hasMany('App\Paga');
    }
}
