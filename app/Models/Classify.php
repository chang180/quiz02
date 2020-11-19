<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classify extends Model
{
    use HasFactory;
    protected $fillable=['classify'];

    public function title(){
        return $this->hasMany("App\Models\Title");
    }
}
