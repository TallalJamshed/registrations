<?php

namespace App\Http\Requests;
use Illuminate\Validation\Rule;

use Illuminate\Foundation\Http\FormRequest;

class SchoolBranchRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $rules =  [
            'fk_school_id' => 'required|numeric|exists:schools,school_id',
            'sc_br_name' => 'required',
            'sc_br_address' => 'required',
            'sc_br_status' => ['required' , Rule::in(["unregistered","underprocess","registered"])],
            'no_of_boys' => 'present|numeric|nullable',
            'no_of_girls' => 'present|numeric|nullable',
            'sc_br_covered_area' => 'present|nullable',
            'no_of_teachers' => 'present|numeric|nullable',
            'owner_name' => 'present|nullable',
            'owner_phone' => 'present|numeric|nullable',
            'owner_email' => 'present|email|nullable',
            'principal_name' => 'present|nullable',
            'principal_phone' => 'present|numeric|nullable',
            'principal_email' => 'present|email|nullable',
            'fk_subarea_id' => 'required|numeric|exists:subareas,subarea_id',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
            'location_string' => 'required'
        ];
        return $rules;
    }

    public function messages()
    {
        $messages = [
            'fk_school_id.required' => 'School Name is required',
            'fk_school_id.numeric' => 'School Id should be a number',
            'fk_school_id.exists' => 'School Name does not exist',

            'sc_br_name.required' => 'School Branch Name is required',
            'sc_br_address.required' => 'School Address is required',
            'sc_br_status.required' => 'School Status is required',
            'sc_br_status.in' => 'School Status value is not recognized ',

            'no_of_boys.required' => 'Number of boys is required',
            'no_of_boys.numeric' => 'Number of boys should be a number',

            'no_of_girls.required' => 'Number of girls is required',
            'no_of_girls.numeric' => 'Number of girls should be a number',

            'sc_br_covered_area.required' => 'School covered area is required',
            'no_of_teachers.required' => 'Number of teachers is required',
            'no_of_teachers.numeric' => 'Number of teachers should be a number',

            'owner_name.required' => 'Owner Name is required',
            'owner_phone.required' => 'Owner Phone is required',
            'owner_phone.numeric' => 'Owner Phone No should be a number',

            'owner_email.required' => 'Owner Email is required',
            'owner_email.email' => 'Owner Email dont have proper email formate',

            'principal_name.required' => 'Principal Name is required',
            'principal_phone.required' => 'Principal Phone is required',
            'principal_phone.numeric' => 'Principal Phone No should be a number',

            'principal_email.required' => 'Principal Email is required',
            'principal_email.email' => 'Principal Email dont have proper email formate',

            'fk_subarea_id.required' => 'Subarea is required',
            'fk_subarea_id.numeric' => 'Subarea ID should be numeric',
            'fk_subarea_id.exists' => 'Subarea is not recognized',

            'latitude.required' => 'Latitude is required',
            'latitude.numeric' => 'Latitude should be a number',

            'longitude.required' => 'Longitude is required',
            'longitude.numeric' => 'Longitude should be a number',

            'location_string.required' => 'Location String is required',
            // 'required' => 'Required',


        ];
        return $messages;
    }
}
