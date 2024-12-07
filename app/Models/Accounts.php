<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Accounts extends Model
{
    use HasFactory;

    protected $fillable = [
        "account_number",
        "balance",
        "status"
    ];

    public function users(){
        return $this->belongsTo(User::class,"id_user");
    }

    public function transactions(){
        return $this->hasMany(Transactions::class);
    }
}
