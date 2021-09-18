<?php

namespace App\Repositories;

use App\Models\Comment;
use App\Repositories\BaseRepository;

/**
 * Class CommentRepository
 * @package App\Repositories
 * @version March 21, 2021, 9:36 am UTC
*/

class CommentRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'course_id',
        'category_id',
        'body'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Comment::class;
    }
}
