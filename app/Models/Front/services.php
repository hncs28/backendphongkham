<?php

namespace App\Models\Front;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class services extends Model
{
    protected $table = 'services';
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'serviceID';
    use HasFactory;
}
