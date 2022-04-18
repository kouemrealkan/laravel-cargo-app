<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CargoTransit extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = "cargo_transits";

    public function contact_forms(){
        return $this->hasMany(ContactForm::class);
    }


    public function user(){
        return $this->belongsTo(User::class);
    }


}
