<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'created_by',
        'description',
        'views',
        'music_date',
    ];

    public function creator(){
        return $this->belongsTo(User::class, 'created_by', 'id');
    }
}
