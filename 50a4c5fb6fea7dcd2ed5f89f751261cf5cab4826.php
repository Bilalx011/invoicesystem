<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
</head>
<body>
    <h1>Welcome Admin!</h1>
    <p>You are logged in as: <?php echo e(Auth::user()->email); ?></p>
    <a href="<?php echo e(route('admin.logout')); ?>">Logout</a>

</body>
</html>
<?php /**PATH C:\Users\Esha\Desktop\laravel classes\mysoftware\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>