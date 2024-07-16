<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;
    protected $table="subscription";
    protected $primarykey="id_subscription";
    public $timestamps = true;

    protected $fillable=[
        "id_subscription",
        "name_subscription",
        "price_subscription",
        "duration"
    ];
}
