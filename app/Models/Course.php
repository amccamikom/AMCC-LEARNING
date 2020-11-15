<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Course extends Model
{
    protected $guarded = [
        'id', 'created_at', 'updated_at'
    ];

    /**
     * Get Route with slug
     *
     * @return void
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * method for set attachment in storage to DB
     *
     * @param [type] $value
     * @return void
     */
    public function setAttachmentAttribute($value)
    {
        $this->attributes['attachment'] = Storage::disk('public')->put('course', $value);
    }

    /**
     * method for get attachment stored in DB
     *
     * @param [type] $value
     * @return void
     */
    public function getAttachmentAttribute($value)
    {
        return Storage::disk('public')->url($value);
    }
    
    protected static function boot()
    {
        parent::boot();
        static::saving(function ($model) {
            $model->slug = \Illuminate\Support\Str::slug($model->title);
        });

        static::deleting(function($model){
            Storage::disk('public')->delete($model->attachment);
        });
    }
}
