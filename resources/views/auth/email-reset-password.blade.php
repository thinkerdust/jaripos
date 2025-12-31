<!DOCTYPE html>
<html>
<body>
    <h2>Halo, {{ $user->name }}!</h2>
    <p>Kami telah mengatur ulang kata sandi Anda atas permintaan Anda.</p>
    
    <div style="background: #f4f4f4; padding: 15px; border-radius: 5px; margin: 20px 0;">
        <p style="margin: 0;">Kata Sandi Baru Anda:</p>
        <h3 style="margin: 5px 0; color: #333;">{{ $newPassword }}</h3>
    </div>

    <p>Silakan gunakan kata sandi tersebut untuk masuk ke akun Anda dan segera ubah kata sandi Anda di pengaturan profil.</p>
    
    <p>Terima kasih,<br>Tim {{ config('app.name') }}</p>
</body>
</html>