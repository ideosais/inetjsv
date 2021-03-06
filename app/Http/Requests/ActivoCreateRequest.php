<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ActivoCreateRequest extends Request
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
            'nombre' => 'required|max:80',
            'delegacion' => 'required',
            'empresa' => 'required',
            'responsable_mtmo' => 'required',
            'grupo' => 'required',
            'clase' => 'required',
        ];
    }
}
