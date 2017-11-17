<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class PostedBook extends Model
{
    use notifiable;
    use SoftDeletes;

    protected $fillable = [
        'seller_id', 'price', 'description','author','year','title','availability','image','IBSN',
    ];
    protected $dates = ['deleted_at'];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    
    public function postedBy()
    {
        return $this->belongsTo('App\User','seller_id');
    }
    public function postedCategory()
    {
        return $this->hasMany('App\PostedCategory','posted_id');
    }
    public function getCategory()
    {
        return $this->belongsToMany('App\Category','posted_categories','posted_id','category_id');
    }
    public function scopeSearch($query, $search)
    {
        return $query->whereTitle($search)->orWhere('IBSN',$search);
    }
    public function scopeDetails($query, $id)
    {
        return $query->whereId($id);
    }
   
}
