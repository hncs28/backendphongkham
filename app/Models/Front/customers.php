<?php

namespace App\Models\Front;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customers extends Model
{
    protected $table = 'customers';
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'customerID';
    use HasFactory;
}

