<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="js/index.js"></script>
    <style>
        body{
            background-color: aqua;
        }
        .container{
            text-align: center;
            margin-left: auto;
            margin-right: auto;
            margin-top:200px;
        }
        h1{
            margin-bottom: 35px;
        }
        #greska{
            color:white;
            background-color: #ff4444;
            font-size: 1.2em;
        }  
    </style>
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <input type="text" name="email" id="email" placeholder="Enter eMail"><br><br>
        <input type="text" name="lozinka" id="lozinka" placeholder="Enter Password"><br><br>
        <button id="btnLogovanje" name="btnLogovanje" class="btn btn-primary mb-5">Uloguj se</button>
        <div id="greska"></div>
    </div>
</body>
</html>