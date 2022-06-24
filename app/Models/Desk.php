<?php

namespace App\Models;

use App\Models\DeskList;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Desk extends Model
{
    use HasFactory;

    public function lists() {
        return $this->hasMany(DeskList::class);
    }
}
