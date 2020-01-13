<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Internet extends Model
{
    protected $fillable = [
        'safeEmail', 'domainName', 'url', 'ipv6'
    ];

}
