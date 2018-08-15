var CPF = 000000000; // Recupera o CPF do usuario pelo cadastro no Laravel 
var sessao = 5;
var topico = 1;
var paragrafo = '<iframe src="https://docs.google.com/forms/d/e/1FAIpQLSf6nipYqTOhb_zCEHGjPzEJIvpyAfGBNAhVHUJWU3WwPwEFGA/viewform?entry.1499292851=000000000000&entry.639771235=sesaoID&entry.1259933649=topicoID&entry.366340186=Texto+paragrafo+ID&amp;embedded=true" width="700" height="520" frameborder="0" marginheight="0" marginwidth="0">Carregando…</iframe>';

var inputFormId = "";

var formEmbed = ""; // Codigo completo do embde especifico para aquele paragrafo

// ------------------------------------
// MODELO: Codigo embed do form que recebe os dados (inputs: CPF, Sessao, Topico, Likert 1, Likert2 e Resposta em Texto)
//  FORM ID: 1FAIpQLSf6nipYqTOhb_zCEHGjPzEJIvpyAfGBNAhVHUJWU3WwPwEFGA
// '<iframe src="https://docs.google.com/forms/d/e/1FAIpQLSf6nipYqTOhb_zCEHGjPzEJIvpyAfGBNAhVHUJWU3WwPwEFGA/viewform?entry.1499292851=000000000000&entry.639771235=sesaoID&entry.1259933649=topicoID&entry.366340186=Texto+paragrafo+ID&amp;embedded=true" width="700" height="520" frameborder="0" marginheight="0" marginwidth="0">Carregando…</iframe>';

// IDs dos topiscos n form ID: 1FAIpQLSf6nipYqTOhb_zCEHGjPzEJIvpyAfGBNAhVHUJWU3WwPwEFGA
var formID = "1FAIpQLSf6nipYqTOhb_zCEHGjPzEJIvpyAfGBNAhVHUJWU3WwPwEFGA";
var inputFormIdCPF = "entry.1499292851"; // Id input CPf no form Google Form
var inputFormIdSessao = "entry.639771235"; // Id input Sessao no form Google Form
var inputFormIdTopico = "entry.1259933649"; // Id input Topico no form Google Form
var textareaFormIdTopico = "entry.366340186"; // Id textarea Resposta no form Google Form
var textareaFormIdLikert1 = "entry.639234698";

// -----------------------------------------------------------------------------------------

function showModal () {

	var formulario = '<form method="POST" enctype="multipart/form-data" class=/"form-horizontal/" id="formUserData">';
	formulario = formulario.concat('<div class="form-group"><label for ="nome" class="control-label">Nome do Aluno : </label>');
	formulario = formulario.concat('<div><input type="text" placeholder="nome do participante" name="nome" id="aluno" autofocus maxlength="8" required></div></div>');
	formulario = formulario.concat('<div class="form-group"><label for ="idade" class="control-label">CPF : </label>');
	formulario = formulario.concat('<div><input type="number"  name="cpf" id="cpf" maxlength="1" required><br/></div>');
	formulario = formulario.concat('<div class="modal-footer"><button type="button" class="btn btn-primary" onclick="guardaValores()" id="confirma">Salvar</button></form>');
	formulario = formulario.concat('<button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button></div>');
	
	$("#formulario").html(formulario);

    $("#mymodal").modal('show');
    $("#close").modal('hide');
}

function travaInputForm(inputName){
	// Exemplo: input CPF: name="entry.1499292851";
	var test = $("input[name="+inputName+"]").val();
	console.log(test);
	$("input[name="+inputName+"]").prop("disabled", true); // Trava input do form para submissao

}

function showHideButton(idBtn){
	//console.log($("#"+idBtn));
	$(".btn-contribuir").hide();
	$("#"+idBtn).toggle();
}

function showHideDivText(idBtn){
	//console.log($("#"+idBtn));
	$(".txt-original").hide();
	$("#"+idBtn).toggle();
}

function carregaFormEmbed(divTarget, CPF, Sessao, Topico, Paragrafo="texto resposta padrao"){

	var paragrafoURL = encodeURIComponent(Paragrafo); // Converte Texto do Paragrafo em padrao URL (URI)

	var embeddedFullCode = '<iframe src="https://docs.google.com/forms/d/e/'+formID+'/viewform?usp=pp_url&entry.1499292851='+CPF+'&entry.639771235='+Sessao+'&entry.1259933649='+Topico+'&entry.366340186='+paragrafoURL+'&amp;embedded=true" id="googleForm" width="550" height="420" frameborder="0" marginheight="0" marginwidth="0">Carregando…</iframe>';


	// ALTERNATIVA: Criar um Form e submeter direto para o SRC do GoogleForm
	//var embeddedFullCode = '<form class="form" action="https://docs.google.com/forms/d/e/'+formID+'/formResponse"><label>CPF</label><br /><input name="entry.1499292851" type="text" maxlength="10" value="'+CPF+'" autocomplete="off" tabindex="0" aria-label="CPF" disabled /><br /><label>Sessão</label><br /><input name="entry.639771235" type="text" value="'+Sessao+'" autocomplete="off" tabindex="0" aria-label="CPF"  disabled /><br /><label>Tópico</label><br /><input name="entry.1259933649" type="text" value="'+Topico+'" autocomplete="off" tabindex="0" aria-label="CPF"  disabled /><br /><label>CONTRIBUIÇÃO</label><p><textarea name="entry.366340186" rows="6" cols="70" tabindex="0" aria-label="RESPOSTA" dir="auto" data-initial-dir="auto">'+Paragrafo+'</textarea></p><br /><input type="submit" value="Send" /></form>'

	$("#"+divTarget).html(embeddedFullCode); // Monta o HTML do embed do Fomr na pagina
	// mostra o form especifico em uma div. Se possivel uma fdiv flutuando centralizada


	// -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- --
	// ATENÇÃO: Não é possível travar elementos de um iframe de origens diferentes
	// -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- --	
	// https://stackoverflow.com/questions/25098021/securityerror-blocked-a-frame-with-origin-from-accessing-a-cross-origin-frame
	// travaInputForm("entry.1499292851");
	// travaInputForm("entry.639771235");
	// travaInputForm("entry.1259933649s");
	// -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- --	

}

function pegaDadosForm(cpf, sessaoTopico, tipoInput="id"){

	// Pegar o texto que esta no paragrafo esepcifico (sessao/topico) e ja converter para stringfy (padrao JASON). Pq ira compor a URL do embed do form 
	inputFormId = sessaoTopico; //  paragrafo esepcifico (sessao/topico)
	tipoInputFomr = tipoInput // se e o paragro (texto), a sessao ou o topico


	var saidaObj = {};
	saidaObj.id = $("#"+sessaoTopico).attr(tipoInput);
	saidaObj.sessaoTopico = $.map(saidaObj.id.split('-'), function(value){
    	return parseInt(value, 10);
    	// or return +value; which handles float values as well
	});

	$("#"+sessaoTopico).remove("button")
	saidaObj.paragrafo = $("#"+sessaoTopico).html();
	saidaObj.sessao = saidaObj.sessaoTopico[0];
	saidaObj.topico = saidaObj.sessaoTopico[1];
	saidaObj.tipo = tipoInput;
	saidaObj.cpf = cpf;

	console.log("ID Paragrafo: ", saidaObj.sessaoTopico);
	console.log("Sessao: ", saidaObj.sessao);
	console.log("Topico: ", saidaObj.topico);
	console.log("Tipo: ", saidaObj.tipo);
	console.log("CPF: ", saidaObj.cpf);

	// Chama a funcao que monta o codigo embed em uma div fluante e centralizada
	//   preenche esse form com dados default via var na URL do embed e trava
	//   input do CPF, Sessao e Topico para que o usuari o submeta sem alterar esses dados 
	carregaFormEmbed("modalFormContribuicao", saidaObj.cpf, saidaObj.sessao, saidaObj.topico, saidaObj.paragrafo);
	showModal();


} // END - function pegaDadosForm()