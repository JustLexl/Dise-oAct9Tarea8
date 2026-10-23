<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Alert</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f8f9fa; padding: 20px; color: #333;">
    <div style="max-width: 600px; margin: 0 auto; background: #ffffff; padding: 30px; border-radius: 8px; border: 1px solid #e9ecef;">
        <h2 style="color: #dc3545; margin-top: 0;">Login Alert</h2>
        
        <p>Hello <strong>{{ $user->name }}</strong>,</p>
        
        <p>We detected a new login to your account.</p>
        
        <div style="background-color: #f1f3f5; padding: 15px; border-radius: 6px; margin: 20px 0;">
            <p style="margin: 0 0 10px 0;"><strong>Login Details:</strong></p>
            <ul style="margin: 0; padding-left: 20px;">
                <li><strong>Account:</strong> {{ $user->email }}</li>
                <li><strong>Date & Time:</strong> {{ now()->toDayDateTimeString() }}</li>
            </ul>
        </div>

        <p>If this was you, no action is required.</p>
        <p>If you did not perform this login, please reset your password immediately to secure your account.</p>

        <p style="margin-top: 30px; border-top: 1px solid #dee2e6; padding-top: 15px; color: #6c757d; font-size: 0.9em;">
            Best regards,<br>
            <strong>{{ config('app.name') }} Security Team</strong>
        </p>
    </div>
</body>
</html>
