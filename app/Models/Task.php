<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['name', 'category', 'user_id', 'order'];

    public function category()
    {
        return $this->hasOne(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
