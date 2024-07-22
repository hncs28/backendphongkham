<?php

namespace App\Models\Front;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    protected $table ='comment';
    public $primaryKey ='commentID';
    
    use HasFactory;
}
