<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    protected $fillable = ['patient_name'];

    // Define the relationship with prescriptions
    public function prescriptions()
    {
        return $this->hasMany(Prescription::class);
    }
}
