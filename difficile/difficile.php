<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="./styles.css" />

        <title>Document</title>
    </head>
    <body>
        <div id="logo">
            INSA CTF
            <img src="./../logo.jpg" alt="" id="logoimage" />
        </div>
        <div id="description">
            <h1>Description</h1>
            <p>
                aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa<br />
                aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
            </p>
        </div>

        <div id="answer">
            <form id="flagform" method="POST">
                <label for="inputstring" id="drapeau">Drapeau</label>
                <input
                    type="text"
                    id="inputflag"
                    name="inputflag_difficile"
                    placeholder="CTF_X_Y_{....}"
                />
                <input type="submit" id="submit" value="Soumettre" />
            </form>
            <div id="result"></div>
        </div>
        <script src="./difficile.js"></script>
    </body>
</html>
