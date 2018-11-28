<?php

namespace App\Repositories;

use App\Models\Certificado;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class CertificadoRepository
 * @package App\Repositories
 * @version November 25, 2018, 5:12 am UTC
 *
 * @method Certificado findWithoutFail($id, $columns = ['*'])
 * @method Certificado find($id, $columns = ['*'])
 * @method Certificado first($columns = ['*'])
*/
class CertificadoRepository extends BaseRepository
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
        return Certificado::class;
    }
}
