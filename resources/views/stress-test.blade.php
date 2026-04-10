<!DOCTYPE html>
<html>
<head>
    <title>Stress Test Page</title>
</head>
<body>
    <h1>🔥 Laravel Stress Test</h1>
    <p>Generated Size: {{ $size }} MB</p>
    <p>Final Hash: {{ $hash }}</p>

    <hr>

    <h3>Payload:</h3>

    <div style="word-wrap: break-word;">
        {{ $data }}
    </div>
</body>
</html>