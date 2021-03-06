<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMessageRequest;
use App\Message;
use Illuminate\Http\Request;

class ChatMessageController extends Controller
{
    public function index()
    {
        $messages = Message::with(['user'])->latest()->limit(100)->get();

        return response()->json($messages, 200);
    }

    public function store(StoreMessageRequest $request)
    {
        $message = $request->user()->messages()->create([
            'body' => $request->body
        ]);

        return response()->json($message, 200);
    }
}
