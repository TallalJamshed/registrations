<?php

namespace App\Http\Requests;

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
            'fk_school_id' => 'required',
            'sc_br_name' => 'required',
            'sc_br_address' => 'required',
            'sc_br_status' => 'required',
            'no_of_boys' => 'required',
            'no_of_girls' => 'required',
            'sc_br_covered_area' => 'required',
            'no_of_teachers' => 'required',
            'owner_name' => 'required',
            'owner_phone' => 'required',
            'owner_email' => 'required',
            'principal_name' => 'required',
            'principal_phone' => 'required',
            'principal_email' => 'required',
            'fk_subarea_id' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'location_string' => 'required'
        ];
        return $rules;
    }

    public function messages()
    {
        $messages = [
            'fk_school_id.required' => 'School Name is required',
            'sc_br_name.required' => 'School Branch Name is required',
            'sc_br_address.required' => 'School Address is required',
            'sc_br_status.required' => 'School Status is required',
            'no_of_boys.required' => 'Number of boys is required',
            'no_of_girls.required' => 'Number of girls is required',
            'sc_br_covered_area.required' => 'School covered area is required',
            'no_of_teachers.required' => 'Number of teachers is required',
            'owner_name.required' => 'Owner Name is required',
            'owner_phone.required' => 'Owner Phone is required',
            'owner_email.required' => 'Owner Email is required',
            'principal_name.required' => 'Principal Name is required',
            'principal_phone.required' => 'Principal Phone is required',
            'principal_email.required' => 'Principal Email is required',
            'fk_subarea_id.required' => 'Subarea is required',
            'latitude.required' => 'Latitude is required',
            'longitude.required' => 'Longitude is required',
            'location_string.required' => 'Location String is required',
            'required' => 'Required',


        ];
        return $messages;
    }
}
