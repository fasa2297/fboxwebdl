<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use HasFactory;

    protected $fillable = ['name'];
}

/**
 * terminal (tinker)
 * add =  App\Models\ProductCategory::create(['name'=>'Fauzi test'])
 */