<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    use HasFactory;

    public $fillable = [
        "business_name",
        "business_location",
        "business_phone_number",
        "website_link",
        "category_id",
        "user_id",
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
