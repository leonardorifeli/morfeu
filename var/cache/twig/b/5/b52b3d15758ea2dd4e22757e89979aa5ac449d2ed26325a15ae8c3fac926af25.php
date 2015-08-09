<?php

/* puppy-kit.html.twig */
class __TwigTemplate_b52b3d15758ea2dd4e22757e89979aa5ac449d2ed26325a15ae8c3fac926af25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Extends/base.html.twig", "puppy-kit.html.twig", 1);
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
        $__internal_fc4fa79a7f85de20d9b32c9e010494b33f48329adef4f38c3fe6408be53679f8 = $this->env->getExtension("native_profiler");
        $__internal_fc4fa79a7f85de20d9b32c9e010494b33f48329adef4f38c3fe6408be53679f8->enter($__internal_fc4fa79a7f85de20d9b32c9e010494b33f48329adef4f38c3fe6408be53679f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "puppy-kit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc4fa79a7f85de20d9b32c9e010494b33f48329adef4f38c3fe6408be53679f8->leave($__internal_fc4fa79a7f85de20d9b32c9e010494b33f48329adef4f38c3fe6408be53679f8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d353f47f288534abf06d5ed55a22fff58b1909c72269732f0238e71b0ac80ae6 = $this->env->getExtension("native_profiler");
        $__internal_d353f47f288534abf06d5ed55a22fff58b1909c72269732f0238e71b0ac80ae6->enter($__internal_d353f47f288534abf06d5ed55a22fff58b1909c72269732f0238e71b0ac80ae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Kit Filhote</h1>

<ul class=\"menu-informations-kit\">
    <li>
        <a class=\"menu-active\" href=\"";
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
        <a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("kit_my_order");
        echo "\">
            <strong>Meus Pedidos</strong>
        </a>
    </li>
</ul>

";
        // line 26
        if ((array_key_exists("success", $context) && ((isset($context["success"]) ? $context["success"] : $this->getContext($context, "success")) == 1))) {
            // line 27
            echo "<div class=\"row\">
    <div class=\"twelve columns\">
        <div class=\"alert alert-success\">
            <strong>Kit Filhote</strong> solicitado com sucesso.
        </div>
    </div>
</div>
";
        }
        // line 35
        echo "
";
        // line 36
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

<div class=\"row\">
    <div class=\"twelve columns\">
        ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user", array()), 'label', array("label_attr" => array("class" => ""), "label" => "Nome do Canil/Gatil: "));
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
            <input type=\"number\" class=\"u-full-width only-number\" min=\"1\" name=\"puppyKitQuantity\" id=\"puppyKitQuantity\">
            <input type=\"hidden\" class=\"u-full-width only-number\" value=\"0\" name=\"typeToInsert\" id=\"typeToInsert\">
        </div>

        <div class=\"ten columns\">
            <label class=\"required\" for=\"puppyKitBreed_typeAnimal\">Tipo:</label>
            <select name=\"puppyKitType\" id=\"puppyKitType\" select-description=\"Selecione uma raça\" select-output=\".breedSelect\" source-json=\"breed/select\" class=\"TypeAnimalSelect dependent-select u-full-width\">
                <option selected=\"selected\" value=\"\">Selecione</option>
                ";
        // line 69
        if ((array_key_exists("type_animal", $context) &&  !(null === (isset($context["type_animal"]) ? $context["type_animal"] : $this->getContext($context, "type_animal"))))) {
            // line 70
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["type_animal"]) ? $context["type_animal"] : $this->getContext($context, "type_animal")));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 71
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
            // line 73
            echo "                ";
        }
        // line 74
        echo "            </select>
        </div>

        <div class=\"twelve columns\">
            <label class=\"required\" for=\"puppyKitBreed_breedAnimal\">Raça:</label>
            <select class=\"breedSelect u-full-width\" name=\"puppyKitBreed\" id=\"puppyKitBreed\">
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
        // line 107
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "kitDog", array()), 'label', array("label" => "Kit Cão:"));
        echo "
        ";
        // line 108
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "kitDog", array()), 'widget', array("attr" => array("class" => "u-full-width countDog only-number")));
        echo "
        ";
        // line 109
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "kitDog", array()), 'errors');
        echo "
    </div>

    <div class=\"six columns\">
        ";
        // line 113
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "kitCat", array()), 'label', array("label" => "Kit gato:"));
        echo "
        ";
        // line 114
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "kitCat", array()), 'widget', array("attr" => array("class" => "u-full-width countCat only-number")));
        echo "
        ";
        // line 115
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "kitCat", array()), 'errors');
        echo "
    </div>
</div>

<div class=\"row\">
    <div class=\"twelve columns\">
        <p class=\"error\" style=\"text-align: right; margin-bottom: 5px;\">
            Total de kits filhote: <span class=\"quantityKit\">0</span>
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
        // line 135
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "btn", array()), 'widget');
        echo "
    </div>
</div>

";
        // line 139
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "


";
        
        $__internal_d353f47f288534abf06d5ed55a22fff58b1909c72269732f0238e71b0ac80ae6->leave($__internal_d353f47f288534abf06d5ed55a22fff58b1909c72269732f0238e71b0ac80ae6_prof);

    }

    public function getTemplateName()
    {
        return "puppy-kit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 139,  237 => 135,  214 => 115,  210 => 114,  206 => 113,  199 => 109,  195 => 108,  191 => 107,  156 => 74,  153 => 73,  140 => 71,  135 => 70,  133 => 69,  108 => 47,  104 => 46,  95 => 40,  88 => 36,  85 => 35,  75 => 27,  73 => 26,  64 => 20,  55 => 14,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }
}
