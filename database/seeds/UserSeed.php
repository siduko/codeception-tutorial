<?php

use App\Models\User;

/**
 * User: Lai Vu <vuldh@nal.vn>
 * Date: 5/3/18
 * Time: 4:26 PM
 */

class UserSeed {
    function run()
    {
        $user = new User;
        $user->username = "Test User";
        $user->save();
    }
}