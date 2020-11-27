 <!-- Navigation -->
 <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
  

  <div class="container">
    <a class="navbar-brand" href="#">Menu</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="true" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active <?php echo e(Route::is('home') ? 'active' : ''); ?>">
        
          <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user-display')): ?>
          <a class="nav-link" href="<?php echo e(route('home')); ?>">Home</a>
          <?php endif; ?>
          </li>
          <li class="nav-item <?php echo e(Route::is('about') ? 'active' : ''); ?>">
          <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user-display')): ?>
          <a class="nav-link" href="<?php echo e(route('about')); ?>">About</a>
          <?php endif; ?>
          </li>

        <li class="nav-item <?php echo e(Route::is('tampil') ? 'active' : ''); ?>">
          <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage-articles')): ?>
          <a class="nav-link" href="<?php echo e(route('tampil')); ?>">Kelola</a>
          <?php endif; ?>
          </li>

        <li class="nav-item">
          <a class="nav-link" href="/tampil">Data</a>
        </li>
        <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
      </ul>
    </div>
  </div>
</nav><?php /**PATH C:\xampp\htdocs\cms\resources\views/layouts/navbar.blade.php ENDPATH**/ ?>