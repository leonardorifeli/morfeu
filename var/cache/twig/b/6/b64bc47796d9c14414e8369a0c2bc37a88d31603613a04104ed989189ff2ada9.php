<?php

/* Admin/kit-sended/index.html.twig */
class __TwigTemplate_b64bc47796d9c14414e8369a0c2bc37a88d31603613a04104ed989189ff2ada9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Admin/Extends/base.html.twig", "Admin/kit-sended/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "Admin/Extends/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1bcdcca4ede23b69c1c19e61a0a9ce77d938ac0eb47ca4f6ae9c75e9a7872f24 = $this->env->getExtension("native_profiler");
        $__internal_1bcdcca4ede23b69c1c19e61a0a9ce77d938ac0eb47ca4f6ae9c75e9a7872f24->enter($__internal_1bcdcca4ede23b69c1c19e61a0a9ce77d938ac0eb47ca4f6ae9c75e9a7872f24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/kit-sended/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1bcdcca4ede23b69c1c19e61a0a9ce77d938ac0eb47ca4f6ae9c75e9a7872f24->leave($__internal_1bcdcca4ede23b69c1c19e61a0a9ce77d938ac0eb47ca4f6ae9c75e9a7872f24_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1844675939546e5996bd5f997a42f5a2bf5a838f031ea8e7ee841c8e78e906cd = $this->env->getExtension("native_profiler");
        $__internal_1844675939546e5996bd5f997a42f5a2bf5a838f031ea8e7ee841c8e78e906cd->enter($__internal_1844675939546e5996bd5f997a42f5a2bf5a838f031ea8e7ee841c8e78e906cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<ul class=\"breadcrumb\">
    <li>
        <a href=\"\">Home </a> <span class=\"divider\">/</span>
    </li>

    <li>
        <a href=\"\">Kits Enviados</a>
    </li>
</ul>

<div class=\"box\">

    <div class=\"box-header well\" data-original-title>
        <h2>
            Kits Enviados
        </h2>
    </div>

    <div class=\"box-content\">

        ";
        // line 25
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

        <div style=\"clear:both\"></div>

        ";
        // line 29
        if ((array_key_exists("entities", $context) &&  !twig_test_empty((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities"))))) {
            // line 30
            echo "        <p>Total de registros: <strong>";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities"))), "html", null, true);
            echo "</strong></p>
        <table class=\"table table-bordered table-striped table-condensed\" cellpadding=\"2\" cellspacing=\"0\">
            <thead>
                <tr>
                    <th>CDRC</th>
                    <th>Felinocinotécnico</th>
                    <th>Kit Cão</th>
                    <th>Kit Gato</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 42
            $context["totalDog"] = 0;
            // line 43
            echo "                ";
            $context["totalCat"] = 0;
            // line 44
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 45
                echo "                <tr>
                    <td>";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "distributor", array()), "name", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "cinotecnico", array()), "name", array()), "html", null, true);
                echo "</td>
                    <td>
                        ";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "amountKitDog", array()), "html", null, true);
                echo "
                    </td>
                    <td>
                        ";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "amountKitCat", array()), "html", null, true);
                echo "
                    </td>
                    <td>
                        <a href=\"#\" class=\"btn btn-primary kit-issue-action\" action=\"";
                // line 55
                echo $this->env->getExtension('routing')->getPath("adm_kit_sended_detail");
                echo "\" select-cinotecnico=\".select-cinotecnico\" select-distributor=\"#requestKitReportFilter_distributor\" cinotecnico=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "cinotecnico", array()), "id", array()), "html", null, true);
                echo "\" form=\"#filter-form\">Detalhar</a>
                    </td>
                </tr>
                ";
                // line 58
                $context["totalDog"] = ((isset($context["totalDog"]) ? $context["totalDog"] : $this->getContext($context, "totalDog")) + $this->getAttribute($context["entity"], "amountKitDog", array()));
                // line 59
                echo "                ";
                $context["totalCat"] = ((isset($context["totalCat"]) ? $context["totalCat"] : $this->getContext($context, "totalCat")) + $this->getAttribute($context["entity"], "amountKitCat", array()));
                // line 60
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "                <tr>
                    <td colspan=\"2\"><strong>Totais:</strong></td>
                    <td><strong>";
            // line 63
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["totalDog"]) ? $context["totalDog"] : $this->getContext($context, "totalDog")), 0, ".", "."), "html", null, true);
            echo "</strong></td>
                    <td><strong>";
            // line 64
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["totalCat"]) ? $context["totalCat"] : $this->getContext($context, "totalCat")), 0, ".", "."), "html", null, true);
            echo "</strong></td>
                    <td>&nbsp;</td>
                </tr>
            </tbody>
        </table>

        ";
        } else {
            // line 71
            echo "        <p>
            <strong>Nenhuma solicitação encontrada.</strong>
        </p>
        ";
        }
        // line 75
        echo "
    </div>
</div>

";
        
        $__internal_1844675939546e5996bd5f997a42f5a2bf5a838f031ea8e7ee841c8e78e906cd->leave($__internal_1844675939546e5996bd5f997a42f5a2bf5a838f031ea8e7ee841c8e78e906cd_prof);

    }

    public function getTemplateName()
    {
        return "Admin/kit-sended/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 75,  159 => 71,  149 => 64,  145 => 63,  141 => 61,  135 => 60,  132 => 59,  130 => 58,  122 => 55,  116 => 52,  110 => 49,  105 => 47,  101 => 46,  98 => 45,  93 => 44,  90 => 43,  88 => 42,  72 => 30,  70 => 29,  63 => 25,  40 => 4,  34 => 3,  11 => 1,);
    }
}
