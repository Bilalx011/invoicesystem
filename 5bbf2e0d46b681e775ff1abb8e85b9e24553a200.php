<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>
<h2>Register</h2>
<form method="POST" action="<?php echo e(route('register.post')); ?>">
    <?php echo csrf_field(); ?>
    <input type="text" name="name" placeholder="Name" required><br>
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <input type="password" name="password_confirmation" placeholder="Confirm Password" required><br>
    <button type="submit">Register</button>
</form>
<a href="<?php echo e(route('login')); ?>">Already have account? Login</a>
</body>
</html>
<?php /**PATH C:\Users\Esha\Desktop\laravel classes\mysoftware\resources\views/register.blade.php ENDPATH**/ ?>