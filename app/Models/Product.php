<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'product';

    protected $fillable = [
        'SellerID',
        'Title',
        'Description',
        'Price',
        'Category',
        'Condition',
        'Image',
    ];

    protected $primaryKey = 'ProductID';



}
