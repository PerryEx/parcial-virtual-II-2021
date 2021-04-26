<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class ModelDepartament extends Model
{
    protected $table = "departament";
    public $timestamps = false;
    protected $fillable = ["id","name_departament", "department_address"];

    protected $primaryKey = "id";
}
