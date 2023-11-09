<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StaffUsers extends Model
{
    use HasFactory;
protected $fillable = [
    "user_id",
    "firstname",
    "lastname",
    "role",
    "profile",
];

public function users()
{
    return $this->belongsTo(User::class);
}
}