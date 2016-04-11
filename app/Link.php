<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Link extends Model {

    protected $fillable = [
        'link',
        'user_id',
        'category_id',
        'title',
        'image',
        'tags',
        'views',
        'url',
        'icon'
    ];
    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
