<?php

namespace App\Models\Front;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    protected $table = 'employee';
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'employeeID';
    use HasFactory;
}
