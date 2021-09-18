<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * Class User
 * @package App\Models
 * @version March 21, 2021, 1:07 pm UTC
 *
 * @property string $name
 * @property string $email
 * @property string $first_name
 * @property string $Last_name
 * @property string $gender
 * @property string $date_of_birth
 * @property boolean $is_subscribed
 * @property integer $view_count
 * @property integer $role_id
 * @property string|\Carbon\Carbon $email_verified_at
 * @property string $password
 * @property string $remember_token
 */
class User extends Authenticatable
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'users';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'email',
        'first_name',
        'Last_name',
        'gender',
        'date_of_birth',
        'is_subscribed',
        'view_count',
        'role_id',
        'email_verified_at',
        'password',
        'remember_token'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'email' => 'string',
        'first_name' => 'string',
        'Last_name' => 'string',
        'gender' => 'string',
        'date_of_birth' => 'date',
        'is_subscribed' => 'boolean',
        'view_count' => 'integer',
        'role_id' => 'integer',
        'email_verified_at' => 'datetime',
        'password' => 'string',
        'remember_token' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string|max:191',
        'email' => 'required|string|max:191',
        'first_name' => 'nullable|string|max:191',
        'Last_name' => 'nullable|string|max:191',
        'gender' => 'nullable|string|max:191',
        'date_of_birth' => 'nullable',
        'is_subscribed' => 'nullable|boolean',
        'view_count' => 'required|integer',
        'role_id' => 'required|integer',
        'email_verified_at' => 'nullable',
        'password' => 'required|string|max:191',
        'remember_token' => 'nullable|string|max:100',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    public function role()
    {
        return $this->belongsTo('App\Models\Role');
    }
    public function courses()
    {
        return $this->belongsTo('App\Models\Course');
    }
}
