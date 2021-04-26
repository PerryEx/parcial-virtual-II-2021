<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "category";

    public $timestamps = false;

    protected $fillable = [
        "id","name_category"
    ];

    protected $primaryKey = "id";

}
