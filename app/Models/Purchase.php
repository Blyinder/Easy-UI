<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;
    protected $table="purchase";
    protected $primarykey="id_purchase";
    public $timestamps = true;

    protected $fillable=[
        "id_purchase",
        "id_users",
        "id_template"
    ];
}

