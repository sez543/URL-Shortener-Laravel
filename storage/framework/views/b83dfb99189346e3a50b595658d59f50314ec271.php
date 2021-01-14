<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/app.css" />
    <title>Sh.dev</title>
    <script src="./js/app.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/loadjs/4.2.0/loadjs.js"></script>
</head>

<body>
    <div id="container" class="darkmode">
        <div class="side_button">
            <div class="fill">
                <img src="./images/light_moon.svg" alt="" class="light" />
                <img src="./images/dark_moon.svg" alt="" class="dark" />
            </div>
        </div>
        <section>
            <div class="window">
                <?php if(null==session('msg')): ?>
                <form action="/create" method="POST">
                    <?php echo csrf_field(); ?>
                    <input type="text" name="url" id="origin" placeholder="Enter your origin here" />
                    <input type="text" name="slug" id="target" placeholder="Enter your target slug here" />
                    <div class="button">
                        <input type="submit" value="Generate" />
                    </div>
                </form>
                <?php endif; ?>
                <p class="msg">
                    <?php echo e(session('msg')); ?>

                    <?php if(session('success')): ?>
                    <a href="<?php echo e(session('url')); ?>"><?php echo e(session('url')); ?></a>
                    <?php endif; ?>
                </p>
            </div>
        </section>
    </div>
</body>

</html><?php /**PATH E:\INFO OT E\SEZEN\Laravel\url_shortener\resources\views/index.blade.php ENDPATH**/ ?>