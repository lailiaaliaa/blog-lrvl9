<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePost extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //memberi aturan title wajib diisi, minimal 5 huruf, maksimal 100 huruf
            'title' => 'required|min:5|max:100',

            //memberi aturan content wajib diisi, minimal 10 huruf, maksimal 2000 huruf
            'content' => 'required|min:10|max:2000'
        ];
    }
}
