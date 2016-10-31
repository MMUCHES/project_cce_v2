<?php
/**
 * Created by PhpStorm.
 * User: DEV
 * Date: 8/10/2559
 * Time: 20:34
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Question extends Model
{

    public function children()
    {
        return $this->hasMany(Question::class, "parent_id");
    }

}
