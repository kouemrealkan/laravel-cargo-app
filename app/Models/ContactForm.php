<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactForm extends Model
{
    protected $guarded = [];
    protected $table = "contact_forms";
    use HasFactory;

    public function cargo_transit(){
        return $this->belongsTo(CargoTransit::class,'cargo_id');
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

}
