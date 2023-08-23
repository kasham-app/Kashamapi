<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'transaction_id',
        'amount',
        'currency',
        'status',
        'payment_method',
        'description',
        'sent_to',
        'received_from',
        'transaction_type',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
