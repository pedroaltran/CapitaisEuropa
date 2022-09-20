<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paises e Capitais da Europa</title>
   
    <style>
        body{
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; 
            display: grid; 
            place-items: center;
            background-color: #16213E;
        }
        h1{
            font-size: 30px;
            font-weight: lighter;
        }
        div.container{
            width: 100%;
            max-width: 650px;
            text-align: center;
            color: #FFF5E4;
            background-color: #0F3460;
            padding: 15px 2%;
            border-radius: 15px;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }
        form{
            width: 100%;
            margin: 20pt;
            max-width: 450px;
            text-align: center;
            background-color:#0F3460;
            padding: 15px 2%;
            border-radius: 5px;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }
        input{
            width: 100%;
            max-width: 200px;
            padding: 5px;
            font-size: 16px;
            text-align: center;
            outline: 0;
            border: 1px solid rgb(100,100,100);
            border-radius: 5px;
            color: rgb(70,70,70)
        }
        input.button{
            padding: 10px 15px;
            font-size: 16px;
            border-radius: 5px;
            border: 0px;
            background-color: #E94560;
            color: white;
            cursor: pointer;
        }
        div.field{
            border-radius: 5pt;
            max-width: 1000px;
            padding: 10pt;
            color: white;
            background-color: #533483;
            resize: none;
            text-align: center;
            overflow: auto;
            width: 600px;
            height: auto;
        }
    </style>    
</head>
<body>
<div class="container">
    <form method="get" action="">
    <h1>Digite o nome de um país europeu que deseja ver a capital </h1>
    <input type="text" name="nomePais" placeholder="Digite um país:">
    <br><div><input type="submit" value="Exibir" class="button"></div>    
    </form>
</div>
    <br><br>
    <div class="field" id="conteudo" name="result" style="font-size:20px">
        <?php
        
        $europa= array (
            "Italia"=>"Roma", 
            "Luxemburgo"=>"Luxemburgo  ",
            "Belgica"=> "Bruxelas",
            "Dinamarca"=>"Copenhagen", 
            "Finlandia"=>"Helsinki", 
            "França" => "Paris", 
            "Eslovaquia"=>"Bratislava", 
            "Eslovenia"=>"Ljubljana", 
            "Alemanha" => "Berlin", 
            "Grecia" => "Atenas", 
            "Irlanda"=>"Dublin", 
            "Holanda"=>"Amsterdam", 
            "Portugal"=>"Lisboa", 
            "Espanha"=>"Madri", 
            "Suecia"=>"Estocolmo", 
            "Reino Unido"=>"Londres", 
            "Chipre"=>"Nicosia", 
            "Lituania"=>"Vilnius", 
            "Republica Tcheca"=>"Praga", 
            "Estonia"=>"Tallin", 
            "Hungria"=>"Budapest", 
            "Malta"=>"Valetta", 
            "Austria" => "Viena", 
            "Polonia"=>"Varsóvia",
            "Albania" => "Tirana",
            "Andorra" => "Andorra e Velha",
            "Azerbaijão" => "Baku",
            "Bielorrussia" =>"Minsk",
            "Bosnia e Herzegovina"=>"Saravejo",
            "Bulgária"=>"Sofia",
            "Croacia"=>"Zagreb",
            "Islandia"=>"Reykjavik",
            "Letonia"=>"Riga",
            "Liechtenstein"=>"Vaduz",
            "Moldavia"=>"Chisinau",
            "Monaco"=>"Mônaco",
            "Montenegro"=>"Podgorica",
            "Noruega"=>"Oslo",
            "Macedonia do Norte"=>"Skopje");


        //padronizando a entrada    
        $handler = $_GET["nomePais"];
        $pais = strtolower($handler);


        //padronizando o array
        $array = array_change_key_case($europa, CASE_LOWER);
        

        if(array_key_exists($pais, $array)){
        echo 'A capital de '.$handler.' é '.$array[$pais];
        }else{
            echo "<h3>Pais em branco ou inexistente, exibindo todos paises europeus...</h3>";
            echo"<pre>";
            asort($europa);
            print_r($europa);
            echo "</pre>";
        }

    ?>
    </div>   
    
</body>
</html>

