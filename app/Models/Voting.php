<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Calons;

class Voting extends Model
{
    use HasFactory;

    protected $table = 'votings';

    protected $fillable = [
        'nama', 'kelas', 'id_calon',
    ];

    public function calons()
    {
        return $this->hasMany(Calons::class);
    }
}
