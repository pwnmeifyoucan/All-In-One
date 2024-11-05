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
            Trouvez un moyen de vous connecter au système et d'obtenir le drapeau
            </p>
            <a href="./../defi/facile_reseau/challenge.pcapng" download style="text-decoration: none; text-align: center; display: block; width: 100%; font-weight: bold; font-size: 20px;">challenge.pcapng</a>
        </div>

        <div id="answer">
            <form id="flagform" method="POST" >
                <label for="inputstring" id="drapeau">Drapeau</label>
                <input
                    type="text"
                    id="inputflag"
                    name="inputflag_reseau"
                    placeholder="CTF_X_Y_{....}"
                />
                <input type="submit" id="submit" value="Soumettre" />
            </form>
            <div id="result"></div>
        </div>
        <script src="./facile_reseau.js"></script>
    </body>
</html>
