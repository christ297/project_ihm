<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * Les attributs pouvant être remplis via une requête.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'price',
        'description',
        'image',
    ];
}
