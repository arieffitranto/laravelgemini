<?php

namespace App\Services;

use Gemini\Laravel\Facades\Gemini;

class GeminiService
{
    public function generateContent($input)
    {
        return Gemini::geminiPro()->generateContent($input)->text();
    }
}
