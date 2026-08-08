<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Dashboard</title>
    <?php echo app('Illuminate\Foundation\Vite')->reactRefresh(); ?>
</head>
<body>
    <div id="root"></div>
    
    <?php echo file_get_contents(public_path('frontend/build/index.html')); ?>

    <h1>helo</h1>
</body>
</html>
<?php /**PATH C:\Users\Esha\Desktop\laravel classes\mysoftware\resources\views/frontend/index.blade.php ENDPATH**/ ?>