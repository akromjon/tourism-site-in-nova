<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Artisan;

class Gallery extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'title',
    ];

    public function getImageAttribute()
    {

        if(isset($this->attributes['image'])){
            return $this->attributes['image'] = "/".$this->attributes['image'];
        }


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
