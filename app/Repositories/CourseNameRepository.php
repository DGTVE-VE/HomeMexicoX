<?php

namespace App\Repositories;

use App\Models\CourseName;
use InfyOm\Generator\Common\BaseRepository;

class CourseNameRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return CourseName::class;
    }
}
