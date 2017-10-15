<?php

namespace App\Http\Requests;

use App\Loan;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreLoanRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::user()->loans->count() < Loan::NB_LOAN_PER_USER;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'loanable_id'   =>  'required|integer|min:0',
            'loanable_type'   =>  'required|string',
        ];
    }
}
