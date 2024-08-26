<?php

namespace App\Http\Controllers;

use App\Services\GeminiService;
use Illuminate\Http\Request;

class AIController extends Controller
{
    protected $geminiService;

    public function __construct(GeminiService $geminiService)
    {
        $this->geminiService = $geminiService;
    }

    public function showForm()
    {
        return view('generate');
    }

    public function generate(Request $request)
    {
        $input = $request->input('text');
        $output = $this->geminiService->generateContent($input);

        return view('generate', ['output' => $output]);
    }
}
