<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acc extends Model
{
    //
    //public $table = "acc"; -----this need to be added when the table name is singular. (Current tablename: accs)
    protected $fillable = [
        'name', 'gender', 'phone',
    ];
}
