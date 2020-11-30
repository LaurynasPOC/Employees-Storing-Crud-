<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    use HasFactory;
    public $fillable = ['fullName', 'age', 'phoneNumber' ,'positions_id'];

    public function positions() {
        return $this->belongsTo('App\Models\Positions');
    }

}
