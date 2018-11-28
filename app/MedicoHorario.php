<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $horario_id
 * @property int $medico_id
 * @property Horario $horario
 * @property Medico $medico
 */
class MedicoHorario extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'medico_has_horario';

    /**
     * @var array
     */
    protected $fillable = ['horario_id', 'medico_id'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function horario()
    {
        return $this->belongsTo('App\Horario');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function medico()
    {
        return $this->belongsTo('App\Medico');
    }
}
