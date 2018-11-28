<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $consultorio_id
 * @property int $medico_id
 * @property string $descripcion
 * @property float $importe
 * @property float $monto
 * @property float $descuento
 * @property float $total
 * @property string $metodo_pago
 * @property Consultorio $consultorio
 * @property Medico $medico
 */
class Consulta extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'consulta';

    /**
     * @var array
     */
    protected $fillable = ['consultorio_id', 'medico_id', 'descripcion', 'importe', 'monto', 'descuento', 'total', 'metodo_pago'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function consultorio()
    {
        return $this->belongsTo('App\Consultorio');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function medico()
    {
        return $this->belongsTo('App\Medico');
    }
}
