<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePersonalRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name_surname'         => ['required', 'max:255'],
            'phone'                => ['required', 'max:50', 'unique:personals,phone'],
            'email'                => ['nullable', 'email', 'max:255', 'unique:personals,email'],
            'username'             => ['required', 'max:255', 'unique:personals,username'],
            'work_start_date'      => ['nullable', 'date'],
            'work_end_date'        => ['nullable', 'date'],
            'hourly_price'         => ['nullable', 'decimal'],
            'password'             => ['required', 'string', 'min:8', 'confirmed'],
            'position'             => ['required', 'in:draft,published,archived'],
            'status'               => ['sometimes','boolean'],
        ];
    }

    public function messages(): array
    {
        return [
            'name_surname.required'     => 'Ad ve soyad alanı zorunludur.',
            'name_surname.max'          => 'Ad ve soyad en fazla :max karakter olabilir.',
            'email.email'               => 'Geçerli bir e-posta adresi giriniz.',
            'email.unique'              => 'Bu e-posta zaten kayıtlı.',
            'phone.required'            => 'Telefon alanı zorunludur.',
            'phone.unique'              => 'Bu telefon numarası zaten kayıtlı.',
            'password.required'         => 'Şifre alanı zorunludur.',
            'password.min'              => 'Şifre en az :min karakter olmalıdır.',
            'password.confirmed'        => 'Şifre doğrulaması eşleşmiyor.',
            'position.required'         => 'Rol seçimi zorunludur.',
            'position.in'               => 'Rol yalnızca admin, editor veya viewer olabilir.',
            'status.boolean'            => 'Durum alanı aktif veya pasif olmalıdır.',
        ];
    }
}
