<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $name;
 * @property int $price;
 * @property string $currency;
 */
class Product extends Model
{
    use HasFactory;
}
