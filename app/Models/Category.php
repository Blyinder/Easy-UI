<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table="category";
    protected $primarykey="id_category";
    public $timestamps = true;

    protected $fillable=[
        "id_category",
        "name_category"
    ];
}
