<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="hehe.css">
    <style>
                body {
                background-image: url('https://i.pinimg.com/564x/04/66/9f/04669fca545c07e989a3bb3b54fd6e46.jpg');
                background-size: cover;
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-position: center center;
                font-family: Helvetica, Georgia;
                justify-content: center;
                align-items: center;
                height: 100vh;
                margin: 0;
                display: flex;
                flex-direction: column;
            }
            
            .glassmorphism {
                            background: rgba(255, 255, 255, 0.2);
                            border: 1px solid rgba(255, 255, 255, 0.2);
                            padding: 80px;
                            border-radius: 0px; 
                            backdrop-filter: blur(10px);
                            width: 400px;
                            text-align: left;
                            margin-top: 500px;
                        }

        h1 {
            font-size: 40px;
            color: #000000;
            text-align: center;
            
        }

        h2 {
            font-size: 28px;
            color: #000000;
            text-align: center;
        }

        label {
            font-size: 16px;
            font-weight: bold;
            color: #000000;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        input[type="radio"] {
            margin-right: 10px;
        }

        select {
            font-family: helvetica, sans-serif; 
            width:45%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        input[type="checkbox"] {
            margin-right: 10px;
        }

        textarea#bio {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 12px;
            font-family: Arial, Helvetica, sans-serif;
                    }
        a button {
            background-color: #0077e6;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            cursor: pointer;
            display: inline-block;
            margin-top: 10px;
        }

        a button:hover {
            background-color: #d1efed;
        }       
        
    </style>
</head>

<body>
     

    <form action="{{url ('welcome')}}" method="GET">
        <div class="glassmorphism">
            <h1>Buat Account Baru</h1>
            <h2>Sign Up Form</h2>
            <label for="first">First name :</label>
            <br><br>
            <input type="text" id="first" placeholder="nama depan" name="first" required>
            <br><br>
            <label for="last">Last name :</label>
            <br><br>
            <input type="text" id="last" placeholder="nama belakang (opsional)" name="last" required>
            <br><br>
            
            <label for="Jenis Kelamin">Jenis Kelamin</label>
            <br><br>
            <!-- input radio name harus sama jika masih 1 pertanyaan -->
            <input type="radio" name="pilihan" value="Jantan" id="Jantan" required> 
            <label for="male">Male</label>
            <br>
            <input type="radio" name="pilihan" value="Betina" id="Betina" required>
            <label for="female">Female</label>
            <br>
            <input type="radio" name="pilihan" value="kresek alfamart" id="kresek alfamart" required>
            <label for="Kresek Alfamart">Kresek Alfamart</label>
            <br><br>

        <label for="Negara">Nationality</label>
        <br><br>
        <select name="Negara" id="negara">
            <option value="Indonesia">Indonesia</option>
                <option value="Amerika RRRRAAAAHHHHHHH WEE FOUND OILLLL 🦅🦅🦅">Amerika RRRRAAAAHHHHHHH WEE FOUND OILLLL 🦅🦅🦅</option>
                <option value="Dengklok barat">Dengklok Barat</option>
                <option value="Inggris">Inggris</option>
                <option value="Sunda Empire">Sunda Empire</option>
                <option value="Singapura">Singapura</option>
                <option value="Xina">Xina</option>
                <option value="Russia">Russia</option>
                <option value="Bekasi">Bekasi</option> 
                <option value="Mars">Mars</option> 
                <option value="Koriya">Koriya</option> 
                <option value="Kosambi">Kosambi</option> 
        </select><br><br>

        <p style="color: #fff;">Language Spoken</p>
        <input type="checkbox" id="indo" name="language[]" value="Indonesia">
        <label for="indo" style="color: #fff;">Bahasa Indonesia</label> <br>
        <input type="checkbox" id="english" name="language[]" value="Inggris"> 
        <label for="english" style="color: #fff;">English Language</label> <br>
        <input type="checkbox" id="Jepun" name="language[]" value="Jepun"> 
        <label for="Jepun" style="color: #fff;">Jepun</label> <br>
        <input type="checkbox" id="Jawa" name="language[]" value="Jawa"> 
        <label for="Jawa" style="color: #fff;">Jawa</label> <br>


        <br><br>
        <label for="bio">Bio</label>
        <textarea name="bio" id="bio" cols="37" rows="10" required></textarea>
        <br>
        </div>
        <button>Done!</button>
    </form>
</body>
</html>