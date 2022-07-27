<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Voting;
use App\Models\User;

class Calons extends Model
{
    use HasFactory;

    protected $table = 'calons';

    protected $fillable = [
        'id', 'nama_ketua', 'nama_wakil', 'foto_calon', 'visi', 'misi', 'suara'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }
}
