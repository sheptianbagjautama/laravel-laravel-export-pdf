<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    protected $table = "user_detail";
    protected $fillable = ['full_name','street_address','zip_code','city'];
}
