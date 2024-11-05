<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./../styles.css" />

    <title>Document</title>
</head>

<body>
    <div id="logo">
        INSA CTF
        <img src="./../../logo.jpg" alt="" id="logoimage" />
    </div>
    <div id="description">
        <h1>Description</h1>
        <p>
            L'utilisateur "flag" tient 1 drapeau. Prends-le ! <br> <br>
            <span style="margin-left: 50px; font-size: 20px">IP : </span>
            <span style="color: blue; font-weight: bold; font-size: 20px;">176.129.192.118</span> <br>
            <span style="margin-left: 50px; font-size: 20px">Port : </span>
            <span style="color: blue; font-weight: bold; font-size: 20px;">4000</span>
        </p>
    </div>

    <div id="answer">
        <form id="flagform" method="POST">
            <label for="inputstring" id="drapeau">Drapeau</label>
            <input type="text" id="inputflag" name="inputflag_web" placeholder="CTF_X_Y_{....}" />
            <input type="submit" id="submit" value="Soumettre" />
        </form>
        <div id="result"></div>
    </div>
    <script src="./facile_web.js"></script>
</body>

</html>