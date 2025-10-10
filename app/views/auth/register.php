<div class="register">
    <h3>Register</h3>
    <?php if (!empty($data['error'])): ?>
        <p style="color: red; font-size: 14px; text-align: center;"><?= $data['error']; ?></p>
    <?php endif; ?>    

    <form action="" method="post" class="form-register" autocomplete="off">
        <p>Username:</p>
        <input type="text" name="username" required>

        <p>Email:</p>
        <input type="email" name="email" required>

        <p>Password:</p>
        <input type="password" name="password" required>

        <p>Confirm Password:</p>
        <input type="password" name="confirm" required>

        <br><br>
        <button type="submit" class="submit-register">Register</button>

    </form>
</div>