// Seleciona o elemento que será movido
var elemento = document.getElementById("elemento-a-ser-movido");

// Adiciona o evento "scroll" ao objeto window
window.addEventListener("scroll", function() {
  // Obtém a posição atual da rolagem da página
  var posicaoRolagem = window.pageYOffset || document.documentElement.scrollTop;
  
  // Move o elemento para a posição atual da rolagem da página
  elemento.style.top = posicaoRolagem + "px";
});


$(function (){
	
	$('.filtro').click (function(){
	$('.mostraFiltro').slideToggle();
	$(this).toggleClass('active');
		return false;
	});
	
	//$('.mobmenu').click (function(){
	//$('.menuprincipal').slideToggle();
	//$(this).toggleClass('active');
		//return false;
	//});	
	
	$('.senha').click (function(){
		$('.mostraCampo').slideToggle();
		$(this).toggleClass('active');
		return false;
	});
	
	$( function() {
		$( "#tab" ).tabs();
	  } );
				
	$( "#accordion" ).accordion({
		collapsible: true,
		autoHeight: false,
		active: false,
		heightStyle: "content" 
    });    

});

function excluir(obj){
	var entidade  = $(obj).attr('data-entidade');
	var id  = $(obj).attr('data-id');	
	if(confirm('Deseja realmente excluir ?')){
		window.location.href = base_url + entidade +"/excluir/" + id;	
	}
}

function fecharMsg(obj){	
	$(".msg").hide();
}
$( function() {
	$( "#dataTable" ).dataTable();
  } );