<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class ModelGender extends Model
{
    protected $table = "gender";
    public $timestamps = false;
    protected $fillable = ["id","name_gender"];

    protected $primaryKey = "id";
}
