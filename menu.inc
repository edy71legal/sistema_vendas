


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 
<html  xml:lang="pt" lang="pt">
 
<head>
	<title>Menu Horizontal</title>
	<style type="text/css">
	
*{margin:0;padding:0;} /* Tiny Reset */
ul.menu li{
 display:inline;
}
li.has-submenu ul{
 display:none;
 position:absolute;
}
li.has-submenu ul li{
 display:flex;
}
li.has-submenu:hover ul{
 display:block;
}
/* Visual */
ul.menu{
 margin:2rem;
 display:flex;
}
ul.menu li a{
 text-decoration:none;
 background: #fff;
 border:1px solid #ddd;
 padding:1rem 2rem;
 margin-right:-1px;
 color:#333;
}
li.has-submenu ul{
 margin-top:.95rem;
}
ul.menu li a:hover{
 background:#eee;
}
li.has-submenu ul li a{
 min-width:90px;
}
li.has-submenu ul li{
 margin-bottom:-1px;
}
ul.menu li.has-menu{
 top:0;
}


</style>
</head>

 <body width= '90%' margin= auto  min-width=600px max-width=2000px>
	<font size="5,5">
		<center>SISTEMA DE CADASTRO </center>
	<div id="menu" align="center">
		<ul>
		
<ul class="menu">

 <li class="has-submenu"><a href="#">Clientes</a>
  <ul>
   <li><a href="cad_clientes.php">Cadastrar</a></li>
   <li><a href="pesquisa.php">Consultar</a></li>
  </ul>
 </li>
 <li class="has-submenu"><a href="#">Produtos</a>
  <ul>
   <li><a href="#">Cadastrar</a></li>
   <li><a href="#">Consultar</a></li>
  </ul>
<li class="has-submenu"><a href="#">Fornecedores</a>
  <ul>
   <li><a href="#">Cadastrar</a></li>
   <li><a href="#">Consultar</a></li>
   </ul>
<li class="has-submenu"><a href="#">Funcionarios</a>
  <ul>
   <li><a href="#">Cadastrar</a></li>
   <li><a href="#">Consultar</a></li>
</ul>
   <li class="has-submenu"><a href="#">Usuarios</a>
  <ul>
   <li><a href="#">Cadastrar</a></li>
   <li><a href="#">Consultar</a></li>
</ul>
   <li class="has-submenu"><a href="#">Vendas</a>
  <ul>
   <li><a href="#">Cadastrar</a></li>
   <li><a href="#">Consultar</a></li>
</ul>
   <li class="has-submenu"><a href="#">Relatorios</a>
  <ul>
   <li><a href="#">Consultar</a></li>
   <li><a href="#">Outros</a></li>
</ul>
<li class="has-submenu"><a href="sair.php">Sair</a>
<ul>  
</ul>
</ul>






			<!--<li><a href="formulario_inserir_dados_aluno.php">Clientes</a></li>
			<li><a href="">Produtos</a></li>
			<li><a href="">Fornecedores</a></li>
			<li><a href="">Funcionarios</a></li>
			<li><a href="">Usuarios</a></li>
			<li><a href="">Vendas</a></li>
			<!--<li><a href="">Links</a></li>
			<!--<li><a href="">Contato</a></li>-->
			

		</ul>
	</div>


</body>
</html>


