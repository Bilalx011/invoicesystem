<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
    <style>
        .error-box {
            background: #ffdddd;
            color: #a94442;
            border: 1px solid #a94442;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="login-box">
        <h2>Login</h2>

        
        <?php if($errors->any()): ?>
            <div class="error-box">
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div><?php echo e($error); ?></div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php endif; ?>

             <form method="POST" action="<?php echo e(route('login.post')); ?>" autocomplete="off">
                <?php echo csrf_field(); ?>
                <input type="email" name="email" placeholder="Email" autocomplete="off" required><br>

                <div class="password-wrapper">
                    <input type="password" id="password" name="password" placeholder="Password" autocomplete="new-password" required>
                    <span class="toggle-password" onclick="togglePassword('password', this)">👁</span>
                </div>

                <button type="submit">Login</button>
            </form>


        <a href="<?php echo e(route('register')); ?>">Don't have an account? Register</a>
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
<?php /**PATH C:\Users\Esha\Desktop\laravel classes\mysoftware\resources\views/auth/login.blade.php ENDPATH**/ ?>