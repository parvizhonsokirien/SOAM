<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desk extends Model
{

    protected $fillable = ['name'];

    public function lists()
    {
        return $this->hasMany(DeskList::class);
    }
}
