<!-- resources/views/generate.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate Gemini Input</title>
</head>
<body>
    <h1>Generate Gemini Input</h1>
    <form action="{{ route('generate') }}" method="POST">
        @csrf
        <label for="text">Input Text:</label>
        <textarea name="text" id="text" rows="4" cols="50"></textarea>
        <button type="submit">Generate</button>
    </form>
    @if (isset($output))
        <h2>Output:</h2>
        <p>{{ $output }}</p>
    @endif
</body>
</html>
