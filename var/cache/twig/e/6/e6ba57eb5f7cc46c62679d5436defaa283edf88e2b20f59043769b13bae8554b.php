<?php

/* @WebProfiler/Collector/logger.html.twig */
class __TwigTemplate_e6ba57eb5f7cc46c62679d5436defaa283edf88e2b20f59043769b13bae8554b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/logger.html.twig", 1);
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
        $__internal_4701b3ce2af779d6c5a80e13d6ec1252dff1a4ff8e3e7098200048f9b4ae3a58 = $this->env->getExtension("native_profiler");
        $__internal_4701b3ce2af779d6c5a80e13d6ec1252dff1a4ff8e3e7098200048f9b4ae3a58->enter($__internal_4701b3ce2af779d6c5a80e13d6ec1252dff1a4ff8e3e7098200048f9b4ae3a58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/logger.html.twig"));

        // line 3
        $context["logger"] = $this;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4701b3ce2af779d6c5a80e13d6ec1252dff1a4ff8e3e7098200048f9b4ae3a58->leave($__internal_4701b3ce2af779d6c5a80e13d6ec1252dff1a4ff8e3e7098200048f9b4ae3a58_prof);

    }

    // line 5
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f7243cb73c22a4445dc7a5fc4437ab1118dfe9de2aad3fded8a52fc8dd4766fd = $this->env->getExtension("native_profiler");
        $__internal_f7243cb73c22a4445dc7a5fc4437ab1118dfe9de2aad3fded8a52fc8dd4766fd->enter($__internal_f7243cb73c22a4445dc7a5fc4437ab1118dfe9de2aad3fded8a52fc8dd4766fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 6
        echo "    ";
        if ((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "counterrors", array()) || $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countdeprecations", array())) || $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countscreams", array()))) {
            // line 7
            echo "        ";
            ob_start();
            // line 8
            echo "            <svg width=\"16\" height=\"28\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 16 28\" enable-background=\"new 0 0 16 28\" xml:space=\"preserve\"><g><path fill=\"#3F3F3F\" d=\"M15 6h-1V5c0-0.5-0.5-1-1-1H2C1.4 4 1 4.4 1 5v2v13c0 1.6 1.3 3 3 3h11c0.5 0 1-0.5 1-1V7 C16 6.5 15.5 6 15 6z M6 15h3v3H6V15z M6 13V7h3v6H6z M15 21c0 0.6-0.4 1-1 1H5c-0.9 0-1.7-0.4-2.2-1H13c0.6 0 1-0.4 1-1V7 c0.5 0 1 0.5 1 1V21z\"/></g></svg>
            ";
            // line 9
            if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "counterrors", array())) {
                // line 10
                echo "                ";
                $context["status_color"] = "red";
                // line 11
                echo "            ";
            } elseif ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countdeprecations", array())) {
                // line 12
                echo "                ";
                $context["status_color"] = "yellow";
                // line 13
                echo "            ";
            }
            // line 14
            echo "            ";
            $context["error_count"] = (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "counterrors", array()) + $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countdeprecations", array())) + $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countscreams", array()));
            // line 15
            echo "            <span class=\"sf-toolbar-status";
            if (array_key_exists("status_color", $context)) {
                echo " sf-toolbar-status-";
                echo twig_escape_filter($this->env, (isset($context["status_color"]) ? $context["status_color"] : $this->getContext($context, "status_color")), "html", null, true);
            }
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["error_count"]) ? $context["error_count"] : $this->getContext($context, "error_count")), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 17
            echo "        ";
            ob_start();
            // line 18
            echo "            ";
            if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "counterrors", array())) {
                // line 19
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Errors</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-red\">";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "counterrors", array()), "html", null, true);
                echo "</span>
                </div>
            ";
            }
            // line 24
            echo "            ";
            if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countdeprecations", array())) {
                // line 25
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Deprecated Calls</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-yellow\">";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countdeprecations", array()), "html", null, true);
                echo "</span>
                </div>
            ";
            }
            // line 30
            echo "            ";
            if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countscreams", array())) {
                // line 31
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Silenced Errors</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status\">";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countscreams", array()), "html", null, true);
                echo "</span>
                </div>
            ";
            }
            // line 36
            echo "        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 37
            echo "        ";
            $this->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig", "@WebProfiler/Collector/logger.html.twig", 37)->display(array_merge($context, array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")))));
            // line 38
            echo "    ";
        }
        
        $__internal_f7243cb73c22a4445dc7a5fc4437ab1118dfe9de2aad3fded8a52fc8dd4766fd->leave($__internal_f7243cb73c22a4445dc7a5fc4437ab1118dfe9de2aad3fded8a52fc8dd4766fd_prof);

    }

    // line 41
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8b40cd01655025d7efcc8a2a17ce48391ff49be385856e1d01f9e44855a6a5e9 = $this->env->getExtension("native_profiler");
        $__internal_8b40cd01655025d7efcc8a2a17ce48391ff49be385856e1d01f9e44855a6a5e9->enter($__internal_8b40cd01655025d7efcc8a2a17ce48391ff49be385856e1d01f9e44855a6a5e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 42
        echo "<span class=\"label\">
    <span class=\"icon\"><svg width=\"26\" height=\"32\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 26 32\" enable-background=\"new 0 0 26 32\" xml:space=\"preserve\"><path fill=\"#3F3F3F\" d=\"M23.6 3.4h-1.7V1.7c0-0.9-0.8-1.7-1.7-1.7H1.7C0.8 0 0 0.8 0 1.7v3.4v21.9C0 29.7 2.3 32 5.1 32h18.5 c0.9 0 1.7-0.8 1.7-1.7V5.1C25.3 4.1 24.5 3.4 23.6 3.4z M8.4 18.5h5.1v5.1H8.4V18.5z M8.4 15.2V5.1h5.1v10.1H8.4z M23.6 28.6 c0 0.9-0.8 1.7-1.7 1.7H6.7c-1.5 0-2.8-0.7-3.7-1.7h17.2c0.9 0 1.7-0.8 1.7-1.7V5.1c0.9 0 1.7 0.8 1.7 1.7V28.6z\"/></svg></span>
    <strong>Logs</strong>
    ";
        // line 45
        if ((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "counterrors", array()) || $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countdeprecations", array())) || $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countscreams", array()))) {
            // line 46
            echo "        ";
            $context["error_count"] = (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "counterrors", array()) + $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countdeprecations", array())) + $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countscreams", array()));
            // line 47
            echo "        <span class=\"count\">
            <span>";
            // line 48
            echo twig_escape_filter($this->env, (isset($context["error_count"]) ? $context["error_count"] : $this->getContext($context, "error_count")), "html", null, true);
            echo "</span>
        </span>
    ";
        }
        // line 51
        echo "</span>
";
        
        $__internal_8b40cd01655025d7efcc8a2a17ce48391ff49be385856e1d01f9e44855a6a5e9->leave($__internal_8b40cd01655025d7efcc8a2a17ce48391ff49be385856e1d01f9e44855a6a5e9_prof);

    }

    // line 54
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5ed6a050ac610c8c170bd1ee892710f77a7ed365a0c51dd61a6e12dc0c4a1edb = $this->env->getExtension("native_profiler");
        $__internal_5ed6a050ac610c8c170bd1ee892710f77a7ed365a0c51dd61a6e12dc0c4a1edb->enter($__internal_5ed6a050ac610c8c170bd1ee892710f77a7ed365a0c51dd61a6e12dc0c4a1edb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 55
        echo "    <h2>Logs</h2>

    ";
        // line 57
        $context["priority"] = $this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "query", array()), "get", array(0 => "priority", 1 => 0), "method");
        // line 58
        echo "
    <table>
        <tr>
            <th>Filter</th>
            <td>
                <form id=\"priority-form\" action=\"\" method=\"get\" style=\"display: inline\">
                    <input type=\"hidden\" name=\"panel\" value=\"logger\">
                    <label for=\"priority\">Min. Priority</label>
                    <select id=\"priority\" name=\"priority\" onchange=\"document.getElementById('priority-form').submit(); \">
                        ";
        // line 68
        echo "                        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "priorities", array()));
        foreach ($context['_seq'] as $context["value"] => $context["level"]) {
            // line 69
            echo "                            ";
            if (( !(isset($context["priority"]) ? $context["priority"] : $this->getContext($context, "priority")) && ($context["value"] > 100))) {
                // line 70
                echo "                                ";
                $context["priority"] = $context["value"];
                // line 71
                echo "                            ";
            }
            // line 72
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\"";
            echo ((($context["value"] == (isset($context["priority"]) ? $context["priority"] : $this->getContext($context, "priority")))) ? (" selected") : (""));
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["level"], "name", array()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute($context["level"], "count", array()), "html", null, true);
            echo ")</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['value'], $context['level'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "                        ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countdeprecations", array())) {
            // line 75
            echo "                            ";
            if ( !(isset($context["priority"]) ? $context["priority"] : $this->getContext($context, "priority"))) {
                // line 76
                echo "                                ";
                $context["priority"] = "-100";
                // line 77
                echo "                            ";
            }
            // line 78
            echo "                            <option value=\"-100\"";
            echo ((("-100" == (isset($context["priority"]) ? $context["priority"] : $this->getContext($context, "priority")))) ? (" selected") : (""));
            echo ">DEPRECATION only (";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countdeprecations", array()), "html", null, true);
            echo ")</option>
                        ";
        }
        // line 80
        echo "                    </select>
                    <noscript>
                        <input type=\"submit\" value=\"refresh\">
                    </noscript>
                </form>
            </td>
        </tr>
    </table>

    ";
        // line 89
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "logs", array())) {
            // line 90
            echo "        <ul class=\"alt\">
            ";
            // line 91
            $context["log_loop_index"] = 0;
            // line 92
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "logs", array()));
            $context['_iterated'] = false;
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                // line 93
                echo "                ";
                $context["is_deprecation"] = (($this->getAttribute($this->getAttribute($context["log"], "context", array(), "any", false, true), "level", array(), "any", true, true) && $this->getAttribute($this->getAttribute($context["log"], "context", array(), "any", false, true), "type", array(), "any", true, true)) && ((twig_constant("E_DEPRECATED") == $this->getAttribute($this->getAttribute($context["log"], "context", array()), "type", array())) || (twig_constant("E_USER_DEPRECATED") == $this->getAttribute($this->getAttribute($context["log"], "context", array()), "type", array()))));
                // line 94
                echo "                ";
                if (((((isset($context["priority"]) ? $context["priority"] : $this->getContext($context, "priority")) == "-100")) ? ((isset($context["is_deprecation"]) ? $context["is_deprecation"] : $this->getContext($context, "is_deprecation"))) : (($this->getAttribute($context["log"], "priority", array()) >= (isset($context["priority"]) ? $context["priority"] : $this->getContext($context, "priority")))))) {
                    // line 95
                    echo "                    ";
                    $context["log_loop_index"] = ((isset($context["log_loop_index"]) ? $context["log_loop_index"] : $this->getContext($context, "log_loop_index")) + 1);
                    // line 96
                    echo "                    <li class=\"";
                    echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), (isset($context["log_loop_index"]) ? $context["log_loop_index"] : $this->getContext($context, "log_loop_index"))), "html", null, true);
                    if ($this->getAttribute($this->getAttribute($context["log"], "context", array(), "any", false, true), "scream", array(), "any", true, true)) {
                        echo " scream";
                    } elseif (($this->getAttribute($context["log"], "priority", array()) >= 400)) {
                        echo " error";
                    } elseif ((($this->getAttribute($context["log"], "priority", array()) >= 300) || (isset($context["is_deprecation"]) ? $context["is_deprecation"] : $this->getContext($context, "is_deprecation")))) {
                        echo " warning";
                    }
                    echo "\">
                        ";
                    // line 97
                    echo $context["logger"]->getdisplay_message($this->getAttribute($context["loop"], "index", array()), $context["log"], (isset($context["is_deprecation"]) ? $context["is_deprecation"] : $this->getContext($context, "is_deprecation")));
                    echo "
                    </li>
                ";
                }
                // line 100
                echo "            ";
                $context['_iterated'] = true;
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            if (!$context['_iterated']) {
                // line 101
                echo "                <li><em>No logs available for this priority.</em></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            echo "        </ul>
    ";
        } else {
            // line 105
            echo "        <p>
            <em>No logs available.</em>
        </p>
    ";
        }
        
        $__internal_5ed6a050ac610c8c170bd1ee892710f77a7ed365a0c51dd61a6e12dc0c4a1edb->leave($__internal_5ed6a050ac610c8c170bd1ee892710f77a7ed365a0c51dd61a6e12dc0c4a1edb_prof);

    }

    // line 112
    public function getdisplay_message($__log_index__ = null, $__log__ = null, $__is_deprecation__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "log_index" => $__log_index__,
            "log" => $__log__,
            "is_deprecation" => $__is_deprecation__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_521bbe176d29d6abb3d0cd5d8b0c5ac3d93ac011b4fe0645cb14efb356fe002d = $this->env->getExtension("native_profiler");
            $__internal_521bbe176d29d6abb3d0cd5d8b0c5ac3d93ac011b4fe0645cb14efb356fe002d->enter($__internal_521bbe176d29d6abb3d0cd5d8b0c5ac3d93ac011b4fe0645cb14efb356fe002d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "display_message"));

            // line 113
            echo "    ";
            if ((isset($context["is_deprecation"]) ? $context["is_deprecation"] : $this->getContext($context, "is_deprecation"))) {
                // line 114
                echo "        ";
                $context["stack"] = (($this->getAttribute($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "context", array(), "any", false, true), "stack", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "context", array(), "any", false, true), "stack", array()), array())) : (array()));
                // line 115
                echo "        ";
                $context["id"] = ("sf-call-stack-" . (isset($context["log_index"]) ? $context["log_index"] : $this->getContext($context, "log_index")));
                // line 116
                echo "
        DEPRECATED - ";
                // line 117
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "message", array()), "html", null, true);
                echo "

        ";
                // line 119
                if ((isset($context["stack"]) ? $context["stack"] : $this->getContext($context, "stack"))) {
                    // line 120
                    echo "            <a href=\"#\" onclick=\"Sfjs.toggle('";
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                    echo "', document.getElementById('";
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                    echo "-on'), document.getElementById('";
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                    echo "-off')); return false;\">
                <img class=\"toggle\" id=\"";
                    // line 121
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                    echo "-off\" alt=\"-\" src=\"data:image/gif;base64,R0lGODlhEgASAMQSANft94TG57Hb8GS44ez1+mC24IvK6ePx+Wa44dXs92+942e54o3L6W2844/M6dnu+P/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABIALAAAAAASABIAQAVCoCQBTBOd6Kk4gJhGBCTPxysJb44K0qD/ER/wlxjmisZkMqBEBW5NHrMZmVKvv9hMVsO+hE0EoNAstEYGxG9heIhCADs=\" style=\"display:none\">
                <img class=\"toggle\" id=\"";
                    // line 122
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                    echo "-on\" alt=\"+\" src=\"data:image/gif;base64,R0lGODlhEgASAMQTANft99/v+Ga44bHb8ITG52S44dXs9+z1+uPx+YvK6WC24G+944/M6W28443L6dnu+Ge54v/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABMALAAAAAASABIAQAVS4DQBTiOd6LkwgJgeUSzHSDoNaZ4PU6FLgYBA5/vFID/DbylRGiNIZu74I0h1hNsVxbNuUV4d9SsZM2EzWe1qThVzwWFOAFCQFa1RQq6DJB4iIQA7\" style=\"display:inline\">
            </a>
        ";
                }
                // line 125
                echo "
        ";
                // line 126
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["stack"]) ? $context["stack"] : $this->getContext($context, "stack")));
                foreach ($context['_seq'] as $context["index"] => $context["call"]) {
                    if (($context["index"] > 1)) {
                        // line 127
                        echo "            ";
                        if (($context["index"] == 2)) {
                            // line 128
                            echo "                <ul class=\"sf-call-stack\" id=\"";
                            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                            echo "\" style=\"display: none\">
            ";
                        }
                        // line 130
                        echo "            ";
                        if ($this->getAttribute($context["call"], "class", array(), "any", true, true)) {
                            // line 131
                            echo "                ";
                            $context["from"] = (($this->env->getExtension('code')->abbrClass($this->getAttribute($context["call"], "class", array())) . "::") . $this->env->getExtension('code')->abbrMethod($this->getAttribute($context["call"], "function", array())));
                            // line 132
                            echo "            ";
                        } elseif ($this->getAttribute($context["call"], "function", array(), "any", true, true)) {
                            // line 133
                            echo "                ";
                            $context["from"] = $this->env->getExtension('code')->abbrMethod($this->getAttribute($context["call"], "function", array()));
                            // line 134
                            echo "            ";
                        } elseif ($this->getAttribute($context["call"], "file", array(), "any", true, true)) {
                            // line 135
                            echo "                ";
                            $context["from"] = $this->getAttribute($context["call"], "file", array());
                            // line 136
                            echo "            ";
                        } else {
                            // line 137
                            echo "                ";
                            $context["from"] = "-";
                            // line 138
                            echo "            ";
                        }
                        // line 139
                        echo "
            <li>Called from ";
                        // line 140
                        echo ((($this->getAttribute($context["call"], "file", array(), "any", true, true) && $this->getAttribute($context["call"], "line", array(), "any", true, true))) ? ($this->env->getExtension('code')->formatFile($this->getAttribute($context["call"], "file", array()), $this->getAttribute($context["call"], "line", array()), (isset($context["from"]) ? $context["from"] : $this->getContext($context, "from")))) : ((isset($context["from"]) ? $context["from"] : $this->getContext($context, "from"))));
                        echo "</li>

            ";
                        // line 142
                        if (($context["index"] == (twig_length_filter($this->env, (isset($context["stack"]) ? $context["stack"] : $this->getContext($context, "stack"))) - 1))) {
                            // line 143
                            echo "                </ul>
            ";
                        }
                        // line 145
                        echo "        ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['index'], $context['call'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 146
                echo "    ";
            } else {
                // line 147
                echo "        ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "priorityName", array()), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "message", array()), "html", null, true);
                echo "
        ";
                // line 148
                if (($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "context", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "context", array())))) {
                    // line 149
                    echo "            <br />
            <small>
                <strong>Context</strong>: ";
                    // line 151
                    echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "context", array()), (64 | 256)), "html", null, true);
                    echo "
            </small>
        ";
                }
                // line 154
                echo "    ";
            }
            
            $__internal_521bbe176d29d6abb3d0cd5d8b0c5ac3d93ac011b4fe0645cb14efb356fe002d->leave($__internal_521bbe176d29d6abb3d0cd5d8b0c5ac3d93ac011b4fe0645cb14efb356fe002d_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/logger.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  483 => 154,  477 => 151,  473 => 149,  471 => 148,  464 => 147,  461 => 146,  454 => 145,  450 => 143,  448 => 142,  443 => 140,  440 => 139,  437 => 138,  434 => 137,  431 => 136,  428 => 135,  425 => 134,  422 => 133,  419 => 132,  416 => 131,  413 => 130,  407 => 128,  404 => 127,  399 => 126,  396 => 125,  390 => 122,  386 => 121,  377 => 120,  375 => 119,  370 => 117,  367 => 116,  364 => 115,  361 => 114,  358 => 113,  342 => 112,  331 => 105,  327 => 103,  320 => 101,  307 => 100,  301 => 97,  289 => 96,  286 => 95,  283 => 94,  280 => 93,  261 => 92,  259 => 91,  256 => 90,  254 => 89,  243 => 80,  235 => 78,  232 => 77,  229 => 76,  226 => 75,  223 => 74,  208 => 72,  205 => 71,  202 => 70,  199 => 69,  194 => 68,  183 => 58,  181 => 57,  177 => 55,  171 => 54,  163 => 51,  157 => 48,  154 => 47,  151 => 46,  149 => 45,  144 => 42,  138 => 41,  130 => 38,  127 => 37,  124 => 36,  118 => 33,  114 => 31,  111 => 30,  105 => 27,  101 => 25,  98 => 24,  92 => 21,  88 => 19,  85 => 18,  82 => 17,  71 => 15,  68 => 14,  65 => 13,  62 => 12,  59 => 11,  56 => 10,  54 => 9,  51 => 8,  48 => 7,  45 => 6,  39 => 5,  32 => 1,  30 => 3,  11 => 1,);
    }
}
