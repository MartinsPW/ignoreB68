<?php
	Session_start();
	//include 'includesPHP/ligar.php';
  	if (isset($_REQUEST['p'])) $p=$_REQUEST['p']; else $p='inicial';
?>
<!DOCTYPE html>
<html lang="pt">

<!-- Requerir o ficheiro que contém o <head> com todos os CSS, JS's etc.. -->
<?php 
	require("./recursos/configuracao/configuracao.php")
?>
<body>
<?php
	require("./recursos/menus/menuHome.php");
?>

<!-- Área de trabalho -->
<?php
	switch($p){
		case 'inicial' : require("./recursos/templates/conteudo.php");break;
		case 'produto' : require("./recursos/templates/produto.php");break;
		default :require("./recursos/templates/erro.php");break;
	}
?>
<script>
$('#titulo').text('TrainEnergy - <?php echo $TITLE; ?>');
</script>
<!-- Fim da área de trabalho -->






<!-- Popup de alerta-->	
<div class="aviso" onclick="fechar(this);">
	<div class="aviso-fechar"><strong>X</strong></div>
		<div class="container">
			<p class="aviso-titulo">Aviso!</p>
			<div class="aviso-texto">Para uma melhor navegação, evite dar <strong>zoom</strong> às páginas deste site</div>
		</div>	
</div>
<!-- Popup de alerta-->	



<?php
	require("./recursos/footers/f1.php");
?>
</body>
</html>


<!-- SCRIPTS - NO FINAL PARA SER MAIS RÁPIDO DE SE CARREGAR-->
<!--  Verificar se o broswer currente é o Internet Explorer. 
Se for -> barra a entrada do mesmo.
Obs: isto é feito por questões de compatibilidades.-->

<script language="javascript">
$(function () {
  $('[data-toggle="popover"]').popover()
})
$('.popover-dismiss').popover({
  trigger: 'focus'
})

if (navigator.appName == "Microsoft Internet Explorer") {
        document.location = "http://www.domain.com/ie_reject.shtml"; 
		
		
		
}


function fechar(e){
	//e.style.display="none";
	$(e).hide();
}


</script>


