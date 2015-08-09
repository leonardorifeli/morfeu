<?php

/* @WebProfiler/Collector/config.html.twig */
class __TwigTemplate_4a79692739d23c4b3d1b08a6d22e460c6f48825be0ca7fd9bf62c03e38aef457 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/config.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_42da32af19e2708526f64590cf96dd0e37905c6cc4abc1039be32323c5e96db0 = $this->env->getExtension("native_profiler");
        $__internal_42da32af19e2708526f64590cf96dd0e37905c6cc4abc1039be32323c5e96db0->enter($__internal_42da32af19e2708526f64590cf96dd0e37905c6cc4abc1039be32323c5e96db0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/config.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42da32af19e2708526f64590cf96dd0e37905c6cc4abc1039be32323c5e96db0->leave($__internal_42da32af19e2708526f64590cf96dd0e37905c6cc4abc1039be32323c5e96db0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_413ee05c5f21c43ae0afdb1b954285b64806a2620103efae5608490bb77bbc67 = $this->env->getExtension("native_profiler");
        $__internal_413ee05c5f21c43ae0afdb1b954285b64806a2620103efae5608490bb77bbc67->enter($__internal_413ee05c5f21c43ae0afdb1b954285b64806a2620103efae5608490bb77bbc67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        // line 5
        echo "    ";
        ob_start();
        // line 6
        echo "        <a href=\"https://symfony.com/\">
            <svg width=\"26\" height=\"28\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 26 28\" enable-background=\"new 0 0 26 28\" xml:space=\"preserve\"><path fill=\"#010202\" d=\"M13 0C5.8 0 0 5.8 0 13c0 7.2 5.8 13 13 13c7.2 0 13-5.8 13-13C26 5.8 20.2 0 13 0z M20 7.5 c-0.6 0-1-0.3-1-0.9c0-0.2 0-0.4 0.2-0.6c0.1-0.3 0.2-0.3 0.2-0.4c0-0.3-0.5-0.4-0.7-0.4c-2 0.1-2.5 2.7-2.9 4.8l-0.2 1.1 c1.1 0.2 1.9 0 2.4-0.3c0.6-0.4-0.2-0.8-0.1-1.3C18 9.2 18.4 9 18.7 8.9c0.5 0 0.8 0.5 0.8 1c0 0.8-1.1 2-3.3 1.9 c-0.3 0-0.5 0-0.7-0.1L15 14.1c-0.4 1.7-0.9 4.1-2.6 6.2c-1.5 1.8-3.1 2.1-3.8 2.1c-1.3 0-2.1-0.6-2.2-1.6c0-0.9 0.8-1.4 1.3-1.4 c0.7 0 1.2 0.5 1.2 1.1c0 0.5-0.2 0.6-0.4 0.7c-0.1 0.1-0.3 0.2-0.3 0.4c0 0.1 0.1 0.3 0.4 0.3c0.5 0 0.9-0.3 1.2-0.5 c1.3-1 1.7-2.9 2.4-6.2l0.1-0.8c0.2-1.1 0.5-2.3 0.8-3.5c-0.9-0.7-1.4-1.5-2.6-1.8c-0.8-0.2-1.3 0-1.7 0.4C8.4 10 8.6 10.7 9 11.1 l0.7 0.7c0.8 0.9 1.3 1.7 1.1 2.7c-0.3 1.6-2.1 2.8-4.3 2.1c-1.9-0.6-2.2-1.9-2-2.7c0.2-0.6 0.7-0.8 1.2-0.6 c0.5 0.2 0.7 0.8 0.6 1.3c0 0.1 0 0.1-0.1 0.3C6 15 5.9 15.2 5.9 15.3c-0.1 0.4 0.4 0.7 0.8 0.8c0.8 0.3 1.7-0.2 1.9-0.9 c0.2-0.6-0.2-1.1-0.4-1.2l-0.8-0.9c-0.4-0.4-1.2-1.5-0.8-2.8c0.2-0.5 0.5-1 0.9-1.4c1-0.7 2-0.8 3-0.6c1.3 0.4 1.9 1.2 2.8 1.9 c0.5-1.3 1.1-2.6 2-3.8c0.9-1 2-1.7 3.3-1.8C20 4.8 21 5.4 21 6.3C21 6.7 20.8 7.5 20 7.5z\"/></svg>
            <span>
                ";
        // line 9
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "applicationname", array())) {
            // line 10
            echo "                    ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "applicationname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "applicationversion", array()), "html", null, true);
            echo "
                ";
        } elseif ($this->getAttribute(        // line 11
(isset($context["collector"]) ? $context["collector"] : null), "symfonyState", array(), "any", true, true)) {
            // line 12
            echo "                    ";
            if (("unknown" == $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "symfonyState", array()))) {
                // line 13
                echo "<span class=\"sf-toolbar-status sf-toolbar-info-piece-additional\" title=\"Unable to retrieve information about the Symfony version.\">";
            } elseif (("eol" == $this->getAttribute(            // line 14
(isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "symfonyState", array()))) {
                // line 15
                echo "<span class=\"sf-toolbar-status sf-toolbar-status-red\" title=\"This Symfony version will no longer receive security fixes.\">";
            } elseif (("eom" == $this->getAttribute(            // line 16
(isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "symfonyState", array()))) {
                // line 17
                echo "<span class=\"sf-toolbar-status sf-toolbar-status-yellow\" title=\"This Symfony version will only receive security fixes.\">";
            } elseif (("dev" == $this->getAttribute(            // line 18
(isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "symfonyState", array()))) {
                // line 19
                echo "<span class=\"sf-toolbar-status sf-toolbar-status-yellow\" title=\"This Symfony version is still in the development phase.\">";
            } else {
                // line 21
                echo "<span class=\"sf-toolbar-status sf-toolbar-status-green\">";
            }
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "symfonyversion", array()), "html", null, true);
            echo "</span>
                ";
        }
        // line 25
        echo "            </span>
        </a>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 28
        echo "    ";
        ob_start();
        // line 29
        echo "        ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "applicationname", array())) {
            // line 30
            echo "            <div class=\"sf-toolbar-info-piece\">
                ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "applicationname", array()), "html", null, true);
            echo " <b>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "applicationversion", array()), "html", null, true);
            echo "</b>
            </div>
        ";
        }
        // line 34
        echo "        <div class=\"sf-toolbar-info-piece\">
            Symfony <b>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "symfonyversion", array()), "html", null, true);
        echo "</b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <a href=\"https://symfony.com/doc/";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "symfonyversion", array()), "html", null, true);
        echo "/index.html\" rel=\"help\">Symfony Documentation</a>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 41
        echo "    ";
        $this->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig", "@WebProfiler/Collector/config.html.twig", 41)->display(array_merge($context, array("link" => false)));
        // line 42
        echo "
    ";
        // line 44
        echo "    ";
        ob_start();
        // line 45
        echo "        <a href=\"";
        echo $this->env->getExtension('routing')->getPath("_profiler_phpinfo");
        echo "\">
            <svg width=\"26\" height=\"28\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 26 28\" enable-background=\"new 0 0 26 28\" xml:space=\"preserve\"><g><path fill=\"#010202\" d=\"M8 11.5c-0.2-0.1-0.4-0.1-0.7-0.1s-0.5 0-0.8 0c0 0-0.1 0-0.1 0c0 0-0.1 0-0.1 0c0 0-0.1 0-0.1 0 c0 0-0.1 0-0.1 0v0l-0.9 3.3c0 0 0 0 0 0c0 0 0 0 0 0c0 0 0 0 0 0c0 0 0 0 0 0c0 0 0 0 0.1 0c0 0 0.1 0 0.1 0c0.3 0 0.7 0 1 0 c0.3 0 0.6-0.1 0.8-0.2c0.2-0.1 0.4-0.3 0.6-0.5c0.2-0.3 0.3-0.6 0.4-1.1c0.1-0.4 0.1-0.7 0.1-0.9C8.3 11.7 8.1 11.6 8 11.5z\"/><path fill=\"#010202\" d=\"M21.3 11.5c-0.2-0.1-0.4-0.1-0.7-0.1s-0.5 0-0.8 0c0 0-0.1 0-0.1 0c0 0-0.1 0-0.1 0c0 0-0.1 0-0.1 0 s-0.1 0-0.1 0v0l-0.9 3.3c0 0 0 0 0 0c0 0 0 0 0 0c0 0 0 0 0 0s0 0 0 0c0 0 0 0 0.1 0c0 0 0.1 0 0.1 0c0.3 0 0.7 0 1 0 c0.3 0 0.6-0.1 0.8-0.2c0.2-0.1 0.4-0.3 0.6-0.5c0.2-0.3 0.3-0.6 0.4-1.1c0.1-0.4 0.1-0.7 0.1-0.9C21.6 11.7 21.5 11.6 21.3 11.5z\"/><path fill=\"#010202\" d=\"M13 0C5.8 0 0 5.8 0 13c0 7.2 5.8 13 13 13c7.2 0 13-5.8 13-13C26 5.8 20.2 0 13 0z M9.8 12.9 c0 0.2-0.1 0.4-0.2 0.6c-0.1 0.2-0.2 0.4-0.2 0.6c-0.1 0.2-0.2 0.4-0.3 0.5S8.8 14.9 8.7 15c-0.2 0.2-0.4 0.3-0.6 0.5 c-0.2 0.1-0.4 0.2-0.6 0.3c-0.2 0.1-0.4 0.1-0.6 0.1c-0.2 0-0.4 0-0.7 0H4.8L4.2 18H2.7l2.1-7.9h2.9c0.4 0 0.8 0.1 1.1 0.2 c0.3 0.1 0.5 0.3 0.7 0.6c0.2 0.2 0.3 0.5 0.3 0.9C10 12.1 9.9 12.4 9.8 12.9z M13.7 15.9l0.9-3.5c0.1-0.2 0.1-0.3 0.1-0.5 c0-0.1 0-0.2-0.1-0.3c-0.1-0.1-0.2-0.1-0.3-0.2c-0.1 0-0.3-0.1-0.5-0.1l-1.2 0l-1.2 4.5H10L12.1 8h1.5l-0.6 2.1h1.4 c0.4 0 0.7 0 1 0.1s0.5 0.2 0.7 0.3c0.2 0.1 0.3 0.4 0.3 0.6c0 0.3 0 0.6-0.1 1l-1 3.7H13.7z M23 13.4c-0.1 0.2-0.2 0.4-0.2 0.6 c-0.1 0.2-0.2 0.4-0.3 0.5S22.2 14.9 22 15c-0.2 0.2-0.4 0.3-0.6 0.5c-0.2 0.1-0.4 0.2-0.6 0.3c-0.2 0.1-0.4 0.1-0.6 0.1 c-0.2 0-0.4 0-0.7 0h-1.3L17.6 18h-1.5l2.1-7.9h2.9c0.4 0 0.8 0.1 1.1 0.2c0.3 0.1 0.5 0.3 0.7 0.6c0.2 0.2 0.3 0.5 0.3 0.9 c0 0.3 0 0.7-0.1 1.1C23.1 13.1 23.1 13.3 23 13.4z\"/></g></svg>
        </a>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 49
        echo "    ";
        ob_start();
        // line 50
        echo "        ";
        ob_start();
        // line 51
        echo "            <div class=\"sf-toolbar-info-piece sf-toolbar-info-php\">
                <b>PHP</b>
                <span>";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "phpversion", array()), "html", null, true);
        echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece sf-toolbar-info-php-ext\">
                <b>PHP Extensions</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
        // line 57
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasxdebug", array())) ? ("green") : ("red"));
        echo "\">xdebug</span>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
        // line 58
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasaccelerator", array())) ? ("green") : ("red"));
        echo "\">accel</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>PHP SAPI</b>
                <span>";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "sapiName", array()), "html", null, true);
        echo "</span>
            </div>
        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 65
        echo "    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 66
        echo "    ";
        $this->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig", "@WebProfiler/Collector/config.html.twig", 66)->display(array_merge($context, array("link" => false)));
        // line 67
        echo "
    ";
        // line 69
        echo "    ";
        ob_start();
        echo "sf-toolbar-status sf-toolbar-status-";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "debug", array())) ? ("green") : ("red"));
        $context["debug_status_class"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 70
        echo "    ";
        ob_start();
        // line 71
        echo "        <svg width=\"21\" height=\"28\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 21 28\" enable-background=\"new 0 0 21 28\" xml:space=\"preserve\"><g><path fill=\"#3F3F3F\" d=\"M5 17H1c-0.5 0-1-0.4-1-1V9c0-0.5 0.4-1 1-1h4c0.5 0 1 0.4 1 1v7C6 16.6 5.6 17 5 17z\"/><path fill=\"#3F3F3F\" d=\"M19 17h-4c-0.5 0-1-0.4-1-1V9c0-0.5 0.4-1 1-1h4c0.5 0 1 0.4 1 1v7C20 16.6 19.6 17 19 17z\"/><path fill=\"#3F3F3F\" d=\"M12.1 20h-4c-0.5 0-1-0.4-1-1v-7c0-0.5 0.4-1 1-1h4c0.5 0 1 0.4 1 1v7C13.1 19.5 12.6 20 12.1 20z\"/><rect x=\"9.1\" y=\"5.8\" fill=\"#3F3F3F\" width=\"2\" height=\"4.5\"/><rect x=\"16\" y=\"17.7\" fill=\"#3F3F3F\" width=\"2\" height=\"4.5\"/><rect x=\"2.1\" y=\"17.7\" fill=\"#3F3F3F\" width=\"2\" height=\"4.5\"/><rect x=\"9.1\" y=\"20.7\" fill=\"#3F3F3F\" width=\"2\" height=\"1.5\"/><rect x=\"2.1\" y=\"5.7\" fill=\"#3F3F3F\" width=\"2\" height=\"1.5\"/><rect x=\"16.1\" y=\"5.7\" fill=\"#3F3F3F\" width=\"2\" height=\"1.5\"/></g></svg>
        <span class=\"sf-toolbar-info-piece-additional-detail ";
        // line 72
        echo twig_escape_filter($this->env, (isset($context["debug_status_class"]) ? $context["debug_status_class"] : $this->getContext($context, "debug_status_class")), "html", null, true);
        echo "\"> </span>
        <span class=\"sf-toolbar-info-piece-additional sf-toolbar-status\">";
        // line 73
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "</span>
        ";
        // line 74
        if ((("n/a" != $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "appname", array())) || ("n/a" != $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "env", array())))) {
            // line 75
            echo "            <span class=\"sf-toolbar-info-piece-additional-detail\">
                <span class=\"sf-toolbar-info-with-delimiter\">";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "appname", array()), "html", null, true);
            echo "</span>
                <span>";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "env", array()), "html", null, true);
            echo "</span>
            </span>
        ";
        }
        // line 80
        echo "    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 81
        echo "    ";
        ob_start();
        // line 82
        echo "        ";
        ob_start();
        // line 83
        echo "            ";
        if (("n/a" != $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "appname", array()))) {
            // line 84
            echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Name</b>
                    <span>";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "appname", array()), "html", null, true);
            echo "</span>
                </div>
            ";
        }
        // line 89
        echo "            ";
        if (("n/a" != $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "env", array()))) {
            // line 90
            echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Environment</b>
                    <span>";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "env", array()), "html", null, true);
            echo "</span>
                </div>
            ";
        }
        // line 95
        echo "            ";
        if (("n/a" != $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "debug", array()))) {
            // line 96
            echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Debug</b>
                    <span class=\"";
            // line 98
            echo twig_escape_filter($this->env, (isset($context["debug_status_class"]) ? $context["debug_status_class"] : $this->getContext($context, "debug_status_class")), "html", null, true);
            echo "\">";
            echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "debug", array())) ? ("en") : ("dis"));
            echo "abled</span>
                </div>
            ";
        }
        // line 101
        echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Token</b>
                <span>
                    ";
        // line 104
        if ((isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url"))) {
            // line 105
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "token", array()), "html", null, true);
            echo "</a>
                    ";
        } else {
            // line 107
            echo "                        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "token", array()), "html", null, true);
            echo "
                    ";
        }
        // line 109
        echo "                </span>
            </div>
        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 112
        echo "    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 113
        echo "    ";
        $this->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig", "@WebProfiler/Collector/config.html.twig", 113)->display(array_merge($context, array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")))));
        
        $__internal_413ee05c5f21c43ae0afdb1b954285b64806a2620103efae5608490bb77bbc67->leave($__internal_413ee05c5f21c43ae0afdb1b954285b64806a2620103efae5608490bb77bbc67_prof);

    }

    // line 116
    public function block_menu($context, array $blocks = array())
    {
        $__internal_657685c296c2e13eb0367da460f2f5fa91a9e1ae5aa496ec2eeef3393d4146e1 = $this->env->getExtension("native_profiler");
        $__internal_657685c296c2e13eb0367da460f2f5fa91a9e1ae5aa496ec2eeef3393d4146e1->enter($__internal_657685c296c2e13eb0367da460f2f5fa91a9e1ae5aa496ec2eeef3393d4146e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 117
        echo "<span class=\"label\">
    <span class=\"icon\"><svg width=\"21\" height=\"28\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 21 28\" enable-background=\"new 0 0 21 28\" xml:space=\"preserve\"><g><path fill=\"#3F3F3F\" d=\"M5 17H1c-0.5 0-1-0.4-1-1V9c0-0.5 0.4-1 1-1h4c0.5 0 1 0.4 1 1v7C6 16.6 5.6 17 5 17z\"/><path fill=\"#3F3F3F\" d=\"M19 17h-4c-0.5 0-1-0.4-1-1V9c0-0.5 0.4-1 1-1h4c0.5 0 1 0.4 1 1v7C20 16.6 19.6 17 19 17z\"/><path fill=\"#3F3F3F\" d=\"M12.1 20h-4c-0.5 0-1-0.4-1-1v-7c0-0.5 0.4-1 1-1h4c0.5 0 1 0.4 1 1v7C13.1 19.5 12.6 20 12.1 20z\"/><rect x=\"9.1\" y=\"5.8\" fill=\"#3F3F3F\" width=\"2\" height=\"4.5\"/><rect x=\"16\" y=\"17.7\" fill=\"#3F3F3F\" width=\"2\" height=\"4.5\"/><rect x=\"2.1\" y=\"17.7\" fill=\"#3F3F3F\" width=\"2\" height=\"4.5\"/><rect x=\"9.1\" y=\"20.7\" fill=\"#3F3F3F\" width=\"2\" height=\"1.5\"/><rect x=\"2.1\" y=\"5.7\" fill=\"#3F3F3F\" width=\"2\" height=\"1.5\"/><rect x=\"16.1\" y=\"5.7\" fill=\"#3F3F3F\" width=\"2\" height=\"1.5\"/></g></svg></span>
    <strong>Config</strong>
</span>
";
        
        $__internal_657685c296c2e13eb0367da460f2f5fa91a9e1ae5aa496ec2eeef3393d4146e1->leave($__internal_657685c296c2e13eb0367da460f2f5fa91a9e1ae5aa496ec2eeef3393d4146e1_prof);

    }

    // line 123
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8841fb1d74a0c3d8542c3571842b6df526826abd95c6f1e46485a78826977d50 = $this->env->getExtension("native_profiler");
        $__internal_8841fb1d74a0c3d8542c3571842b6df526826abd95c6f1e46485a78826977d50->enter($__internal_8841fb1d74a0c3d8542c3571842b6df526826abd95c6f1e46485a78826977d50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 124
        echo "    <h2>Project Configuration</h2>
    <table>
        <tr>
            <th>Key</th>
            <th>Value</th>
        </tr>
        <tr>
            ";
        // line 131
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "applicationname", array())) {
            // line 132
            echo "                <th>Application</th>
                <td>";
            // line 133
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "applicationname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "applicationversion", array()), "html", null, true);
            echo " (on Symfony ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "symfonyversion", array()), "html", null, true);
            echo ")</td>
            ";
        } else {
            // line 135
            echo "                <th>Symfony version</th>
                <td>";
            // line 136
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "symfonyversion", array()), "html", null, true);
            echo "</td>
            ";
        }
        // line 138
        echo "        </tr>
        ";
        // line 139
        if (("n/a" != $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "appname", array()))) {
            // line 140
            echo "            <tr>
                <th>Application name</th>
                <td>";
            // line 142
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "appname", array()), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        // line 145
        echo "        ";
        if (("n/a" != $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "env", array()))) {
            // line 146
            echo "            <tr>
                <th>Environment</th>
                <td>";
            // line 148
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "env", array()), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        // line 151
        echo "        ";
        if (("n/a" != $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "debug", array()))) {
            // line 152
            echo "            <tr>
                <th>Debug</th>
                <td>";
            // line 154
            echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "debug", array())) ? ("enabled") : ("disabled"));
            echo "</td>
            </tr>
        ";
        }
        // line 157
        echo "    </table>

    <h2>PHP configuration</h2>
    <table>
        <tr>
            <th>Key</th>
            <th>Value</th>
        </tr>
        <tr>
            <th>PHP version</th>
            <td>";
        // line 167
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "phpversion", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Xdebug</th>
            <td>";
        // line 171
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasxdebug", array())) ? ("enabled") : ("disabled"));
        echo "</td>
        </tr>
        <tr>
            <th>PHP acceleration</th>
            <td>";
        // line 175
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasaccelerator", array())) ? ("enabled") : ("disabled"));
        echo "</td>
        </tr>
        <tr>
            <th>XCache</th>
            <td>";
        // line 179
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasxcache", array())) ? ("enabled") : ("disabled"));
        echo "</td>
        </tr>
        <tr>
            <th>APC</th>
            <td>";
        // line 183
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasapc", array())) ? ("enabled") : ("disabled"));
        echo "</td>
        </tr>
        <tr>
            <th>Zend OPcache</th>
            <td>";
        // line 187
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "haszendopcache", array())) ? ("enabled") : ("disabled"));
        echo "</td>
        </tr>
        <tr>
            <th>EAccelerator</th>
            <td>";
        // line 191
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "haseaccelerator", array())) ? ("enabled") : ("disabled"));
        echo "</td>
        </tr>
        <tr>
            <th>Full PHP configuration</th>
            <td><a href=\"";
        // line 195
        echo $this->env->getExtension('routing')->getPath("_profiler_phpinfo");
        echo "\"><code>phpinfo</code></a></td>
        </tr>
    </table>

    ";
        // line 199
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "bundles", array())) {
            // line 200
            echo "        <h2>Active bundles</h2>
        <table>
            <tr>
                <th>Name</th>
                <th>Path</th>
            </tr>
            ";
            // line 206
            $context["bundles"] = $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "bundles", array());
            // line 207
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_array_keys_filter((isset($context["bundles"]) ? $context["bundles"] : $this->getContext($context, "bundles")))));
            foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
                // line 208
                echo "            <tr>
                <th>";
                // line 209
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "</th>
                <td>";
                // line 210
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["bundles"]) ? $context["bundles"] : $this->getContext($context, "bundles")), $context["name"], array(), "array"), "html", null, true);
                echo "</td>
            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 213
            echo "        </table>
    ";
        }
        
        $__internal_8841fb1d74a0c3d8542c3571842b6df526826abd95c6f1e46485a78826977d50->leave($__internal_8841fb1d74a0c3d8542c3571842b6df526826abd95c6f1e46485a78826977d50_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/config.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  504 => 213,  495 => 210,  491 => 209,  488 => 208,  483 => 207,  481 => 206,  473 => 200,  471 => 199,  464 => 195,  457 => 191,  450 => 187,  443 => 183,  436 => 179,  429 => 175,  422 => 171,  415 => 167,  403 => 157,  397 => 154,  393 => 152,  390 => 151,  384 => 148,  380 => 146,  377 => 145,  371 => 142,  367 => 140,  365 => 139,  362 => 138,  357 => 136,  354 => 135,  345 => 133,  342 => 132,  340 => 131,  331 => 124,  325 => 123,  314 => 117,  308 => 116,  300 => 113,  297 => 112,  292 => 109,  286 => 107,  278 => 105,  276 => 104,  271 => 101,  263 => 98,  259 => 96,  256 => 95,  250 => 92,  246 => 90,  243 => 89,  237 => 86,  233 => 84,  230 => 83,  227 => 82,  224 => 81,  221 => 80,  215 => 77,  211 => 76,  208 => 75,  206 => 74,  202 => 73,  198 => 72,  195 => 71,  192 => 70,  186 => 69,  183 => 67,  180 => 66,  177 => 65,  171 => 62,  164 => 58,  160 => 57,  153 => 53,  149 => 51,  146 => 50,  143 => 49,  135 => 45,  132 => 44,  129 => 42,  126 => 41,  120 => 38,  114 => 35,  111 => 34,  103 => 31,  100 => 30,  97 => 29,  94 => 28,  89 => 25,  84 => 23,  81 => 21,  78 => 19,  76 => 18,  74 => 17,  72 => 16,  70 => 15,  68 => 14,  66 => 13,  63 => 12,  61 => 11,  54 => 10,  52 => 9,  47 => 6,  44 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
