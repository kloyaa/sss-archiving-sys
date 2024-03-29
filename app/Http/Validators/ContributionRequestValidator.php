<?php

namespace App\Http\Validators;

use Illuminate\Support\Facades\Validator;

class ContributionRequestValidator {

    public static function validateCreateRequest($request)
    {

        $validator = Validator::make($request->all(), [
            'sss_no' => 'nullable|string',
            'name' => 'required|string',
            'date_of_employment' => 'required|date',
            'date_of_resignation' => 'required|date',
            'requester' => 'required|string',
            'email' => 'required|email',
            'phone_number' => 'required|string',
            'date_needed' => 'required|date',
            'all' => 'nullable',
            'status' => 'required|string|in:PENDING,PROCESSING,REJECTED,DONE',
            'relationship' => 'nullable|string',
        ]);

        return $validator;
    }

    public static function validateUpdateStatusByNumber($request)
    {

        $validator = Validator::make($request->all(), [
            'status' => 'required|string|in:PENDING,PROCESSING,REJECTED,DONE',
            'id' => 'required',
        ]);

        return $validator;
    }
}