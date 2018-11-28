<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $evento_id
 * @property int $medico_id
 * @property Evento $evento
 * @property Medico $medico
 */
class MedicoEvento extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'medico_has_evento';

    /**
     * @var array
     */
    protected $fillable = ['evento_id', 'medico_id'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function evento()
    {
        return $this->belongsTo('App\Evento');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function medico()
    {
        return $this->belongsTo('App\Medico');
    }
}
