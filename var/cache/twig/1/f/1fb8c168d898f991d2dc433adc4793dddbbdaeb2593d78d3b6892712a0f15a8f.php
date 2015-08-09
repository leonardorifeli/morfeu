<?php

/* Admin/Extends/base.html.twig */
class __TwigTemplate_1fb8c168d898f991d2dc433adc4793dddbbdaeb2593d78d3b6892712a0f15a8f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_de4da60c691da5b7ba1f174404ae1c3f8b8874d955c0e7f012817f95249a2ebe = $this->env->getExtension("native_profiler");
        $__internal_de4da60c691da5b7ba1f174404ae1c3f8b8874d955c0e7f012817f95249a2ebe->enter($__internal_de4da60c691da5b7ba1f174404ae1c3f8b8874d955c0e7f012817f95249a2ebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/Extends/base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\"/>
    <title>Royal Canin - Administração - Cinotécnicos</title>

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"Royal Canin - Administração - Cinotécnicos\">
    <meta name=\"author\" content=\"WAB\">

    ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 48
        echo "
</head>
<body>

    <div class=\"navbar\">
        <div class=\"navbar-inner\">
            <div class=\"container-fluid\">
                <a class=\"btn btn-navbar\" data-toggle=\"collapse\"
                data-target=\".top-nav.nav-collapse,.sidebar-nav.nav-collapse\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </a>

            <a href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "asset_path", array()), "html", null, true);
        echo "/adm/js/project_homepage\">
                <img src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "asset_path", array()), "html", null, true);
        echo "/adm/img/img-logo-royal.png\" title=\"Royal Canin\" alt=\"Royal Canin\">
            </a>

        </div>
    </div>
</div>



<div class=\"container-fluid\">
    <div class=\"row-fluid\">

        ";
        // line 75
        if ( !array_key_exists("not_menu", $context)) {
            // line 76
            echo "        <div class=\"span2 main-menu-span\">
            <div class=\"well nav-collapse sidebar-nav\">";
            // line 79
            $this->loadTemplate("Admin/Extends/menu.html.twig", "Admin/Extends/base.html.twig", 79)->display($context);
            // line 80
            echo "

            </div>
        </div>
        ";
        }
        // line 85
        echo "
        <div id=\"content\" ";
        // line 86
        if ( !array_key_exists("not_menu", $context)) {
            echo " class=\"span10\" ";
        } else {
            echo " class=\"span12\" ";
        }
        echo ">
            ";
        // line 87
        $this->displayBlock('body', $context, $blocks);
        // line 89
        echo "        </div>

    </div>

    <footer>

        <hr/>

        <p class=\"pull-left\">&copy; <a href=\"http://wab.com.br/\" target=\"_blank\">Wab</a> <?php echo date('Y'); ?> - Todos os direitos reservados</p>

        <p class=\"pull-right\">Powered by: <a href=\"http://wab.com.br/\" target=\"_blank\">wab.com.br</a></p>
    </footer>

</div>


<div class=\"modal hide fade\" id=\"SubForm\">
    <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">×</button>
        <h3>Settings</h3>
    </div>
    <div class=\"modal-body\">

    </div>
    <div class=\"modal-footer\">
        <a href=\"#\" class=\"btn\" data-dismiss=\"modal\">Fechar</a>
    </div>
</div>


<div class=\"modal hide fade\" id=\"main-loading\">
    <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">×</button>
        <h3>Carregando Dados</h3>
    </div>
    <div class=\"modal-body\">

        <div class=\"loading-info\">
            <img src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "asset_path", array()), "html", null, true);
        echo "/adm/img/main-load.gif\" alt=\"Carregando Dados\">
        </div>
    </div>
    <div class=\"modal-footer\">
        <a href=\"#\" class=\"btn\" data-dismiss=\"modal\">Fechar</a>
    </div>
</div>

";
        // line 135
        $this->displayBlock('javascripts', $context, $blocks);
        // line 186
        echo "

</html>
";
        
        $__internal_de4da60c691da5b7ba1f174404ae1c3f8b8874d955c0e7f012817f95249a2ebe->leave($__internal_de4da60c691da5b7ba1f174404ae1c3f8b8874d955c0e7f012817f95249a2ebe_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6e610a2b08699eb1427045d623ff6b663a176172f1221fc95080aacdc3474576 = $this->env->getExtension("native_profiler");
        $__internal_6e610a2b08699eb1427045d623ff6b663a176172f1221fc95080aacdc3474576->enter($__internal_6e610a2b08699eb1427045d623ff6b663a176172f1221fc95080aacdc3474576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"favicon.ico\"/>
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "asset_path", array()), "html", null, true);
        echo "/adm/css/bootstrap-spacelab.css\" rel=\"stylesheet\">

    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "asset_path", array()), "html", null, true);
        echo "/adm/css/bootstrap-responsive.css\" rel=\"stylesheet\">
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "asset_path", array()), "html", null, true);
        echo "/adm/css/charisma-app.css\" rel=\"stylesheet\">
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "asset_path", array()), "html", null, true);
        echo "/adm/css/jquery-ui-1.8.21.custom.css\" rel=\"stylesheet\">
    <link href='";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "asset_path", array()), "html", null, true);
        echo "/adm/css/fullcalendar.css' rel='stylesheet'>
    <link href='";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "asset_path", array()), "html", null, true);
        echo "/adm/css/fullcalendar.print.css' rel='stylesheet' media='print'>
    <link href='";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "asset_path", array()), "html", null, true);
        echo "/adm/css/chosen.css' rel='stylesheet'>
    <link href='";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "asset_path", array()), "html", null, true);
        echo "/adm/css/uniform.default.css' rel='stylesheet'>
    <link href='";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "asset_path", array()), "html", null, true);
        echo "/adm/css/colorbox.css' rel='stylesheet'>
    <link href='";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "asset_path", array()), "html", null, true);
        echo "/adm/css/jquery.cleditor.css' rel='stylesheet'>
    <link href='";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "asset_path", array()), "html", null, true);
        echo "/adm/css/jquery.noty.css' rel='stylesheet'>
    <link href='";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "asset_path", array()), "html", null, true);
        echo "/adm/css/noty_theme_default.css' rel='stylesheet'>
    <link href='";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "asset_path", array()), "html", null, true);
        echo "/adm/css/elfinder.min.css' rel='stylesheet'>
    <link href='";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "asset_path", array()), "html", null, true);
        echo "/adm/css/elfinder.theme.css' rel='stylesheet'>
    <link href='";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "asset_path", array()), "html", null, true);
        echo "/adm/css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "asset_path", array()), "html", null, true);
        echo "/adm/css/opa-icons.css' rel='stylesheet'>
    <link href='";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "asset_path", array()), "html", null, true);
        echo "/adm/css/uploadify.css' rel='stylesheet'>
    <link href='";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "asset_path", array()), "html", null, true);
        echo "/adm/css/jquery-ui-timepicker-addon.css' rel='stylesheet'>
    <link href='";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "asset_path", array()), "html", null, true);
        echo "/adm/css/custom.css' rel='stylesheet'>
    <link href='";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "asset_path", array()), "html", null, true);
        echo "/adm/css/print.css' rel='stylesheet'>
    <style type=\"text/css\">
    body {
        padding-bottom: 40px;
    }

    .sidebar-nav {
        padding: 9px 0;
    }

    .importantRule{
        display:none !important;
    }
    </style>
    ";
        
        $__internal_6e610a2b08699eb1427045d623ff6b663a176172f1221fc95080aacdc3474576->leave($__internal_6e610a2b08699eb1427045d623ff6b663a176172f1221fc95080aacdc3474576_prof);

    }

    // line 87
    public function block_body($context, array $blocks = array())
    {
        $__internal_40b200439a536996a46554fde78edfc43de5486ef228f8302235fe7872475a72 = $this->env->getExtension("native_profiler");
        $__internal_40b200439a536996a46554fde78edfc43de5486ef228f8302235fe7872475a72->enter($__internal_40b200439a536996a46554fde78edfc43de5486ef228f8302235fe7872475a72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 88
        echo "            ";
        
        $__internal_40b200439a536996a46554fde78edfc43de5486ef228f8302235fe7872475a72->leave($__internal_40b200439a536996a46554fde78edfc43de5486ef228f8302235fe7872475a72_prof);

    }

    // line 135
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4ef1d6797740bc25d941ad759910c931acbb52448f227baa6c6698ad01d506e6 = $this->env->getExtension("native_profiler");
        $__internal_4ef1d6797740bc25d941ad759910c931acbb52448f227baa6c6698ad01d506e6->enter($__internal_4ef1d6797740bc25d941ad759910c931acbb52448f227baa6c6698ad01d506e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 136
        echo "<!--[if lt IE 9]>
<script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
<![endif]-->
<script src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "asset_path", array()), "html", null, true);
        echo "/adm/js/jquery.js\"></script>
<script src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "asset_path", array()), "html", null, true);
        echo "/adm/js/jquery-ui.min.js\"></script>
<script src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "asset_path", array()), "html", null, true);
        echo "/adm/js/bootstrap-transition.js\"></script>
<script src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "asset_path", array()), "html", null, true);
        echo "/adm/js/bootstrap-alert.js\"></script>
<script src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "asset_path", array()), "html", null, true);
        echo "/adm/js/bootstrap-modal.js\"></script>
<script src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "asset_path", array()), "html", null, true);
        echo "/adm/js/bootstrap-dropdown.js\"></script>
<script src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "asset_path", array()), "html", null, true);
        echo "/adm/js/bootstrap-scrollspy.js\"></script>
<script src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "asset_path", array()), "html", null, true);
        echo "/adm/js/bootstrap-tab.js\"></script>
<script src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "asset_path", array()), "html", null, true);
        echo "/adm/js/bootstrap-tooltip.js\"></script>
<script src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "asset_path", array()), "html", null, true);
        echo "/adm/js/bootstrap-popover.js\"></script>
<script src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "asset_path", array()), "html", null, true);
        echo "/adm/js/bootstrap-button.js\"></script>
<script src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "asset_path", array()), "html", null, true);
        echo "/adm/js/bootstrap-collapse.js\"></script>
<script src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "asset_path", array()), "html", null, true);
        echo "/adm/js/bootstrap-carousel.js\"></script>
<script src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "asset_path", array()), "html", null, true);
        echo "/adm/js/bootstrap-typeahead.js\"></script>
<script src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "asset_path", array()), "html", null, true);
        echo "/adm/js/bootstrap-tour.js\"></script>
<script src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "asset_path", array()), "html", null, true);
        echo "/adm/js/jquery.cookie.js\"></script>
<script src='";
        // line 155
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "asset_path", array()), "html", null, true);
        echo "/adm/js/jquery.dataTables.min.js'></script>

<!-- chart libraries start -->
<script src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "asset_path", array()), "html", null, true);
        echo "/adm/js/excanvas.js\"></script>
<script src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "asset_path", array()), "html", null, true);
        echo "/adm/js/jquery.flot.js\"></script>
<script src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "asset_path", array()), "html", null, true);
        echo "/adm/js/jquery.flot.pie.min.js\"></script>
<script src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "asset_path", array()), "html", null, true);
        echo "/adm/js/jquery.flot.stack.js\"></script>
<script src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "asset_path", array()), "html", null, true);
        echo "/adm/js/jquery.flot.resize.min.js\"></script>
<script src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "asset_path", array()), "html", null, true);
        echo "/adm/js/jquery.flot.categories.js\"></script>

<script src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "asset_path", array()), "html", null, true);
        echo "/adm/js/jquery.chosen.min.js\"></script>
<script src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "asset_path", array()), "html", null, true);
        echo "/adm/js/jquery.uniform.min.js\"></script>
<script src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "asset_path", array()), "html", null, true);
        echo "/adm/js/jquery.colorbox.min.js\"></script>
<script src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "asset_path", array()), "html", null, true);
        echo "/adm/js/jquery.cleditor.min.js\"></script>
<script src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "asset_path", array()), "html", null, true);
        echo "/adm/js/jquery.noty.js\"></script>
<script src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "asset_path", array()), "html", null, true);
        echo "/adm/js/jquery.elfinder.min.js\"></script>
<script src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "asset_path", array()), "html", null, true);
        echo "/adm/js/jquery.raty.min.js\"></script>
<script src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "asset_path", array()), "html", null, true);
        echo "/adm/js/jquery.iphone.toggle.js\"></script>
<script src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "asset_path", array()), "html", null, true);
        echo "/adm/js/jquery.autogrow-textarea.js\"></script>
<script src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "asset_path", array()), "html", null, true);
        echo "/adm/js/jquery.uploadify-3.1.min.js\"></script>
<script src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "asset_path", array()), "html", null, true);
        echo "/adm/js/jquery.history.js\"></script>
<script src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "asset_path", array()), "html", null, true);
        echo "/adm/js/jquery.form.min.js\"></script>
<script src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "asset_path", array()), "html", null, true);
        echo "/adm/js/jquery-ui-timepicker-addon.js\"></script>
<script src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "asset_path", array()), "html", null, true);
        echo "/adm/js/autoNumeric-1.9.27.js\" type=\"text/javascript\"></script>
<script src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "asset_path", array()), "html", null, true);
        echo "/adm/js/charisma.js\"></script>
<script src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "asset_path", array()), "html", null, true);
        echo "/adm/js/summaryday.js\"></script>
<script src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "asset_path", array()), "html", null, true);
        echo "/adm/js/dashboard.js\"></script>
<script src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "asset_path", array()), "html", null, true);
        echo "/adm/js/kkcountdown.js\" type=\"text/javascript\"></script>
<script src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "asset_path", array()), "html", null, true);
        echo "/adm/js/development-proposal.js\" type=\"text/javascript\"></script>
<script src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "asset_path", array()), "html", null, true);
        echo "/js/system.js\" type=\"text/javascript\"></script>
";
        
        $__internal_4ef1d6797740bc25d941ad759910c931acbb52448f227baa6c6698ad01d506e6->leave($__internal_4ef1d6797740bc25d941ad759910c931acbb52448f227baa6c6698ad01d506e6_prof);

    }

    public function getTemplateName()
    {
        return "Admin/Extends/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  467 => 184,  463 => 183,  459 => 182,  455 => 181,  451 => 180,  447 => 179,  443 => 178,  439 => 177,  435 => 176,  431 => 175,  427 => 174,  423 => 173,  419 => 172,  415 => 171,  411 => 170,  407 => 169,  403 => 168,  399 => 167,  395 => 166,  391 => 165,  386 => 163,  382 => 162,  378 => 161,  374 => 160,  370 => 159,  366 => 158,  360 => 155,  356 => 154,  352 => 153,  348 => 152,  344 => 151,  340 => 150,  336 => 149,  332 => 148,  328 => 147,  324 => 146,  320 => 145,  316 => 144,  312 => 143,  308 => 142,  304 => 141,  300 => 140,  296 => 139,  291 => 136,  285 => 135,  278 => 88,  272 => 87,  250 => 33,  246 => 32,  242 => 31,  238 => 30,  234 => 29,  230 => 28,  226 => 27,  222 => 26,  218 => 25,  214 => 24,  210 => 23,  206 => 22,  202 => 21,  198 => 20,  194 => 19,  190 => 18,  186 => 17,  182 => 16,  178 => 15,  173 => 13,  170 => 12,  164 => 11,  154 => 186,  152 => 135,  141 => 127,  101 => 89,  99 => 87,  91 => 86,  88 => 85,  81 => 80,  79 => 79,  76 => 76,  74 => 75,  59 => 63,  55 => 62,  39 => 48,  37 => 11,  25 => 1,);
    }
}
