<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Durga Kawach</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
            integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
            integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/style.css"></link>
</head>
<?php
$url = './response.json';
$json = file_get_contents($url);
$json = str_replace("\r\n", '\r\n', $json);
$jsonObject = json_decode($json, true);
?>
<body>
<div class="container-fluid">
    <div class="row justify-content-md-center">
        <div class="col-lg-6 col-sm-12 mt-3">
            <div class="p-lg-5 p-sm-2 mb-4 bg-warning text-center rounded-5">
                <div class="container-fluid">
                    <h1 class="display-1">
                        Durga Kawach
                    </h1>
                    <div class="fs-3">
                        <span class="break-spaces"><?php echo $jsonObject['durgaKawach']; ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>