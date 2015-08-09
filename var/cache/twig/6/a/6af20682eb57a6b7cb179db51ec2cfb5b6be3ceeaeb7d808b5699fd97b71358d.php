<?php

/* adoption-kit.html.twig */
class __TwigTemplate_6af20682eb57a6b7cb179db51ec2cfb5b6be3ceeaeb7d808b5699fd97b71358d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("Extends/base.html.twig", "adoption-kit.html.twig", 2);
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
        $__internal_592f9b7e0efb5d90ae94d1e4e09e41beeff22c38ce4cb05ef61539962d439853 = $this->env->getExtension("native_profiler");
        $__internal_592f9b7e0efb5d90ae94d1e4e09e41beeff22c38ce4cb05ef61539962d439853->enter($__internal_592f9b7e0efb5d90ae94d1e4e09e41beeff22c38ce4cb05ef61539962d439853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "adoption-kit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_592f9b7e0efb5d90ae94d1e4e09e41beeff22c38ce4cb05ef61539962d439853->leave($__internal_592f9b7e0efb5d90ae94d1e4e09e41beeff22c38ce4cb05ef61539962d439853_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_90b3c7143b18fe86bfe8d9c96cbed833b4ac44b12257a0f361b8d82d76fa1508 = $this->env->getExtension("native_profiler");
        $__internal_90b3c7143b18fe86bfe8d9c96cbed833b4ac44b12257a0f361b8d82d76fa1508->enter($__internal_90b3c7143b18fe86bfe8d9c96cbed833b4ac44b12257a0f361b8d82d76fa1508_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<h1>Kit Adoção</h1>

<ul class=\"menu-informations-kit\">
    <li>
        <a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("puppy_kit");
        echo "\">
            <strong>Solicitar Kit FIlhote</strong>
        </a>
    </li>

    <li>
        <a class=\"menu-active\" href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("adoption_kit");
        echo "\">
            <strong>Solicitar Kit Adoção</strong>
        </a>
    </li>

    <li>
        <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("kit_my_order");
        echo "\">
            <strong>Meus Pedidos</strong>
        </a>
    </li>
</ul>

";
        // line 27
        if ((array_key_exists("success", $context) && ((isset($context["success"]) ? $context["success"] : $this->getContext($context, "success")) == 1))) {
            // line 28
            echo "<div class=\"row\">
    <div class=\"twelve columns\">
        <div class=\"alert alert-success\">
            <strong>Kit Adoção</strong> solicitado com sucesso.
        </div>
    </div>
</div>
";
        }
        // line 36
        echo "
";
        // line 37
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

<div class=\"row\">
    <div class=\"twelve columns\">
        ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user", array()), 'label', array("label_attr" => array("class" => ""), "label" => "Nome da ONG: "));
        echo "
    </div>
</div>
<div class=\"row\">
    <div class=\"twelve columns\">
        ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user", array()), 'widget', array("attr" => array("class" => "u-full-width group")));
        echo "
        ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user", array()), 'errors');
        echo "
    </div>
</div>

<div class=\"breeds\">

    <div class=\"row\">
        <div class=\"twelve columns\">
            <h2>Raças:</h2>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"two columns\">
            <label class=\"required\" for=\"puppyKitBreed_amountPuppy\">Qtd de filhotes:</label>
            <input type=\"number\" min=\"1\" class=\"u-full-width only-number\" name=\"puppyKitQuantity\" id=\"puppyKitQuantity\">
            <input type=\"hidden\" class=\"u-full-width only-number\" value=\"1\" name=\"typeToInsert\" id=\"typeToInsert\">
        </div>

        <div class=\"ten columns\">
            <label class=\"required\" for=\"puppyKitBreed_typeAnimal\">Tipo:</label>
            <select name=\"puppyKitType\" id=\"puppyKitType\" select-description=\"Selecione um porte\" select-output=\".sizeAnimalSelect\" source-json=\"size-animal/select\" class=\"TypeAnimalSelect dependent-select u-full-width\">
                <option selected=\"selected\" value=\"\">Selecione</option>
                ";
        // line 70
        if ((array_key_exists("type_animal", $context) &&  !(null === (isset($context["type_animal"]) ? $context["type_animal"] : $this->getContext($context, "type_animal"))))) {
            // line 71
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["type_animal"]) ? $context["type_animal"] : $this->getContext($context, "type_animal")));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 72
                echo "                <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
                echo "\" name=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "typeAnimal", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "typeAnimal", array()), "html", null, true);
                echo "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "                ";
        }
        // line 75
        echo "            </select>
        </div>

        <div class=\"twelve columns\">
            <label class=\"required\" for=\"puppyKitBreed_breedAnimal\">Porte:</label>
            <select class=\"sizeAnimalSelect u-full-width\" name=\"puppyKitBreed\" id=\"puppyKitBreed\">
            </select>
        </div>

    </div>

    <div class=\"row\">
        <div class=\"twelve column\">
            <button class=\"button-primary\" name=\"\" id=\"addBreed\" type=\"submit\">Adicionar</button>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"breedSelectedError error twelve columns\"></div>
        <div class=\"breedSelected twelve columns\"></div>
    </div>

</div>


<div class=\"row\">
    <div class=\"twelve columns\">
        <h2>Quantidade de Kits:</h2>
    </div>
</div>

<div class=\"row\">
    <div class=\"six columns\">
        ";
        // line 108
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "kitDog", array()), 'label', array("label" => "Kit Cão:"));
        echo "
        ";
        // line 109
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "kitDog", array()), 'widget', array("attr" => array("class" => "u-full-width countDog only-number")));
        echo "
        ";
        // line 110
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "kitDog", array()), 'errors');
        echo "
    </div>

    <div class=\"six columns\">
        ";
        // line 114
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "kitCat", array()), 'label', array("label" => "Kit gato:"));
        echo "
        ";
        // line 115
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "kitCat", array()), 'widget', array("attr" => array("class" => "u-full-width countCat only-number")));
        echo "
        ";
        // line 116
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "kitCat", array()), 'errors');
        echo "
    </div>
</div>

<div class=\"row\">
    <div class=\"twelve columns\">
        <br/>
        <p class=\"error\" style=\"text-align: right; margin-bottom: 5px;\">
            Total de kits adoção: <span class=\"quantityKit\">0</span>
        </p>
    </div>
</div>

<div class=\"row\">
    <div class=\"twelve columns\">
        <p class=\"error-kit error\" style=\"text-align: right; margin-bottom: 5px;\"></p>
    </div>
</div>

<div class=\"row\">
    <div class=\"twelve columns\">
        ";
        // line 137
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "btn", array()), 'widget');
        echo "
    </div>
</div>

";
        // line 141
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "


";
        
        $__internal_90b3c7143b18fe86bfe8d9c96cbed833b4ac44b12257a0f361b8d82d76fa1508->leave($__internal_90b3c7143b18fe86bfe8d9c96cbed833b4ac44b12257a0f361b8d82d76fa1508_prof);

    }

    public function getTemplateName()
    {
        return "adoption-kit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 141,  238 => 137,  214 => 116,  210 => 115,  206 => 114,  199 => 110,  195 => 109,  191 => 108,  156 => 75,  153 => 74,  140 => 72,  135 => 71,  133 => 70,  107 => 47,  103 => 46,  95 => 41,  88 => 37,  85 => 36,  75 => 28,  73 => 27,  64 => 21,  55 => 15,  46 => 9,  40 => 5,  34 => 4,  11 => 2,);
    }
}
