<?php

    $noticias = array();
    $noticias[1]['Titulo'] = 'Titulo da noticia 1';
    $noticias[1]['Conteudo'] = 'Conteudo da noticia 1';

    $noticias[2]['Titulo'] = 'Titulo da noticia 2';
    $noticias[2]['Conteudo'] = 'Conteudo da noticia 2';

    $noticias[3]['Titulo'] = 'Titulo da noticia 3';
    $noticias[3]['Conteudo'] = 'Conteudo da noticia 3';

    $noticias[4]['Titulo'] = 'Titulo da noticia 4';
    $noticias[4]['Conteudo'] = 'Conteudo da noticia 4';

    #var_dump($noticias);

/*
    #Usando While
    $i = 1;
    while($i <= 4){
        echo '<h3>' . $noticias[$i]['Titulo'] . '</h3>'; 
            //echo '<br />';
        echo '<p>' . $noticias[$i]['Conteudo'] .'</p>';
        //echo '<br /> <br />';
        
        $i += 1;
    }
*/
    #Usando for
    for($i = 1; $i <= 4; $i++){
        echo '<h3>' . $noticias[$i]['Titulo'] . '</h3>'; 
        echo '<p>' . $noticias[$i]['Conteudo'] .'</p>';  
    }
    

?>