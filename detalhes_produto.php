<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Detalhes do produto</title>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	</head>

	<body>
		

		<div class="container">
            <div class="row">
                <div class="page-header">
                    <h1>Detalhes do produto</h1>
                </div>
                
                <div class="col-md-4">  
                    <?php
                    
                        $id_produto = $_POST['id_produto'];
                    
                        $detalhes[1] = 'Detalhamento da cadeira';
                        $detalhes[2] = 'Detalhamento do fogão';
                        $detalhes[3] = 'Detalhamento do roteador';
                        $detalhes[4] = 'Detalhamento da tv';
                    
                        echo $detalhes[$id_produto];
                    
                    ?>
                    
                </div>
            </div>
            
		</div>
	</body>
</html>