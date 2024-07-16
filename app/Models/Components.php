<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Components extends Model
{
    use HasFactory;
    protected $table="components";
    protected $primarykey="id_components";
    public $timestamps = true;

    protected $fillable=[
        "id_components",
        "title_components",
        "description_components",
        "code",
        "preview_image",
        "acess_level",
        "id_category"
    ];
}

