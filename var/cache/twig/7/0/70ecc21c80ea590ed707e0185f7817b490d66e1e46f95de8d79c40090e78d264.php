<?php

/* Extends/base.html.twig */
class __TwigTemplate_70ecc21c80ea590ed707e0185f7817b490d66e1e46f95de8d79c40090e78d264 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8be193b589bd84f0b7d962c333c0f4d6655bfd4467db700500d805df8e51c560 = $this->env->getExtension("native_profiler");
        $__internal_8be193b589bd84f0b7d962c333c0f4d6655bfd4467db700500d805df8e51c560->enter($__internal_8be193b589bd84f0b7d962c333c0f4d6655bfd4467db700500d805df8e51c560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Extends/base.html.twig"));

        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">

<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"pt-br\" xml:lang=\"pt-br\">
<head><meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <script type=\"text/javascript\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "asset_path", array()), "html", null, true);
        echo "/js/jquery-1.4.2.min.js\"></script>

    <title>Royal Canin - &Aacute;rea do Cinot&eacute;cnico</title>


    <meta name=\"robots\" content=\"noindex,nofollow\">

    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "asset_path", array()), "html", null, true);
        echo "/style.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "asset_path", array()), "html", null, true);
        echo "/css/skeleton/normalize.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "asset_path", array()), "html", null, true);
        echo "/css/skeleton/skeleton.css\" rel=\"stylesheet\" type=\"text/css\" />

</head>
<body>
    <div style=\"visibility: hidden; height: 1px; width: 1px; position: absolute; z-index: 100000; \" id=\"_atssh\">
        <iframe id=\"_atssh8\" title=\"AddThis utility frame\" style=\"height: 1px; width: 1px; position: absolute; z-index: 100000; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; left: 0px; top: 0px; \" src=\"./site_files/sh42.htm\"></iframe>
    </div>

    <div id=\"page\">

        <div id=\"top\">
            <div id=\"logo\">
                <a href=\"http://www.royalcanin.com.br/\">
                    <img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "asset_path", array()), "html", null, true);
        echo "/site_files/0000000000000804.jpg\" title=\"Royal Canin\" alt=\"Royal Canin\">
                </a>
            </div>
            <div id=\"slogan\">
                <img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "asset_path", array()), "html", null, true);
        echo "/site_files/0000000000001446.gif\">
            </div>
        </div>

        <div id=\"left-column\">
            <div id=\"content-space\">
                <div id=\"menu-column\">
                    ";
        // line 38
        $this->loadTemplate("Extends/menu.html.twig", "Extends/base.html.twig", 38)->display($context);
        // line 39
        echo "                </div>

                <div id=\"content-column\">
                    <div id=\"content\" style=\"float: left; width: 93%;\">
                        ";
        // line 43
        $this->displayBlock('body', $context, $blocks);
        // line 46
        echo "                    </div>
                </div>

                <div class=\"cb\">
                </div>

            </div>
        </div>

        <div id=\"footer\">
            <div id=\"logo-footer\">
                <img src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "asset_path", array()), "html", null, true);
        echo "/site_files/0000000000000800.jpg\" alt=\"Royal Canin\" title=\"Royal Canin\">
            </div>
            Desenvolvido por <a href=\"http://wab.com.br\" target=\"_blank\">wab.com.br</a>
        </div>

        <script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "asset_path", array()), "html", null, true);
        echo "/js/jquery-1.10.2.min.js\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "asset_path", array()), "html", null, true);
        echo "/js/system.js\" type=\"text/javascript\"></script>

        </html>
";
        
        $__internal_8be193b589bd84f0b7d962c333c0f4d6655bfd4467db700500d805df8e51c560->leave($__internal_8be193b589bd84f0b7d962c333c0f4d6655bfd4467db700500d805df8e51c560_prof);

    }

    // line 43
    public function block_body($context, array $blocks = array())
    {
        $__internal_befe092a19c0475fcec4ba571babf39ce98b48d3c251d8f3d1975d4a7ce009bd = $this->env->getExtension("native_profiler");
        $__internal_befe092a19c0475fcec4ba571babf39ce98b48d3c251d8f3d1975d4a7ce009bd->enter($__internal_befe092a19c0475fcec4ba571babf39ce98b48d3c251d8f3d1975d4a7ce009bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 44
        echo "
                        ";
        
        $__internal_befe092a19c0475fcec4ba571babf39ce98b48d3c251d8f3d1975d4a7ce009bd->leave($__internal_befe092a19c0475fcec4ba571babf39ce98b48d3c251d8f3d1975d4a7ce009bd_prof);

    }

    public function getTemplateName()
    {
        return "Extends/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 44,  126 => 43,  115 => 63,  111 => 62,  103 => 57,  90 => 46,  88 => 43,  82 => 39,  80 => 38,  70 => 31,  63 => 27,  47 => 14,  43 => 13,  39 => 12,  29 => 5,  23 => 1,);
    }
}
