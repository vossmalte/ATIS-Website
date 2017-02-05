<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../freestyler.css">
        <title>ATIS-Doc | Malte Voß</title>
    </head>
    <body>
        <header>
            <h1>ATIS-Doc</h1>
            <p>
                Hier schreibe ich meine Tipps und Tricks auf, die mir die Arbeit in der ATIS erleichtern.
            </p>
            <h2>Übersicht</h2>
            <ul>
                <li><a href="#ssh">SSH (Fernzugriff)</a></li>
                <li><a href="#html">Studentische Website</a></li>
            </ul>
        </header>
        <main>
            <h2 id="ssh">SSH (Fernzugriff)</h2>
            <h3>ssh - Kommandozeilenzugriff</h3>
            <h3>scp - Dateitransfer</h3>

            <h2 id="html">Studentische Website</h2>
            <h3 id=>Veröffentlichen</h3>
            <p>
                Um ein HTML-Dokument auf der Website <a href="http://studwww.informatik.kit.edu/~s_voss/">http://studwww.informatik.kit.edu/~s_voss/</a> (s_voss durch deinen Login ersetzen) zu veröffentlichen, musst du dieses in folgendem Verzeichnis speichern: <br>
                <code>~/.public_html/</code>
            </p>
            <p id="chmod">
                Damit die Datei nun auch vom Server öffentlich gemacht wird, musst du auch die Leserechte dafür freigeben. Das funktioniert mit diesem Kommandozeilentool: <br>
                <code>chmod 705 index.html</code> <br>
                <code>705</code> sind die Zugriffsrechte Read, Write und Execute oktal codiert für die Gruppen User (also du), Gruppe und andere. Die Fünf bei andere gibt also Lese- und Ausführrechte.<br>
                Tipp: mit <code>chmod 705 -R .</code> macht ihr das gesamte aktuelle Verzeichnis öffentlich.
            </p>

            <h3>Passwortschutz</h3>
            <p>
                Möchte man einen Bereich mit einem Passwort versehen, so geht man folgendermaßen vor:
                <ol>
                    <li>
                        In der Kommandozeile in das zu schützende Verzeichnis wechseln</li>
                    <li>
                        <code>/usr/bin/htpasswd -c .htpasswd username</code> ausführen. Passwort vergeben. Dies erzeugt (-c) die .htpasswd Datei mit Eintrag für den User username. <i>Für weitere Einträge <code>-c</code> Flag auslassen.</i></li>
                    <li>
                        <code>.htaccess</code>-Datei erzeugen, etwa so: <code>vim .htaccess</code>. Inhalt: <br>
                        <code style="display: block; margin-left: 30px">
                            AuthType Basic <br>
                            AuthName "Passwortgeschuezter Bereich" <br>
                            AuthUserFile /home/stud/s_voss/.public_html/test/.htpasswd <br>
                            Require valid-user <br>
                        </code>
                        Bemerkung: Pfad zu AuthUserFile muss absolut sein.</li>
                    <li>
                        Zugriff auf <code>.htaccess</code> und <code>.htpasswd</code> via <a href="#chmod"><code>chmod</code></a> gewähren.</li>
                </ol>
            </p>
            <?php include("../footer.html"); ?>
        </main>
    </body>
</html>
