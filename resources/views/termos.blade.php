<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('css/app.css') }} ">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
</head>

<body>

    <section class="termos_de_uso">
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <img src="{{ asset('img\logo-email.png') }}" height="46px" alt="">
                    </div>
                </div>
            </div>
        </header>
        <main class="termos_uso">
            <div class="container">
                <section class="cabecalho">
                    <div class="row">
                        <div class="col-md-7">
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class=""><a href="#termos" id="bt_termos" aria-controls="termos" role="tab" data-toggle="tab">Termos de uso</a></li>
                                <li role="presentation"><a href="#politicas" id="bt_politicas" aria-controls="politicas" role="tab" data-toggle="tab">Política de privacidade</a></li>
                            </ul>
                        </div>
                        <form action="" method="post" class="col-5">
                            <div class="row">
                                <input type="hidden" name="id" value=>
                                <input type="hidden" name="empresa_id" value="">
                                <input type="hidden" name="filial_id" value="">
                                <div class="col">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" id="li_concordo" name="li-concordo" value="1" required>Li e concordo
                                        </label>
                                    </div>
                                </div>
                                <div class="col">
                                    <button type="submit" id="btn-prosseguir" class="btn btn-block btn-info" disabled>Prosseguir</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>
                <section class="conteudo">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane" id="termos">
                                    <div class="caixa_informacao">
                                        <article>
                                            <p>PREL&Uacute;DIO:</p>

                                            <p>A concord&acirc;ncia com o presente TERMO DE USO &ndash; PLATAFORMA SINERGIA &eacute; condi&ccedil;&atilde;o prim&aacute;ria, indispens&aacute;vel e insubstitu&iacute;vel para a outorga de autoriza&ccedil;&atilde;o de uso da PLATAFORMA e todos servi&ccedil;os prestados pela GERA SINERGIA.</p>

                                            <p>O USU&Aacute;RIO, cadastrado na PLATAFORMA, n&atilde;o poder&aacute;, em hip&oacute;tese alguma, a qualquer tempo alegar ignor&acirc;ncia ou desconhecimento do presente TERMO DE USO, bem como da Pol&iacute;tica de Privacidade da Informa&ccedil;&atilde;o e demais documentos obrigat&oacute;rios &agrave; ci&ecirc;ncia e concord&acirc;ncia para cadastro na PLATAFORMA.</p>

                                            <p>CONCEITOS:</p>

                                            <p>Para todos os fins de direito deste instrumento, as palavras abaixo dever&atilde;o ser interpretadas segundo o conceito aqui exposto.</p>

                                            <p>CONCORD&Acirc;NCIA: Ap&oacute;s ler completa e cuidadosamente todas as cl&aacute;usulas do presente TERMO DE USO, o USU&Aacute;RIO dar&aacute; a sua concord&acirc;ncia com tudo que nele se exp&otilde;e por clicar no campo &lsquo;LI E CONCORDO&rdquo;. &nbsp;Em dando este acordo o USU&Aacute;RIO tamb&eacute;m est&aacute; declarando ter pleno conhecimento de que este TERMO DE USO tem natureza de um contrato que o obriga e o responsabiliza perante o outro USU&Aacute;RIO e perante a PLATAFORMA SINERGIA. O ato de clicar no campo &ldquo;LI E CONCORDO&rdquo; ser&aacute; registrado eletronicamente e este registro servir&aacute; para eventual prova jur&iacute;dica da sua aceita&ccedil;&atilde;o ao TERMO DE USO.</p>

                                            <p>CARGA:&nbsp;entende-se como CARGA o objeto da contrata&ccedil;&atilde;o pelo USU&Aacute;RIO que o confiar&aacute; a outro USU&Aacute;RIO a realiza&ccedil;&atilde;o do transporte nos termos definidos na OFERTA DE CARGA.</p>

                                            <p>USU&Aacute;RIO: Pessoa f&iacute;sica ou jur&iacute;dica regularmente cadastrada na PLATAFORMA SINERGIA, podendo ter quatro classifica&ccedil;&otilde;es distintas: Diamante, Ouro, Prata e Bronze.</p>

                                            <p>USU&Aacute;RIO DIAMANTE: Pessoa f&iacute;sica ou jur&iacute;dica que realiza o trabalho de transporte de carga, cumprindo os requisitos documentais da categoria DIAMANTE, conforme tabela constante na PLATAFORMA.</p>

                                            <p>USU&Aacute;RIO OURO: Pessoa f&iacute;sica ou jur&iacute;dica que realiza o trabalho de transporte de carga, cumprindo os requisitos documentais da categoria OURO, conforme tabela constante na PLATAFORMA.</p>

                                            <p>USU&Aacute;RIO PRATA: Pessoa f&iacute;sica ou jur&iacute;dica que realiza o trabalho de transporte de carga, cumprindo os requisitos documentais da categoria PRATA, conforme tabela constante na PLATAFORMA.</p>

                                            <p>USU&Aacute;RIO BRONZE: Pessoa f&iacute;sica ou jur&iacute;dica que realiza o trabalho de transporte de carga, cumprindo os requisitos documentais da categoria BRONZE, conforme tabela constante na PLATAFORMA.</p>

                                            <p>OFERTA DE CARGA:&nbsp;Entende-se como a oferta gerada pelo USU&Aacute;RIO por interm&eacute;dio da PLATAFORMA para encontrar um outro USU&Aacute;RIO para o transporte de sua CARGA. Na OFERTA DE CARGA o USU&Aacute;RIO definir&aacute; todos os dados necess&aacute;rios para a especifica&ccedil;&atilde;o de sua CARGA.</p>

                                            <p>SERVI&Ccedil;O DE TRANSPORTE:&nbsp;&Eacute; o servi&ccedil;o que o USU&Aacute;RIO se disp&otilde;e a prestar a outro USU&Aacute;RIO segundo as condi&ccedil;&otilde;es especificadas na OFERTA DE CARGA.</p>

                                            <p>TAXA:&nbsp;Valor cobrado pela SINERGIA aos USU&Aacute;RIOS pela disponibiliza&ccedil;&atilde;o da ferramenta e intermedia&ccedil;&atilde;o dos servi&ccedil;os de transporte.&nbsp;</p>

                                            <p>SHOPPING - Espa&ccedil;o para cria&ccedil;&atilde;o de loja virtual, por Pessoas Jur&iacute;dicas interessadas em explorar o com&eacute;rcio virtual dentro da PLATAFORMA SINERGIA.</p>

                                            <p>BALC&Atilde;O DE NEG&Oacute;CIOS: Espa&ccedil;o virtual oferecido pela PLATAFORMA para an&uacute;ncios de bens e servi&ccedil;os ofertados pelos USU&Aacute;RIOS.</p>

                                            <p>De um lado,</p>

                                            <p>GERA SINERGIA INTERMEDIA&Ccedil;&Atilde;O E AGENCIAMENTO DE SERVI&Ccedil;OS LTDA, pessoa jur&iacute;dica de direito privado, inscrita no CNPJ sob n&ordm; 26.960.238/0001-52, com sede na Rua Sader Macul, 96, Itaim Bibi, S&atilde;o Paulo/SP, CEP: 04.542-090, doravante denominada SINERGIA ou PLATAFORMA;</p>

                                            <p>E de outro lado,</p>

                                            <p>USU&Aacute;RIO, pessoa f&iacute;sica ou jur&iacute;dica, que tendo ve&iacute;culos dispon&iacute;veis em um dado momento para realizar transporte de uma CARGA que lhe falta, ou um USU&Aacute;RIO que tendo CARGA dispon&iacute;vel, mas lhe falta ve&iacute;culo adequado, t&ecirc;m interesse em se utilizar da PLATAFORMA para lhe auxiliar na busca de uma CARGA no primeiro caso ou de outro USU&Aacute;RIO no segundo caso, para lhe transportar a CARGA dispon&iacute;vel, ambas situa&ccedil;&otilde;es em que essas PARTES ser&atilde;o doravante denominados USU&Aacute;RIO e/ou PARTES.</p>

                                            <p>T&ecirc;m entre si, justo e acertado o presente TERMO DE USO &ndash; PLATAFORMA SINERGIA o qual ser&aacute; regido, pelas cl&aacute;usulas e regras a seguir pactuadas:</p>

                                            <p>CL&Aacute;USULA 1&ordf; - DO OBJETO</p>

                                            <p>1.1.&nbsp;Todas as rela&ccedil;&otilde;es entre o USU&Aacute;RIO e a SINERGIA, bem como entre um USU&Aacute;RIO e outro que estejam cadastrados na SINERGIA ser&atilde;o regidos por este Termo de Uso.<br />
                                            &nbsp;<br />
                                            1.2.&nbsp;O&nbsp;USU&Aacute;RIO&nbsp;reconhece que a PLATAFORMA, com todos os direitos de propriedade intelectual, &eacute; de &uacute;nica e exclusiva propriedade da SINERGIA, e como tal n&atilde;o poder&aacute; fazer uso dela sem autoriza&ccedil;&atilde;o ou de forma distinta daquela autorizada pela SINERGIA.</p>

                                            <p>1.3.&nbsp;Os servi&ccedil;os da PLATAFORMA est&atilde;o dispon&iacute;veis apenas para as pessoas f&iacute;sicas ou jur&iacute;dicas que tenham capacidade legal para contrat&aacute;-los.</p>

                                            <p>1.3.1. Somente &eacute; permitido o cadastro de USU&Aacute;RIO que, sendo pessoa f&iacute;sica goze de perfeita capacidade civil ou que seja representante legal de um USU&Aacute;RIO. Caso um USU&Aacute;RIO tenha sido suspenso temporariamente do cadastro da SINERGIA, este somente poder&aacute; voltar a se cadastrar mediante autoriza&ccedil;&atilde;o expressa desta.<br />
                                            &nbsp;&nbsp;<br />
                                            1.3.2. A SINERGIA&nbsp;n&atilde;o gerencia, administra ou faz parte das contrata&ccedil;&otilde;es entre um USU&Aacute;RIO e outro USU&Aacute;RIO, mas apenas disponibiliza um meio eletr&ocirc;nico facilitador dessas rela&ccedil;&otilde;es comerciais. Desta forma a SINERGIA n&atilde;o poder&aacute; vir a ser responsabilizada por qualquer dano, direto ou indireto, material ou moral, lucros cessantes, perdas ou preju&iacute;zos de qualquer natureza, a qualquer tempo, por qualquer servi&ccedil;o prestado e/ou contratado pelas PARTES na PLATAFORMA.</p>

                                            <p>1.3.3. Os USU&Aacute;RIOS t&ecirc;m ci&ecirc;ncia, e corroboram no entendimento que o papel da SINERGIA &eacute; a gera&ccedil;&atilde;o de um banco de dados em um ambiente virtual que facilite o encontro e contato de seus cadastrados que pretendam negociar bens e servi&ccedil;os.</p>

                                            <p>CL&Aacute;USULA 2&ordf; &ndash; ALTERA&Ccedil;&Otilde;ES NO TERMO DE USO</p>

                                            <p>2.1.&nbsp;A&nbsp;SINERGIA&nbsp;sempre que julgar necess&aacute;rio poder&aacute; alterar este Termo de Uso, sem pr&eacute;via consulta a qualquer dos cadastrados na PLATAFORMA. No entanto tais modifica&ccedil;&otilde;es e/ou atualiza&ccedil;&otilde;es ser&atilde;o informadas na PLATAFORMA e sempre haver&aacute; a indica&ccedil;&atilde;o da data da &uacute;ltima atualiza&ccedil;&atilde;o. Uma vez que as PARTES continuem a fazer uso da PLATAFORMA ap&oacute;s uma modifica&ccedil;&atilde;o, entender-se-&aacute; que estes aceitam tacitamente o novo TERMO DE USO.&nbsp;</p>

                                            <p>2.1.1. N&atilde;o poder&aacute; o USU&Aacute;RIO em momento algum alegar ignor&acirc;ncia ou desconhecimento de qualquer altera&ccedil;&atilde;o, inclus&atilde;o ou exclus&atilde;o de cl&aacute;usula que tenha sido feita no presente TERMO DE USO e devidamente noticiada na PLATAFORMA SINERGIA.</p>

                                            <p>CL&Aacute;USULA 3&ordf; &ndash; CATEGORIAS DE USU&Aacute;RIO</p>

                                            <p>3.1.&nbsp;A SINERGIA, desenvolveu o conceito de 04 (quatro) categorias de USU&Aacute;RIO:<br />
                                            a) DIAMANTE<br />
                                            b) OURO<br />
                                            c) PRATA<br />
                                            d) BRONZE</p>

                                            <p>DIAMANTE: trata-se do USU&Aacute;RIO que realiza e mant&eacute;m atualizado o UPLOAD no site SINERGIA dos documentos de ve&iacute;culo e de motorista descritos na tabela abaixo.:</p>

                                            <p>DO VE&Iacute;CULO:&nbsp;<br />
                                            CIPP - Certificado de Inspe&ccedil;&atilde;o para o Transporte de Produtos Perigosos<br />
                                            Teste de Opacidade<br />
                                            Teste de Ru&iacute;do<br />
                                            Manuten&ccedil;&atilde;o Preventiva<br />
                                            C&oacute;pia CRLV- Certificado de Registro e Licenciamento de Ve&iacute;culos<br />
                                            C&oacute;pia ANTT RNTRC - Registro Nacional de Transporte Rodovi&aacute;rio de Cargas<br />
                                            Cronotac&oacute;grafo<br />
                                            Contrato Presta&ccedil;&atilde;o de Servi&ccedil;o<br />
                                            C&oacute;pia Inscri&ccedil;&atilde;o INSS<br />
                                            Declara&ccedil;&atilde;o de entrega espont&acirc;nea de IR<br />
                                            Comprovante Homologa&ccedil;&atilde;o EMBARCADOR<br />
                                            C&oacute;pia CNH propriet&aacute;rio<br />
                                            C&oacute;pia RG propriet&aacute;rio<br />
                                            C&oacute;pia Contrato Social<br />
                                            C&oacute;pia Ficha Inscri&ccedil;&atilde;o CNPJ<br />
                                            C&oacute;pia Comprovante de Endere&ccedil;o propriet&aacute;rio<br />
                                            Laudo de Manuten&ccedil;&atilde;o<br />
                                            Check list do ve&iacute;culo<br />
                                            C&oacute;pia Contrato Venda Rastreador<br />
                                            Carta de apresenta&ccedil;&atilde;o<br />
                                            Deve ter at&eacute; 10 anos</p>

                                            <p><br />
                                            DO MOTORISTA:<br />
                                            ASO &ndash; Avalia&ccedil;&atilde;o de Sa&uacute;de Ocupacional<br />
                                            Avalia&ccedil;&atilde;o Psicol&oacute;gica<br />
                                            C&oacute;pia Ficha de Registro - Carteira de Trabalho<br />
                                            Ter 3 ou mais dos treinamentos abaixo:<br />
                                            Treinamento Manual do Motorista<br />
                                            Treinamento Dire&ccedil;&atilde;o Defensiva<br />
                                            Treinamento Uso de EPIs<br />
                                            Treinamento Reciclagem MOPP<br />
                                            Treinamento Estacionamento de Ve&iacute;culos para Pernoite<br />
                                            Treinamento Programa Olho Vivo na Estrada<br />
                                            Treinamento Transportando com Seguran&ccedil;a Entregando com Qualidade<br />
                                            Treinamento Plano de Emerg&ecirc;ncia Interna<br />
                                            Treinamento Integra&ccedil;&atilde;o<br />
                                            C&oacute;pia CNH<br />
                                            Habilita&ccedil;&atilde;o em Gerenciadora de Risco<br />
                                            Carta de encaminhamento pessoal<br />
                                            C&oacute;pia PIS<br />
                                            C&oacute;pia RG<br />
                                            C&oacute;pia CPF<br />
                                            Comprovante&nbsp;Homologa&ccedil;&atilde;o EMBARCADOR<br />
                                            C&oacute;pia T&iacute;tulo de eleitor<br />
                                            Exame Toxicol&oacute;gico<br />
                                            C&oacute;pia Comp. Endere&ccedil;o Motorista</p>

                                            <p>OURO: trata-se do USU&Aacute;RIO que realiza e mant&eacute;m atualizado o UPLOAD no site SINERGIA dos seguintes documentos:</p>

                                            <p>DO VE&Iacute;CULO:&nbsp;<br />
                                            CIPP - Certificado de Inspe&ccedil;&atilde;o para o Transporte de Produtos Perigosos<br />
                                            Teste de Opacidade<br />
                                            Teste de Ru&iacute;do<br />
                                            Manuten&ccedil;&atilde;o Preventiva<br />
                                            C&oacute;pia CRLV- Certificado de Registro e Licenciamento de Ve&iacute;culos<br />
                                            C&oacute;pia ANTT RNTRC - Registro Nacional de Transporte Rodovi&aacute;rio de Cargas<br />
                                            Cronotac&oacute;grafo<br />
                                            Deve ter at&eacute; 12 anos</p>

                                            <p>DO MOTORISTA:<br />
                                            ASO &ndash; Avalia&ccedil;&atilde;o de Sa&uacute;de Ocupacional<br />
                                            Avalia&ccedil;&atilde;o Psicol&oacute;gica<br />
                                            C&oacute;pia Ficha de Registro - Carteira de Trabalho ou C&oacute;pia Inscri&ccedil;&atilde;o INSS<br />
                                            Ter 1 ou mais dos treinamentos abaixo:<br />
                                            Treinamento Manual do Motorista<br />
                                            Treinamento Dire&ccedil;&atilde;o Defensiva<br />
                                            Treinamento Uso de EPIs<br />
                                            Treinamento Reciclagem MOPP<br />
                                            Treinamento Estacionamento de Ve&iacute;culos para Pernoite<br />
                                            Treinamento Programa Olho Vivo na Estrada<br />
                                            Treinamento Transportando com Seguran&ccedil;a Entregando com Qualidade<br />
                                            Treinamento Plano de Emerg&ecirc;ncia Interna<br />
                                            Treinamento Integra&ccedil;&atilde;o<br />
                                            C&oacute;pia CNH<br />
                                            Habilita&ccedil;&atilde;o em Gerenciadora de Risco<br />
                                            Um ou mais treinamentos<br />
                                            Avalia&ccedil;&atilde;o entre 3 e 5</p>

                                            <p>PRATA: trata-se do USU&Aacute;RIO que realiza e mant&eacute;m atualizado o UPLOAD no site SINERGIA dos seguintes documentos:</p>

                                            <p>DO VE&Iacute;CULO:<br />
                                            Teste de Opacidade<br />
                                            Teste de Ru&iacute;do<br />
                                            C&oacute;pia CRLV- Certificado de Registro e Licenciamento de Ve&iacute;culos<br />
                                            C&oacute;pia ANTT RNTRC - Registro Nacional de Transporte Rodovi&aacute;rio de Cargas<br />
                                            Deve ter at&eacute; 20 anos</p>

                                            <p>DO MOTORISTA:<br />
                                            ASO &ndash; Avalia&ccedil;&atilde;o de Sa&uacute;de Ocupacional<br />
                                            Avalia&ccedil;&atilde;o Psicol&oacute;gica<br />
                                            C&oacute;pia Ficha de Registro - Carteira de Trabalho ou C&oacute;pia Inscri&ccedil;&atilde;o INSS<br />
                                            C&oacute;pia CNH<br />
                                            Experi&ecirc;ncia maior ou igual a 1 ano</p>

                                            <p>BRONZE: trata-se do USU&Aacute;RIO que realiza e mant&eacute;m atualizado o UPLOAD no site SINERGIA dos seguintes documentos:</p>

                                            <p>DO VE&Iacute;CULO:<br />
                                            C&oacute;pia CRLV- Certificado de Registro e Licenciamento de Ve&iacute;culos<br />
                                            C&oacute;pia ANTT RNTRC - Registro Nacional de Transporte Rodovi&aacute;rio de Cargas</p>

                                            <p>DO MOTORISTA:<br />
                                            C&oacute;pia Ficha de Registro - Carteira de Trabalho ou C&oacute;pia Inscri&ccedil;&atilde;o INSS<br />
                                            C&oacute;pia CNH</p>

                                            <p>3.2. Esta categoriza&ccedil;&atilde;o dos USU&Aacute;RIOS, visa facilitar a escolha pelo Contratante, que poder&aacute; &nbsp; &nbsp; &nbsp; com base nas suas necessidades e exig&ecirc;ncias, escolher a categoria de USU&Aacute;RIO.</p>

                                            <p>3.2.1. A SINERGIA refor&ccedil;a que apenas disponibiliza as informa&ccedil;&otilde;es constantes de seu Banco de Dados, sendo que a mesma n&atilde;o possui qualquer responsabilidade, ger&ecirc;ncia ou administra&ccedil;&atilde;o sobre os mesmos.</p>

                                            <p>3.2.2. &Eacute; responsabilidade &uacute;nica e exclusiva do USU&Aacute;RIO a idoneidade e veracidade das informa&ccedil;&otilde;es. Por existirem v&aacute;rios documentos com prazo de validade, ainda ser&aacute; de responsabilidade &uacute;nica do USU&Aacute;RIO manter a atualiza&ccedil;&atilde;o de seus documentos.</p>

                                            <p>3.2.3. Mesmo n&atilde;o sendo respons&aacute;vel pela ger&ecirc;ncia ou administra&ccedil;&atilde;o dos documentos pessoais do USU&Aacute;RIO a SINERGIA poder&aacute; tomar as medidas que entender pertinentes caso detecte qualquer tipo de fraude ou aus&ecirc;ncia de transpar&ecirc;ncia nas informa&ccedil;&otilde;es solicitadas. As medidas a serem tomadas, variam de caso a caso, podendo ir de uma advert&ecirc;ncia at&eacute; a exclus&atilde;o definitiva do USU&Aacute;RIO da SINERGIA.</p>

                                            <p>3.2.4. Independente das puni&ccedil;&otilde;es administrativas que poder&atilde;o ser aplicadas ao USU&Aacute;RIO que realizar informa&ccedil;&atilde;o falsa &agrave; PLATAFORMA, a SINERGIA tamb&eacute;m informar&aacute; as autoridades competentes para que sejam apurados eventuais crimes.</p>

                                            <p>3.3. A qualifica&ccedil;&atilde;o entre as modalidades de USU&Aacute;RIO se d&aacute; apenas no que tange &agrave;s licen&ccedil;as e documentos espec&iacute;ficos e necess&aacute;rios para cada tipo de carga a ser transportada, n&atilde;o significando em qualquer hip&oacute;tese, algum tipo de discrimina&ccedil;&atilde;o ou preconceito entre os cadastrados na PLATAFORMA.&nbsp;</p>

                                            <p><br />
                                            CL&Aacute;USULA 4&ordf; - RESPONSABILIDADES DOS USU&Aacute;RIOS&nbsp;</p>

                                            <p>4.1.&nbsp;Os&nbsp;USU&Aacute;RIOS, ser&atilde;o os &uacute;nicos respons&aacute;veis pela legalidade dos bens e servi&ccedil;os comercializados por interm&eacute;dio da PLATAFORMA, exemplificando, mas n&atilde;o se limitando ao transporte como um todo, ou seja, idoneidade da documenta&ccedil;&atilde;o fiscal e tribut&aacute;ria que acobertam o transporte, legalidade das mercadorias transportadas e cumprimento da legisla&ccedil;&atilde;o vigente, aplicando-se os mesmos princ&iacute;pios de boa f&eacute; e legalidade ao Balc&atilde;o de Neg&oacute;cios e ao Shopping.</p>

                                            <p>4.1.1.&nbsp;O USU&Aacute;RIO &eacute; respons&aacute;vel por fornecer dados corretos e verdadeiros sobre sua carga ao cadastr&aacute;-la na OFERTA DE CARGAS. A SINERGIA n&atilde;o ser&aacute;, a qualquer tempo, responsabilizada pelo n&atilde;o cumprimento pelos USU&Aacute;RIOS, de qualquer norma de responsabilidade dos mesmos, bem como por qualquer falha, erro ou m&aacute; qualidade dos servi&ccedil;os prestados pelo USU&Aacute;RIO. Refor&ccedil;a-se que a SINERGIA n&atilde;o participa da realiza&ccedil;&atilde;o do Servi&ccedil;o de Transporte. Uma vez que o USU&Aacute;RIO concorda e se habilita a realizar o transporte da carga para o outro USU&Aacute;RIO a SINERGIA n&atilde;o ter&aacute; mais qualquer envolvimento no acerto entre as duas PARTES, ou seja, a SINERGIA n&atilde;o &nbsp;&Eacute; PARTE e integrante do contrato, por qualquer meio ou forma, e por esta raz&atilde;o n&atilde;o pode garantir a sua consecu&ccedil;&atilde;o e qualidade.&nbsp;</p>

                                            <p>4.1.2. No caso de qualquer ilegalidade ou inidoneidade de documentos, a PARTE que tomar ci&ecirc;ncia do fato, dever&aacute; imediatamente avisar n&atilde;o s&oacute; &agrave; SINERGIA, mas tamb&eacute;m &agrave;s autoridades competentes. A&nbsp;SINERGIA&nbsp;fornecer&aacute; as informa&ccedil;&otilde;es e documentos requeridos pelas autoridades.</p>

                                            <p>4.1.3.&nbsp;A&nbsp;SINERGIA&nbsp;n&atilde;o possui qualquer obriga&ccedil;&atilde;o quanto &agrave; fiscaliza&ccedil;&atilde;o ou inspe&ccedil;&atilde;o de legalidade de cargas ou produtos que ser&atilde;o transportados, bem como n&atilde;o possui qualquer responsabilidade sobre os documentos que dever&atilde;o acobertar este transporte.</p>

                                            <p>4.1.4. Todos os tr&acirc;mites legais, referentes &agrave; presta&ccedil;&atilde;o do servi&ccedil;o de transporte dever&atilde;o ser tratados e acordados diretamente entre as PARTES, n&atilde;o podendo a SINERGIA ser responsabilizada a qualquer tempo.</p>

                                            <p>4.2.&nbsp;O&nbsp;USU&Aacute;RIO, ao utilizar a SINERGIA e aceitar o contrato de presta&ccedil;&atilde;o de servi&ccedil;os de transporte para qualquer carga, se tornar&aacute; o &uacute;nico respons&aacute;vel pela mesma.</p>

                                            <p>4.2.1. No caso de qualquer sinistro que envolva o transporte de determinada carga, o USU&Aacute;RIO ter&aacute; a obriga&ccedil;&atilde;o de indenizar a outra PARTE por qualquer dano a que o primeiro der causa.&nbsp;</p>

                                            <p>4.2.2. Quanto ao total cumprimento das leis de transporte, no que tange &agrave; seguran&ccedil;a, compatibilidade de carga, emiss&atilde;o de documentos fiscais e tribut&aacute;rios, exig&ecirc;ncias de licen&ccedil;as, entre outros, a fiscaliza&ccedil;&atilde;o destes e a exig&ecirc;ncia ficar&atilde;o a cargo das PARTES solidariamente.&nbsp;</p>

                                            <p>4.2.3 A SINERGIA n&atilde;o se obriga a fazer o acompanhamento do Servi&ccedil;o de Transporte ap&oacute;s a sua contrata&ccedil;&atilde;o, mas se reserva o direito de monitorar a carga a qualquer momento, do in&iacute;cio ao t&eacute;rmino do contrato entre os USU&Aacute;RIOS, para o controle interno da PLATAFORMA, ou mesmo como um benef&iacute;cio extra aos USU&Aacute;RIOS, se previamente negociado. &nbsp;&nbsp;</p>

                                            <p>Cl&aacute;usula 5&ordf; &ndash; ACEITA&Ccedil;&Atilde;O E RECUSA DA CARGA</p>

                                            <p>5.1. No momento da OFERTA DE CARGA, o USU&Aacute;RIO CONTRATANTE tem a obriga&ccedil;&atilde;o de detalhar todos os aspectos e peculiaridades da mesma, inclusive informando se haver&aacute; a necessidade de algum requisito especial para o transporte. Ap&oacute;s a negocia&ccedil;&atilde;o entre as PARTES e aceita&ccedil;&atilde;o da carga, caso uma das PARTES&nbsp;verifique qualquer discrep&acirc;ncia das informa&ccedil;&otilde;es prestadas com a realidade dos fatos, sendo que tal discrep&acirc;ncia inviabiliza a presta&ccedil;&atilde;o dos servi&ccedil;os, o mesmo poder&aacute; declinar do contrato, ou seja, poder&aacute; desistir da presta&ccedil;&atilde;o de servi&ccedil;os, desde que comprove a discrep&acirc;ncia de forma cabal.&nbsp;</p>

                                            <p>5.1.1. No caso de desist&ecirc;ncia por uma das PARTES ap&oacute;s a aceita&ccedil;&atilde;o do contrato via PLATAFORMA SINERGIA, a PARTE inocente dever&aacute; relatar o fato imediatamente &agrave;&nbsp;SINERGIA&nbsp;pelo canal de contato apropriado.</p>

                                            <p>5.1.2. No caso de desist&ecirc;ncia da carga ap&oacute;s a aceita&ccedil;&atilde;o do contrato de transporte via PLATAFORMA SINERGIA, a PARTE culpada pela rescis&atilde;o contratual antecipada, ter&aacute; sua conduta registrada e ter&aacute; dem&eacute;rito em seu conceito junto &agrave; PLATAFORMA. &nbsp;</p>

                                            <p>5.2. No caso de desist&ecirc;ncia ap&oacute;s a aceita&ccedil;&atilde;o pelas PARTES do contrato de transporte via PLATAFORMA, a PARTE culpada poder&aacute; sofrer as san&ccedil;&otilde;es administrativas que a SINERGIA entender pertinentes ao caso, as quais poder&atilde;o ir de uma advert&ecirc;ncia at&eacute; o banimento definitivo da PLATAFORMA.</p>

                                            <p>5.3.&nbsp;Em caso de qualquer empecilho ou impossibilidade do total cumprimento do Servi&ccedil;o de Transporte, ou da sua extens&atilde;o ao contrato inicial, tais como n&atilde;o localiza&ccedil;&atilde;o do destinat&aacute;rio, mudan&ccedil;a de endere&ccedil;o da entrega, recusa de recebimento da carga por qualquer motivo, novas tentativas de entrega, etc., dever&atilde;o ser solucionadas exclusivamente entre os USU&Aacute;RIOS, n&atilde;o se imputando &agrave; SINERGIA qualquer responsabilidade ou penaliza&ccedil;&atilde;o.</p>

                                            <p>CL&Aacute;USULA 6&ordf; &ndash; LEI ANTICORRUP&Ccedil;&Atilde;O</p>

                                            <p>6.1.&nbsp;O&nbsp;USU&Aacute;RIO, seus funcion&aacute;rios e prepostos, obrigam-se a pautar suas pr&aacute;ticas comerciais, enquanto estiverem no uso da PLATAFORMA SINERGIA, de forma &eacute;tica e moral, em respeito &agrave; legisla&ccedil;&atilde;o brasileira em especial, mas n&atilde;o se resumindo &agrave; Lei Federal n&ordm; 12.846/13 (Lei Anticorrup&ccedil;&atilde;o).</p>

                                            <p>6.2.&nbsp;O&nbsp;USU&Aacute;RIO, dever&aacute; sempre agir com &eacute;tica e lealdade profissional, se abstendo de ofertar, bem como, aceitar, se comprometer a dar ou a receber, seja pessoalmente ou por terceiros, qualquer presente, vantagem, benef&iacute;cios de qualquer esp&eacute;cie ou qualquer valor, visando a obten&ccedil;&atilde;o de qualquer vantagem escusa e/ou indevida.&nbsp;</p>

                                            <p>6.3.&nbsp;O&nbsp;USU&Aacute;RIO&nbsp;&eacute; o &uacute;nico respons&aacute;vel por sua conduta. Caso a SINERGIA, ou qualquer de seus funcion&aacute;rios, prepostos, s&oacute;cios ou diretores, sejam implicados, condenados ou responsabilizados por qualquer ato il&iacute;cito praticado pelo USU&Aacute;RIO, este se responsabiliza em assumir a autoria de seus atos, mantendo os demais agentes acima, a salvo de qualquer implica&ccedil;&atilde;o, condena&ccedil;&atilde;o ou responsabilidade por sua conduta, devendo ainda indeniz&aacute;-los caso recaia sobre os mesmos qualquer obriga&ccedil;&atilde;o pecuni&aacute;ria. Referida indeniza&ccedil;&atilde;o n&atilde;o se sujeita a qualquer limita&ccedil;&atilde;o monet&aacute;ria.</p>

                                            <p>CL&Aacute;USULA 7&ordf; &ndash; ACESSO E USO DA PLATAFORMA SINERGIA</p>

                                            <p>7.1.&nbsp;Primeiro passo para acesso e uso da PLATAFORMA &eacute; a cria&ccedil;&atilde;o de &ldquo;Login&rdquo; e &ldquo;senha de acesso&rdquo;, que dever&atilde;o ser criados pelo&nbsp;USU&Aacute;RIO quando do primeiro acesso, realizando seu cadastro e atestando sua concord&acirc;ncia com o presente Termo de Uso e a Pol&iacute;tica de Privacidade.</p>

                                            <p>7.2. O&nbsp;USU&Aacute;RIO&nbsp;acorda que a estrutura de seguran&ccedil;a da PLATAFORMA SINERGIA usada&nbsp;para dar acesso a&nbsp;mesma, &eacute; confidencial, sendo vedado ao USU&Aacute;RIO revel&aacute;-la a outrem.&nbsp;<br />
                                            7.3.&nbsp;A responsabilidade pela exatid&atilde;o, idoneidade, clareza, certeza e legalidade das informa&ccedil;&otilde;es prestadas &eacute; &uacute;nica e exclusiva do USU&Aacute;RIO, o qual se compromete a manter seu cadastro sempre atualizado.&nbsp;</p>

                                            <p>7.3.1. Eventuais danos causados &agrave; SINERGIA ou a terceiros, devido &agrave; inexatid&atilde;o de informa&ccedil;&otilde;es, manipula&ccedil;&atilde;o, erro (por dolo ou culpa), desatualiza&ccedil;&atilde;o de cadastro, entre outros, ser&aacute; totalmente suportada pelo USU&Aacute;RIO&nbsp;que dever&aacute; indenizar a PARTE inocente pelos danos e/ou preju&iacute;zos causados.</p>

                                            <p>7.4.&nbsp;Quando do cadastro, o USU&Aacute;RIO criar&aacute; um LOGIN e uma SENHA, sendo estes pessoais e intransfer&iacute;veis, e ser&atilde;o usados para acesso e uso da PLATAFORMA SINERGIA.</p>

                                            <p>7.4.1.&nbsp;O USU&Aacute;RIO &eacute; o &uacute;nico respons&aacute;vel pelas informa&ccedil;&otilde;es prestadas quando do cadastro, por&eacute;m a SINERGIA, poder&aacute; excluir informa&ccedil;&otilde;es que pare&ccedil;am ofensivas ou inver&iacute;dicas.</p>

                                            <p>7.5.&nbsp;A&nbsp;SINERGIA&nbsp;poder&aacute; eventualmente determinar novos crit&eacute;rios e obriga&ccedil;&otilde;es para os USU&Aacute;RIOS&nbsp;se cadastrarem ou permanecerem na PLATAFORMA.&nbsp;</p>

                                            <p>7.5.1. Qualquer modifica&ccedil;&atilde;o ao presente TERMO DE USO, ser&aacute; previamente informada pela PLATAFORMA aos USU&Aacute;RIOS, sendo que a op&ccedil;&atilde;o, pelo&nbsp;USU&Aacute;RIO, em n&atilde;o aderir a estas modifica&ccedil;&otilde;es, poder&aacute; gerar a sua exclus&atilde;o/banimento da PLATAFORMA.</p>

                                            <p>7.6. O acesso e uso da PLATAFORMA SINERGIA, ser&atilde;o regrados pelas seguintes normas:</p>

                                            <p>Somente o USU&Aacute;RIO pode usar seu Login e Senha e prestar Servi&ccedil;os de Transporte.<br />
                                            &nbsp;<br />
                                            O&nbsp;USU&Aacute;RIO&nbsp;que aceitar uma Oferta de Carga pela PLATAFORMA SINERGIA, n&atilde;o poder&aacute; terceiriz&aacute;-la, ou seja, somente ele dever&aacute; prestar o Servi&ccedil;o contratado.&nbsp;</p>

                                            <p>O USU&Aacute;RIO se compromete a respeitar todas as leis e/ou normas brasileiras quando da utiliza&ccedil;&atilde;o da PLATAFORMA e quando da presta&ccedil;&atilde;o dos servi&ccedil;os de transporte.&nbsp;</p>

                                            <p>A SINERGIA n&atilde;o gerencia, n&atilde;o fiscaliza e n&atilde;o &eacute; respons&aacute;vel pela comercializa&ccedil;&atilde;o de bens e servi&ccedil;os oferecidos na PLATAFORMA. De igual sorte a PLATAFORMA n&atilde;o se responsabiliza pelas tratativas comerciais entre as PARTES, ou de qualquer problema decorrente das negocia&ccedil;&otilde;es comerciais concretizadas por interm&eacute;dio da PLATAFORMA.&nbsp;<br />
                                            Uma vez que o&nbsp;USU&Aacute;RIO&nbsp;concorde em prestar Servi&ccedil;o de Transporte para outro USU&Aacute;RIO, a&nbsp;SINERGIA&nbsp;n&atilde;o mais se envolver&aacute; na rela&ccedil;&atilde;o entre AMBOS.&nbsp;</p>

                                            <p>O acesso e uso da PLATAFORMA SINERGIA pelo USU&Aacute;RIO &eacute; pago, nos termos da cl&aacute;usula 8&ordf; abaixo. &nbsp;Referido pagamento se dar&aacute; sempre que houver uma oferta de carga aceita. Neste caso o USU&Aacute;RIO pagar&aacute; &agrave; SINERGIA uma taxa pelo servi&ccedil;o de intermedia&ccedil;&atilde;o prestado.</p>

                                            <p>7.7.&nbsp;A PLATAFORMA SINERGIA&nbsp;&eacute; uma ferramenta de intermedia&ccedil;&atilde;o entre particulares, o que se faz por interm&eacute;dio de um seleto banco de dados formado pelo cadastro de USU&Aacute;RIOS.<br />
                                            &nbsp;<br />
                                            7.7.1. A&nbsp;SINERGIA&nbsp;n&atilde;o efetua qualquer tipo de fiscaliza&ccedil;&atilde;o, administra&ccedil;&atilde;o, ger&ecirc;ncia ou verifica&ccedil;&atilde;o quanto &agrave; veracidade de dados dos&nbsp;USU&Aacute;RIOS, incluindo, sem limita&ccedil;&atilde;o as informa&ccedil;&otilde;es referentes &agrave;s Ofertas de Carga cadastradas, sendo todas estas informa&ccedil;&otilde;es responsabilidades exclusivas dos USU&Aacute;RIOS.</p>

                                            <p>7.8. A&nbsp;SINERGIA&nbsp;n&atilde;o poder&aacute; ser responsabilizada por qualquer ocorr&ecirc;ncia ou rela&ccedil;&atilde;o com o contrato de transporte firmado entre as PARTES. Repete-se que uma vez aceita a oferta e firmado o contrato entre os USU&Aacute;RIOS atrav&eacute;s do aceite na PLATAFORMA, todas as quest&otilde;es legais, antes, durante e ap&oacute;s encerrado a transa&ccedil;&atilde;o comercial, s&atilde;o de responsabilidade &uacute;nica e exclusiva dos USU&Aacute;RIOS.</p>

                                            <p>7.9. A&nbsp;SINERGIA&nbsp;n&atilde;o garante acesso ininterrupto &agrave; PLATAFORMA, n&atilde;o podendo ser responsabilizada por quedas de sinal, dificuldade de acesso, entre outros.</p>

                                            <p>7.10 &nbsp; N&atilde;o ser&aacute; responsabilidade da&nbsp;SINERGIA as eventuais quedas do sistema ou de conex&otilde;es da internet ou mesmo problemas causados por interfer&ecirc;ncia de terceiros, incluindo os &ldquo;hackers&rdquo;, por se tratarem de fatores alheios ao seu controle.&nbsp;</p>

                                            <p>7.11 para se proteger a si e aos seus cadastrados A&nbsp;SINERGIA&nbsp;envidar&aacute; todos os esfor&ccedil;os poss&iacute;veis e dispon&iacute;veis em programas da tecnologia da informa&ccedil;&atilde;o para que o seu banco de dados esteja sempre &iacute;ntegro. Ressalva-se, entretanto que todas as medidas de seguran&ccedil;a n&atilde;o s&atilde;o totalmente exaustivas e que com tudo que se possa empregar de defesa n&atilde;o se pode garantir a perfeita integridade dos dados armazenados, seja por erros de acesso, seja por viola&ccedil;&atilde;o por terceiros.<br />
                                            &nbsp;<br />
                                            7.11.1 &nbsp;Assim sendo, independente da vontade ou dos cuidados que a SINERGIA venha a empregar no desenvolvimento e na opera&ccedil;&atilde;o da sua PLATAFORMA , h&aacute; o risco de que os dados cadastrados possam se tornar conhecidos por terceiros e, neste caso, os USU&Aacute;RIOS aceitam expressamente o risco de que tal aconte&ccedil;a sem imputar responsabilidade de qualquer tipo &agrave; SINERGIA, aos seus s&oacute;cios, funcion&aacute;rios, ou quaisquer outros envolvidos com ela por eventual preju&iacute;zo moral ou financeiro que tais vazamentos de dados possam causar.</p>

                                            <p>CL&Aacute;USULA 8&ordf; - DO PAGAMENTO</p>

                                            <p>8.1.&nbsp;Tendo em vista os servi&ccedil;os de intermedia&ccedil;&atilde;o prestados pela&nbsp;SINERGIA, esta cobrar&aacute; dos USU&Aacute;RIOS uma taxa por raz&atilde;o de cada Servi&ccedil;o contratado.</p>

                                            <p>8.1.1. O valor da taxa a ser debitada aos USU&Aacute;RIOS respeitar&aacute; a tabela constante neste Termo. O c&aacute;lculo da Taxa &eacute; feito pela SINERGIA, sendo que os USU&Aacute;RIOS n&atilde;o possuem qualquer inger&ecirc;ncia, administra&ccedil;&atilde;o ou poder de barganha com rela&ccedil;&atilde;o a esta taxa.</p>

                                            <p>8.2. Caso o USU&Aacute;RIO n&atilde;o pague a Taxa devida &agrave;&nbsp;SINERGIA, o mesmo ter&aacute; seu Login e Senha bloqueados at&eacute; o pagamento da mesma.</p>

                                            <p>CL&Aacute;USULA 9&ordf; - ALTERA&Ccedil;&Atilde;O DO CONTRATO DE FRETE &ndash; ACEITA&Ccedil;&Atilde;O OU CANCELAMENTO</p>

                                            <p>9.1. Qualquer altera&ccedil;&atilde;o que a OFERTA DE CARGA venha a sofrer, dever&aacute; ser cadastrada na PLATAFORMA.&nbsp;Sempre que uma altera&ccedil;&atilde;o na OFERTA DE CARGA for realizada, &eacute; imprescind&iacute;vel que referida altera&ccedil;&atilde;o seja cadastrada na PLATAFORMA pelo USU&Aacute;RIO.&nbsp;</p>

                                            <p>9.2. A altera&ccedil;&atilde;o UNILATERAL de uma Oferta de Carga ap&oacute;s a aceita&ccedil;&atilde;o da mesma pelo USU&Aacute;RIO, implicar&aacute; em uma negativa&ccedil;&atilde;o na PLATAFORMA e a crit&eacute;rio da SINERGIA poder&aacute; gerar o cancelamento do seu cadastro.&nbsp;Caso o USU&Aacute;RIO modifique qualquer item da Oferta de Carga e esta modifica&ccedil;&atilde;o, a crit&eacute;rio da&nbsp;SINERGIA, possa prejudicar a boa e adequada presta&ccedil;&atilde;o dos Servi&ccedil;os de Transporte, a&nbsp;SINERGIA poder&aacute; cancelar a Oferta de Carga.</p>

                                            <p>9.3. Todo e qualquer cancelamento de OFERTA DE CARGA, dever&aacute; ser justificado perante a PLATAFORMA, por&eacute;m, as tratativas, ajustes dever&atilde;o ser feitos estritamente entre as PARTES, sendo que na aus&ecirc;ncia de tal justificativa perante a PLATAFORMA, a PARTE culpada poder&aacute; sofrer san&ccedil;&otilde;es administrativas, como dem&eacute;rito no seu cadastro.</p>

                                            <p><br />
                                            CL&Aacute;USULA 10&ordf; &ndash; PR&Aacute;TICAS VEDADAS &nbsp;&nbsp;</p>

                                            <p>10.1. &Eacute; expressamente vedado aos USU&Aacute;RIOS ou a qualquer outra pessoa f&iacute;sica ou jur&iacute;dica as seguintes pr&aacute;ticas, al&eacute;m daquelas j&aacute; descritas neste Termo de Uso:<br />
                                            Manipular os pre&ccedil;os das ofertas de carga;&nbsp;<br />
                                            Interferir nas negocia&ccedil;&otilde;es entre outros USU&Aacute;RIOS;&nbsp;<br />
                                            c)&nbsp;manter algum tipo de comunica&ccedil;&atilde;o direta entre si, que n&atilde;o pela PLATAFORMA, antes &nbsp; da aceita&ccedil;&atilde;o e fechamento da oferta de carga;&nbsp;<br />
                                            Agredir, caluniar, injuriar ou difamar outros USU&Aacute;RIOS;&nbsp;</p>

                                            <p>Pretender modificar ou melhorar o desempenho da PLATAFORMA por utiliza&ccedil;&atilde;o de programas de terceiros, ou tecnologia distinta da utilizada na PLATAFORMA, ou mesmo extrair dados e informa&ccedil;&otilde;es dos USU&Aacute;RIOS cadastrados sem pr&eacute;via autoriza&ccedil;&atilde;o da SINERGIA, sendo permitido somente &agrave; SINERGIA fazer qualquer uso ou modifica&ccedil;&atilde;o ou atualiza&ccedil;&atilde;o do seu sistema pelos seus pr&oacute;prios meios ou recursos ou pelo emprego de interfaces de terceiros; &nbsp;</p>

                                            <p>Buscar, procurar, copiar, explorar, invadir os dados dos USU&Aacute;RIOS cadastrados ou das Ofertas de Cargas, usando para isso de programas estranhos &agrave; PLATAFORMA, ou mesmo por invas&atilde;o aos programas residentes, com o intuito de obter vantagens ou de embara&ccedil;ar o funcionamento da PLATAFORMA e dos sistemas da SINERGIA, pela compila&ccedil;&atilde;o desses dados para programa&ccedil;&atilde;o em ambientes externos &agrave; PLATAFORMA, seja por criar cadastros e ofertas falsos na PLATAFORMA.<br />
                                            10.2. O USU&Aacute;RIO que praticar ou contribuir para que se pratiquem tais atos vedados pela PLATAFORMA, poder&aacute;, sem preju&iacute;zo das eventuais a&ccedil;&otilde;es judiciais que possam acontecer, ser apenado com a suspens&atilde;o tempor&aacute;ria ou at&eacute; banimento definitivo com a exclus&atilde;o do Login e Senha do&nbsp;USU&Aacute;RIO junto &agrave; PLATAFORMA SINERGIA.<br />
                                            CL&Aacute;USULA 11&ordf; - DA AUTORIZA&Ccedil;&Atilde;O PARA USO DA PLATAFORMA</p>

                                            <p>11.1.&nbsp;A&nbsp;SINERGIA&nbsp;concede ao USU&Aacute;RIO&nbsp;a autoriza&ccedil;&atilde;o, em car&aacute;ter n&atilde;o exclusivo, e que tenha utiliza&ccedil;&atilde;o somente no ambiente da PLATAFORMA e cuja autoriza&ccedil;&atilde;o n&atilde;o pode ser transferida, para que o&nbsp;segundo&nbsp;possa acessar e usar a SINERGIA em seus dispositivos eletr&ocirc;nicos (smartphone, celular, notebook, computador, etc.) que sejam de sua propriedade ou a que tenha direito de uso.</p>

                                            <p>CL&Aacute;USULA 12&ordf; &ndash; DO PRAZO</p>

                                            <p>12.1.&nbsp;Este Termo de Uso, ap&oacute;s sua aceita&ccedil;&atilde;o quando do cadastramento pelo USU&Aacute;RIO, ser&aacute; v&aacute;lido por prazo indeterminado, e se aplicar&aacute; a todos os Contratos fechados por interm&eacute;dio da PLATAFORMA.</p>

                                            <p>CL&Aacute;USULA 13&ordf; &ndash; DA EXCLUS&Atilde;O / BANIMENTO DO LOGIN E SENHA &nbsp;&nbsp;</p>

                                            <p>13.1&nbsp;Al&eacute;m dos casos j&aacute; explicitados em outras cl&aacute;usulas, nos casos abaixo, a&nbsp;SINERGIA&nbsp;poder&aacute;, a seu exclusivo crit&eacute;rio, sem a necessidade de pr&eacute;vio aviso ao&nbsp;USU&Aacute;RIO, suspender tempor&aacute;ria e/ou excluir permanentemente o LOGIN e SENHA do&nbsp;USU&Aacute;RIO que:&nbsp;</p>

                                            <p>Transgrida este Termo de Uso ou a Pol&iacute;tica de Privacidade;&nbsp;<br />
                                            Use a PLATAFORMA contrariando as pol&iacute;ticas de uso e privacidade da&nbsp;SINERGIA&nbsp;ou de forma a colocar em perigo a utiliza&ccedil;&atilde;o da PLATAFORMA por outros Usu&aacute;rios;&nbsp;<br />
                                            Atue de maneira contr&aacute;ria as funcionalidades da PLATAFORMA;&nbsp;<br />
                                            Tenha indica&ccedil;&otilde;es negativas em sua reputa&ccedil;&atilde;o causadas por reclama&ccedil;&otilde;es fundamentadas, por PARTE de outros USU&Aacute;RIOS;&nbsp;</p>

                                            <p>13.1.1.&nbsp;A&nbsp;SINERGIA, poder&aacute;, a seu exclusivo crit&eacute;rio suspender o LOGIN e SENHA caso suspeite que o&nbsp;USU&Aacute;RIO CONTRATADO aceitou transportar Carga ilegal, al&eacute;m de comunicar o fato &agrave;s autoridades competentes para a devida apura&ccedil;&atilde;o.</p>

                                            <p>13.1.2.&nbsp;No caso de suspens&atilde;o tempor&aacute;ria o&nbsp;USU&Aacute;RIO&nbsp;ser&aacute; notificado pela SINERGIA, via e-mail, do prazo da suspens&atilde;o e quais os procedimentos para a reativa&ccedil;&atilde;o do cadastro quando finda a suspens&atilde;o.</p>

                                            <p>13.2.&nbsp;No caso de pedido de exclus&atilde;o solicitada pelo pr&oacute;prio&nbsp;USU&Aacute;RIO, a SINERGIA excluir&aacute; todos os dados do mesmo de seu banco de dados, ressalvado o per&iacute;odo de arquivo legal previsto na Pol&iacute;tica de Privacidade.</p>

                                            <p>CL&Aacute;USULA 14&ordf; &ndash; DA RESPONSABILIDADE DA SINERGIA</p>

                                            <p>14.1.&nbsp;A SINERGIA&nbsp;n&atilde;o responder&aacute;, em nenhuma hip&oacute;tese:<br />
                                            Pela autenticidade e/ou validade dos dados cadastrais dos&nbsp;USU&Aacute;RIOS;<br />
                                            Por produtos, an&uacute;ncios ou servi&ccedil;os ofertados na PLATAFORMA por terceiros, sejam USU&Aacute;RIOS ou n&atilde;o;<br />
                                            Por eventuais preju&iacute;zos, danos de qualquer esp&eacute;cie, lucros cessantes, originados pelas decis&otilde;es da USU&Aacute;RIO na utiliza&ccedil;&atilde;o da PLATAFORMA.</p>

                                            <p>14.2.&nbsp;A&nbsp;SINERGIA&nbsp;n&atilde;o garante que:&nbsp;<br />
                                            as ferramentas apresentadas pela PLATAFORMA atendam plenamente &agrave;s necessidades do&nbsp;USU&Aacute;RIO;&nbsp;<br />
                                            a opera&ccedil;&atilde;o da PLATAFORMA ser&aacute; em tempo integral e sem falhas,&nbsp;<br />
                                            todas funcionalidades da PLATAFORMA permanecer&atilde;o funcionando em tempo integral;&nbsp;<br />
                                            as eventuais inconsist&ecirc;ncias na PLATAFORMA ser&atilde;o sanadas prontamente ou que sempre haver&aacute; compatibilidade entre a PLATAFORMA e outros softwares, aplicativos ou servi&ccedil;os de terceiros.</p>

                                            <p>14.3.&nbsp;O&nbsp;USU&Aacute;RIO &eacute; respons&aacute;vel, em assumir o polo passivo de qualquer a&ccedil;&atilde;o administrativa e/ou judicial, em qualquer esfera, que seja proposta contra a SINERGIA seus prepostos, diretores, s&oacute;cios e/ou funcion&aacute;rios, resultantes:&nbsp;<br />
                                            Da sua eventual utiliza&ccedil;&atilde;o indevida da PLATAFORMA;&nbsp;<br />
                                            Da viola&ccedil;&atilde;o das condi&ccedil;&otilde;es assumidas.</p>

                                            <p>14.4.&nbsp;Em nenhuma hip&oacute;tese a&nbsp;SINERGIA&nbsp;se responsabilizar&aacute; por danos ou preju&iacute;zo de qualquer natureza, seja direto ou indireto, a que o&nbsp;USU&Aacute;RIO der causa pela incorreta utiliza&ccedil;&atilde;o da PLATAFORMA.</p>

                                            <p>14.5.&nbsp;Se eventualmente a empresa&nbsp;SINERGIA&nbsp;for obrigada, por decis&atilde;o judicial passada em julgado, a indenizar, ressarcir ou reembolsar qualquer quantia ao&nbsp;USU&Aacute;RIO, este valor restar&aacute; limitado ao total do valor pago pelo USU&Aacute;RIO a SINERGIA, referente ao contrato que gerou o dano.</p>

                                            <p>CL&Aacute;USULA 15&ordf; &ndash; DA RESCIS&Atilde;O</p>

                                            <p>15.1.&nbsp;O presente Termo de Uso poder&aacute; ser rescindido a qualquer tempo pelas PARTES, sem a necessidade de pr&eacute;vio aviso. As PARTES ser&atilde;o respons&aacute;veis por seus direitos e deveres at&eacute; a data da efetiva rescis&atilde;o, ressalvado o per&iacute;odo de guarda legal previsto na Pol&iacute;tica de Privacidade.</p>

                                            <p>CL&Aacute;USULA 16&ordf; &ndash; DAS DISPOSI&Ccedil;&Otilde;ES GERAIS</p>

                                            <p>16.1.&nbsp;O presente Termo de Uso representa o entendimento final entre as PARTES.</p>

                                            <p>16.2.&nbsp;A nulidade de uma cl&aacute;usula deste Termo n&atilde;o representar&aacute; qualquer interfer&ecirc;ncia na validade das demais que se manter&atilde;o em pleno vigor.<br />
                                            16.3.&nbsp;O&nbsp;USU&Aacute;RIO&nbsp;autoriza a&nbsp;SINERGIA&nbsp;a divulgar seu nome como usu&aacute;rio da PLATAFORMA, seja em efeito de publicidade ou qualquer outro que tenha objetivo de divulga&ccedil;&atilde;o da PLATAFORMA e da SINERGIA.</p>

                                            <p>16.4.&nbsp;As PARTES se comprometem a manter uma boa rela&ccedil;&atilde;o comercial, zelando pelo equil&iacute;brio econ&ocirc;mico e financeiro do contrato.</p>

                                            <p>16.5.&nbsp;Em hip&oacute;tese alguma o n&atilde;o exerc&iacute;cio de qualquer direito aqui acordado poder&aacute; ser interpretado como ren&uacute;ncia a este direito, que poder&aacute; ser exercido a qualquer tempo.<br />
                                            16.6.&nbsp;Cada PARTE ser&aacute; a &uacute;nica, exclusiva e individualmente respons&aacute;vel perante a legisla&ccedil;&atilde;o vigente, pelos tributos devidos e pela pr&aacute;tica do fato gerador do mesmo.</p>

                                            <p>16.7.&nbsp;N&atilde;o existe qualquer rela&ccedil;&atilde;o de sociedade, subordina&ccedil;&atilde;o, de mandato ou rela&ccedil;&atilde;o de trabalho entre o&nbsp;USU&Aacute;RIO&nbsp;e a&nbsp;SINERGIA.</p>

                                            <p>16.8.&nbsp;As obriga&ccedil;&otilde;es, direitos e deveres acordados neste Termo de Uso pelo USU&Aacute;RIO s&atilde;o pessoais e intransfer&iacute;veis. Todas as obriga&ccedil;&otilde;es, os direitos e os deveres compromissados nestes Termos de Uso poder&atilde;o ser repassados pela SINERGIA&nbsp;a qualquer outra empresa que preencha, a crit&eacute;rio da SINERGIA, as condi&ccedil;&otilde;es necess&aacute;rias para o cumprimento das obriga&ccedil;&otilde;es da&nbsp;SINERGIA.</p>

                                            <p>CL&Aacute;USULA 17&ordf; &ndash; ACEITA&Ccedil;&Atilde;O DO TERMO DE USO E POL&Iacute;TICA DE PRIVACIDADE</p>

                                            <p>17.1.&nbsp;Para a utiliza&ccedil;&atilde;o da SINERGIA, &eacute; indispens&aacute;vel a aceita&ccedil;&atilde;o deste Termo de Uso, bem como a aceita&ccedil;&atilde;o da Pol&iacute;tica de Privacidade. Ambos os termos possuem natureza de contrato vinculante entre as PARTES.</p>

                                            <p>17.1.1.&nbsp;O&nbsp;USU&Aacute;RIO&nbsp;reconhece que a forma e data de aceita&ccedil;&atilde;o deste Termo de Uso e da Pol&iacute;tica de Privacidade ser&atilde;o registradas nos bancos de dados da PLATAFORMA, podendo tal informa&ccedil;&atilde;o ser utilizada como prova da aceita&ccedil;&atilde;o.</p>

                                            <p>17.2.&nbsp;O&nbsp;USU&Aacute;RIO&nbsp;est&aacute; ciente da IMPOSSIBILIDADE de acesso e uso da PLATAFORMA, sem antes concretizar a aceita&ccedil;&atilde;o deste Termo de Uso e da Pol&iacute;tica de Privacidade da Informa&ccedil;&atilde;o.</p>

                                            <p>17.3. O USU&Aacute;RIO reconhece que &eacute; sua obriga&ccedil;&atilde;o a leitura integral destes Termos, seu entendimento e sua aceita&ccedil;&atilde;o, antes de qualquer cadastro na PLATAFORMA.</p>

                                            <p>CL&Aacute;USULA 18&ordf; - &nbsp;UTILIZA&Ccedil;&Atilde;O DO SHOPPING</p>

                                            <p>18.1. A PLATAFORMA SINERGIA disponibilizar&aacute;, onerosamente, espa&ccedil;o virtual, para os interessados em explorar o com&eacute;rcio virtual dentro da PLATAFORMA, por meio de abertura de uma loja virtual.</p>

                                            <p>18.1.1. A SINERGIA, em hip&oacute;tese alguma poder&aacute; ser responsabilizada por qualquer transa&ccedil;&atilde;o efetuada em qualquer Loja Virtual do Shopping. O USU&Aacute;RIO cadastrado na PLATAFORMA, ter&aacute; livre acesso a todas as lojas virtuais da PLATAFORMA, bem como ser&aacute; benefici&aacute;rio de todos os eventuais descontos e promo&ccedil;&otilde;es, efetuados pelas lojas virtuais, sendo obrigat&oacute;ria a aceita&ccedil;&atilde;o pr&eacute;via dos seus termos de uso.<br />
                                            18.1.2. A SINERGIA nesta modalidade, apenas loca o espa&ccedil;o virtual para o propriet&aacute;rio da Loja Virtual no Shopping, sendo que em momento algum a SINERGIA administra, gerencia, fiscaliza e/ou controla qualquer loja ou produto comercializado.</p>

                                            <p>18.1.3. Todas as compras realizadas em qualquer loja virtual alocada na PLATAFORMA, ser&atilde;o uma transa&ccedil;&atilde;o comercial direta entre o USU&Aacute;RIO cadastrado na PLATAFORMA e o propriet&aacute;rio da Loja Virtual, sem qualquer interfer&ecirc;ncia ou responsabilidade da SINERGIA.</p>

                                            <p>18.1.4. Pre&ccedil;o, desconto, prazo de entrega, quantidade, em resumo, todos os aspectos da negocia&ccedil;&atilde;o ser&atilde;o realizados diretamente entre as PARTES, sem qualquer interfer&ecirc;ncia da PLATAFORMA, que n&atilde;o poder&aacute; ser a qualquer tempo, ou em qualquer hip&oacute;tese responsabilizada por qualquer desintelig&ecirc;ncia ou lit&iacute;gio entre as PARTES.</p>

                                            <p>18.2. O propriet&aacute;rio da Loja Virtual ser&aacute; o &uacute;nico respons&aacute;vel pelo desenvolvimento, funcionamento e manuten&ccedil;&atilde;o de sua loja virtual, incluindo a aceita&ccedil;&atilde;o, o processamento e o registro de pedidos de seus clientes por meio da loja virtual e a resposta a consultas, reclama&ccedil;&otilde;es ou queixas de clientes ou a resolu&ccedil;&atilde;o de conflitos que possam surgir em raz&atilde;o dos pedidos ou vendas realizadas por meio de sua loja virtual.</p>

                                            <p>Cl&aacute;usula 19&ordf; - FORO</p>

                                            <p>19.1.&nbsp;As PARTES elegem o Foro da Comarca de S&atilde;o Paulo/SP, para dirimir eventuais d&uacute;vidas que possam surgir referente a este Termo ou qualquer outro lit&iacute;gio entre as PARTES.</p>

                                            <p>Este Termo de Uso foi atualizado em 17/07/2017&nbsp;e permanecer&aacute; dispon&iacute;vel no Sistema para consulta.</p>

                                            <p><br />
                                            ANEXO I &ndash; TABELA</p>

                                            <p>TAXA DE SINERGIA</p>

                                            <p>Os USU&Aacute;RIOS, - transportadores, operadores log&iacute;sticos, carreteiros aut&ocirc;nomos, embarcadores -, &nbsp; quando realizarem uma sinergia, ou seja, quando efetuarem entre si uma opera&ccedil;&atilde;o de transporte atrav&eacute;s das ferramentas da PLATAFORMA, e apenas quando atrav&eacute;s dessas ferramentas, dever&atilde;o, cada uma das PARTES, &agrave; GERA SINERGIA uma taxa de 2,5% (dois e meio por cento) do valor do frete total referente &agrave;quela opera&ccedil;&atilde;o.</p>

                                            <p>Exemplo: uma carga foi ofertada por um usu&aacute;rio da PLATAFORMA e foi aceita para transporte por outro usu&aacute;rio da PLATAFORMA, um transportador, pelo frete total de R$ 1.000,00 (hum mil reais). Nesse caso, o ofertante da carga e o transportador dela, pagar&atilde;o, cada um o valor de R$ 25,00 (vinte e cinco reais) &agrave; GERA SINERGIA.&nbsp;</p>

                                            <p>A GERA SINERGIA, em comum acordo com cada um dos USU&Aacute;RIOS, poder&aacute; debitar as taxas devidas atrav&eacute;s de boleto banc&aacute;rio, d&eacute;bitos em cart&otilde;es, ou outra forma de comum acordo entre o USU&Aacute;RIO e a GERA SINERGIA.<br />
                                            A GERA SINERGIA se reserva o direito de, a seu exclusivo crit&eacute;rio, promover promo&ccedil;&otilde;es tempor&aacute;rias, descontos, ou outros benef&iacute;cios a um determinado USU&Aacute;RIO, ou a um grupo de USU&Aacute;RIOS, por raz&otilde;es internas de sua administra&ccedil;&atilde;o e da sua estrat&eacute;gia comercial.</p>

                                            <p>TAXAS PARA SHOPPING E BALC&Atilde;O DE NEG&Oacute;CIOS&nbsp;</p>

                                            <p>As tabelas aplicadas para a utiliza&ccedil;&atilde;o do espa&ccedil;o virtual de lojas no SHOPPING e para an&uacute;ncios no BALC&Atilde;O DE NEG&Oacute;CIOS pelos USU&Aacute;RIOS, est&atilde;o devidamente publicadas nos TERMOS DE USO espec&iacute;ficos para cada um daqueles m&oacute;dulos.</p>


                                        </article>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="politicas">
                                    <div class="caixa_informacao">
                                        <article>
                                            <p>
                                                A Pol&iacute;tica de Seguran&ccedil;a das Informa&ccedil;&otilde;es (PSI) &eacute; basicamente um manual de procedimentos que descreve como os recursos de&nbsp;tecnologia da informa&ccedil;&atilde;o&nbsp;da empresa devem ser protegidos e utilizados e &eacute; o pilar da efic&aacute;cia da seguran&ccedil;a da informa&ccedil;&atilde;o.&nbsp;
                                            </p>
                                            <p>
                                                A pol&iacute;tica tende a estabelecer regras e normas de conduta com o objetivo de diminuir a probabilidade da ocorr&ecirc;ncia de incidentes que provoquem, por exemplo a indisponibilidade do servi&ccedil;o, furto ou at&eacute; mesmo a perda de informa&ccedil;&otilde;es. As pol&iacute;ticas de seguran&ccedil;a geralmente s&atilde;o constru&iacute;das a partir das necessidades do neg&oacute;cio e eventualmente aperfei&ccedil;oadas pela experi&ecirc;ncia do gestor.
                                            </p>
                                            <p>
                                                As normas e Pol&iacute;ticas de Seguran&ccedil;a das Informa&ccedil;&otilde;es aqui expostas, foram desenvolvidas a partir e com base na NBR ISO/IEC 27001:2005, sendo aplicadas a todas as informa&ccedil;&otilde;es coletadas pela Plataforma SINERGIA.
                                            </p>
                                            <p>
                                                A Pol&iacute;tica de Seguran&ccedil;a da SINERGIA &eacute; baseada em tr&ecirc;s princ&iacute;pios: CONFIDENCIALIDADE, INTEGRIDADE E DISPONIBILIDADE.
                                            </p>
                                            <p>
                                                CONFIDENCIALIDADE: A confidencialidade &eacute; a garantia de que a informa&ccedil;&atilde;o &eacute; acess&iacute;vel somente por pessoas autorizadas a terem acesso.
                                            </p>
                                            <p>
                                                INTEGRIDADE: A integridade &eacute; a garantia da exatid&atilde;o e integridade da informa&ccedil;&atilde;o e dos m&eacute;todos de processamento, ou seja, &eacute; a garantia de que a informa&ccedil;&atilde;o n&atilde;o ser&aacute; alterada ou modificada unilateralmente.
                                            </p>
                                            <p>
                                                DISPONIBILIDADE: A disponibilidade &eacute; a garantia de que os usu&aacute;rios autorizados obtenham acesso &agrave; informa&ccedil;&atilde;o e aos ativos correspondentes sempre que necess&aacute;rio.
                                            </p>
                                            <p>
                                                A Plataforma SINERGIA zela pela confiabilidade de seu sistema, aplicando os mecanismos necess&aacute;rios para a seguran&ccedil;a das informa&ccedil;&otilde;es de todos os cadastros em seu banco de dados.
                                            </p>
                                            <h2>
                                                Coleta e Armazenamento de dados&nbsp;
                                            </h2>
                                            <p>
                                                A coleta e armazenamento de dados na Plataforma SINERGIA se dar&aacute; somente com cadastro na mesma.
                                            </p>
                                            <p>
                                                O acesso a Plataforma SINERGIA somente &eacute; poss&iacute;vel ao USU&Aacute;RIO, assim legalmente identificado. Neste caso o USU&Aacute;RIO ter&aacute; que informar v&aacute;rios dados pessoais e profissionais, os quais s&atilde;o obrigat&oacute;rios para o cadastramento na Plataforma. Tendo em vista a natureza da Plataforma que &eacute; a intermedia&ccedil;&atilde;o de, presta&ccedil;&atilde;o de servi&ccedil;os e venda de bens, por meio de classifica&ccedil;&atilde;o dos USU&Aacute;RIOS mediante a apresenta&ccedil;&atilde;o de determinados documentos, informa-se que todos os dados informados pelo USU&Aacute;RIO no momento de seu cadastro poder&atilde;o ser disponibilizados para outro USU&Aacute;RIO quando houver uma negocia&ccedil;&atilde;o em andamento.
                                            </p>
                                            <p>
                                                A responsabilidade pelo fornecimento da informa&ccedil;&atilde;o &eacute; do USU&Aacute;RIO no momento do cadastro. A Plataforma SINERGIA n&atilde;o tem em hip&oacute;tese alguma, obriga&ccedil;&atilde;o de, conferir, auditar, confirmar ou consultar dados cadastrados na Plataforma, por&eacute;m poder&aacute; faz&ecirc;-los por sua conveni&ecirc;ncia.
                                            </p>

                                            <p>
                                                O USU&Aacute;RIO, ao cadastrar-se na Plataforma SINERGIA, concorda que a mesma poder&aacute; intermediar e guardar as trocas de mensagens eletr&ocirc;nicas entre os USU&Aacute;RIOS dentro da Plataforma com o objetivo de proporcionar a seguran&ccedil;a nas rela&ccedil;&otilde;es e comunica&ccedil;&otilde;es.
                                            </p>
                                            <p>
                                                A qualquer tempo o USU&Aacute;RIO poder&aacute; requerer sua exclus&atilde;o e de seus dados, bem como o cancelamento de seu cadastro na Plataforma SINERGIA, ressalvadas as hip&oacute;teses de manuten&ccedil;&atilde;o previstas em lei.&nbsp;
                                            </p>
                                            <h2>
                                                Confidencialidade da informa&ccedil;&atilde;o
                                            </h2>
                                            <p>
                                                As informa&ccedil;&otilde;es cadastradas na Plataforma SINERGIA, estar&atilde;o protegidas pela confidencialidade da informa&ccedil;&atilde;o, sendo que somente ser&atilde;o divulgadas para o USU&Aacute;RIO no momento da negocia&ccedil;&atilde;o.
                                            </p>
                                            <p>
                                                Visitantes n&atilde;o cadastrados, anunciantes e propriet&aacute;rios de lojas virtuais dentro da Plataforma, n&atilde;o ter&atilde;o acesso a informa&ccedil;&atilde;o de nenhum USU&Aacute;RIO cadastrado ou visitante.
                                            </p>
                                            <p>
                                                A Plataforma SINERGIA n&atilde;o fornecer&aacute;, vender&aacute; ou compartilhar&aacute; qualquer informa&ccedil;&atilde;o do USU&Aacute;RIO cadastrado ou visitante com pessoas f&iacute;sicas ou jur&iacute;dicas estranhas &agrave; Plataforma.
                                            </p>
                                            <p>
                                                As informa&ccedil;&otilde;es cadastradas somente ser&atilde;o usadas para a classifica&ccedil;&atilde;o do USU&Aacute;RIO, conforme explicitado no TERMO DE USO.
                                            </p>
                                            <h2>
                                                Seguran&ccedil;a da informa&ccedil;&atilde;o
                                            </h2>
                                            <p>
                                                A Plataforma SINERGIA aplica diversas medidas no que tange a seguran&ccedil;a de Informa&ccedil;&otilde;es pessoais e utiliza-se de criptografia e certificados de seguran&ccedil;a SSL.&nbsp;
                                            </p>
                                            <p>
                                                Os dados pessoais de qualquer pessoa, s&atilde;o bens inestim&aacute;veis, sabedora desta valia, a Plataforma SINERGIA trata estas informa&ccedil;&otilde;es com o m&aacute;ximo cuidado e zelo poss&iacute;vel, empregando t&eacute;cnicas de prote&ccedil;&atilde;o e seguran&ccedil;a as mesmas. Entretanto, mesmo com todos estes cuidados, &eacute; imperioso considerar que n&atilde;o h&aacute; 100% de seguran&ccedil;a quando se trata de internet.
                                            </p>
                                            <p>
                                                A Plataforma SINERGIA n&atilde;o poder&aacute; ser responsabilizada por eventuais intercepta&ccedil;&otilde;es ilegais ou viola&ccedil;&atilde;o de seus sistemas ou bases de dados, n&atilde;o podendo ainda ser responsabilizada pela utiliza&ccedil;&atilde;o indevida e equivocada da informa&ccedil;&atilde;o obtida ilicitamente.
                                            </p>
                                            <h2>
                                                Uso da informa&ccedil;&atilde;o por outros Usu&aacute;rios
                                            </h2>
                                            <p>
                                                A fim de possibilitar o contato entre os USU&Aacute;RIOS cadastrados na Plataforma, mesmo antes de haver uma negocia&ccedil;&atilde;o estabelecida entre as partes, a Plataforma disponibilizar&aacute; dados b&aacute;sicos como nome, telefone, e-mail e endere&ccedil;o.
                                            </p>

                                            <p>
                                                Essas informa&ccedil;&otilde;es, visam &uacute;nica e exclusivamente facilitar o contato e consequentemente a negocia&ccedil;&atilde;o entre as Partes, n&atilde;o podendo ser usada para qualquer outro fim. A divulga&ccedil;&atilde;o dessas informa&ccedil;&otilde;es a terceiros n&atilde;o cadastrados na Plataforma, configura grave viola&ccedil;&atilde;o da Pol&iacute;tica de Seguran&ccedil;a da Informa&ccedil;&atilde;o da Plataforma SINERGIA, podendo o transgressor sofrer as san&ccedil;&otilde;es administrativas que variam de advert&ecirc;ncia a exclus&atilde;o definitiva da Plataforma, al&eacute;m da comunica&ccedil;&atilde;o &agrave;s autoridades competentes para eventuais investiga&ccedil;&otilde;es.
                                            </p>

                                            <p>
                                                Sob nenhuma circunst&acirc;ncia se deve comunicar informa&ccedil;&atilde;o pessoal ou endere&ccedil;o de e-mail de outro USU&Aacute;RIO a nenhum terceiro, sem o consentimento da SINERGIA e do USU&Aacute;RIO afetado.
                                            </p>
                                            <p>
                                                As informa&ccedil;&otilde;es pessoais poder&atilde;o ser compartilhadas com parceiros da Plataforma, apenas quando a parceria estiver expl&iacute;cita na p&aacute;gina.
                                            </p>
                                            <h2>
                                                Intera&ccedil;&atilde;o entre USU&Aacute;RIOS
                                            </h2>
                                            <p>
                                                O objeto principal da Plataforma SINERGIA &eacute; aproximar os USU&Aacute;RIOS facilitando a rela&ccedil;&atilde;o comercial.
                                            </p>
                                            <p>
                                                Todos os cadastrados na Plataforma SINERGIA s&atilde;o obrigatoriamente USU&Aacute;RIOS, podendo ser USU&Aacute;RIOS pessoa f&iacute;sica aut&ocirc;nomos &ndash; TAC, ou USU&Aacute;RIOS pessoa jur&iacute;dica &ndash; ETC no que tange a transportadores. O USU&Aacute;RIO poder&aacute; ainda ser um embarcador, operador log&iacute;stico ou fornecedor de servi&ccedil;os ou bens.
                                            </p>
                                            <p>
                                                Devido &agrave; peculiaridade dos servi&ccedil;os prestados na Plataforma, o contratante necessariamente tem que possuir o conhecimento sobre a documenta&ccedil;&atilde;o do contratado. Assim, sempre que aberta uma negocia&ccedil;&atilde;o entre as partes, ser&atilde;o disponibilizados os arquivos de ambas as partes entre si, para as verifica&ccedil;&otilde;es pertinentes.
                                            </p>
                                            <h2>
                                                Senha pessoal
                                            </h2>
                                            <p>
                                                A senha &eacute; pessoal e intransfer&iacute;vel. Cada USU&Aacute;RIO cadastrado &eacute; respons&aacute;vel pela sua senha que n&atilde;o pode ser emprestada, ou divulgada a ningu&eacute;m. Assim, o USU&Aacute;RIO &eacute; o &uacute;nico respons&aacute;vel por todos os atos realizados com seu Login e Senha.
                                            </p>
                                            <h2>
                                                Cookies
                                            </h2>
                                            <p>
                                                O USU&Aacute;RIO da Plataforma SINERGIA manifesta ser conhecedor que poder&aacute; ser utilizado um sistema de coleta de dados de navega&ccedil;&atilde;o mediante &agrave; utiliza&ccedil;&atilde;o de cookies. Os cookies s&atilde;o pequenos arquivos que se instalam no disco r&iacute;gido, com uma dura&ccedil;&atilde;o limitada de tempo que ajudam a personalizar os servi&ccedil;os. A SINERGIA n&atilde;o usar&aacute; os cookies com fins alheios &agrave; sua opera&ccedil;&atilde;o.
                                            </p>
                                            <p>
                                                A instala&ccedil;&atilde;o, perman&ecirc;ncia e exist&ecirc;ncia dos cookies no computador do USU&Aacute;RIO depender&atilde;o de sua exclusiva vontade e poder&atilde;o ser eliminados de seu computador quando o USU&Aacute;RIO assim o deseje.&nbsp;
                                            </p>
                                            <p>
                                                Fica esclarecido que estas pol&iacute;ticas cobrem a utiliza&ccedil;&atilde;o de cookies por esta Plataforma e n&atilde;o a utiliza&ccedil;&atilde;o de cookies por parte de anunciantes e/ou terceiros. A Plataforma SINERGIA n&atilde;o tem controle sobre o uso de cookies por terceiros.
                                            </p>
                                            <h2>
                                                Spam
                                            </h2>
                                            <p>
                                                A SINERGIA e os seus usu&aacute;rios s&atilde;o contr&aacute;rios &agrave;s condutas denominadas &quot;spamming&quot;, seja em qualquer forma. &Eacute; terminantemente proibido o envio indiscriminado de mensagens de qualquer natureza entre os usu&aacute;rios da plataforma SINERGIA, que poder&aacute; suspender provis&oacute;ria ou definitivamente aqueles usu&aacute;rios que violarem essa pol&iacute;tica.
                                            </p>
                                            <h2>
                                                Mudan&ccedil;as na Pol&iacute;tica de Privacidade e Seguran&ccedil;a das Informa&ccedil;&otilde;es
                                            </h2>
                                            <p>
                                                Essa PSI poder&aacute; periodicamente passar por atualiza&ccedil;&otilde;es e/ou altera&ccedil;&otilde;es. A Plataforma SINERGIA sugere ao USU&Aacute;RIO cadastrado que periodicamente revise este termo a fim de verificar se houve alguma modifica&ccedil;&atilde;o, altera&ccedil;&atilde;o ou atualiza&ccedil;&atilde;o no mesmo.
                                            </p>

                                            <h2>
                                                Ordem de autoridades competentes - Requerimentos Legais
                                            </h2>
                                            <p>
                                                A SINERGIA sempre coopera com as autoridades competentes para garantir o cumprimento das leis, guardar a integridade e a seguran&ccedil;a da Plataforma e das informa&ccedil;&otilde;es constantes em seu banco de dados, impedir atividades ilegais, prevenir eventuais fraudes.
                                            </p>
                                            <p>
                                                Nos termos da legisla&ccedil;&atilde;o brasileira a Plataforma SINERGIA poder&aacute; revelar informa&ccedil;&otilde;es pessoais solicitadas formalmente por autoridades competentes.
                                            </p>
                                            <h2>
                                                Manuten&ccedil;&atilde;o dos Dados Cadastrais
                                            </h2>
                                            <p>
                                                O USU&Aacute;RIO ao realizar seu cadastro se responsabiliza pela veracidade, legalidade, exatid&atilde;o, vig&ecirc;ncia e autenticidade dos dados pessoais e profissionais, comprometendo-se a mant&ecirc;-los atualizados.
                                            </p>

                                            <p>
                                                Os USU&Aacute;RIOS cadastrados devem atualizar e manter atualizados seus dados pessoais e profissionais regularmente, facilitando o contato de outros USU&Aacute;RIOS.
                                            </p>

                                            <p>
                                                Este PSI foi &nbsp;atualizada pela &uacute;ltima vez em&nbsp;18/07/2017&nbsp;e permanecer&aacute; dispon&iacute;vel no Sistema para consulta.
                                            </p>

                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </main>
        <footer id="main-footer">
            <div class="col-md-12">
                <ul>
                    <li>Copyright © 2017 Gera Sinergia - Todos os direitos reservados</li>
                    <li>
                        <a href="/termos" target="_blank">Política de privacidade</a>
                    </li>
                    <li>
                        <a href="/termos" target="_blank">Termos de uso</a>
                    </li>
                </ul>
            </div>
        </footer>
    </section>

    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>