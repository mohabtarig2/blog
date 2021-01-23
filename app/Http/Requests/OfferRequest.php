<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class OfferRequest extends FormRequest
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
            'cname_ar' => ['required','max:100',Rule::unique('companies','company_ar')->ignore($this->id)],
            'cname_en' => 'required|max:100|unique:companies,company_en',
            'date' =>'required',
            'manager_ar' => 'required',
            'manager_en' => 'required',
            /*inqueer from table offers in name filed*/
            'phone' => 'required|numeric',
            'mobile' => 'required|numeric',
            'Catgories' => 'required',
            'details_en' => 'required',
            'emirates' => 'required'

        ];
    }
    public function messages()
    {

        return  [
            'cname_ar.required'=> __('messages.offer name required'),
            'cname_en.required'=> __('messages.offer name required'),
            'cname_ar.unique'=> __('messages.offer name unique'),
            'cname_en.unique'=> __('messages.offer name unique'),
            'manager_ar.required'=> __('messages.offer name required'),
            'manager_en.required'=> __('messages.offer name required'),
            'manager_ar.unique'=> __('messages.offer name unique'),
            'manager_en.unique'=> __('messages.offer name unique'),
            'date.required'=>__('messages.offer price required'),
            'phone.numeric'=>__('messages.offer price numeric'),
            'Catgories.required'=>__('messages.offer details required'),
            'emirates.required'=>__('messages.offer details required'),
        ];
    }
}

