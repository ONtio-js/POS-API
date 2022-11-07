<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory,
        HasUuids;

    protected $fillable = ['fullname','phone','country','email','state','street','postalcode'];
    public $timestamps = false;

    public function purchase(){
        $this->hasMany(Purchase::class);
    }
}
