<!DOCTYPE html>
<html>
<head>
    <title>OpenAI Form</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <form id="openai-form">
        <label for="prompt">Enter your prompt:</label>
        <input type="text" id="prompt" name="prompt" required>
        <button type="submit">Submit</button>
    </form>
    <div id="response"></div>

    <script>
        $(document).ready(function() {
            $('#openai-form').on('submit', function(e) {
                e.preventDefault();
                $.ajax({
                    url: '/generate-response',
                    type: 'POST',
                    data: {
                        prompt: $('#prompt').val(),
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        $('#response').text(response);
                    }
                });
            });
        });
    </script>
</body>
</html>
