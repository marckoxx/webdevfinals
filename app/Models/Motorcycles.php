<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Motorcycles
 *
 * @property int $id
 * @property int $brand_id
 * @property string $model
 * @property int $type_id
 * @property string $year
 * @property string $daily_rate
 * @property int $availability
 * @property string|null $image_path
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Brands $brand
 * @property-read \App\Models\Mototypes $type
 * @method static \Illuminate\Database\Eloquent\Builder|Motorcycles newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Motorcycles newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Motorcycles query()
 * @method static \Illuminate\Database\Eloquent\Builder|Motorcycles whereAvailability($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Motorcycles whereBrandId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Motorcycles whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Motorcycles whereDailyRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Motorcycles whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Motorcycles whereImagePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Motorcycles whereModel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Motorcycles whereTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Motorcycles whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Motorcycles whereYear($value)
 * @mixin \Eloquent
 */
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
