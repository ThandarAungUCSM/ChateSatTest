<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TripData extends Model
{
    //
    protected $fillable = ["pack_name", "pack_description", "pack_type", "total_credit", "tag_name", "validity_month", "pack_price", "newbie_first_attend", "newbie_addition_credit", "pack_alias", "estimate_price"];
    public $timestamps = false;
}