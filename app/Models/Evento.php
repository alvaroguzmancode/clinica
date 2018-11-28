<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Evento
 * @package App\Models
 * @version November 25, 2018, 4:53 am UTC
 *
 * @property \App\Models\Certificado certificado
 * @property \Illuminate\Database\Eloquent\Collection empleadoPuesto
 * @property \Illuminate\Database\Eloquent\Collection paga
 * @property \Illuminate\Database\Eloquent\Collection consulta
 * @property \Illuminate\Database\Eloquent\Collection MedicoHasEvento
 * @property \Illuminate\Database\Eloquent\Collection medicoHasHorario
 * @property string descripcion
 * @property date fecha_inicio
 * @property date fecha_fin
 * @property string tipo_evento
 * @property integer certificado_id
 */
class Evento extends Model
{

    public $table = 'evento';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'descripcion',
        'fecha_inicio',
        'fecha_fin',
        'tipo_evento',
        'certificado_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'descripcion' => 'string',
        'fecha_inicio' => 'date',
        'fecha_fin' => 'date',
        'tipo_evento' => 'string',
        'certificado_id' => 'integer'
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
    public function certificado()
    {
        return $this->belongsTo(\App\Models\Certificado::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function medicoHasEventos()
    {
        return $this->hasMany(\App\Models\MedicoHasEvento::class);
    }
}
