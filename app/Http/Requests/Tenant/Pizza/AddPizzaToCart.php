<?php

namespace App\Http\Requests\Tenant\Pizza;

use App\Rules\Pizza\AddPizzaToCartRule;
use Illuminate\Foundation\Http\FormRequest;

class AddPizzaToCart extends FormRequest
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
        $rules = [
            "pizza_size_id" => ['required', 'exists:pizza_sizes,id'],
            "pizza_flavors_id" => ['required', 'array', new AddPizzaToCartRule($this->get("pizza_size_id"))],
            "quantity" => ['required']
        ];

        if($this->get("pizza_border_id")) {
            $rules["pizza_border_id"] = ["sometimes", "exists:pizza_borders,id"];
        }

        return $rules;
    }
}
