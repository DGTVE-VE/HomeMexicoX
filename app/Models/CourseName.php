<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="CourseName",
 *      required={""},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="course_id",
 *          description="course_id",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="course_name",
 *          description="course_name",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="inicio",
 *          description="inicio",
 *          type="string",
 *          format="date"
 *      ),
 *      @SWG\Property(
 *          property="fin",
 *          description="fin",
 *          type="string",
 *          format="date"
 *      ),
 *      @SWG\Property(
 *          property="inicio_inscripcion",
 *          description="inicio_inscripcion",
 *          type="string",
 *          format="date"
 *      ),
 *      @SWG\Property(
 *          property="fin_inscripcion",
 *          description="fin_inscripcion",
 *          type="string",
 *          format="date"
 *      ),
 *      @SWG\Property(
 *          property="descripcion",
 *          description="descripcion",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="thumbnail",
 *          description="thumbnail",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="institucion",
 *          description="institucion",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="activo",
 *          description="activo",
 *          type="boolean"
 *      )
 * )
 */
class CourseName extends Model
{
    use SoftDeletes;

    public $table = 'course_name';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'course_id',
        'course_name',
        'inicio',
        'fin',
        'inicio_inscripcion',
        'fin_inscripcion',
        'descripcion',
        'thumbnail',
        'institucion',
        'activo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'course_id' => 'string',
        'course_name' => 'string',
        'inicio' => 'date',
        'fin' => 'date',
        'inicio_inscripcion' => 'date',
        'fin_inscripcion' => 'date',
        'descripcion' => 'string',
        'thumbnail' => 'string',
        'institucion' => 'string',
        'activo' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];
}
