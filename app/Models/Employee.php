<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $table = "employees";

    public $timestamps = false;

    protected $fillable = [
        'full_name',
        'birth_date',
        'address',
        'phone',
        'date_registration',
        'position',
        'salary'
    ];
}
