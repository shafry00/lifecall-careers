<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\Response;

class StokInRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'by'          => 'required',
            'date'        => 'required',
            'description' => 'required',
            'attachment'  => 'required|mimes:pdf',
        ];
    }

    public function messages()
    {
        return [
            'by.required'          => 'Dimasukkan oleh harus diisi!',
            'date.required'        => 'Tanggal harus diisi!',
            'description.required' => 'Deskripsi harus diisi!',
            'attachment.required'  => 'Lampiran harus diisi!',
            'attachment.mimes'     => 'Lampiran harus berupa pdf!',
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        $response = ['title'  => 'Gagal!', 'text'   => 'Data gagal ditambahkan!', 'type'   => 'error', 'button' => 'Okay!', 'class'  => 'danger', 'errors' => $validator->errors()];

        throw new HttpResponseException(Response::json($response));
    }
}
