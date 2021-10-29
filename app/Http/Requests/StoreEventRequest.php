<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEventRequest extends FormRequest
{
    protected $redirectRoute = 'events.create';

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|unique:events|max:255',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
        ];
    }
}
