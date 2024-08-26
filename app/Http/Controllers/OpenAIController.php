<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OpenAI;

class OpenAIController extends Controller
{
    public function generateResponse(Request $request)
    {
        $client = OpenAI::client(env('OPENAI_API_KEY'));
        $response = $client->completions()->create([
            'model' => 'gpt-4o-mini',
            'prompt' => $request->input('prompt'),
            'max_tokens' => 100,
        ]);

        return response()->json($response['choices'][0]['text']);
    }
}
