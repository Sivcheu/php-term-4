<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $event = "events";
    protected $fillable=[
        'title',
        'description',
        'start',
        'end',
        'image'
    ];
    /**
     * @var mixed|string
     */

    public function isJoin($user_id)
    {
        $isJoin = EventHasUser::where("user_id",$user_id)->where("event_id",$this->id)->first();
        return $isJoin;
    }

}
