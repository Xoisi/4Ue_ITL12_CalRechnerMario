<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalorienberechnung</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Kalorienberechnung</h2>
    <form method="post" action="">
        <!-- Geschlechtsauswahl (Weiblich/Männlich) -->
        <label for="geschlecht">Geschlecht:</label>
        <select name="geschlecht" id="geschlecht">
            <option value="weiblich">Weiblich</option>
            <option value="maennlich">Männlich</option>
        </select><br><br>

        <!-- Eingabe des Alters -->
        <label for="alter">Alter (j):</label>
        <input type="number" name="alter" id="alter"><br><br>

        <!-- Eingabe des Gewichts in kg -->
        <label for="gewicht">Gewicht (kg):</label>
        <input type="number" name="gewicht" id="gewicht"><br><br>

        <!-- Eingabe der Größe in cm -->
        <label for="groesse">Größe (cm):</label>
        <input type="number" name="groesse" id="groesse"><br><br>

        <!-- Tägliche Bewegungen -->
        <h3>Tägliche Bewegung:</h3>
        <table>
            <tr>
                <th>Aktivität</th>
                <th>Zeit (h)</th>
            </tr>
            <tr>
                <td>Sitzen</td>
                <td><input type="number" name="sitzen" id="sitzen"></td>
            </tr>
            <tr>
                <td>Büroarbeiten</td>
                <td><input type="number" name="bueroarbeit" id="bueroarbeit"></td>
            </tr>
            <tr>
                <td>Stehend/gehend</td>
                <td><input type="number" name="stehend_gehen" id="stehend_gehen"></td>
            </tr>
        </table>

        <!-- Berechnung starten -->
        <input type="submit" value="Berechnen">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Variablen für die Eingaben initialisieren
        $geschlecht = $_POST['geschlecht'];
        $alter = $_POST['alter'];
        $gewicht = $_POST['gewicht'];
        $groesse = $_POST['groesse'];

        // Basal Metabolic Rate (BMR) berechnen
        if ($geschlecht == "weiblich") {
            $kalorien = 655.1 + (9.6 * $gewicht) + (1.8 * $groesse) - (4.7 * $alter);
        } elseif ($geschlecht == "maennlich") {
            $kalorien = 66.47 + (13.7 * $gewicht) + (5 * $groesse) - (6.8 * $alter);
        }

        // Activity Level Factor (PAL) berechnen
        $sitzen = $_POST['sitzen'] * 1.2;
        $bueroarbeit = $_POST['bueroarbeit'] * 1.45;
        $stehend_gehen = $_POST['stehend_gehen'] * 1.85;
        $schlaf = (24 - ($sitzen + $bueroarbeit + $stehend_gehen)) * 0.95;

        $pal = ($sitzen + $bueroarbeit + $stehend_gehen + $schlaf) / 24;
        $taglicher_kalorienbedarf = $kalorien * $pal;

        // Ergebnis ausgeben
        echo "<h3>Ergebnis:</h3>";
        echo "<p>Täglicher Kalorienbedarf: " . round($taglicher_kalorienbedarf, 2) . " kcal</p>";
    }
    ?>
</body>
</html>