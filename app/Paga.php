<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $sueldo_id
 * @property int $empleado_id
 * @property string $isr
 * @property string $imss
 * @property float $neto
 * @property string $descripcion
 * @property Sueldo $sueldo
 * @property Empleado $empleado
 */
class Paga extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'paga';

    /**
     * @var array
     */
    protected $fillable = ['sueldo_id', 'empleado_id', 'isr', 'imss', 'neto', 'descripcion'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function sueldo()
    {
        return $this->belongsTo('App\Sueldo');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function empleado()
    {
        return $this->belongsTo('App\Empleado');
    }
}
