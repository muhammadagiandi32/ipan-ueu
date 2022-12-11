<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\HasMany;
use app\Models\Bill;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [];
    protected $primaryKey = 'id_students';
    // public function user()
    // {
    //     return $this->belongsTo(User::class, 'user_id', 'id');
    // }
    public function bill()
    {
        return $this->HasMany(Bill::class, 'students_id', 'id_students');
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
