<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $table = 'kelas';

    protected $fillable = ['kelas'];

    public function users()
    {
        return $this->hasMany(User::class, 'kelas_id', 'id');
    }
}
