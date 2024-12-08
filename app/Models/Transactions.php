<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Transactions extends Model
{
    use HasFactory;

    protected $table = "transactions";

    protected $fillable = [
        'type',
        'amount'
    ];

    public function accounts(){
        return $this->belongsTo(Accounts::class,"account_id");
    }
}
