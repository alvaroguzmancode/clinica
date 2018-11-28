<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $certificado_id
 * @property string $descripcion
 * @property string $fecha_inicio
 * @property string $fecha_fin
 * @property string $tipo_evento
 * @property Certificado $certificado
 * @property MedicoHasEvento[] $medicoHasEventos
 */
class Evento extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'evento';

    /**
     * @var array
     */
    protected $fillable = ['certificado_id', 'descripcion', 'fecha_inicio', 'fecha_fin', 'tipo_evento'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function certificado()
    {
        return $this->belongsTo('App\Certificado');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function medicoHasEventos()
    {
        return $this->hasMany('App\MedicoHasEvento');
    }
}
