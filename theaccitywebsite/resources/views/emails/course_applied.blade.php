<!DOCTYPE html>
<html>
<head>
    <title>Course Application Confirmation</title>
</head>
<body>
    <h2>Hi {{ $data['name'] }},</h2>
    <p>Thank you for applying for our course.</p>
    <p><strong>Details:</strong></p>
    <ul>
        <li>Email: {{ $data['email'] }}</li>
        <li>Phone: {{ $data['phone'] }}</li>
        <li>Country: {{ $data['country'] }}</li>
        <li>Preferred Day: {{ $data['pref_day'] }}</li>
        <li>Preferred Time: {{ $data['pref_time'] }}</li>
    </ul>

    <p>We’ll contact you soon with more information.</p>
    <br>
    <p>Best regards,</p>
    <p><strong>The Course Team</strong></p>
</body>
</html>
