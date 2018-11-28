<?php

namespace App\Repositories;

use App\Models\CentroMedico;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class CentroMedicoRepository
 * @package App\Repositories
 * @version November 25, 2018, 10:52 am UTC
 *
 * @method CentroMedico findWithoutFail($id, $columns = ['*'])
 * @method CentroMedico find($id, $columns = ['*'])
 * @method CentroMedico first($columns = ['*'])
*/
class CentroMedicoRepository extends BaseRepository
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
        return CentroMedico::class;
    }
}
