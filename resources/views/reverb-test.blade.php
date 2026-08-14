<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reverb Test</title>
</head>

<body>
    <h1>Chat Realtime Test</h1>

    <p id="status">Menyiapkan...</p>

    <pre id="messages"></pre>

    <script>
        // TEMPORARY TEST TOKEN
        // Ganti dengan token hasil login.
        window.CHAT_TOKEN = '5|RaL8mDX1mOQuN6wrr5yjnJeA6bF1mitiPxQOlWDtb7eac149';

        window.CONVERSATION_ID =
            '751d7114-d59e-44d9-8ab0-c53733075bf0';
    </script>

    @vite(['resources/js/reverb-test.js'])
</body>
</html>