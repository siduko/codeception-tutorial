<?php
/**
 * User: Lai Vu <vuldh@nal.vn>
 * Date: 5/3/18
 * Time: 4:22 PM
 */

namespace App\Models;
use Illuminate\Database\Eloquent\Model as Eloquent;

class User extends Eloquent {
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = array('password');
}