<?php
define('CLASS_DIR', 'src/');
set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
spl_autoload_register();


$conexao = new \WSJ\Database\Conexao();
$db      = new \WSJ\Database\Persist($conexao->getPdo());
$db->criaTable();



$cliente = new \WSJ\Cliente\Types\ClientePF();
$cliente->setNome('Nathan Juan Ribeiro')
    ->setCpf('800.995.268-08')
    ->setEmail('nathan@email.com')
    ->setTelefone('3589-3587')
    ->grauImportancia('4')
    ->setEndereco('Rua 16, 827, Colinas de Homero')
    ->enderecoCobranca('Avenida 1 de maio, 258, Jd Acacias');
$db->persistCliente($cliente)->flush();

$cliente = new \WSJ\Cliente\Types\ClientePF();
$cliente->setNome('Enrico Diogo Oliveira')
    ->setCpf('896.038.701-02')
    ->setEmail('enrico@email.com')
    ->setTelefone('3895-2645')
    ->grauImportancia('5')
    ->setEndereco('Rua Em Projeto 17, 5454, Jardim Petrópolis')
    ->enderecoCobranca('Rua Ulisses Guimarães, 520, Planalto');
$db->persistCliente($cliente)->flush();

$cliente = new \WSJ\Cliente\Types\ClientePF();
$cliente->setNome('Hugo Nathan Barbosa')
    ->setCpf('845.011.986-30')
    ->setEmail('hugo@email.com')
    ->setTelefone('9586-1477')
    ->grauImportancia('1')
    ->setEndereco('Quadra 2 Conjunto 9, Setor Leste')
    ->enderecoCobranca('Quadra 52 Projeção 3, 612, Setor Central');
$db->persistCliente($cliente)->flush();

$cliente = new \WSJ\Cliente\Types\ClientePF();
$cliente->setNome('Bárbara Larissa Fernanda Freitas')
    ->setCpf('646.893.738-84')
    ->setEmail('asdaw@email.com')
    ->setTelefone('4565-8974')
    ->grauImportancia('2')
    ->setEndereco('Quadra 52 Projeção 3, 227, Setor Central')
    ->enderecoCobranca('Quadra 52 Projeção 3, 227, Setor Central');
$db->persistCliente($cliente)->flush();

$cliente = new \WSJ\Cliente\Types\ClientePF();
$cliente->setNome('Alícia Rayssa da Silva')
    ->setCpf('781.648.428-34')
    ->setEmail('ryt,dl@email.com')
    ->setTelefone('6773-4534')
    ->grauImportancia('5')
    ->setEndereco('Núcleo Papa João Paulo I, 12, Rio Paraná')
    ->enderecoCobranca('Núcleo Papa João Paulo I, 12, Rio Paraná');
$db->persistCliente($cliente)->flush();




$cliente = new \WSJ\Cliente\Types\ClientePJ();
$cliente->setRazaoSocial('Miguel e Stefany Comercio de Bebidas Ltda')
    ->setCnpj('87.036.042/0001-60')
    ->setEmail('msgw@email.com')
    ->setTelefone('3589-3587')
    ->grauImportancia('4')
    ->setEndereco('Rua Girasol, 375, Jd Rosa do Sul')
    ->enderecoCobranca('Rua Walter Orlando de Carvalho, 389, Vila Xavier');
$db->persistCliente($cliente)->flush();

$cliente = new \WSJ\Cliente\Types\ClientePJ();
$cliente->setRazaoSocial('Ian e Larissa Ferragens ME')
    ->setCnpj('62.648.497/0001-06')
    ->setEmail('ianal@demail.com')
    ->setTelefone('5456-8712')
    ->grauImportancia('2')
    ->setEndereco('Avenida Conselheiro Ruy Barbosa, 844, Centro')
    ->enderecoCobranca('Rua Carlos Nejar, 814, Parque Itacolomi');
$db->persistCliente($cliente)->flush();

$cliente = new \WSJ\Cliente\Types\ClientePJ();
$cliente->setRazaoSocial('Eduarda e Bruna Pizzaria Delivery ME')
    ->setCnpj('92.137.238/0001-81')
    ->setEmail('ebzpizza@gemail.com')
    ->setTelefone('5668-1234')
    ->grauImportancia('5')
    ->setEndereco('Servidão Cachoeira, 718, Boa Vista')
    ->enderecoCobranca('Rua Joaquim de Paula Souza, 234, Jardim Proença');
$db->persistCliente($cliente)->flush();

$cliente = new \WSJ\Cliente\Types\ClientePJ();
$cliente->setRazaoSocial('Jennifer e Kamilly Marcenaria ME')
    ->setCnpj('89.271.148/0001-74')
    ->setEmail('marcenaria@hotmail.com')
    ->setTelefone('8978-2345')
    ->grauImportancia('1')
    ->setEndereco('Rua Teresa Maria da Silva, 835, Jardim Camila')
    ->enderecoCobranca('Praça Nove de Julho, 956, Centro');
$db->persistCliente($cliente)->flush();

$cliente = new \WSJ\Cliente\Types\ClientePJ();
$cliente->setRazaoSocial('Isabelle e Yuri Entregas Expressas ME')
    ->setCnpj('56.170.273/0001-39')
    ->setEmail('entregas@gmail.com')
    ->setTelefone('7652-1289')
    ->grauImportancia('3')
    ->setEndereco('Rua Jornalista Wilson Carneiro da Cunha, 474, Centro')
    ->enderecoCobranca('Rua Constelação, 721, Cotia');
$db->persistCliente($cliente)->flush();


