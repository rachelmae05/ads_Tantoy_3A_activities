<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function course() {
        return $this->belongsTo(Course::class);
    }
    use HasFactory;
    protected $fillable = ['first_name', 'last_name', 'email', 'age'];
}
