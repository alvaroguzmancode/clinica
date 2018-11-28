<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Renta
 * @package App\Models
 * @version November 25, 2018, 4:53 am UTC
 *
 * @property \App\Models\Consultorio consultorio
 * @property \Illuminate\Database\Eloquent\Collection empleadoPuesto
 * @property \Illuminate\Database\Eloquent\Collection paga
 * @property \Illuminate\Database\Eloquent\Collection consulta
 * @property \Illuminate\Database\Eloquent\Collection Horario
 * @property \Illuminate\Database\Eloquent\Collection medicoHasEvento
 * @property \Illuminate\Database\Eloquent\Collection medicoHasHorario
 * @property string descripcion
 * @property string cobro
 * @property integer consultorio_id
 */
class Renta extends Model
{

    public $table = 'renta';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'descripcion',
        'cobro',
        'consultorio_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'descripcion' => 'string',
        'cobro' => 'string',
        'consultorio_id' => 'integer'
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
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function horarios()
    {
        return $this->hasMany(\App\Models\Horario::class);
    }
}
