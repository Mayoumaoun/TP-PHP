<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<?php

class Etudiant
{
    private string $nom;
    private array $notes;

    public function __construct(string $nom, float ...$notes)
    {
        $this->nom = $nom;
        $this->notes = $notes;
    }

    public function affichage(): void
    {
        echo "<table class=\"table table-bordered\">" .
            "<tr class=\"table-light\">" .
            "<td class=\"table-light\">" .
            $this->nom . "</td>" .
            "</td>" .
            "</tr>";
        foreach ($this->notes as $note) {
            if ($note < 10) {
                echo
                    "<tr class=\"table-danger\">" .
                    "<td class=\"table-danger\">" .
                    $note . "</td>" .
                    "</td>" .
                    "</tr>";
            }
            if ($note == 10) {
                echo
                    "<tr class=\"table-warning\">" .
                    "<td class=\"table-warning\">" .
                    $note . "</td>" .
                    "</td>" .
                    "</tr>";
            }
            if ($note > 10) {
                echo "<tr class=\"table-success\">" .
                    "<td class=\"table-success\">" .
                    $note . "</td>" .
                    "</td>" .
                    "</tr>";
            }

        }
        echo
            "<tr class=\"table-primary\">" .
            "<td class=\"table-primary\">" .
            "Votre moyenne est : " . $this->moyenne() .
            "</td>" .
            "</tr>" .
            "</table>";


    }

    public function moyenne(): float
    {
        $taille = count($this->notes);
        $somme = array_sum($this->notes);
        return $somme / $taille;
    }

    public function Admis(): void
    {
        $moyenne = $this->moyenne();
        if ($moyenne >= 10) {
            echo "Moyenne: " . $this->moyenne() . "<br>" . $this->nom . "Admis !!!!";
        } else {
            echo "Moyenne: " . $this->moyenne() . "<br>" . $this->nom . "Refuse :<";
        }

    }

}

?>
</body>
</html>

