<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tweets extends Model
{
    use HasFactory;

    protected $table ='tweets';
// protected $primaryKey = 'tweet_id';
// public $incrementing = false;
// protected $keyType = 'string';
// public $timestamps = false;
// const CREATED_AT = 'creation_date';
// const UPDATED_AT ='updated_date';
}
