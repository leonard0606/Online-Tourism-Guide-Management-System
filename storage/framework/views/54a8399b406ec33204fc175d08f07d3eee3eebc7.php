<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>OTGMS </title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-primary bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                     OTGMS
                </a>
                <button class="navbar-toggler" type="button"
                data-toggle="collapse" data-target="#navbarSupportedContent"
                 aria-controls="navbarSupportedContent" aria-expanded="false"
                 aria-label="<?php echo e(__('Toggle navigation')); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <?php if(auth()->guard()->check()): ?>
                        <li class="nav-item">
                            <a href="/home" class="nav-link">Home</a>
                        </li>
                            <?php if (\Illuminate\Support\Facades\Blade::check('admin')): ?>
                            <li class="nav-item">
                                <a href="/attractions/create" class="nav-link">Register Attraction Site</a>
                            </li>

                            <li class="nav-item">
                                <a href="/guides/create" class="nav-link">Register Tour Guide</a>
                            </li>

                            <li class="nav-item">
                                <a href="/admin/create" class="nav-link">Register Admin</a>
                            </li>
                            <?php endif; ?>
                        <?php endif; ?>


                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                            </li>
                            <?php if(Route::has('register')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php else: ?>

                            <li class="nav-item">
                                <a id="navbarDropdown" class="nav-link" href="#">
                                    <?php if (\Illuminate\Support\Facades\Blade::check('admin')): ?>
                                   <h3><?php echo e(Auth::user()->email); ?></h3>
                                    <?php endif; ?>

                                    <?php if (\Illuminate\Support\Facades\Blade::check('guide')): ?>
                                    <h3><?php echo e(Auth::user()->guide->firstname.'  '.Auth::user()->guide->lastname); ?></h3>
                                    <?php endif; ?>

                                    <?php if (\Illuminate\Support\Facades\Blade::check('tourist')): ?>
                                    <h3><?php echo e(Auth::user()->tourist->firstname.'  '.Auth::user()->tourist->lastname); ?></h3>
                                    <?php endif; ?>
                                </a>


                            </li>

                            <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>

                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>
</body>
</html>
<?php /**PATH /root/Documents/OTGMS/resources/views/layouts/app.blade.php ENDPATH**/ ?>