<?php

namespace App\Models;

use App\Http\Requests\DistributionRequest;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Request;

class Distribution extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['batch_id', 'tahfidz_house_id', 'total_rice', 'image_url'];

    public function tahfidzHouse()
    {
        return $this->belongsTo(TahfidzHouse::class);
    }

    public function batch()
    {
        return $this->belongsTo(Batch::class);
    }

    public function setTotalRiceAttribute($value)
    {
        $this->attributes['total_rice'] = $value . 'kg';
    }
}
