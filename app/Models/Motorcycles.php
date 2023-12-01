<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motorcycles extends Model
{
    use HasFactory;

    protected $fillable = ['id','brand_id','model','type_id','year','daily_rate','availability','image_path'];

    public function brand(){
        return $this->belongsTo(Brands::class);
    }

    public function type(){
        return $this->belongsTo(Mototypes::class);
    }
}
