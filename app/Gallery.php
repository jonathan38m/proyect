<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable   = ['name', 'alias', 'ruta'];
    protected $guarded    = ['id'];

    public function article()
    {
        return $this->belongsTo('App\Article');
    }
    public function articles()
    {
        return $this->belongsToMany('App\Article')->withTimestamps();
    }
    public function images()
    {
        $images = array();

        $dirint = dir($this->ruta);
        while (($archivo = $dirint->read()) !== false) {
            if (substr($archivo, -4) == ".jpg" && substr($archivo, 0, 8) != "thumbail") {
                array_push($images, $archivo);
            }

        }
        $dirint->close();
        return $images;
    }
}
