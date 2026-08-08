<h1>Welcome, <?php echo e(auth()->user()->name); ?></h1>
<a href="<?php echo e(route('logout')); ?>"
   onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
   class="btn btn-danger">
   Logout
</a>

<form id="logout-form" action="<?php echo e(route('logout')); ?>" method="GET" style="display: none;">
    <?php echo csrf_field(); ?>
</form>

<?php /**PATH C:\Users\Esha\Desktop\laravel classes\mysoftware\resources\views/person/dashboard.blade.php ENDPATH**/ ?>