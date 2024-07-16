<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    use HasFactory;
    protected $table="templates";
    protected $primarykey="id_templates";
    public $timestamps = true;

    protected $fillable=[
        "id_templates",
        "title_templates",
        "description_templates",
        "price_templates",
        "fileurl",
        "image_templates",
        "id_users"
    ];
}

