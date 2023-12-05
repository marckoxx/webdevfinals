<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Helmet
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Helmet newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Helmet newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Helmet query()
 * @method static \Illuminate\Database\Eloquent\Builder|Helmet whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Helmet whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Helmet whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Helmet whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Helmet extends Model
{
    use HasFactory;

    protected $fillable = ['id','name'];
}
