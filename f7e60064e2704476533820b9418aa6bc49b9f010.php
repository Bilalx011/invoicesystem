<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
<h2>Login</h2>
<form method="POST" action="<?php echo e(route('login.post')); ?>">
    <?php echo csrf_field(); ?>
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <button type="submit">Login</button>
</form>
<a href="<?php echo e(route('register')); ?>">Don't have account? Register</a>
</body>
</html>
<?php /**PATH C:\Users\Esha\Desktop\laravel classes\mysoftware\resources\views/login.blade.php ENDPATH**/ ?>