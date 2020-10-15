<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
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
            'nama_event' => 'required|max:20',
            'total_pertandingan' => 'required|max:3',
            'peraturan' => 'required|max:100',
            // 'logo_squad' => 'required',
            'grup_wa' => 'required',
            'jadwal' => 'required',
        ];
    }
}
