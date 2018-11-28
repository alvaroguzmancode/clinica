<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $receta_id
 * @property string $descripcion
 * @property string $dosis
 * @property string $created_at
 * @property string $updated_at
 * @property Recetum $recetum
 */
class Medicamento extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'medicamento';

    /**
     * @var array
     */
    protected $fillable = ['receta_id', 'descripcion', 'dosis', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function recetum()
    {
        return $this->belongsTo('App\Receta', 'receta_id');
    }
}
