<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\Response;

class StokOutRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'id_pegawai' => 'required',
            'by'         => 'required',
            'date'       => 'required',
            'objective'  => 'required',
        ];
    }

    public function messages()
    {
        return [
            'id_pegawai.required'  => 'Pegawai harus diisi!',
            'by.required'          => 'Dikeluarkan oleh harus diisi!',
            'date.required'        => 'Tanggal keluar harus diisi!',
            'objective.required'   => 'Tujuan harus diisi!',
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        $response = ['title'  => 'Gagal!', 'text'   => 'Data gagal ditambahkan!', 'type'   => 'error', 'button' => 'Okay!', 'class'  => 'danger', 'errors' => $validator->errors()];

        throw new HttpResponseException(Response::json($response));
    }
}
