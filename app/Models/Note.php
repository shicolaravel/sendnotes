<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;
    use HasUuids;

    protected $fillable = [
        'title',
        'body',
        'sent_date',
        'is_published',
        'heart_count',
    ];
}
