<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>

        body {
            background-image: url('https://i.pinimg.com/564x/a7/9b/f7/a79bf71682a9f9945c22772bf6b65be6.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center center;
            font-family: Helvetica, Georgia;
            text-align: center;
            margin-top: 100px;
            }
         
            .glassmorphism {
            background: rgba(255, 255, 255, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.2);
            padding: 20px;
            border-radius: 10px; 
            backdrop-filter: blur(10px);
            }
        
            h1 {
            color: #121212;
            font-size: 40px;
            margin-top: 20px;
            }
        
        h2 {
            color: #121212;
            font-size: 24px;
            margin-top: 15px;
        }
        
        p {
            font-size: 16px;
            color: #121212;
            margin-top: 10px;
        }
       
        ul {
            list-style-type: disc;
            text-align: right;
            margin-left: 20px;
        }
       
        li {
            margin-bottom: 10px;
            text-align: center;
        }

        ol {
            list-style-type: decimal;
            text-align: center;
            margin-left: 20px;
        }

        a {
            color: #010aff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</body>
<body>
    <div class="glassmorphism">
    <h1>Media Online</h1>
    <h2>Sosial Media Developer</h2>
    <p>Belajar dan berbagi agar hidup menjadi lebih baik</p>
    <h2>Benefit Join di Media Online</h2>
        <li>Mendapatkan motivasi dari sesama developer</li>
        <li>Sharing knowledge</li>
        <li>Dibuat oleh calon developer terbaik</li>
    </ul>

    <h2>Cara bergabung ke Media Online</h2>
    <ol type = 1>
        <li>Mengunjungi Website Ini</li>
        <li>Mendaftarkan di  <a href = "{{url ('form')}}">Form Sign Up</a> </li>
        <li>Selesai</li>
    </ol>
</div>
</body>
</html>