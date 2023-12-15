<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scholarship extends Model
{
    use HasFactory;

    protected $fillable = [
        'provider_id',
        'logo',
        'name',
        'brief_description',
        'deadline',
        'pdf_url',
    ];

    public function provider()
    {
        return $this->belongsTo(User::class, 'provider_id');
    }
}