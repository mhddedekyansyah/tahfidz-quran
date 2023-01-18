<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TahfidzHouse extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name', 'address', 'contact', 'total_santri', 'total_santri_yatim', 'total_santri_dhuafa'];

    public function distribution()
    {
        return $this->hasOne(Distribution::class);
    }

    // public function setContactAttribute($value){
    //     $this->attributes['contact'] = $value.;
    // }

}
