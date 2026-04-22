<!DOCTYPE html>
<html>
<head>
    <title>New Job Application</title>
</head>
<body>
    <h2>New Job Application Received</h2>
    <p>A new job application has been submitted through the website.</p>

    <p><strong>Full Name:</strong> {{ $data['fullName'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Phone:</strong> {{ $data['phone'] }}</p>
    <p><strong>Address:</strong> {{ $data['address'] }}</p>
    <p><strong>Immigration Status / Share Code:</strong> {{ $data['immigration'] }}</p>
    <p><strong>Nationality:</strong> {{ $data['nationality'] }}</p>
    <p><strong>Education:</strong> {{ $data['education'] }}</p>

    <p>CV is attached to this email.</p>

    <br>
    <p>Best regards,</p>
    <p><strong>The Accity Website</strong></p>
</body>
</html>
