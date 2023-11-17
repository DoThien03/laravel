<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    const STATUS_DRAFT = 'draft';
    const STATUS_PUBLIC = 'public';
    protected $fillable = [
        'title',
        'image',
        'description',
        'status'
    ];
}
