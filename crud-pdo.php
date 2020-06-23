<?php
    

//----------------------------------------------CONEXAO--------------------------------------------------



    //esta e uma conexao via pdo cria-se uma variavel atribui a ela op objeto pdo e instacia direto no metodo construtor 
    // 1-nome do banco de dados e depois o host, useuario e senha 

try {
	
      $pdo = new PDO("mysql:dbname=CRUDPDO;host=localhost","root","");



}

 catch (PDOException $e) {
	
     //esta mensagem sera exibida caso haja erro com a conexao do banco de dados como ja diz ele pega somente PDOEXCEPTION


     echo"Problemas no banco de dados: ".$e->getMessage();

}

catch (Exception $e) {

	
   //esta mensagem sera exibida caso haja erro com a conexao do banco de dados como ja diz ele pega QUALQUER EXECESSAO

  echo "erro generico: " .$e->getMessage();

}

//--------------------------------------------CRIANDO INSERT-----------------------------------------------------

// EXISTEM DUAS FORMAS DE FAZER O INSERT EM PDO A PIRMIERA FOR E USANDO O BIND VALUE

// basicamente atribuir a a variavel $pdo a classe PDO faz com que ela tenha todos os metodos necessarios pra executar de forma geral as operacoes no banco
//


// $res = $pdo-> prepare("INSERT INTO pessoa(nome,telefone,email)VALUES(:n,:t,:e)");

// $res -> bindValue(":n","Marcos");

// $res -> bindValue(":t","1111111");

// $res -> bindValue(":e","teste@hotmail.com");

// $res -> execute();   


//segunda forma aceita valores diretamente


// $pdo -> query("INSERT INTO pessoa(nome,telefone,email)VALUES('Miriam','0000000','teste@gmail.com'");


//-----------------------------------------------------DELETE ---------------------------------------------------

//primeiro modo

// $cmd = $pdo ->prepare("DELETE FROM pessoa WHERE id = :id");

// $id =1;

// $cmd -> bindValue(":id",$id);

// $cmd -> execute();


//segundo modo

// $pdo -> query("DELETE FROM pessoa WHERE id =1");

//nao precisa chmar o execute


//------------------------------------------------------UPDATE-----------------------------------------------

 // $cmd = $pdo->prepare("UPDATE pessoa SET email = :e WHERE id = :id");
 // $cmd -> bindValue(":e","Miriam@gmail.com");
 // $cmd -> bindValue(":id",2);
 // $cmd -> execute();


//---------------------------------------------------------SELECT------------------------------------------

// $cmd = $pdo -> prepare("SELECT * FROM pessoa WHERE id =:id");

// $cmd -> bindValue(":id",3);

// $cmd -> execute();

// $resultado= $cmd -> fetch(PDO::FETCH_ASSOC);

// mostrndo o conteudo de forma organizada


// foreach ($resultado as $key => $value) {
 	
// 	echo $key.":".$value."<br>";
//  }


?>


