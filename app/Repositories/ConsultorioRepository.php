<?php

namespace App\Repositories;

use App\Models\Consultorio;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ConsultorioRepository
 * @package App\Repositories
 * @version November 25, 2018, 4:50 am UTC
 *
 * @method Consultorio findWithoutFail($id, $columns = ['*'])
 * @method Consultorio find($id, $columns = ['*'])
 * @method Consultorio first($columns = ['*'])
*/
class ConsultorioRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'descripcion'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Consultorio::class;
    }
}
