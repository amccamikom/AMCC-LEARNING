<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [
        'id', 'created_at', 'updated_at'
    ];

    /**
     * method for define product one to many courses
     *
     * @return void
     */
    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}
