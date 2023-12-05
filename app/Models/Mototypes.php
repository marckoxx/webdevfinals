<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Mototypes
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Motorcycles> $motorcycles
 * @property-read int|null $motorcycles_count
 * @method static \Illuminate\Database\Eloquent\Builder|Mototypes newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Mototypes newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Mototypes query()
 * @method static \Illuminate\Database\Eloquent\Builder|Mototypes whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mototypes whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mototypes whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mototypes whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Mototypes extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'name'];

    public function motorcycles(){
        return $this->hasMany(Motorcycles::class);
    }
}
