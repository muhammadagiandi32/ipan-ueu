<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;
    protected $fillable = [];
    protected $primaryKey = 'id_bill';

    public function student()
    {
        return $this->HasMany(Student::class, 'id_students', 'students_id');
    }
}
