<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookink extends Model
{
    use HasFactory;

    protected $table = "bookinks";

    protected $fillable = ["title1", "title2", "title3", "subtitle", "adress1", "adress2", "adress3", "phone", "mday", "tuday", "wday", "thday", "fday", "satday", "sunday"];
}
