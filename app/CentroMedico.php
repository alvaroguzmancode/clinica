<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $descripcion
 */
class CentroMedico extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'centromedico';

    public $timestamps = false;

    /**
     * @var array
     */
    protected $fillable = ['descripcion'];

}
