<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Music</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

    <link rel="stylesheet" href="./css/upload.css">
</head>

<body>
    <section class="form-container">

        <h3 class="heading">upload music</h3>

        <form action="" method="POST" enctype="multipart/form-data" autocomplete="off">
            <p>Music Name<span>*</span></p>
            <input type="text" name="name" placeholder="Enter Music Name" required maxlength="100" class="box">

            <p>Artist Name</p>
            <input type="text" name="artist" placeholder="Enter Artist Name" maxlength="100" class="box">

            <p>Select Music<span>*</span></p>
            <input type="file" name="music" class="box" required accept="audio/*">

            <p>Select Album</p>
            <input type="file" name="album" class="box" accept="image/*">

            <input type="submit" value="Upload Music" class="btn" name="submit">

            <a href="home.php" class="option-btn">Go To Home</a>
        </form>

    </section>
</body>

</html>