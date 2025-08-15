<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'wishlist_link',
        'paypal_email',
        'unique_slug',
    ];

    protected static function booted()
    {
        parent::boot();

        static::creating(function ($teacher) {
            $teacher->unique_slug = Str::random(5);
        });
    }

    public function getShareableUrlAttribute() {
        return url('/teacher/' . $this->unique_slug);
    }
}
