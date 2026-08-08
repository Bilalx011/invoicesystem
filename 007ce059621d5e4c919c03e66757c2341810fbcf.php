<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Register</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
    <style>

    </style>
</head>
<body>

<div class="register-box">
    <h3>Register</h3>

    <?php if($errors->any()): ?>
        <div class="error">
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                <div><?php echo e($err); ?></div> 
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    <?php endif; ?>

    <form method="POST" action="<?php echo e(route('register.post')); ?>">
        <?php echo csrf_field(); ?>
        <input type="text" name="name" placeholder="Name" value="<?php echo e(('name')); ?>" required>
       <input type="email" name="email" placeholder="Email" required>

        <div class="password-wrapper">
            <input type="password" id="password" name="password" placeholder="Password" required>
            <span class="toggle-password" onclick="togglePassword('password', this)">👁</span>
        </div>

        <div class="password-wrapper">
            <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password" required>
            <span class="toggle-password" onclick="togglePassword('password_confirmation', this)">👁</span>
        </div>

        <button type="submit">Register</button>
             <a href="<?php echo e(route('login')); ?>">Don't have an account? LOGIN</a>
    </form>
</div>

<script>
function togglePassword(fieldId, icon) {
    const field = document.getElementById(fieldId);
    if (field.type === "password") {
        field.type = "text";
        icon.textContent = "👁";
    } else {
        field.type = "password";
        icon.textContent = "👁";
    }
}
</script>

</body>
</html>
<?php /**PATH C:\Users\Esha\Desktop\laravel classes\mysoftware\resources\views/auth/register.blade.php ENDPATH**/ ?>