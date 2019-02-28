<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{

    public function author()
    {
        return $this->belongsTo(User::class);
    }

    public function getImageUrlAttribute($value)
    {
        $imageUrl="";
        if(!is_null($this->image))
        {
            $imagePath = public_path() . "/img/" . $this->image;
            if(file_exists($imagePath)) $imageUrl = asset("img/" . $this->image);
        }
        return $imageUrl;
    }
}
