<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Sueldo
 * @package App\Models
 * @version November 25, 2018, 4:52 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection empleadoPuesto
 * @property \Illuminate\Database\Eloquent\Collection Paga
 * @property \Illuminate\Database\Eloquent\Collection consulta
 * @property \Illuminate\Database\Eloquent\Collection medicoHasEvento
 * @property \Illuminate\Database\Eloquent\Collection medicoHasHorario
 * @property date fecha_inicio
 * @property date fecha_fin
 * @property string isr
 * @property string imss
 * @property string neto
 */
class Sueldo extends Model
{

    public $table = 'sueldo';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'fecha_inicio',
        'fecha_fin',
        'isr',
        'imss',
        'neto'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'fecha_inicio' => 'date',
        'fecha_fin' => 'date',
        'isr' => 'string',
        'imss' => 'string',
        'neto' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function pagas()
    {
        return $this->hasMany(\App\Models\Paga::class);
    }
}
