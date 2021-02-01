<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable   = ['alias', 'title', 'view', 'keywords', 'description'];
    protected $guarded    = ['id'];

    /**
     * Get the galleries for the article.
     */
    public function galleries()
    {
        return $this->belongsToMany('App\Gallery')->withTimestamps();
    }

    /**
     * Get the aliases for the article.
     */
    public function aliases()
    {
        return $this->hasMany('App\Alias');
    }

    /**
     * Get the commentaries for the article.
     */
    public function commentaries()
    {
        return $this->hasMany('App\Commentary')->orderBy('start_date', 'desc');
    }

    /**
     * Get the intros for the article.
     */
    public function intros()
    {
        return $this->hasMany('App\Intro')->orderBy('order');
    }

    /**
     * Get the gallery for the article.
     */
    public function gallery($alias)
    {

        foreach ($this->galleries as $gallery) {
            if ($gallery->alias == $alias) {
                return $gallery;
            }

        }

        return null;

    }
}
