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
        'id_user', 'id_calon',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
