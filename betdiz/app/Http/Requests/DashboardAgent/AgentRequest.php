<?php

namespace App\Http\Requests\DashboardAgent;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class AgentRequest extends FormRequest
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
            "name" => 'required',
            "email" => 'required|email|unique:users',
            "password" => 'required',
            "number_phone" => 'required',
            "limit" => 'required',
            "number_phone" => 'required',
            "category" => 'required',
            "pix" => "required",
            "status" => "required",
        ];
    }
}
