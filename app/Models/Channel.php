<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Model;

class Channel extends Model
{
    use HasFactory;

    public function user()
    {
        $this->belongsTo(User::class);
    }
}
