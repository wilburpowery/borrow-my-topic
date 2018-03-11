<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TopicPresentationFeedback extends Model
{
    protected $fillable = [
        'link',
        'topic_presentation_id',
    ];

    public function presentations()
    {
        return $this->belongsTo(TopicPresentation::class);
    }
}
