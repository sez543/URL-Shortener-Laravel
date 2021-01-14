<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/app.css" />
    <title>Sh.dev</title>
    <script src="./js/app.js" defer></script>
    <!-- Font Awesome -->
    <link href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/1.0.0/mdb.min.css" rel="stylesheet" />
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/1.0.0/mdb.min.js"></script>
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
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Slug</th>
                            <th scope="col">URL</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        {{App::make('App\Http\Controllers\Table')->Render($urls);}}
                    ?>
                    </tbody>
                </table>
            </div>
        </section>
    </div>
</body>

</html><?php /**PATH E:\INFO OT E\SEZEN\Laravel\url_shortener\resources\views/all.blade.php ENDPATH**/ ?>