<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
                <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/styles.css">
        <script src="/js/scripts.js"></script>
        <title><?php echo $__env->yieldContent('title'); ?></title>

    </head>
    <body class="antialiased">
        
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id="navbar">
                    <a href="/" class="navbar-brand">
                        <img src="/img/logo.jpeg" alt="">
                    </a>
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="/" class="nav-link">Eventos</a></li>
                        <li class="nav-item"><a href="/events/create" class="nav-link">Criar Eventos</a></li>
                        <?php if(auth()->guard()->check()): ?>                       
                            <li class="nav-item"><a href="/dashboard" class="nav-link">Meus Eventos</a></li>
                            <form action="/logout" method="POST">
                                <?php echo csrf_field(); ?>
                                <a href="/logout" class="nav-link" onclick="event.preventDefault();
                                    this.closest('form').submit();
                                " >Sair</a>
                            </form>
                        <?php endif; ?>
                        <?php if(auth()->guard()->guest()): ?>
                            <li class="nav-item"><a href="/login" class="nav-link">Entrar</a></li>
                            <li class="nav-item"><a href="/register" class="nav-link">Cadastrar</a></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </nav>
        </header>

        <main>
            <div class="container-fluid">
                <div class="row">
                    <?php if(session('msg')): ?>
                        <p class="msg"><?php echo e(session('msg')); ?></p>
                    <?php endif; ?>
                    
                    <?php echo $__env->yieldContent('content'); ?>
                </div>
            </div>
        </main>

        <footer>
            <p>HDC Events &copy; 2022</p>
        </footer>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>
</html>

<?php /**PATH C:\xampp\htdocs\Laravel\hdcevents\CrudLaravelPHP\resources\views/layouts/main.blade.php ENDPATH**/ ?>