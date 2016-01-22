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

    /**
     * @param $date
     */
    public function setPublishedAtAttribute($date)
    {
    	$this->attributes['published_at'] = Carbon::parse($date);
    }

    // Query scope used to only display articles where 'published_at' is less than now.

    /**
     * @param $query
     */
    public function scopePublished($query)
    {
    	$query->where('published_at', '<=', Carbon::now());
    }

    // Query scope used to only display articles that are set to be published in the future.

    /**
     * @param $query
     */
    public function scopeUnpublished($query)
    {
    	$query->where('published_at', '>', Carbon::now());
    }

    // The article belongs to a user.

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    // Get the tags associated with the given article.

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tags()
    {
        return $this->belongsToMany('App\Tag')->withTimestamps();
    }

    /**
     * Get a list of tag ids associated with current article.
     *
     * @return array
     */
    public function getTagListAttribute()
    {
        return $this->tags->lists('id')->all();
    }
}
