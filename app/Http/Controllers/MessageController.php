<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewMessageRequest;
use App\Models\Message;
use App\Http\Resources\Messages as MessagesResource;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index(Request $request)
    {
        return response()->json(Message::all());
    }

    public function create(NewMessageRequest $request)
    {
        return response()->json(
            new MessagesResource($request->persist()),
            201
        );
    }
}
