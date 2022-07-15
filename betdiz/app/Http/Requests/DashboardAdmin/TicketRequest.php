<?php

namespace App\Http\Requests\DashboardAdmin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class TicketRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {   
        return [
            "initial_date" => 'required',
            "final_date" => 'required',
            "initial_time" => 'required',
            "final_time" => 'required',
            "price" => 'required',
            "cms" => 'required',
            "status" => 'required',
            "num_match" => "required",
        ];
    }
}
