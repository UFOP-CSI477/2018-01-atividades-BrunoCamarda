amplitude = 0;
deltaT = 0;

$(document).ready(function(){ 
	console.log("Documento carregado");
	$("input[name='amp']").focusout(function(){
     amplitude = parseInt($("input[name='amp']").val());
     if (isNaN(amplitude)){
        $("#alertaV1").slideDown();
        $("#grupoV1").addClass("has-error");
        $("input[name='amp']").val("");
        return;
    }

      $("#grupoV1").removeClass("has-error");
      $("#alertaV1").hide();
   });

	$("input[name='tempo']").focusout(function(){
     deltaT = parseInt($("input[name='tempo']").val());
     if (isNaN(deltaT)){
        $("#alertaV2").slideDown();
        $("#grupoV2").addClass("has-error");
        $("input[name='tempo']").val("");
        return;
    }
      $("#grupoV2").removeClass("has-error");
      $("#alertaV2").hide();
   });

	$("button[name='enviar']").click(function(){ 
		resultado = Math.log10(parseInt(amplitude)) + 3 * Math.log10(8 * parseInt(deltaT)) - 2.92;
		if (!isNaN(resultado)){ 
			$("div[id='mostra-magnitude']").show();
			resultado = resultado.toFixed(3);
			$("td[id='magnitude']").html(resultado);
			retornaEfeito(resultado);
		}
		return;

	});

	 $("button[name='limpar']").click(function(){
     $("input[name='amp']").val("");
     $("input[name='tempo']").val("");
     $("td[id='magnitude']").html("");
     $("td[id='efeitos']").html("");
     $("#grupoV1").removeClass("has-error");
     $("#grupoV2").removeClass("has-error");
     $("#alertaV1").hide();
     $("#alertaV2").hide();
     $("div[id='mostra-magnitude']").hide();
   });
 
});

function retornaEfeito(magnitude){
	if (magnitude < 3.5){ 
		$("td[id='efeitos']").html("Geralmente não sentido, mas gravado");
	} else if (magnitude > 3.5 && magnitude < 5.4){ 
		$("td[id='efeitos']").html("Às vezes é sentido, mas raramente causa dano");
	} else if (magnitude > 5.4 && magnitude < 6.0){ 
		$("td[id='efeitos']").html("No máximo causa pequenos danos a prédios bem construídos, mas pode danificar seriamente casas mal construidas em regiões próximas");
	} else if (magnitude > 6.0 && magnitude < 6.9){
		$("td[id='efeitos']").html("Pode ser destrutivo em áreas em torno de até 100km do epicentro");
	} else if (magnitude > 7.0 && magnitude < 7.9){ 
		$("td[id='efeitos']").html("Grande terremoto. Pode causar sérios danos numa grande faixa");
	} else { 
		$("td[id='efeitos']").html("Enorme terremoto. Pode causar graves danos em muitas áreas mesmo que estejam a centenas de quilômetros");
	}
	return 0;
}