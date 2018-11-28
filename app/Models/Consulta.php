<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Consulta
 * @package App\Models
 * @version November 25, 2018, 4:55 am UTC
 *
 * @property \App\Models\Consultorio consultorio
 * @property \App\Models\Medico medico
 * @property \Illuminate\Database\Eloquent\Collection empleadoPuesto
 * @property \Illuminate\Database\Eloquent\Collection paga
 * @property \Illuminate\Database\Eloquent\Collection medicoHasEvento
 * @property \Illuminate\Database\Eloquent\Collection medicoHasHorario
 * @property string descripcion
 * @property decimal importe
 * @property decimal monto
 * @property decimal descuento
 * @property decimal total
 * @property string metodo_pago
 * @property integer consultorio_id
 * @property integer medico_id
 */
class Consulta extends Model
{

    public $table = 'consulta';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'descripcion',
        'importe',
        'monto',
        'descuento',
        'total',
        'metodo_pago',
        'consultorio_id',
        'medico_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'descripcion' => 'string',
        'metodo_pago' => 'string',
        'consultorio_id' => 'integer',
        'medico_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function consultorio()
    {
        return $this->belongsTo(\App\Models\Consultorio::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function medico()
    {
        return $this->belongsTo(\App\Models\Medico::class);
    }
}
