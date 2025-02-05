<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contactus extends Model
{
    protected $table = 'contactus_tables';

    protected $fillable = [
        'name',
        'email',
        'subject',
        'message',
    ];

}
