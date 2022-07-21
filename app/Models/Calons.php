<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Voting;

class Calons extends Model
{
    use HasFactory;

    protected $table = 'calons';
    
    protected $fillable = [
        'id_calon', 'nama_ketua', 'nama_wakil', 'foto_calon', 'visi', 'misi', 'suara'
    ];

    public function voting()
    {
        return $this->belongsTo(Voting::class, 'id_calon');
    }
}
