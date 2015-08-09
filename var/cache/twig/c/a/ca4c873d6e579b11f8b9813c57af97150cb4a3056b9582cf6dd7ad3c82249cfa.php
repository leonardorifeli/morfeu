<?php

/* Extends/menu.html.twig */
class __TwigTemplate_ca4c873d6e579b11f8b9813c57af97150cb4a3056b9582cf6dd7ad3c82249cfa extends Twig_Template
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
        $__internal_ca29f1aee7b99b5e76d387551a14fd5aeede2b12f1046150b60338417facd7fe = $this->env->getExtension("native_profiler");
        $__internal_ca29f1aee7b99b5e76d387551a14fd5aeede2b12f1046150b60338417facd7fe->enter($__internal_ca29f1aee7b99b5e76d387551a14fd5aeede2b12f1046150b60338417facd7fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Extends/menu.html.twig"));

        // line 1
        echo "<ul>

    <li class=\"titulo\">Bonifica&ccedil;&otilde;es</li>
    <li><a href=\"bonificacoes-revistas.php\">An&uacute;ncios em Revistas</a></li>
    <li><a href=\"bonificacoes-sites.php\">An&uacute;ncios em Sites</a></li>
    <li><a href=\"bonificacoes.php\">Meus Pedidos</a></li>
    <li class=\"titulo\">Eventos</li>
    <li><a href=\"eventos.php\">Eventos</a></li>
    <li><a href=\"eventos-relatorio.php\">Meus Eventos</a></li>
    <li class=\"titulo\">Programação Semanal</li>
    <li><a href=\"roteiro-adicionar.php\">Adicionar Roteiro Semanal</a></li>
    <li><a href=\"roteiro.php\">Roteiro Semanal Pendente</a></li>
    <li><a href=\"impressao-roteiro-periodo.php\">Impressão por Período</a></li>

    <li class=\"titulo\"><img src=\"images/title_professionalbreeder.jpg\" alt=\"Professiona Breeder\" /></li>
    <li><a href=\"moderar-coroa.php\">Moderar Criadores</a></li>
    <li><a href=\"moderar-breederlocator.php\">Moderar Busca Criador</a></li>
    <li><a href=\"meus-criadores.php?status=1\">Meus Criadores</a></li>
    <li><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("puppy_kit");
        echo "\">Solicitar Kit Filhote</a></li>
    <li><a href=\"criadores-relatorio.php\">Relatório de Criadores</a></li>
    <li><a href=\"criacao-premiada.php\">Cria&ccedil;&atilde;o Premiada</a></li>

    <li class=\"titulo\"><img src=\"images/title_professionapassion.jpg\" alt=\"Professiona Passion\" width=\"116\" height=\"27\" /></li>
    <li><a href=\"moderar-ongs.php\">Moderar Ongs</a></li>
    <li><a href=\"moderar-locator.php\">Moderar Busca Ong</a></li>
    <li><a href=\"minhas-ongs.php?status=1\">Minhas Ongs</a></li>
    <li><a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("adoption_kit");
        echo "\">Solicitar Kit Ado&ccedil;&atilde;o</a></li>
    <li><a href=\"ongs-relatorio.php\">Relatório de Ongs</a></li>
    <li class=\"titulo\">Conte&uacute;do</li>
    <li><a href=\"conteudo.php?cat=5\">Outros</a></li>
    <li><a href=\"conteudo.php?cat=2\">Palestras</a></li>
    <li><a href=\"conteudo.php?cat=4\">Promoções</a></li>
    <li><a href=\"conteudo.php?cat=1\">Tempos Fortes</a></li>
    <li><a href=\"conteudo.php?cat=3\">Vídeos</a></li>
</ul>

<p>&nbsp;</p>
<p><a href=\"logout.php?doLogout=true\">sair</a></p>
";
        
        $__internal_ca29f1aee7b99b5e76d387551a14fd5aeede2b12f1046150b60338417facd7fe->leave($__internal_ca29f1aee7b99b5e76d387551a14fd5aeede2b12f1046150b60338417facd7fe_prof);

    }

    public function getTemplateName()
    {
        return "Extends/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 27,  42 => 19,  22 => 1,);
    }
}
