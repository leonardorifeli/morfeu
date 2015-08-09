<?php

/* Admin/request-kit-issue-detail.html.twig */
class __TwigTemplate_4d42b83825252b36de56a6d3c4482fa6f1782846fe110b7571e69c766ed9c1b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Admin/Extends/base.html.twig", "Admin/request-kit-issue-detail.html.twig", 1);
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
        $__internal_c2c168c5289f5eba28caf6e01bd70a3beea4f9b86805ff6d5b7af81ea265b4c6 = $this->env->getExtension("native_profiler");
        $__internal_c2c168c5289f5eba28caf6e01bd70a3beea4f9b86805ff6d5b7af81ea265b4c6->enter($__internal_c2c168c5289f5eba28caf6e01bd70a3beea4f9b86805ff6d5b7af81ea265b4c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/request-kit-issue-detail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2c168c5289f5eba28caf6e01bd70a3beea4f9b86805ff6d5b7af81ea265b4c6->leave($__internal_c2c168c5289f5eba28caf6e01bd70a3beea4f9b86805ff6d5b7af81ea265b4c6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4939b1dc0a12d06519d2761dcd16b08b40e64cfd421734f05f78d89d07e6bb3e = $this->env->getExtension("native_profiler");
        $__internal_4939b1dc0a12d06519d2761dcd16b08b40e64cfd421734f05f78d89d07e6bb3e->enter($__internal_4939b1dc0a12d06519d2761dcd16b08b40e64cfd421734f05f78d89d07e6bb3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<ul class=\"breadcrumb\">
    <li>
        <a href=\"\">Home </a> <span class=\"divider\">/</span>
    </li>

    <li>
        <a href=\"\">Solicitações de Kits</a>
    </li>
</ul>

<div class=\"box\">

    <div class=\"box-header well\" data-original-title>
        <h2>
            Solicitações de Kits
        </h2>
    </div>

    <div class=\"box-content\">

        <div style=\"clear:both\"></div>

        ";
        // line 27
        if ((array_key_exists("filter", $context) &&  !(null === (isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter"))))) {
            // line 28
            echo "
            ";
            // line 29
            if ((array_key_exists("distributor", $context) &&  !(null === (isset($context["distributor"]) ? $context["distributor"] : $this->getContext($context, "distributor"))))) {
                // line 30
                echo "                <p>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["distributor"]) ? $context["distributor"] : $this->getContext($context, "distributor")), "name", array()), "html", null, true);
                echo " </p>
            ";
            } else {
                // line 32
                echo "                <p><strong>CDRC:</strong> Todos</p>
            ";
            }
            // line 34
            echo "
            ";
            // line 35
            if ((array_key_exists("cinotecnico", $context) &&  !(null === (isset($context["cinotecnico"]) ? $context["cinotecnico"] : $this->getContext($context, "cinotecnico"))))) {
                // line 36
                echo "                <p><strong>Felinocinotécnico:</strong> ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cinotecnico"]) ? $context["cinotecnico"] : $this->getContext($context, "cinotecnico")), "name", array()), "html", null, true);
                echo " </p>
            ";
            } else {
                // line 38
                echo "                <p><strong>Felinocinotécnico:</strong> Todos</p>
            ";
            }
            // line 40
            echo "
            ";
            // line 41
            if ((($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "dateFrom", array(), "any", true, true) &&  !(null === $this->getAttribute((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")), "dateFrom", array()))) || ($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "dateTo", array(), "any", true, true) &&  !(null === $this->getAttribute((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")), "dateTo", array()))))) {
                // line 42
                echo "
                <h4>Períodos:</h4>

                <ul>
                    ";
                // line 46
                if (($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "dateFrom", array(), "any", true, true) &&  !(null === $this->getAttribute((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")), "dateFrom", array())))) {
                    // line 47
                    echo "                        <li>de: ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")), "dateFrom", array()), "d/m/Y"), "html", null, true);
                    echo "</li>
                    ";
                }
                // line 49
                echo "
                    ";
                // line 50
                if (($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "dateTo", array(), "any", true, true) &&  !(null === $this->getAttribute((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")), "dateTo", array())))) {
                    // line 51
                    echo "                        <li>até: ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")), "dateTo", array()), "d/m/Y"), "html", null, true);
                    echo "</li>
                    ";
                }
                // line 53
                echo "                </ul>

            <div style=\"clear:both\"></div>
            ";
            }
            // line 57
            echo "
        ";
        }
        // line 59
        echo "
        ";
        // line 60
        if ((array_key_exists("request_kit", $context) &&  !twig_test_empty((isset($context["request_kit"]) ? $context["request_kit"] : $this->getContext($context, "request_kit"))))) {
            // line 61
            echo "            <table class=\"table table-bordered table-striped table-condensed\" cellpadding=\"2\" cellspacing=\"0\">
                <thead>
                    <tr>
                        <th>CDRC</th>
                        <th>Felinocinotécnico</th>
                        <th>Canil/Gatil/ONG</th>
                        <th>Kit Cão</th>
                        <th>Kit Gato</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    ";
            // line 73
            $context["totalDog"] = 0;
            // line 74
            echo "                    ";
            $context["totalCat"] = 0;
            // line 75
            echo "                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["request_kit"]) ? $context["request_kit"] : $this->getContext($context, "request_kit")));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 76
                echo "                    <tr>
                        <td>";
                // line 77
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "distributor", array()), "name", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 78
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "cinotecnico", array()), "name", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 79
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "user", array()), "name", array()), "html", null, true);
                echo "</td>
                        <td>
                            ";
                // line 81
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "amountKitDog", array()), "html", null, true);
                echo "
                        </td>
                        <td>
                            ";
                // line 84
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "amountKitCat", array()), "html", null, true);
                echo "
                        </td>
                        <td>
                            <form method=\"post\" action=\"#\">
                                <select style=\"float: left;\" class='kit_detail_send_action' output=\".load-message";
                // line 88
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
                echo "\" image=\".load-kit";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
                echo "\" name='status' action=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adm_kit_puppy_kit_detail_send", array("kitRequest" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">
                                    <option value=\"0\" selected>Pendente</option>
                                    <option value=\"1\">Enviado</option>
                                </select>

                                <img style=\"float: left; display: none;\" class=\"load-kit";
                // line 93
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
                echo "\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "asset_path", array()), "html", null, true);
                echo "/images/load.gif\" />

                                <div style=\"clear:both\"></div>

                                <div class=\"load-message";
                // line 97
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
                echo "\"></div>

                            </form>
                        </td>
                    </tr>
                    ";
                // line 102
                $context["totalDog"] = ((isset($context["totalDog"]) ? $context["totalDog"] : $this->getContext($context, "totalDog")) + $this->getAttribute($context["entity"], "amountKitDog", array()));
                // line 103
                echo "                    ";
                $context["totalCat"] = ((isset($context["totalCat"]) ? $context["totalCat"] : $this->getContext($context, "totalCat")) + $this->getAttribute($context["entity"], "amountKitCat", array()));
                // line 104
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 105
            echo "                    <tr>
                        <td colspan=\"3\"><strong>Totais:</strong></td>
                        <td><strong>";
            // line 107
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["totalDog"]) ? $context["totalDog"] : $this->getContext($context, "totalDog")), 0, ".", "."), "html", null, true);
            echo "</strong></td>
                        <td><strong>";
            // line 108
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["totalCat"]) ? $context["totalCat"] : $this->getContext($context, "totalCat")), 0, ".", "."), "html", null, true);
            echo "</strong></td>
                        <td>&nbsp;</td>
                    </tr>
                </tbody>
            </table>
        ";
        } else {
            // line 114
            echo "            <p>
                <b>Nenhuma solicitação encontrada.</b>
            </p>
        ";
        }
        // line 118
        echo "
        <a href=\"";
        // line 119
        echo $this->env->getExtension('routing')->getPath("adm_kit_puppy_kit");
        echo "\" class=\"btn btn-primary\">Voltar</a>

    </div>
</div>

";
        
        $__internal_4939b1dc0a12d06519d2761dcd16b08b40e64cfd421734f05f78d89d07e6bb3e->leave($__internal_4939b1dc0a12d06519d2761dcd16b08b40e64cfd421734f05f78d89d07e6bb3e_prof);

    }

    public function getTemplateName()
    {
        return "Admin/request-kit-issue-detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 119,  258 => 118,  252 => 114,  243 => 108,  239 => 107,  235 => 105,  229 => 104,  226 => 103,  224 => 102,  216 => 97,  207 => 93,  195 => 88,  188 => 84,  182 => 81,  177 => 79,  173 => 78,  169 => 77,  166 => 76,  161 => 75,  158 => 74,  156 => 73,  142 => 61,  140 => 60,  137 => 59,  133 => 57,  127 => 53,  121 => 51,  119 => 50,  116 => 49,  110 => 47,  108 => 46,  102 => 42,  100 => 41,  97 => 40,  93 => 38,  87 => 36,  85 => 35,  82 => 34,  78 => 32,  72 => 30,  70 => 29,  67 => 28,  65 => 27,  40 => 4,  34 => 3,  11 => 1,);
    }
}
