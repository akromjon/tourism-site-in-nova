<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Artisan;

class Tour extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'duration',
        'slug',
        'price',
        'image',
        'status',
        'location',
    ];

    public function getImageAttribute()
    {

        if(isset($this->attributes['image'])){
        return $this->attributes['image'] = "/".$this->attributes['image'];

        }

    }

    protected $table = 'tours';

    public function getFpriceAttribute(){
        return number_format($this->attributes['price'], 0) . " UZS";
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'tour_tags', 'tour_id', 'tag_id');
    }

    public static function boot()
    {
        parent::boot();

        static::created(function ($tour) {
            Artisan::call('cache:clear');
        });

        static::updated(function ($tour) {
            Artisan::call('cache:clear');
        });

    }
}
