<?php

namespace App\Repositories;

use App\Models\siswa;
use InfyOm\Generator\Common\BaseRepository;

class siswaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama',
        'kelas',
        'jurusan',
        'sekolah'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return siswa::class;
    }
}
