<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CalendarRequest extends Request
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
         return ['team_1' => 'required|alpha',
                 'score_team_1' => 'required|numeric',
                 'team_2' => 'required|alpha',
                 'score_team_2' => 'required|numeric',
                 'date' => 'required|date_format:Y/m/d'];
    }
}
