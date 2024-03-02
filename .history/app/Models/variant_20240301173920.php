<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class variant extends Model
{
    use HasFactory;
    protected $fillable=[
        'id',
        'title',
        'Option1',
        'Option2',
        'price',
        'Stock',
        'Is_In_Stock'
    ];
}
