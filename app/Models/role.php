<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    protected $fillable = ['name', 'desc'];

    public function users() {
        return $this->belongsToMany(User::class);
    }
}
