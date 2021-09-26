<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class Welcome extends Model
{
    use HasFactory;

    protected $table = "welcomes";

    protected $fillable = ["about_part1", "about_part2", "award_part1", "award_part2"];
}
