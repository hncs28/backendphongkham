<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customers extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = "customerID";
    protected $table = "customers";
}
