<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
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
    public function rules()
    {
        return [
            'email' => 'required|email|max:255',
            'message' => 'required|min:5|max:2000',
        ];
    }

    public function messages()
    {
        return [
            'email.required' => '邮箱地址是必填项',
            'email.email' => '请输入有效的邮箱地址',
            'message.required' => '咨询内容不能为空',
            'message.min' => '咨询内容至少需要10个字符',
            'message.max' => '咨询内容不能超过2000个字符',
        ];
    }
}
