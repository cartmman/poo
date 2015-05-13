<?php
define('CLASS_DIR', 'src/');
set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
spl_autoload_register();

/*
for($i=0;$i<=9;$i++) {
    $c[$i] = new \wsj\Cliente\Types\ClientePF();
    $c[$i]->setNome("Nome do cliente ".$i);
    $c[$i]->setCpf(mt_rand(0,9).mt_rand(0,9).mt_rand(0,9).mt_rand(0,9).mt_rand(0,9).mt_rand(0,9).mt_rand(0,9).mt_rand(0,9).mt_rand(0,9).mt_rand(0,9).mt_rand(0,9));
    $c[$i]->setEmail("cliente".$i."@email.com");
    $c[$i]->setTelefone(mt_rand(0,9).mt_rand(0,9).mt_rand(0,9).mt_rand(0,9)."-".mt_rand(0,9).mt_rand(0,9).mt_rand(0,9).mt_rand(0,9));
    $c[$i]->grauImportancia(mt_rand(1,5));
    $c[$i]->setEndereco("Endereço do cliente ".$i);
    $c[$i]->enderecoCobranca("Endereço cobrança cliente ".$i);

    $clientes[] = $c[$i];
}
*/

$clientePF1 = new \WSJ\Cliente\Types\ClientePF();
$clientePF2 = new \WSJ\Cliente\Types\ClientePF();
$clientePF3 = new \WSJ\Cliente\Types\ClientePF();
$clientePF4 = new \WSJ\Cliente\Types\ClientePF();
$clientePF5 = new \WSJ\Cliente\Types\ClientePF();

$clientePJ1 = new \WSJ\Cliente\Types\ClientePJ();
$clientePJ2 = new \WSJ\Cliente\Types\ClientePJ();
$clientePJ3 = new \WSJ\Cliente\Types\ClientePJ();
$clientePJ4 = new \WSJ\Cliente\Types\ClientePJ();
$clientePJ5 = new \WSJ\Cliente\Types\ClientePJ();

$clientePF1->setNome('Nathan Juan Ribeiro')
           ->setCpf('800.995.268-08')
           ->setEmail('nathan@email.com')
           ->setTelefone('3589-3587')
           ->grauImportancia('4')
           ->setEndereco('Rua 16, 827, Colinas de Homero')
           ->enderecoCobranca('Avenida 1 de maio, 258, Jd Acacias');

$clientePF2->setNome('Enrico Diogo Oliveira')
           ->setCpf('896.038.701-02')
           ->setEmail('enrico@email.com')
           ->setTelefone('3895-2645')
           ->grauImportancia('5')
           ->setEndereco('Rua Em Projeto 17, 5454, Jardim Petrópolis')
           ->enderecoCobranca('Rua Ulisses Guimarães, 520, Planalto');

$clientePF3->setNome('Hugo Nathan Barbosa')
           ->setCpf('845.011.986-30')
           ->setEmail('hugo@email.com')
           ->setTelefone('9586-1477')
           ->grauImportancia('1')
           ->setEndereco('Quadra 2 Conjunto 9, Setor Leste')
           ->enderecoCobranca('Quadra 52 Projeção 3, 612, Setor Central');

$clientePF4->setNome('Bárbara Larissa Fernanda Freitas')
           ->setCpf('646.893.738-84')
           ->setEmail('asdaw@email.com')
           ->setTelefone('4565-8974')
           ->grauImportancia('2')
           ->setEndereco('Quadra 52 Projeção 3, 227, Setor Central')
           ->enderecoCobranca('Quadra 52 Projeção 3, 227, Setor Central');

$clientePF5->setNome('Alícia Rayssa da Silva')
           ->setCpf('781.648.428-34')
           ->setEmail('ryt,dl@email.com')
           ->setTelefone('6773-4534')
           ->grauImportancia('5')
           ->setEndereco('Núcleo Papa João Paulo I, 12, Rio Paraná')
           ->enderecoCobranca('Núcleo Papa João Paulo I, 12, Rio Paraná');

$clientePJ1->setRazaoSocial('Miguel e Stefany Comercio de Bebidas Ltda')
           ->setCnpj('87.036.042/0001-60')
           ->setEmail('msgw@email.com')
           ->setTelefone('3589-3587')
           ->grauImportancia('4')
           ->setEndereco('Rua Girasol, 375, Jd Rosa do Sul')
           ->enderecoCobranca('Rua Walter Orlando de Carvalho, 389, Vila Xavier');

$clientePJ2->setRazaoSocial('Ian e Larissa Ferragens ME')
           ->setCnpj('62.648.497/0001-06')
           ->setEmail('ianal@demail.com')
           ->setTelefone('5456-8712')
           ->grauImportancia('2')
           ->setEndereco('Avenida Conselheiro Ruy Barbosa, 844, Centro')
           ->enderecoCobranca('Rua Carlos Nejar, 814, Parque Itacolomi');


$clientePJ3->setRazaoSocial('Eduarda e Bruna Pizzaria Delivery ME')
           ->setCnpj('92.137.238/0001-81')
           ->setEmail('ebzpizza@gemail.com')
           ->setTelefone('5668-1234')
           ->grauImportancia('5')
           ->setEndereco('Servidão Cachoeira, 718, Boa Vista')
           ->enderecoCobranca('Rua Joaquim de Paula Souza, 234, Jardim Proença');

$clientePJ4->setRazaoSocial('Jennifer e Kamilly Marcenaria ME')
           ->setCnpj('89.271.148/0001-74')
           ->setEmail('marcenaria@hotmail.com')
           ->setTelefone('8978-2345')
           ->grauImportancia('1')
           ->setEndereco('Rua Teresa Maria da Silva, 835, Jardim Camila')
           ->enderecoCobranca('Praça Nove de Julho, 956, Centro');

$clientePJ5->setRazaoSocial('Isabelle e Yuri Entregas Expressas ME')
           ->setCnpj('56.170.273/0001-39')
           ->setEmail('entregas@gmail.com')
           ->setTelefone('7652-1289')
           ->grauImportancia('3')
           ->setEndereco('Rua Jornalista Wilson Carneiro da Cunha, 474, Centro')
           ->enderecoCobranca('Rua Constelação, 721, Cotia');



$clientes = [$clientePF1,$clientePF2,$clientePF3,$clientePF4,$clientePF5,
             $clientePJ1,$clientePJ2,$clientePJ3,$clientePJ4,$clientePJ5];

if($_REQUEST['ordem']=='asc') { ksort($clientes); }
if($_REQUEST['ordem']=='desc') { rsort($clientes);}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Clientes</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid"></div>
	</nav>

    <div class="container">
        <h1>Clientes</h1>
        <br>
        <br>
        <a href="index.php?ordem=desc">Ordenar Decrescente</a><br>
        <a href="index.php?ordem=asc">Ordenar Ascendente</a><br>
        <table class="table">
            <tr>
                <th>Nome/Razão Social</th>
                <th>CPF/CNPJ</th>
                <th>Endereço</th>
                <th>Telefone</th>
                <th>Email</th>
                <th>Tipo Cliente</th>
                <th>Grau</th>
                <th>Cobrança</th>
            </tr>
            <?php foreach($clientes as $cliente): ?>
            <tr>
                <?php if($cliente instanceof \wsj\Cliente\Types\ClientePF): ?>
                    <td><?=$cliente->getNome();?></td>
                <?php else: ?>
                    <td><?=$cliente->getRazaoSocial();?></td>
                <?php endif; ?>

                <?php if($cliente instanceof \wsj\Cliente\Types\ClientePF): ?>
                    <td><?=$cliente->getCpf();?></td>
                <?php else: ?>
                    <td><?=$cliente->getCnpj();?></td>
                <?php endif; ?>

                <td><?=$cliente->getEndereco() ;?></td>
                <td><?=$cliente->getTelefone() ;?></td>
                <td><?=$cliente->getEmail() ;?></td>

                <?php if($cliente instanceof \wsj\Cliente\Types\ClientePF): ?>
                        <td>Pessoa Física</td>
                <?php else: ?>
                        <td>Pessoa Jurídica</td>
                <?php endif; ?>

                <td><?=$cliente->getGrau() ;?></td>
                <td><?=$cliente->getEnd() ;?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>

