<!DOCTYPE html>
<html>
<head>
    <title>Mail de vérification</title>
</head>
<body style="margin: 0; padding: 0;">
    <table align="center" border="0" cellpadding="0" cellspacing="0" width="600" style="border-collapse: collapse;">
        <tr>
            <td align="center" bgcolor="#ffffff" style="padding: 40px 0 30px 0;">
                <h1 style="font-size: 24px; margin: 0;">Sante-APP</h1>
            </td>
        </tr>
        <tr>
            <td bgcolor="#f8f8f8" style="padding: 40px 30px 40px 30px;">
                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                    <tr>
                        <td style="color: #153643; font-family: Arial, sans-serif;">
                            <h1 style="font-size: 24px; margin: 0;">Bonjour!</h1>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 20px 0 30px 0; color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;">
                            Votre code de vérification est:
                            <br><br>
                            <!-- Display verification code here -->
                            <div style="text-align: center; font-size: 24px; font-weight: bold; margin: 20px 0;">
                                {{ $verificationCode }}
                            </div>
                            <br>
                            Si vous n'avez pas créé de compte chez nous, ne tenez pas compte de ce mail.
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td bgcolor="#eeeeee" style="padding: 30px 30px 30px 30px;">
                Cordialement,
                <br>
                <strong>Sante-APP</strong>
            </td>
        </tr>
    </table>
</body>
</html>
