<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Email</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f8f9fa; padding: 20px; color: #333;">
    <div style="max-width: 600px; margin: 0 auto; background: #ffffff; padding: 30px; border-radius: 8px; border: 1px solid #e9ecef;">
        <h2 style="color: #0d6efd; margin-top: 0;">Welcome, {{ $user->name }}!</h2>
        
        <p>Thank you for registering. Your account has been created successfully.</p>
        
        <div style="background-color: #f1f3f5; padding: 15px; border-radius: 6px; margin: 20px 0;">
            <p style="margin: 0 0 10px 0;"><strong>Your Account Information:</strong></p>
            <ul style="margin: 0; padding-left: 20px;">
                <li><strong>Name:</strong> {{ $user->name }}</li>
                <li><strong>Email:</strong> {{ $user->email }}</li>
            </ul>
        </div>

        <p>You can now log in and access your dashboard at any time.</p>

        <p style="margin-top: 30px; border-top: 1px solid #dee2e6; padding-top: 15px; color: #6c757d; font-size: 0.9em;">
            Best regards,<br>
            <strong>{{ config('app.name') }} Team</strong>
        </p>
    </div>
</body>
</html>
