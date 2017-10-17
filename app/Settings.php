<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    //

    protected $fillable = [
        'contact_numberFr',
        'contact_numberEn',
        'contact_emailEn',
        'contact_emailFr',
        'addresse',
        'introductionVideo',
        'aboutUs',
        'aboutFr',
        'youtube',
        'facebook',
        'twitter',
        'copyrightEn',
        'copyrightFr'
    ];
}
