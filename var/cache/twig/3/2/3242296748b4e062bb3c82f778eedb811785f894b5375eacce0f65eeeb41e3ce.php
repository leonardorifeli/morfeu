<?php

/* Admin/request-kit.html.twig */
class __TwigTemplate_3242296748b4e062bb3c82f778eedb811785f894b5375eacce0f65eeeb41e3ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Admin/Extends/base.html.twig", "Admin/request-kit.html.twig", 1);
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
        $__internal_b0c9f4e7bb78ca3fc13320d3a417203a8202f5c3984037a2159057aaf58c4382 = $this->env->getExtension("native_profiler");
        $__internal_b0c9f4e7bb78ca3fc13320d3a417203a8202f5c3984037a2159057aaf58c4382->enter($__internal_b0c9f4e7bb78ca3fc13320d3a417203a8202f5c3984037a2159057aaf58c4382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/request-kit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0c9f4e7bb78ca3fc13320d3a417203a8202f5c3984037a2159057aaf58c4382->leave($__internal_b0c9f4e7bb78ca3fc13320d3a417203a8202f5c3984037a2159057aaf58c4382_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a0f6b90aca6537962a0e17dc351adbeaecbec3d13fa098d129a53a6654055a57 = $this->env->getExtension("native_profiler");
        $__internal_a0f6b90aca6537962a0e17dc351adbeaecbec3d13fa098d129a53a6654055a57->enter($__internal_a0f6b90aca6537962a0e17dc351adbeaecbec3d13fa098d129a53a6654055a57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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

        ";
        // line 25
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

        <div style=\"clear:both\"></div>

        ";
        // line 29
        if ((array_key_exists("request_kit", $context) &&  !twig_test_empty((isset($context["request_kit"]) ? $context["request_kit"] : $this->getContext($context, "request_kit"))))) {
            // line 30
            echo "        <p>Total de registros: <strong>";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["request_kit"]) ? $context["request_kit"] : $this->getContext($context, "request_kit"))), "html", null, true);
            echo "</strong></p>
        <table class=\"table table-bordered table-striped table-condensed\" cellpadding=\"2\" cellspacing=\"0\">
            <thead>
                <tr>
                    <th>CDRC</th>
                    <th>Felinocinotécnico</th>
                    <th>Kit Cão</th>
                    <th>Kit Gato</th>
                    <th>Ações</th>
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
            $context['_seq'] = twig_ensure_traversable((isset($context["request_kit"]) ? $context["request_kit"] : $this->getContext($context, "request_kit")));
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
                        <a href=\"#\" class=\"btn btn-success kit-issue-action\" action=\"";
                // line 55
                echo $this->env->getExtension('routing')->getPath("adm_kit_puppy_kit_issue");
                echo "\" select-cinotecnico=\".select-cinotecnico\" select-distributor=\"#requestKitReportFilter_distributor\" cinotecnico=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "cinotecnico", array()), "id", array()), "html", null, true);
                echo "\" form=\"#filter-form\">Expedir</a>
                        <a href=\"#\" class=\"btn btn-primary kit-issue-action\" action=\"";
                // line 56
                echo $this->env->getExtension('routing')->getPath("adm_kit_puppy_kit_detail");
                echo "\" select-cinotecnico=\".select-cinotecnico\" select-distributor=\"#requestKitReportFilter_distributor\" cinotecnico=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "cinotecnico", array()), "id", array()), "html", null, true);
                echo "\" form=\"#filter-form\">Detalhar</a>
                    </td>
                </tr>
                ";
                // line 59
                $context["totalDog"] = ((isset($context["totalDog"]) ? $context["totalDog"] : $this->getContext($context, "totalDog")) + $this->getAttribute($context["entity"], "amountKitDog", array()));
                // line 60
                echo "                ";
                $context["totalCat"] = ((isset($context["totalCat"]) ? $context["totalCat"] : $this->getContext($context, "totalCat")) + $this->getAttribute($context["entity"], "amountKitCat", array()));
                // line 61
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "                <tr>
                    <td colspan=\"2\"><strong>Totais:</strong></td>
                    <td><strong>";
            // line 64
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["totalDog"]) ? $context["totalDog"] : $this->getContext($context, "totalDog")), 0, ".", "."), "html", null, true);
            echo "</strong></td>
                    <td><strong>";
            // line 65
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["totalCat"]) ? $context["totalCat"] : $this->getContext($context, "totalCat")), 0, ".", "."), "html", null, true);
            echo "</strong></td>
                    <td>&nbsp;</td>
                </tr>
            </tbody>
        </table>

        <a href=\"#\" class=\"btn btn-success kit-issue-action\" action=\"";
            // line 71
            echo $this->env->getExtension('routing')->getPath("adm_kit_puppy_kit_issue");
            echo "\" select-cinotecnico=\".select-cinotecnico\" select-distributor=\"#requestKitReportFilter_distributor\" cinotecnico=\"\" form=\"#filter-form\">Expedir todos</a>

        ";
        } else {
            // line 74
            echo "        <p>
            <strong>Nenhuma solicitação encontrada.</strong>
        </p>
        ";
        }
        // line 78
        echo "    </div>
</div>

";
        
        $__internal_a0f6b90aca6537962a0e17dc351adbeaecbec3d13fa098d129a53a6654055a57->leave($__internal_a0f6b90aca6537962a0e17dc351adbeaecbec3d13fa098d129a53a6654055a57_prof);

    }

    public function getTemplateName()
    {
        return "Admin/request-kit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 78,  170 => 74,  164 => 71,  155 => 65,  151 => 64,  147 => 62,  141 => 61,  138 => 60,  136 => 59,  128 => 56,  122 => 55,  116 => 52,  110 => 49,  105 => 47,  101 => 46,  98 => 45,  93 => 44,  90 => 43,  88 => 42,  72 => 30,  70 => 29,  63 => 25,  40 => 4,  34 => 3,  11 => 1,);
    }
}
