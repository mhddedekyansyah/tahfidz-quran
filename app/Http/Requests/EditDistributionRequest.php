<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class EditDistributionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        
        return Auth::check() && Auth::user()->roles == 'ADMIN';
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'batch_id' => 'required',
            'tahfidz_house_id' => 'required',
            'total_rice' => 'required',
            'image_url' => 'image|mimes:png,jpg,jpeg|max:1024'
        ];
    }

    public function messages()
    {
        return [
            'batch_id.required' => 'batch wajib diisi',
            'tahfidz_house_id.required' => 'rumah tahfidz wajib diisi',
            'total_rice.required' => 'total beras wajib diisi',
            'image_url.image' => 'dokumentasi harus berupa file foto',
            'image_url.mimes' => 'file foto berupa png,jpg,jpeg',
            'image_url.max' => 'max 1.mb'
        ];
    }
}
