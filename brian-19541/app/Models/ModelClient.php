<?php


namespace App\Models;


use App\Http\Request\GenderRequest;
use Departament;
use Gender;
use Illuminate\Database\Eloquent\Model;

class ModelClient extends Model
{
    protected $table = "client";
    public $timestamps = false;
    protected $fillable = ["id","name_client", "birthday_date", "age_client", "email_client", "number_telefon",
        "category_client", "gender_client", "departament_client"
        ];

    protected $primaryKey = "id";

    public function Category(){
        return $this->hasOne(Category::class);
    }

    public function Gender(){
        return $this->hasOne(Gender::class);
    }

    public function Departament(){
        return $this->hasOne(Departament::class);
    }
}
