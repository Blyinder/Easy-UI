<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Copy extends Model
{
    use HasFactory;
    protected $table="copy";
    protected $primarykey="id_copy";
    public $timestamps = true;

    protected $fillable=[
        "id_copy",
        "id_users",
        "id_components"
    ];
}

