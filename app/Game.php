<?php namespace App;


use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = [
        'title',
    ];

    public function users() {
        return $this->belongsToMany(User::class);
    }

}