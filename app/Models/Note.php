<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    protected $table = "notes";

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function folder(){
        return $this->belongsTo(Folder::class);
    }
}