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
        return [
            "unit_id" => ['required', 'exists:restaurants,id'],
            "pizza_size_id" => ['required', 'exists:pizza_sizes,id'],
            "pizza_flavors" => ['required', 'array', new AddPizzaToCartRule($this->get("pizza_size_id"))],
            "traditional_border" => ["required"],
            "pizza_border_type_id" => ["required_if:traditional_border,null", "exists:pizza_border_types,id"],
            "pizza_order_qty" => ['required']
        ];
    }
}
