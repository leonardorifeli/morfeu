<?php

/* Admin/request-kit-issue.html.twig */
class __TwigTemplate_a418c841438f782f1a3d16c38da2c463a5fe2fb9a5aa4fd0b2414433561ebb53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Admin/Extends/base.html.twig", "Admin/request-kit-issue.html.twig", 1);
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
        $__internal_2f7a124bd180c1ede1745aff7c1b98057deb98fd56e5eef2ee63020a5477185a = $this->env->getExtension("native_profiler");
        $__internal_2f7a124bd180c1ede1745aff7c1b98057deb98fd56e5eef2ee63020a5477185a->enter($__internal_2f7a124bd180c1ede1745aff7c1b98057deb98fd56e5eef2ee63020a5477185a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/request-kit-issue.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f7a124bd180c1ede1745aff7c1b98057deb98fd56e5eef2ee63020a5477185a->leave($__internal_2f7a124bd180c1ede1745aff7c1b98057deb98fd56e5eef2ee63020a5477185a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_379e4d6806e89f551fc6b097803d23e26227f57565d5e59e65cf11803152a5e7 = $this->env->getExtension("native_profiler");
        $__internal_379e4d6806e89f551fc6b097803d23e26227f57565d5e59e65cf11803152a5e7->enter($__internal_379e4d6806e89f551fc6b097803d23e26227f57565d5e59e65cf11803152a5e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                echo "                <p>CDRC: Todos</p>
            ";
            }
            // line 34
            echo "
            ";
            // line 35
            if ((array_key_exists("cinotecnico", $context) &&  !(null === (isset($context["cinotecnico"]) ? $context["cinotecnico"] : $this->getContext($context, "cinotecnico"))))) {
                // line 36
                echo "                <p>Felinocinotécnico: ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cinotecnico"]) ? $context["cinotecnico"] : $this->getContext($context, "cinotecnico")), "name", array()), "html", null, true);
                echo " </p>
            ";
            } else {
                // line 38
                echo "                <p>Felinocinotécnico: Todos</p>
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
            echo "            <form action=\"";
            echo $this->env->getExtension('routing')->getPath("adm_kit_puppy_kit_issue_send");
            echo "\" method=\"post\">
                <input name=\"dateTo\" type=\"hidden\" value=\"";
            // line 62
            if (($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "dateTo", array(), "any", true, true) &&  !(null === $this->getAttribute((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")), "dateTo", array())))) {
                echo " ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")), "dateTo", array()), "d/m/Y"), "html", null, true);
                echo " ";
            }
            echo "\" />
                <input name=\"dateFrom\" type=\"hidden\" value=\"";
            // line 63
            if (($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "dateFrom", array(), "any", true, true) &&  !(null === $this->getAttribute((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")), "dateFrom", array())))) {
                echo " ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")), "dateFrom", array()), "d/m/Y"), "html", null, true);
                echo " ";
            }
            echo "\" />

                <table class=\"table table-bordered table-striped table-condensed\" cellpadding=\"2\" cellspacing=\"0\">
                    <thead>
                        <tr>
                            <th>CDRC</th>
                            <th>Felinocinotécnico</th>
                            <th>Kit Cão</th>
                            <th>Kit Gato</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
            // line 75
            $context["totalDog"] = 0;
            // line 76
            echo "                        ";
            $context["totalCat"] = 0;
            // line 77
            echo "                        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["request_kit"]) ? $context["request_kit"] : $this->getContext($context, "request_kit")));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 78
                echo "                        <input type='hidden' name=\"kit_cinotecnico[]\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "cinotecnico", array()), "id", array()), "html", null, true);
                echo "\" />
                        <tr>
                            <td>";
                // line 80
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "distributor", array()), "name", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 81
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "cinotecnico", array()), "name", array()), "html", null, true);
                echo "</td>
                            <td>
                                <input type='number' onkeypress=\"return onlyNumber(event);\" class=\"only-number\" min=\"0\" name=\"kit_dog[]\" value=\"";
                // line 83
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "amountKitDog", array()), "html", null, true);
                echo "\" />
                            </td>
                            <td>
                                <input type='number' onkeypress=\"return onlyNumber(event);\" class=\"only-number\" min=\"0\" name=\"kit_cat[]\" value=\"";
                // line 86
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "amountKitCat", array()), "html", null, true);
                echo "\" />
                            </td>
                        </tr>
                        ";
                // line 89
                $context["totalDog"] = ((isset($context["totalDog"]) ? $context["totalDog"] : $this->getContext($context, "totalDog")) + $this->getAttribute($context["entity"], "amountKitDog", array()));
                // line 90
                echo "                        ";
                $context["totalCat"] = ((isset($context["totalCat"]) ? $context["totalCat"] : $this->getContext($context, "totalCat")) + $this->getAttribute($context["entity"], "amountKitCat", array()));
                // line 91
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "                        <tr>
                            <td colspan=\"2\"><strong>Totais:</strong></td>
                            <td><strong>";
            // line 94
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["totalDog"]) ? $context["totalDog"] : $this->getContext($context, "totalDog")), 0, ".", "."), "html", null, true);
            echo "</strong></td>
                            <td><strong>";
            // line 95
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["totalCat"]) ? $context["totalCat"] : $this->getContext($context, "totalCat")), 0, ".", "."), "html", null, true);
            echo "</strong></td>
                        </tr>
                    </tbody>
                </table>
                <a href=\"";
            // line 99
            echo $this->env->getExtension('routing')->getPath("adm_kit_puppy_kit");
            echo "\" class=\"btn btn-primary\">Voltar</a>
                <button name=\"\" class=\"btn btn-success\" onclick=\"return confirm('Tem certeza que deseja expedir?');\">Expedir</button>
            </form>
        ";
        } else {
            // line 103
            echo "            <p>Nenhuma solicitação encontrada.</p>
        ";
        }
        // line 105
        echo "
    </div>
</div>

";
        
        $__internal_379e4d6806e89f551fc6b097803d23e26227f57565d5e59e65cf11803152a5e7->leave($__internal_379e4d6806e89f551fc6b097803d23e26227f57565d5e59e65cf11803152a5e7_prof);

    }

    public function getTemplateName()
    {
        return "Admin/request-kit-issue.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 105,  244 => 103,  237 => 99,  230 => 95,  226 => 94,  222 => 92,  216 => 91,  213 => 90,  211 => 89,  205 => 86,  199 => 83,  194 => 81,  190 => 80,  184 => 78,  179 => 77,  176 => 76,  174 => 75,  155 => 63,  147 => 62,  142 => 61,  140 => 60,  137 => 59,  133 => 57,  127 => 53,  121 => 51,  119 => 50,  116 => 49,  110 => 47,  108 => 46,  102 => 42,  100 => 41,  97 => 40,  93 => 38,  87 => 36,  85 => 35,  82 => 34,  78 => 32,  72 => 30,  70 => 29,  67 => 28,  65 => 27,  40 => 4,  34 => 3,  11 => 1,);
    }
}
