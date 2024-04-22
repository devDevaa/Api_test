<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        "event_name",
        "event_slug",
        "event_description",
        "event_image",
        "event_date",
    ];
}
