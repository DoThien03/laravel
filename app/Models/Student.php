<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    const STATUS_DRAFT = 'Vắng mặt';
    const STATUS_PUBLISH = 'Có mặt';
    protected $fillable = [
        'tenlop',
        'masv',
        'tensv',
        'anh',
        'trangthai',

    ];
}
