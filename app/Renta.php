<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $consultorio_id
 * @property string $descripcion
 * @property string $cobro
 * @property Consultorio $consultorio
 * @property Horario[] $horarios
 */
class Renta extends Model
{
    public $timestamps = false;
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'renta';

    /**
     * @var array
     */
    protected $fillable = ['consultorio_id', 'descripcion', 'cobro'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function consultorio()
    {
        return $this->belongsTo('App\Consultorio');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function horarios()
    {
        return $this->hasMany('App\Horario', 'renta_id');
    }
}
