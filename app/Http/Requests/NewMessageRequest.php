<?php

namespace App\Http\Requests;

use App\Models\Message;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class NewMessageRequest extends FormRequest
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
            'message' => ['required']
        ];
    }

    /**
     * Save the Message.
     *
     * @return Message
     */
    public function persist()
    {
        $message = new Message;
        
        $message->message = $this->input('message');

        $message->save();

        return $message->fresh();
    }
}
