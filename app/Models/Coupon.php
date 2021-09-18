<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Coupon
 * @package App\Models
 * @version March 23, 2021, 1:59 pm UTC
 *
 * @property integer $user_id
 * @property string $student_id
 * @property integer $course_id
 * @property integer $category_id
 * @property integer $user_account_id
 * @property string $available_on_course_page
 * @property string $type
 * @property number $price
 * @property string $status
 * @property string|\Carbon\Carbon $deadline
 * @property number $countdown_timer
 * @property integer $total_available
 * @property integer $total_remaining
 */
class Coupon extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'coupons';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'user_id',
        'student_id',
        'course_id',
        'category_id',
        'user_account_id',
        'available_on_course_page',
        'type',
        'price',
        'status',
        'deadline',
        'countdown_timer',
        'total_available',
        'total_remaining'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'student_id' => 'string',
        'course_id' => 'integer',
        'category_id' => 'integer',
        'user_account_id' => 'integer',
        'available_on_course_page' => 'string',
        'type' => 'string',
        'price' => 'float',
        'status' => 'string',
        'deadline' => 'datetime',
        'countdown_timer' => 'float',
        'total_available' => 'integer',
        'total_remaining' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required|integer',
        'student_id' => 'required|string|max:191',
        'course_id' => 'nullable|integer',
        'category_id' => 'nullable|integer',
        'user_account_id' => 'nullable|integer',
        'available_on_course_page' => 'required|string|max:191',
        'type' => 'required|string|max:191',
        'price' => 'required|numeric',
        'status' => 'required|string|max:191',
        'deadline' => 'required',
        'countdown_timer' => 'nullable|numeric',
        'total_available' => 'required|integer',
        'total_remaining' => 'nullable|integer',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
