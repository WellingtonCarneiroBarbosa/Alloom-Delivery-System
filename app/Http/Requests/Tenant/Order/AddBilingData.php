<?php

namespace App\Http\Requests\Tenant\Order;

use App\Rules\FullName;
use Illuminate\Foundation\Http\FormRequest;

class AddBilingData extends FormRequest
{
    protected function sanitizeNumber($phone) {
        if($phone) //different null
            return preg_replace('/[^0-9]/', '', $phone);

        return $phone;
    }

    public function prepareForValidation() {
        $this->merge([
            "billing_phone" => $this->sanitizeNumber($this->get("billing_phone")),
            "billing_cep" => $this->sanitizeNumber($this->get("billing_cep")),
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
        if($this->get("pick_up_at_the_count") === 1) {
            $cepRule = ["required_if:pick_up_at_the_count,false", "min:8", "max:8"];
            $complementRule = ["required_if:pick_up_at_the_count,false", "min:3", "max:100"];
        }

        $rules = [
            "billing_name" => ["required", "min:3", "max:200", new FullName],
            "billing_phone" => ["required", "min:10", "max:11"],
            "pick_up_at_the_count" => ["required", "boolean"],
            "billing_cep" => $cepRule ?? ["required_if:pick_up_at_the_count,false"],
            "billing_complement" => $complementRule ?? ["required_if:pick_up_at_the_count,false"]
        ];

        return $rules;
    }
}
