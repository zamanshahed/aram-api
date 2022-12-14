<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    // cause customer has many invoices
    public function invoices(){
        return $this->hasMany(Invoice::class); 
    }
}
