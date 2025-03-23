<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    // Define the fillable properties
    protected $fillable = ['name', 'email', 'phone', 'dob', 'college_id'];

    // Define the relationship with the College model
    public function college()
    {
        return $this->belongsTo(College::class);
    }
}

?>