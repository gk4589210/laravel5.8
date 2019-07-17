<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class validateTestPost extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //return false;
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'name'=>'required|email'

        ];
    }

    public function messages()
    {
        //return parent::messages(); // TODO: Change the autogenerated stub
        return [
          'name.required'=>'填个名字吧，老头',
          'name.email'=>'邮箱不对'
        ];
    }
}
