<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
    use HasFactory;

    protected $table = "folders";

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function notes(){
        return $this->hasMany(Note::class);
    }
}
