<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookink extends Model
{
    use HasFactory;

    protected $table = "bookinks";

    protected $fillable = ["name", "email", "url", "msg"];
}
