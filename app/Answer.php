<?php
/**
 * Created by PhpStorm.
 * User: DEV
 * Date: 8/10/2559
 * Time: 20:34
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{

    public function user()
    {
        return $this->belongsTo(User::class, "user_id");
    }

    public function questions()
    {
        return $this->belongsToMany(Question::class);
    }

}
