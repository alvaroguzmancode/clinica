<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $descripcion
 * @property string $tipo_certificado
 * @property Evento[] $eventos
 */
class Certificado extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'certificado';

    /**
     * @var array
     */
    protected $fillable = ['descripcion', 'tipo_certificado'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function eventos()
    {
        return $this->hasMany('App\Evento');
    }
}
