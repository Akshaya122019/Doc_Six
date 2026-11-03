<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>New Form Submission</h2>
<p><strong>Name:</strong> {{ $formData['name'] }}</p>
<p><strong>Email:</strong> {{ $formData['mail'] }}</p>
<p><strong>Phone:</strong> {{ $formData['phone'] }}</p>


@if(!empty($formData['topic']))
<p><strong>Topic:</strong> {{ $formData['topic'] }}</p>
@endif

<p><strong>Message:</strong> {{ $formData['message'] }}</p>
<p><strong>Page:</strong> {{ $formData['page'] }}</p>
</body>
</html>
