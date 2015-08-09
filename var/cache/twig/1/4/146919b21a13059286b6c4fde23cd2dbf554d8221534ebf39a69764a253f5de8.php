<?php

/* Admin/kit-sended/detail.html.twig */
class __TwigTemplate_146919b21a13059286b6c4fde23cd2dbf554d8221534ebf39a69764a253f5de8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Admin/Extends/base.html.twig", "Admin/kit-sended/detail.html.twig", 1);
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
        $__internal_edee1adccf454e246f041f605c3b7a8cec4705157e16df370416ab8a82b3530b = $this->env->getExtension("native_profiler");
        $__internal_edee1adccf454e246f041f605c3b7a8cec4705157e16df370416ab8a82b3530b->enter($__internal_edee1adccf454e246f041f605c3b7a8cec4705157e16df370416ab8a82b3530b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/kit-sended/detail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_edee1adccf454e246f041f605c3b7a8cec4705157e16df370416ab8a82b3530b->leave($__internal_edee1adccf454e246f041f605c3b7a8cec4705157e16df370416ab8a82b3530b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b626b78ab8cb4f1f44f1e9c89bf4c186d04cdda3757416a3e4edbbf5c75398bc = $this->env->getExtension("native_profiler");
        $__internal_b626b78ab8cb4f1f44f1e9c89bf4c186d04cdda3757416a3e4edbbf5c75398bc->enter($__internal_b626b78ab8cb4f1f44f1e9c89bf4c186d04cdda3757416a3e4edbbf5c75398bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        if ((array_key_exists("filter", $context) &&  !(null === (isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter"))))) {
            // line 26
            echo "
            ";
            // line 27
            if ((array_key_exists("distributor", $context) &&  !(null === (isset($context["distributor"]) ? $context["distributor"] : $this->getContext($context, "distributor"))))) {
                // line 28
                echo "                <p>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["distributor"]) ? $context["distributor"] : $this->getContext($context, "distributor")), "name", array()), "html", null, true);
                echo " </p>
            ";
            } else {
                // line 30
                echo "                <p><strong>CDRC:</strong> Todos</p>
            ";
            }
            // line 32
            echo "
            ";
            // line 33
            if ((array_key_exists("cinotecnico", $context) &&  !(null === (isset($context["cinotecnico"]) ? $context["cinotecnico"] : $this->getContext($context, "cinotecnico"))))) {
                // line 34
                echo "                <p><strong>Felinocinotécnico:</strong> ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cinotecnico"]) ? $context["cinotecnico"] : $this->getContext($context, "cinotecnico")), "name", array()), "html", null, true);
                echo " </p>
            ";
            } else {
                // line 36
                echo "                <p><strong>Felinocinotécnico:</strong> Todos</p>
            ";
            }
            // line 38
            echo "
            ";
            // line 39
            if ((($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "dateFrom", array(), "any", true, true) &&  !(null === $this->getAttribute((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")), "dateFrom", array()))) || ($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "dateTo", array(), "any", true, true) &&  !(null === $this->getAttribute((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")), "dateTo", array()))))) {
                // line 40
                echo "
                <h4>Períodos:</h4>

                <ul>
                    ";
                // line 44
                if (($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "dateFrom", array(), "any", true, true) &&  !(null === $this->getAttribute((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")), "dateFrom", array())))) {
                    // line 45
                    echo "                        <li>de: ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")), "dateFrom", array()), "d/m/Y"), "html", null, true);
                    echo "</li>
                    ";
                }
                // line 47
                echo "
                    ";
                // line 48
                if (($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "dateTo", array(), "any", true, true) &&  !(null === $this->getAttribute((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")), "dateTo", array())))) {
                    // line 49
                    echo "                        <li>até: ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")), "dateTo", array()), "d/m/Y"), "html", null, true);
                    echo "</li>
                    ";
                }
                // line 51
                echo "                </ul>

            <div style=\"clear:both\"></div>
            ";
            }
            // line 55
            echo "
        ";
        }
        // line 57
        echo "
        <div style=\"clear:both\"></div>

        ";
        // line 60
        if ((array_key_exists("entities", $context) &&  !twig_test_empty((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities"))))) {
            // line 61
            echo "        <p>Total de registros: <strong>";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities"))), "html", null, true);
            echo "</strong></p>
        <table class=\"table table-bordered table-striped table-condensed\" cellpadding=\"2\" cellspacing=\"0\">
            <thead>
                <tr>
                    <th>CDRC</th>
                    <th>Data de solicitação</th>
                    <th>Data de expedição</th>
                    <th>Felinocinotécnico</th>
                    <th>Canil/Gatil/ONG</th>
                    <th>Kit Cão</th>
                    <th>Kit Gato</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 75
            $context["totalDog"] = 0;
            // line 76
            echo "                ";
            $context["totalCat"] = 0;
            // line 77
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 78
                echo "                <tr>
                    <td>";
                // line 79
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "distributor", array()), "name", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 80
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateRequest", array()), "d/m/Y H:i"), "html", null, true);
                echo "</td>
                    <td>";
                // line 81
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateUpdate", array()), "d/m/Y H:i"), "html", null, true);
                echo "</td>
                    <td>";
                // line 82
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "cinotecnico", array()), "name", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 83
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "user", array()), "name", array()), "html", null, true);
                echo "</td>
                    <td>
                        ";
                // line 85
                if (((null === $this->getAttribute($context["entity"], "amountKitDog", array())) || ($this->getAttribute($context["entity"], "amountKitDog", array()) == 0))) {
                    // line 86
                    echo "                        0
                        ";
                } else {
                    // line 88
                    echo "                            ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "amountKitDog", array()), "html", null, true);
                    echo "
                        ";
                }
                // line 90
                echo "                    </td>
                    <td>
                        ";
                // line 92
                if (((null === $this->getAttribute($context["entity"], "amountKitCat", array())) || ($this->getAttribute($context["entity"], "amountKitCat", array()) == 0))) {
                    // line 93
                    echo "                        0
                        ";
                } else {
                    // line 95
                    echo "                            ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "amountKitCat", array()), "html", null, true);
                    echo "
                        ";
                }
                // line 97
                echo "                    </td>
                </tr>
                ";
                // line 99
                $context["totalDog"] = ((isset($context["totalDog"]) ? $context["totalDog"] : $this->getContext($context, "totalDog")) + $this->getAttribute($context["entity"], "amountKitDog", array()));
                // line 100
                echo "                ";
                $context["totalCat"] = ((isset($context["totalCat"]) ? $context["totalCat"] : $this->getContext($context, "totalCat")) + $this->getAttribute($context["entity"], "amountKitCat", array()));
                // line 101
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 102
            echo "                <tr>
                    <td colspan=\"5\"><strong>Totais:</strong></td>
                    <td><strong>";
            // line 104
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["totalDog"]) ? $context["totalDog"] : $this->getContext($context, "totalDog")), 0, ".", "."), "html", null, true);
            echo "</strong></td>
                    <td><strong>";
            // line 105
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["totalCat"]) ? $context["totalCat"] : $this->getContext($context, "totalCat")), 0, ".", "."), "html", null, true);
            echo "</strong></td>
                </tr>
            </tbody>
        </table>

        ";
        } else {
            // line 111
            echo "        <p>
            <strong>Nenhuma solicitação encontrada.</strong>
        </p>
        ";
        }
        // line 115
        echo "
        <a href=\"";
        // line 116
        echo $this->env->getExtension('routing')->getPath("adm_kit_sended");
        echo "\" class=\"btn btn-primary\">Voltar</a>

    </div>
</div>

";
        
        $__internal_b626b78ab8cb4f1f44f1e9c89bf4c186d04cdda3757416a3e4edbbf5c75398bc->leave($__internal_b626b78ab8cb4f1f44f1e9c89bf4c186d04cdda3757416a3e4edbbf5c75398bc_prof);

    }

    public function getTemplateName()
    {
        return "Admin/kit-sended/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 116,  260 => 115,  254 => 111,  245 => 105,  241 => 104,  237 => 102,  231 => 101,  228 => 100,  226 => 99,  222 => 97,  216 => 95,  212 => 93,  210 => 92,  206 => 90,  200 => 88,  196 => 86,  194 => 85,  189 => 83,  185 => 82,  181 => 81,  177 => 80,  173 => 79,  170 => 78,  165 => 77,  162 => 76,  160 => 75,  142 => 61,  140 => 60,  135 => 57,  131 => 55,  125 => 51,  119 => 49,  117 => 48,  114 => 47,  108 => 45,  106 => 44,  100 => 40,  98 => 39,  95 => 38,  91 => 36,  85 => 34,  83 => 33,  80 => 32,  76 => 30,  70 => 28,  68 => 27,  65 => 26,  63 => 25,  40 => 4,  34 => 3,  11 => 1,);
    }
}
