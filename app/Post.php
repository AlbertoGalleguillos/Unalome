<?php

namespace App;

class Post extends Model {

    public function publish() {
        $this->published = true;
        $this->save();
    }

    public static function published() {
        return static::where('published', true)
                        ->orderBy('id','desc')
                        ->get();
    }
}