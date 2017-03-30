<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="siswa",
 *      required={"nama"},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="nama",
 *          description="nama",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="kelas",
 *          description="kelas",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="jurusan",
 *          description="jurusan",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="sekolah",
 *          description="sekolah",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="created_at",
 *          description="created_at",
 *          type="string",
 *          format="date-time"
 *      ),
 *      @SWG\Property(
 *          property="updated_at",
 *          description="updated_at",
 *          type="string",
 *          format="date-time"
 *      )
 * )
 */
class siswa extends Model
{
    use SoftDeletes;

    public $table = 'siswas';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nama',
        'kelas',
        'jurusan',
        'sekolah'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nama' => 'string',
        'kelas' => 'string',
        'jurusan' => 'string',
        'sekolah' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nama' => 'required'
    ];

    
}
