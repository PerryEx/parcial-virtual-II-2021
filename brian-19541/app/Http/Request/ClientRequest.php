<?php


namespace App\Http\Request;


use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return  bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return  array
     */
    public function rules()
    {
        return [
            'name_client' => [
                'required',
            ],
            'birthday_date' => [
                'required',
            ],
            'age_client' => [
                'required',
            ],
            'email_client' => [
                'required',
            ],
            'number_telefon' => [
                'required',
            ],
            'category_client' => [
                'required',
            ],
            'gender_client' => [
                'required',
            ],
            'departament_client' => [
                'required',
            ],
        ];
    }
}
