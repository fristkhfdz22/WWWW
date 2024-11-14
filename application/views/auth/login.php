<h2>Login</h2>
<?php if($this->session->flashdata('error')): ?>
    <p><?= $this->session->flashdata('error'); ?></p>
<?php endif; ?>

<form action="<?= site_url('auth/login'); ?>" method="post">
    <label for="username">Username:</label>
    <input type="text" name="username" id="username" required><br>

    <label for="password">Password:</label>
    <input type="password" name="password" id="password" required><br>

    <button type="submit">Login</button>
</form>
