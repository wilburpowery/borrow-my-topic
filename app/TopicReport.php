<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TopicReport extends Model
{
    protected $fillable = [
        'reasons',
        'links',
        'topic_id',
    ];

    protected $casts = [
        'topic_id' => 'integer',
    ];

    public function topic()
    {
        return $this->belongsTo(Topic::class);
    }
}
