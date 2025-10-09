<div class="login">
    <h3>Login</h3>
    <?php if (!empty($data['error'])): ?>
        <p style="color: red; font-size: 14px; text-align: center;"><?= $data['error']; ?></p>
    <?php endif; ?>

    <form action="" method="post" class="form-login">
        <p>Username:</p>
        <input type="text" name="username" required>

        <p>Password:</p>
        <input type="password" name="password" required>

        <br><br>
        <button type="submit">Login</button>

        <br><br>
        <label for="">
            <input type="checkbox" name="remember"> Remember Me
        </label>

        <p>Buat <a href="<?= BASEURL; ?>/auth/register">akun</a> jika belum ada.</p>
    </form>
</div>


