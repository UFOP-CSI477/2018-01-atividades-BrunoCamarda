
$(document).ready(function(){ 
	$("input[name='alt']").keyup(function(){
     altura = parseInt($("input[name='alt']").val());
     if (isNaN(altura)){
        $("#alertaV1").slideDown();
        $("#grupoV1").addClass("has-error");
        $("input[name='alt']").val("");
        $("div[id='mostra-resultado']").hide();
        return;
    }
      $("#grupoV1").removeClass("has-error");
      $("#alertaV1").hide();

      if (!isNaN(peso)){ 
          fazCalculo();
      }
   });

	$("input[name='peso']").keyup(function(){
     peso = parseInt($("input[name='peso']").val());
     if (isNaN(peso)){
        $("#alertaV2").slideDown();
        $("#grupoV2").addClass("has-error");
        $("input[name='peso']").val("");
        $("div[id='mostra-resultado']").hide();
        return;
    }
      $("#grupoV2").removeClass("has-error");
      $("#alertaV2").hide();
        if (!isNaN(altura)){
          fazCalculo();
        }
   });

	 $("button[name='limpar']").click(function(){
     $("input[name='alt']").val("");
     $("input[name='peso']").val("");
     $("td[id='resultado']").html("");
     $("td[id='efeitos']").html("");
     $("#grupoV1").removeClass("has-error");
     $("#grupoV2").removeClass("has-error");
     $("#alertaV1").hide();
     $("#alertaV2").hide();
     $("div[id='mostra-resultado']").hide();
   });
 
});

function imagemCorreta(resultado){
	if (resultado < 18.5){
    $("h5").html("Subnutrição"); 
		return "./imagens/sub.png";
	} else if (resultado > 18.5 && resultado < 25.0){ 
		$("h5").html("Peso saudável");
    return "./imagens/normal.png";
	} else if (resultado > 25.0 && resultado < 30.0){ 
		$("h5").html("Sobrepeso");
    return "./imagens/sobre.png";
	} else if (resultado > 30.0 && resultado < 35.0){
    $("h5").html("Obesidade grau 1");
    return "./imagens/obesidade.png";
	} else if (resultado > 35.0 && resultado < 40.0 ){ 
    $("h5").html("Obesidade grau 2");
    return "./imagens/obesidade.png";
  }else if(resultado > 40.0){
		$("h5").html("Obesidade Mórbida (Grau 3)");
    return "./imagens/morbida.png";
	} 
	return null;
}

function fazCalculo(){
  resultado = parseInt(peso) / ((parseInt(altura) * parseInt(altura)) * 0.0001);
  resultado = resultado.toFixed(1);
  ideal = 21.75 * ((parseInt(altura) * parseInt(altura)) * 0.0001);
  ideal = ideal.toFixed(2);
  idealMin = 18.5 * ((parseInt(altura) * parseInt(altura)) * 0.0001);
  idealMax = 25 * ((parseInt(altura) * parseInt(altura)) * 0.0001);
  idealMax = idealMax.toFixed(2);
  idealMin = idealMin.toFixed(2);
  $("img[id='peso-img']").attr("src", imagemCorreta(resultado));
  $("h2").html(resultado);
  $("h4 span").html(ideal + " kg ( " + idealMin + "kg - " + idealMax + "kg )");
  $("div[id='mostra-resultado']").show();
}