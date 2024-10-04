<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stampa tabella</title>
</head>
<body>
    
    <?php 
        //righe e colonne
        function stampaTabella($m, $n){
            
            $str="<table style='border: 1px solid black; border-collapse: collapse ; background-color:#7FFFD4;'>";

                for ($i=0; $i < $m; $i++) { 
                    $str = $str."<tr>";
                    for ($f=0; $f < $n; $f++) { 
                        $str=$str."<td style='padding:10px; border:1px solid black;'> (".$i.",".$f.") </td>";
                    }
                   
                    $str = $str."</tr>";
                }

            $str=$str . "</table>";
            return $str;

        }

        $tabella = stampaTabella(4,5);
        echo "$tabella";

    
    ?>
    <table>
        
    </table>
</body>