<!DOCTYPE html>
<html>
<head>
    <title>Thank you for contacting The Accity</title>
</head>
<body>
    <h2>Hi {{ $data['email'] }},</h2>
    <p>We received your message. Thank you for reaching out to us.</p>

    @if(!empty($data['phone']))
        <p><strong>Phone:</strong> {{ $data['phone'] }}</p>
    @endif
    @if(!empty($data['address']))
        <p><strong>Address:</strong> {{ $data['address'] }}</p>
    @endif
    @if(!empty($data['textarea']))
        <p><strong>Message:</strong> {{ $data['textarea'] }}</p>
    @endif

    <p>Our team will get back to you soon.</p>
    <br>
    <p>Best regards,</p>
    <p><strong>The Accity Team</strong></p>
</body>
</html>
