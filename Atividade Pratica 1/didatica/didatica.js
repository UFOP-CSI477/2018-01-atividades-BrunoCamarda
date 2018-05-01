	total = 0;
	function imagemCerta(imagem){
		var nome = $(imagem).attr('name');
		switch($(imagem).closest("div").attr('id')){ 
			case "comidas":
				if( nome == "brocolis") {
					total = total + 1;
				}
				$("img").off('click');
				$("button[name='resultado']").show();
				$("button[name='resultado']").click(function(){
					$("img[name='hamburguer']").attr("src", "./imagens/hamburguer.png");
					$("img[name='brocolis']").attr("src", "./imagens/check.png");
					$("img[name='pizza']").attr("src", "./imagens/pizza.png");
					$("img[name='hotdog']").attr("src", "./imagens/hotdog.png");
					$("button[name='proximo']").show();
					$("button[name='resultado']").hide();
					$("button[name='proximo']").click(function(){
						$("div[id='comidas']").hide();
						$("div[id='animais']").show();
						$("img", $(imagem).closest("div")).attr('onclick', null);
					});
				});
				break;
			
			case "animais":
				if(nome == "sanduba"){ 
					total = total + 1;
				}
				$("img").off('click');
				$("button[name='resultado2']").show();
				$("button[name='resultado2']").click(function(){
					$("img[name='cachorro']").attr("src", "./imagens/cachorro.png");
					$("img[name='sanduba']").attr("src", "./imagens/check.png");
					$("img[name='leao']").attr("src", "./imagens/leao.png");
					$("img[name='burro']").attr("src", "./imagens/burro.png");
					$("button[name='proximo2']").show();
					$("button[name='resultado2']").hide();
					$("button[name='proximo2']").click(function(){
						$("div[id='animais']").hide();
						$("div[id='transportes']").show();
						$("img", $(imagem).closest("div")).attr('onclick', null);
					});
				});
				break;


			case "transportes":
				if(nome == "robo"){ 
					total = total + 1;
					console.log("Total", total);
				}
				$("img").off('click');
				$("button[name='resultado3']").show();
				$("button[name='resultado3']").click(function(){
					$("img[name='trem']").attr("src", "./imagens/trem.png");
					$("img[name='robo']").attr("src", "./imagens/check.png");
					$("img[name='caminhao']").attr("src", "./imagens/caminhao.png");
					$("img[name='aviao']").attr("src", "./imagens/aviao.png");
					$("button[name='proximo3']").show();
					$("button[name='resultado3']").hide();
					$("button[name='proximo3']").click(function(){
						$("div[id='transportes']").hide();
						$("div[id='final']").show();
						$("div[id='texto']").hide();
					});
				});
				break;
		}
		$("img", $(imagem).closest("div")).attr('onclick', null);
		$("span").html(total);
		return;
}

