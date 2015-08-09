<?php

/* Admin/Extends/menu.html.twig */
class __TwigTemplate_0dffdcee2a23b646f253e22fb3592ea26ff6959a581026754ac8086d961eb03e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ee8e080241b9afc76063ebab0cf9496a0ae543d40f3636637fa2f248cb0519cd = $this->env->getExtension("native_profiler");
        $__internal_ee8e080241b9afc76063ebab0cf9496a0ae543d40f3636637fa2f248cb0519cd->enter($__internal_ee8e080241b9afc76063ebab0cf9496a0ae543d40f3636637fa2f248cb0519cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/Extends/menu.html.twig"));

        // line 1
        echo "<ul class=\"nav nav-tabs nav-stacked main-menu\">
    <li class=\"nav-header hidden-tablet\">Main</li>
    <li><a class=\"ajax-link\" href=\"index.php\"><i class=\"icon-home\"></i><span class=\"hidden-tablet\"> Dashboard</span></a></li>
    <li><a class=\"ajax-link\" href=\"conteudo.php\"><i class=\"icon-align-justify\"></i><span class=\"hidden-tablet\"> Conteúdo </span></a></li>
    <li><a class=\"ajax-link\" href=\"banners.php\"><i class=\"icon-align-justify\"></i><span class=\"hidden-tablet\"> Banners </span></a></li>
    <li class=\"nav-header hidden-tablet\">Bonifica&ccedil;&otilde;es</li>
    <li><a class=\"ajax-link\" href=\"bonificacoes.php\"><i class=\"icon-align-justify\"></i><span class=\"hidden-tablet\"> Solicita&ccedil;&otilde;es</span></a></li>

    <li class=\"nav-header hidden-tablet\">Brindes</li>
    <li><a class=\"ajax-link\" href=\"brindes.php\"><i class=\"icon-align-justify\"></i><span class=\"hidden-tablet\"> Brindes </span></a></li>

    <li class=\"nav-header hidden-tablet\">Felinocinot&eacute;cnicos</li>
    <li><a class=\"ajax-link\" href=\"promocao-distribuidores.php\"><i class=\"icon-align-justify\"></i><span class=\"hidden-tablet\"> Distribuidores </span></a></li>
    <li><a class=\"ajax-link\" href=\"promocao-cinotecnicos.php\"><i class=\"icon-align-justify\"></i><span class=\"hidden-tablet\"> Felinocinot&eacute;cnicos </span></a></li>

    <li><a class=\"ajax-link\" href=\"transfer-creators-ongs.php\"><i class=\"icon-align-justify\"></i><span class=\"hidden-tablet\"> Transferir </span></a></li>

    <li class=\"nav-header hidden-tablet\">Professional Breeder</li>
    <li><a class=\"ajax-link\" href=\"coroa-criadores.php\"><i class=\"icon-align-justify\"></i><span class=\"hidden-tablet\"> Criadores </span></a></li>
    <li><a class=\"ajax-link\" href=\"coroa-cinotecnicos.php\"><i class=\"icon-calendar\"></i><span class=\"hidden-tablet\"> Por Felinocinot&eacute;cnico</span></a></li>
    <li><a class=\"ajax-link\" href=\"promocao-pedidos.php\"><i class=\"icon-calendar\"></i><span class=\"hidden-tablet\"> Pedidos</span></a></li>
    <li><a class=\"ajax-link\" href=\"criacao-premiada.php\"><i class=\"icon-calendar\"></i><span class=\"hidden-tablet\"> Criação Premiada</span></a></li>
    <li><a class=\"ajax-link\" href=\"coroa-extrato-search.php\"><i class=\"icon-calendar\"></i><span class=\"hidden-tablet\"> Extrato de Pontos</span></a></li>


    <li class=\"nav-header hidden-tablet\">Professional Passion</li>
    <li><a class=\"ajax-link\" href=\"ongs-user.php\"><i class=\"icon-align-justify\"></i><span class=\"hidden-tablet\"> Ongs</span></a></li>
    <li><a class=\"ajax-link\" href=\"ongs-cinotecnicos.php\"><i class=\"icon-calendar\"></i><span class=\"hidden-tablet\">Por Felinocinot&eacute;cnico</span></a></li>
    <li><a class=\"ajax-link\" href=\"ongs-produtos.php\"><i class=\"icon-calendar\"></i><span class=\"hidden-tablet\">Produtos</span></a></li>
    <li><a class=\"ajax-link\" href=\"ongs-produtos-solicitados.php\"><i class=\"icon-calendar\"></i><span class=\"hidden-tablet\">Produtos Solicitados</span></a></li>
    <li><a class=\"ajax-link\" href=\"ong-pedidos.php\"><i class=\"icon-calendar\"></i><span class=\"hidden-tablet\"> Pedidos</span></a></li>
    <li><a class=\"ajax-link\" href=\"ong-extrato-search.php\"><i class=\"icon-calendar\"></i><span class=\"hidden-tablet\"> Extrato de Pontos</span></a></li>

    <li class=\"nav-header hidden-tablet\">Kit Filhote/Ado&ccedil;&atilde;o</li>
    <li><a class=\"ajax-link\" href=\"kitfilhote-alerta.php\"><i class=\"icon-info-sign\"></i><span class=\"hidden-tablet\"> Alerta de Utilização</span></a></li>
    <li><a class=\"ajax-link\" href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("adm_kit_puppy_kit");
        echo "\"><i class=\"icon-align-justify\"></i><span class=\"hidden-tablet\"> Acompanhar Pedidos</span></a></li>
    <li><a class=\"ajax-link\" href=\"kitfilhote-pedidos-cinotecnico.php\"><i class=\"icon-align-justify\"></i><span class=\"hidden-tablet\"> Por Felinocinotécnico</span></a></li>
    <li><a class=\"ajax-link\" href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("adm_kit_sended");
        echo "\"><i class=\"icon-align-justify\"></i><span class=\"hidden-tablet\"> Pedidos Expedidos</span></a></li>


    <li class=\"nav-header hidden-tablet\">Roteiro Programado</li>
    <li><a class=\"ajax-link\" href=\"roteiro-tiposcontato.php\"><i class=\"icon-info-sign\"></i><span class=\"hidden-tablet\"> Tipos de Contato</span></a></li>
    <li><a class=\"ajax-link\" href=\"roteiro-atividades.php\"><i class=\"icon-info-sign\"></i><span class=\"hidden-tablet\"> Tipos de Atividades</span></a></li>
    <li><a class=\"ajax-link\" href=\"roteiro-relatorio.php\"><i class=\"icon-info-sign\"></i><span class=\"hidden-tablet\"> Relatório</span></a></li>
    <li><a class=\"ajax-link\" href=\"roteiro-relatorio-por-tipo.php\"><i class=\"icon-info-sign\"></i><span class=\"hidden-tablet\"> Relatório por Tipo</span></a></li>

    <li class=\"nav-header hidden-tablet\">Eventos</li>
    <li><a class=\"ajax-link\" href=\"eventos-lista.php\"><i class=\"icon-info-sign\"></i><span class=\"hidden-tablet\"> Eventos</span></a></li>
    <li><a class=\"ajax-link\" href=\"eventos-por-tipo.php\"><i class=\"icon-info-sign\"></i><span class=\"hidden-tablet\"> Relatório por Tipo</span></a></li>
</ul>
";
        
        $__internal_ee8e080241b9afc76063ebab0cf9496a0ae543d40f3636637fa2f248cb0519cd->leave($__internal_ee8e080241b9afc76063ebab0cf9496a0ae543d40f3636637fa2f248cb0519cd_prof);

    }

    public function getTemplateName()
    {
        return "Admin/Extends/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 38,  59 => 36,  22 => 1,);
    }
}
