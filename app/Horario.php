<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $renta_id
 * @property string $descripcion
 * @property string $dia
 * @property string $hora_inicio
 * @property string $hora_fin
 * @property Rentum $rentum
 * @property MedicoHasHorario[] $medicoHasHorarios
 */
class Horario extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'horario';

    /**
     * @var array
     */
    protected $fillable = ['renta_id', 'descripcion', 'dia', 'hora_inicio', 'hora_fin'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function rentum()
    {
        return $this->belongsTo('App\Rentum', 'renta_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function medicoHasHorarios()
    {
        return $this->hasMany('App\MedicoHasHorario');
    }
}
