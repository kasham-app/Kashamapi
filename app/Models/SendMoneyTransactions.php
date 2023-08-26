<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SendMoneyTransactions extends Model
{
    use HasFactory;

    protected $fillable  = [
        'transfer_through', //specify to send money by kashamtag or phone number

        //through phone nuber
        'senders_phone',
        'receivers_phone',

        //general
        'location', //optional

        //through kashamtag
        'senders_phone',
        'receivers_kashamtag',


    ];
}
