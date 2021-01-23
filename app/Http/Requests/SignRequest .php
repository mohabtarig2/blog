<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SignRequest  extends FormRequest
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
            'company_en' => 'required|max:100|unique:companies,company_en',
            'company_ar' => 'required|max:100|unique:companies,company_ar',
            'manager_ar' => 'required|max:100|unique:companies,manager_ar',
            'manager_en' => 'required|max:100|unique:companies,manager_en',
            'email' => 'required|max:100|unique:companies,email',
            'phone' => 'required|numeric',
            'mobile' => 'required|numeric',
            'Catgories' => 'required',
            'emirates' => 'required',
            'password' => 'required',
            'date' => 'required:companies,date',



        ];



    }
    public function messages()
    {

        return  [
            'company_en.required'=> __('messages.offer name required'),
            'company_ar.required'=> __('messages.offer name required'),
            'company_en.unique'=> __('messages.offer name unique'),
            'company_ar.unique'=> __('messages.offer name unique'),
            'manager_ar.required'=> __('messages.offer name required'),
            'manager_en.required'=> __('messages.offer name required'),
            'manager_ar.unique'=> __('messages.offer name unique'),
            'manager_en.unique'=> __('messages.offer name unique'),
            'date.required'=>__('messages.offer price required'),
            'phone.numeric'=>__('messages.offer price numeric'),
            'mobile.numeric'=>__('messages.offer price numeric'),
            'Catgories.required'=>__('messages.offer details required'),
            'emirates.required'=>__('messages.offer details required'),
        ];
    }
}

