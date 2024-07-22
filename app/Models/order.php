<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    protected $table = 'order';

    public function customer(){
        return $this->belongsTo(customers::class, 'customerID', 'customerID');
    } 
    public function service() {
        return $this->belongsTo(services::class,'serviceID', 'serviceID');
    }
    public function employee() {
        return $this->belongsTo(employee::class,'employeeID', 'employeeID');
    }
}
