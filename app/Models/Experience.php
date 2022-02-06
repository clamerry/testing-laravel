<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $with = ['user'];

    public function User()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}

