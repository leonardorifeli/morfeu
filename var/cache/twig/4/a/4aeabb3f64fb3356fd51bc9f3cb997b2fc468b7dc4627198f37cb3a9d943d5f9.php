<?php

/* myorder.html.twig */
class __TwigTemplate_4aeabb3f64fb3356fd51bc9f3cb997b2fc468b7dc4627198f37cb3a9d943d5f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Extends/base.html.twig", "myorder.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "Extends/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_84c8ff0d665e2ce2ec96058eab551a1c57ca0e466ff844b17f52457f91d72bcc = $this->env->getExtension("native_profiler");
        $__internal_84c8ff0d665e2ce2ec96058eab551a1c57ca0e466ff844b17f52457f91d72bcc->enter($__internal_84c8ff0d665e2ce2ec96058eab551a1c57ca0e466ff844b17f52457f91d72bcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "myorder.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84c8ff0d665e2ce2ec96058eab551a1c57ca0e466ff844b17f52457f91d72bcc->leave($__internal_84c8ff0d665e2ce2ec96058eab551a1c57ca0e466ff844b17f52457f91d72bcc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1b537df3dfc8af3391ebeee0938da329f39b7d7eae923decbf37798aa6028387 = $this->env->getExtension("native_profiler");
        $__internal_1b537df3dfc8af3391ebeee0938da329f39b7d7eae923decbf37798aa6028387->enter($__internal_1b537df3dfc8af3391ebeee0938da329f39b7d7eae923decbf37798aa6028387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Meus pedidos</h1>

<ul class=\"menu-informations-kit\">
    <li>
        <a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("puppy_kit");
        echo "\">
            <strong>Solicitar Kit FIlhote</strong>
        </a>
    </li>

    <li>
        <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("adoption_kit");
        echo "\">
            <strong>Solicitar Kit Adoção</strong>
        </a>
    </li>

    <li>
        <a class=\"menu-active\" href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("kit_my_order");
        echo "\">
            <strong>Meus Pedidos</strong>
        </a>
    </li>
</ul>

<div style=\"clear: both\"></div>

<div class=\"row\">
    ";
        // line 29
        if ((array_key_exists("kit_request", $context) &&  !twig_test_empty((isset($context["kit_request"]) ? $context["kit_request"] : $this->getContext($context, "kit_request"))))) {
            // line 30
            echo "    <table class=\"twelve columns\">
        <tr>
            <td>
                <strong>Tipo</strong>
            </td>
            <td>
                <strong>Data da solicitação</strong>
            </td>
            <td>
                <strong>Nome</strong>
            </td>
            <td>
                <strong>Qtd de filhotes</strong>
            </td>
            <td>
                <strong>Total de kits</strong>
            </td>
            <td>
                <strong>Status</strong>
            </td>
        </tr>
        ";
            // line 51
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["kit_request"]) ? $context["kit_request"] : $this->getContext($context, "kit_request")));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 52
                echo "        <tr>
            <td>
                ";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "type", array()), "html", null, true);
                echo "
            </td>
            <td>
                ";
                // line 57
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateRequest", array()), "d/m/Y h:i:s"), "html", null, true);
                echo "
            </td>
            <td>
                ";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "name", array()), "html", null, true);
                echo "
            </td>
            <td>
                ";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "amountPuppy", array()), "html", null, true);
                echo "
            </td>
            <td>
                ";
                // line 66
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "amountKit", array()), "html", null, true);
                echo "
            </td>
            <td>
                ";
                // line 69
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "status", array()), "html", null, true);
                echo "
            </td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "    </table>
    ";
        } else {
            // line 75
            echo "    <p>
        <strong>Nenhum pedido efetuado.</strong>
    </p>
    ";
        }
        // line 79
        echo "</div>

";
        
        $__internal_1b537df3dfc8af3391ebeee0938da329f39b7d7eae923decbf37798aa6028387->leave($__internal_1b537df3dfc8af3391ebeee0938da329f39b7d7eae923decbf37798aa6028387_prof);

    }

    public function getTemplateName()
    {
        return "myorder.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 79,  153 => 75,  149 => 73,  139 => 69,  133 => 66,  127 => 63,  121 => 60,  115 => 57,  109 => 54,  105 => 52,  101 => 51,  78 => 30,  76 => 29,  64 => 20,  55 => 14,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }
}
