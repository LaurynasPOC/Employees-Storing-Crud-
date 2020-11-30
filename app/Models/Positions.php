<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Positions extends Model
{
    use HasFactory;
    public $fillable = ['positions'];

    public function employees() {
        return $this->hasMany('App\Models\Employees');
    }

}
