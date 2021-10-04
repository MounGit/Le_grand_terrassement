<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    protected $table = "sections";

    protected $fillable = ["video", "logo", "sect1_title", "sect1_subtitle", "sect1_bg", "sect2_title", "sect2_subtitle", "sect2_bg", "sect3_title", "sect3_subtitle", "sect3_bg", "sect4_title", "sect4_subtitle", "sect4_bg"];
}
