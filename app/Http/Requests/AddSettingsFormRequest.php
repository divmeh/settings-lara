<?php namespace lara5\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Response;

class AddSettingsFormRequest extends FormRequest{

    public function rules(){

        return [
            'key' =>  'required',
            'value' => 'required'
        ];
    }

    public function authorize(){
        return true;
    }

    public function forbiddenResponse(){
        return Response::make('Permission denied foo!', 403);
    }

    public function response(){

    }
}