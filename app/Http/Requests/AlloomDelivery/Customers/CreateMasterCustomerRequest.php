<?php

namespace App\Http\Requests\AlloomDelivery\Customers;

use Illuminate\Foundation\Http\FormRequest;

class CreateMasterCustomerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
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
            'email' => 'required|email|unique:alloom_customer_users,email',
            'name' => 'required'
        ];
    }
}
