<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Khasanport Game!!</title>
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/tailwind-all.css">
</head>
<body class="">
    <div class="container">
        <div class="w-full h-screen flex justify-between flex-wrap px-4 py-2">
            <div class="iklan w-full h-20 flex justify-center items-center bg-yellow-200">
                Iklan Slot ZEUS
            </div>
            <?php foreach ($data as $part) :?>
                <div class="mx-2 w-2/5 h-24 flex justify-center items-center border border-black">
                    <img src="<?= $part?>" sizes="cover" alt="">
                </div>
            <?php ;endforeach ?>
        </div>
    </div>

    <script>

    </script>
</body>
</html>