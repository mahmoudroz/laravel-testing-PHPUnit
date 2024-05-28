<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Country extends Model implements TranslatableContract
{
    use Translatable, HasFactory;

    protected $table   = 'countries';
    public $translatedAttributes = ['name'];
    protected $guarded = [];
    protected $hidden  = ['translations'];
}
