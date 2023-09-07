<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $table = 'profile';
    public $timestamps = false;

    public function status()
    {
        return $this->belongsTo(Status::class, "status_id", "id");
    }
}
