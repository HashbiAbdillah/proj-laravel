<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style=" background-image: url('https://i.pinimg.com/564x/04/66/9f/04669fca545c07e989a3bb3b54fd6e46.jpg'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed; background-position: center center; font-family: Helvetica, Georgia;">
    <div style="background: rgba(255, 255, 255, 0.2); border: 1px solid rgba(255, 255, 255, 0.2); padding: 20px; border-radius: 10px; backdrop-filter: blur(10px);">
        <h1 style=" font-size: 24px; color:#121212;">SELAMAT DATANG <?php echo $_GET ['first'];?> <?php echo $_GET ['last'];?>!!</h1>
        <p>Jenis kelamin kamu <?php echo $_GET ["pilihan"];?></p>
        <p>Berkewarganegaraan <?php echo $_GET ["Negara"];?></p>
       
       
       
        <p><?php
        if(isset($_GET['language'])) {
            $baaahaaasaaa = $_GET['language'];
            echo "menggunakan bahasa ";
            foreach($baaahaaasaaa as $language) {
                echo $language . " ";
            }
            echo "<br>";
        } else {
            echo "Anda belum memilih bahasa<br>";
        }
    ?>
        </p>
        
        <p>bio: <?php echo $_GET ["bio"];?></p>            
        <h2 style="font-size: 20px; color:#121212;">Terimakasih <?php echo $_GET ['first'];?> <?php echo $_GET ['last'];?> telah bergabung di Website Kami. Media Belajar kita bersama!</h2>
    </div>
</body>
</html>             