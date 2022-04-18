<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OurServices extends Model
{

    use HasFactory;
    public $timestamps = false;
    protected $table = "our_services";
    protected $guarded = [];
}
