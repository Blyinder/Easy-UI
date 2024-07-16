<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $table="transaction";
    protected $primarykey="id_transaction";
    public $timestamps = true;

    protected $fillable=[
        "id_transaction",
        "amount",
        "status",
        "type",
        "id_users"
    ];
}
