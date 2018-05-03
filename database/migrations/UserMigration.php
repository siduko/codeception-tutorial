<?php
/**
 * User: Lai Vu <vuldh@nal.vn>
 * Date: 5/3/18
 * Time: 4:24 PM
 */

use Illuminate\Database\Capsule\Manager as Capsule;
/**
 * Example migration for use with "novice"
 */
class UserMigration {
    function run()
    {
        Capsule::schema()->dropIfExists('users');
        Capsule::schema()->create('users', function($table) {
            $table->increments('id');
            $table->string('username');
            $table->timestamps();
        });
    }
}