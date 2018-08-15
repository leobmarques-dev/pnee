<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="embed.js"></script>

<link rel="stylesheet" href="./styles.css" />

</head>
<body>

  <script type="text/javascript">
    // PUXAR DADOS DO LARAVEL E JOGAR COMO VAR DE JAVASCRIPT

      var laravelCPF = 835785988744;

  // -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- --
  // ATENÇÃO: Não é possível travar elementos de um iframe de origens diferentes
  // -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- --      
      function pegaIframeForm(){
        var iframe = document.getElementById("googleForm");
        var elmnt = iframe.contentWindow.document.getElementsByTagName("input")[0];
        // elmnt.style.display = "none";
        console.log(elmnt.value);
        var testePegaInputForm = $("input[name='entry.1499292851']").val(); 
        return elmnt.value;       
      }
  // -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- --      


  </script>

<div class="container">
  <h2>PRINCÍPIOS DA PNEE</h2>
  <p>Click AQUI para ver FLoat DIV.</p>

  <div id="formContribuicao" name="center" class="center" style="overflow: auto"></div>

  <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#1-1" onclick="showHideButton('btn1-1');showHideDivText('1-1')">
    Seção - Princípios: #1
  </button>
  <div id="1-1" data-sessao="1" data-topico="1" class="collapse txt-original">
    Com a finalidade de orientar a organização dos sistemas educacionais inclusivos, o Conselho Nacional de Educação – CNE publica a Resolução CNE/CEB, 04/2009, que institui as Diretrizes Operacionais para o Atendimento Educacional Especializado – AEE na Educação Básica. Este documento determina o público alvo da educação especial, define o caráter complementar ou suplementar do AEE, prevendo sua institucionalização no projeto político pedagógico da escola. O caráter não substitutivo e transversal da educação especial é ratificado pela Resolução CNE/CEB n°04/2010, que institui Diretrizes Curriculares Nacionais da Educação Básica e preconiza em seu artigo 29, que os sistemas de ensino devem matricular os estudantes com deficiência, transtornos globais do desenvolvimento e altas habilidades/superdotação nas classes comuns do ensino regular e no Atendimento Educacional Especializado - AEE, complementar ou suplementar à escolarização, ofertado em salas de recursos multifuncionais ou em centros de AEE da rede pública ou de instituições comunitárias, confessionais ou filantrópicas sem fins lucrativos.
   </div>
    <button type="button" id="btn1-1" class="btn btn-info btn-contribuir" data-toggle="collapse" data-target="1-1"  onclick="pegaDadosForm(laravelCPF, '1-1', 'id')" hidden aria-hidden="true">
        Contribuir sobre esse tópico
    </button>
   

<p></p>

  <button type="button"  class="btn btn-info" data-toggle="collapse" data-target="#2-1" onclick="showHideButton('btn2-1');showHideDivText('2-1')">
    Seção - Marco Legal: #1
  </button>
  <div id="2-1"  data-sessao="2" data-topico="1" class="collapse txt-original" onclick="pegaDadosForm(laravelCPF, this.id, 'id')">
    A Constituição Federal de 1988 traz como um dos seus objetivos fundamentais “promover o bem de todos, sem preconceitos de origem, raça, sexo, cor, idade e quaisquer outras formas de discriminação” (art.3º, inciso IV). Define, no artigo 205, a educação como um direito de todos, garantindo o pleno desenvolvimento da pessoa, o exercício da cidadania e a qualificação para o trabalho. No seu artigo 206, inciso I, estabelece a “igualdade de condições de acesso e permanência na escola” como um dos princípios para o ensino e garante como dever do Estado, a oferta do atendimento educacional especializado, preferencialmente na rede regular de ensino (art. 208).
  </div>
     <button type="button" id="btn2-1" class="btn btn-info btn-contribuir" data-toggle="collapse" data-target="2-1"  onclick="pegaDadosForm(laravelCPF, '2-2', 'id')">
      Contribuir sobre esse tópico
    </button>

<p></p>

 <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#2-2" onclick="showHideButton('btn2-2');showHideDivText('2-2')">
  Seção - Marco Legal: #2
</button>
  <div id="2-2" data-sessao="2" data-topico="2" class="collapse txt-original">
    A Lei de Diretrizes e Bases da Educação Nacional, Lei nº 9.394/96, no artigo 59, preconiza que os sistemas de ensino devem assegurar aos estudantes currículo, métodos, recursos e organização específicos para atender às suas necessidades; assegura a terminalidade específica àqueles que não atingiram o nível exigido para a conclusão do ensino fundamental, em virtude de suas deficiências; e assegura a aceleração de estudos aos superdotados para conclusão do programa escolar. Também define, dentre as normas para a organização da educação básica, a “possibilidade de avanço nos cursos e nas séries mediante verificação do aprendizado” (art. 24, inciso V) e “[...] oportunidades educacionais apropriadas, consideradas as características do alunado, seus interesses, condições de vida e de trabalho, mediante cursos e exames” (art. 37). 
     <button type="button" id="btn2-2" class="btn btn-info btn-contribuir" data-toggle="collapse" data-target="2-2"  onclick="pegaDadosForm(laravelCPF, '2-2', 'id')">
      Contribuir sobre esse tópico
     </button>    

<p></p>

</div> <!-- <div class="container"> -->

<?php include("dialog.php"); ?>

 <script src="main.js"></script>
    <script>
    (function () {
      document.addEventListener('DOMContentLoaded', function () {
        var dialogEl = document.getElementById('my-accessible-dialog');
        var mainEl = document.getElementById('main');
        var dialog = new window.A11yDialog(dialogEl, mainEl);

        dialog.on('show', function (dialogEl, triggerEl) {
          console.log(dialogEl);
          console.log(triggerEl);
        });

        // To manually control the dialog:
        // dialog.show()
        // dialog.hide()
        // dialog.destroy()
      });
    }());
    </script>

<div class="modal fade" id="mymodal">
  <div class="modal-dialog">
  <div class="modal-content">

    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="close"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title">Informações Gerais</h4>
    </div><!-- /.modal-header -->

      <div class="modal-body">
      <div id="modalFormContribuicao"></div> 
      </div><!-- /.modal-body -->

    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

</body>
</html>
