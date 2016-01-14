<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Article extends Model
{

    // Excludes these fields from mass assignment checks.

    protected $fillable = [
    'title',
    'body',
    'published_at'
    ];

    // Allows 'published_at' to be passed as a Carbon instance instead of a date string.

    protected $dates = ['published_at'];

    // Mutator used to manipulate data before it is entered into the database.

    public function setPublishedAtAttribute($date)
    {
    	$this->attributes['published_at'] = Carbon::parse($date);
    }

    // Query scope used to only display articles where 'published_at' is less than now.

    public function scopePublished($query)
    {
    	$query->where('published_at', '<=', Carbon::now());
    }

    // Query scope used to only display articles that are set to be published in the future.

    public function scopeUnpublished($query)
    {
    	$query->where('published_at', '>', Carbon::now());
    }

    // The article belongs to a user.

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
