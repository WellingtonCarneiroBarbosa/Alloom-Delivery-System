<?php

namespace App\Rules\Pizza;

use App\Models\Franchise\Pizza\Size;
use Illuminate\Contracts\Validation\Rule;

class AddPizzaToCartRule implements Rule
{
    protected $pizza_size_id;
    protected $message;

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($pizza_size_id, $message=null)
    {
        $this->pizza_size_id = $pizza_size_id;
        $this->message = $message;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $pizza_size = Size::find($this->pizza_size_id);

        if($pizza_size)
            if(count($value) > $pizza_size->max_flavors)
                return false;

        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return "Escolha a quantidade correta de sabores.";
    }
}
