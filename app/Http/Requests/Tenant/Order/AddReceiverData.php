<?php

namespace App\Http\Requests\Tenant\Order;

use App\Rules\FullName;
use Illuminate\Foundation\Http\FormRequest;

class AddReceiverData extends FormRequest
{
    protected function sanitizeNumber($phone) {
        if($phone) //different null
            return preg_replace('/[^0-9]/', '', $phone);

        return $phone;
    }

    public function prepareForValidation() {
        $this->merge([
            "receiver_phone" => $this->sanitizeNumber($this->get("receiver_phone")),
            "receiver_cep" => $this->sanitizeNumber($this->get("receiver_cep")),
        ]);
    }

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
        if($this->get("pick_up_at_the_counter") === 1) {
            $stateRule = ["nullable"];
            $cityRule = ["nullable"];
            $addressRule = ["nullable"];
        }

        $rules = [
            "receiver_name" => ["required", "min:3", "max:200", new FullName],
            "receiver_phone" => ["required", "min:10", "max:11"],
            "access_key" => ["required", "min:11", "max:11"],
            "pick_up_at_the_counter" => ["nullable"],
            "state" => $stateRule ?? ["required"],
            "city" => $cityRule ?? ["required"],
            "address" => $addressRule ?? ["required", "min:10", "max:100"]
        ];

        return $rules;
    }
}
