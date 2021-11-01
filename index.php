<!DOCTYPE>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title> Validação do CPF/CNPJ </title> 
</head>
<body>
	<?php			
		include 'cpf_cnpj.class.php';	
		
		// Testa se é CPF e se é válido.
		try{
		 $cpfOrCnpj = new CPF_CNPJ('081.138.814-09');
		 echo $cpfOrCnpj."<br>";
		 echo "Tipo: ".$cpfOrCnpj->getTipo()."<br>";
		} catch (Exception $e){
		 echo "Exceção: ".$e->getMessage() . "<br>";
		}		
		// Testa se é CNPJ e se é válido.
		try{
		 $cpfOrCnpj = new CPF_CNPJ('51.753.656/0001-16');
		 echo $cpfOrCnpj . "<br>";
		 echo "Tipo: ".$cpfOrCnpj->getTipo();
		} catch (Exception $e){
		 echo "Exceção: ".$e->getMessage();
		} ?>           
</body>
</html>
