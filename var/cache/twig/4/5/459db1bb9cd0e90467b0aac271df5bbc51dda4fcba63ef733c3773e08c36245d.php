<?php

/* @WebProfiler/Collector/form.html.twig */
class __TwigTemplate_459db1bb9cd0e90467b0aac271df5bbc51dda4fcba63ef733c3773e08c36245d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/form.html.twig", 1);
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
        $__internal_aec7479b228e4d8374c49b67a8355d31b5e52a448df6e802c2ff30c4843d4852 = $this->env->getExtension("native_profiler");
        $__internal_aec7479b228e4d8374c49b67a8355d31b5e52a448df6e802c2ff30c4843d4852->enter($__internal_aec7479b228e4d8374c49b67a8355d31b5e52a448df6e802c2ff30c4843d4852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/form.html.twig"));

        // line 3
        $context["__internal_65a06926c69a70ff4796d749e7cda2fd59c9734555624261249debeb04ab921d"] = $this;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aec7479b228e4d8374c49b67a8355d31b5e52a448df6e802c2ff30c4843d4852->leave($__internal_aec7479b228e4d8374c49b67a8355d31b5e52a448df6e802c2ff30c4843d4852_prof);

    }

    // line 5
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e951fa098d6c2e99f1af00a08c716381a27b6995bc1e7f1911d70ad71bec6293 = $this->env->getExtension("native_profiler");
        $__internal_e951fa098d6c2e99f1af00a08c716381a27b6995bc1e7f1911d70ad71bec6293->enter($__internal_e951fa098d6c2e99f1af00a08c716381a27b6995bc1e7f1911d70ad71bec6293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 6
        echo "    ";
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "data", array()))) {
            // line 7
            echo "        ";
            ob_start();
            // line 8
            echo "            <svg width=\"20\" height=\"28\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 20 28\" enable-background=\"new 0 0 20 28\" xml:space=\"preserve\"><g><polygon fill=\"#3F3F3F\" points=\"16,5 13,5 13,3 7,3 7,5 4,5 4,9 16,9\"/><path fill=\"#3F3F3F\" d=\"M17 6v4H3V6H0v19h20V6H17z M8 22H3v-1h5V22z M17 20H3v-1h14V20z M17 18H3v-1h14V18z M17 16H3v-1h14V16z M17 14H4v-1h13V14z\"/></g></svg>
            <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 9
            if ($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "data", array()), "nb_errors", array())) {
                echo "red";
            } else {
                echo "green";
            }
            echo "\">";
            if ($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "data", array()), "nb_errors", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "data", array()), "nb_errors", array()), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "data", array()), "forms", array())), "html", null, true);
            }
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 11
            echo "
        ";
            // line 12
            $this->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig", "@WebProfiler/Collector/form.html.twig", 12)->display(array_merge($context, array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")))));
            // line 13
            echo "    ";
        }
        
        $__internal_e951fa098d6c2e99f1af00a08c716381a27b6995bc1e7f1911d70ad71bec6293->leave($__internal_e951fa098d6c2e99f1af00a08c716381a27b6995bc1e7f1911d70ad71bec6293_prof);

    }

    // line 16
    public function block_menu($context, array $blocks = array())
    {
        $__internal_18d467c04f68f94126eec706a09d873307a97626d941d51acc320249e82e3f86 = $this->env->getExtension("native_profiler");
        $__internal_18d467c04f68f94126eec706a09d873307a97626d941d51acc320249e82e3f86->enter($__internal_18d467c04f68f94126eec706a09d873307a97626d941d51acc320249e82e3f86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 17
        echo "    <span class=\"label\">
        <span class=\"icon\"><svg width=\"20\" height=\"27\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 20 27\" enable-background=\"new 0 0 20 27\" xml:space=\"preserve\"><g><polygon fill=\"#3F3F3F\" points=\"16,2 13,2 13,0 7,0 7,2 4,2 4,6 16,6\"/><path fill=\"#3F3F3F\" d=\"M17 3v4H3V3H0v24h20V3H17z M3 13h10v1H3V13z M8 24H3v-1h5V24z M17 22H3v-1h14V22z M17 20H3v-1h14V20z M17 18H3v-1h14V18z M17 16H4v-1h13V16z M17 12H3v-1h14V12z M17 10H4V9h13V10z\"/></g></svg></span>
        <strong>Forms</strong>
        ";
        // line 20
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "data", array()), "forms", array()))) {
            // line 21
            echo "            <span class=\"count\"><span>";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "data", array()), "forms", array())), "html", null, true);
            echo "</span></span>
        ";
        }
        // line 23
        echo "    </span>
";
        
        $__internal_18d467c04f68f94126eec706a09d873307a97626d941d51acc320249e82e3f86->leave($__internal_18d467c04f68f94126eec706a09d873307a97626d941d51acc320249e82e3f86_prof);

    }

    // line 26
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7c056bc010a0ff5e361ef793c6d8fc4132de57cb22d0dc742f9ba6461a367d9b = $this->env->getExtension("native_profiler");
        $__internal_7c056bc010a0ff5e361ef793c6d8fc4132de57cb22d0dc742f9ba6461a367d9b->enter($__internal_7c056bc010a0ff5e361ef793c6d8fc4132de57cb22d0dc742f9ba6461a367d9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 27
        echo "    <style type=\"text/css\">
    .window {
        /*background: #F6F6F6;*/
        margin: -30px -40px -40px;
    }
    .toggle-icon {
        display: inline-block;
        background: url(\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAgBAMAAADpp+X/AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3QweDgwx4LcKwAAAABVQTFRFAAAA////////////////ZmZm////bvjBwAAAAAV0Uk5TABZwsuCVEUjgAAAAAWJLR0QF+G/pxwAAAE1JREFUGNNjSHMSYGBgUEljSGYAAzMGBwiDhUEBwmBiEIAwGBmwgTQgQGWgA7h2uIFwK+CWwp1BpHvYEqDuATEYkBlY3IOmBq6dCPcAAIT5Eg2IksjQAAAAAElFTkSuQmCC\") no-repeat top left #5eb5e0;
    }
    .closed .toggle-icon, .closed.toggle-icon {
        background-position: bottom left;
    }
    .toggle-icon.empty {
        background-image: url(\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABmJLR0QAZgBmAGYHukptAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3QweDhIf6CA40AAAAFRJREFUOMvtk7ENACEMA61vfx767MROWfO+AdGBHlNyTZrYUZRYDBII4NWE1pNdpFarfgLUbpDaBEgBYRiEVjsvDLa1l6O4Z3wkFWN+OfLKdpisOH/TlICzukmUJwAAAABJRU5ErkJggg==\");
    }
    .tree {
        width: 230px;
        padding: 10px;
        font-size: 12px;
        float: left;
    }
    #content .tree h2 {
        font-size: 13px;
        padding: 5px 7px;
        margin: 0;
    }
    .tree li {
        margin: 0;
        padding: 0;
        width: 100%;
    }
    .tree .tree-inner {
        width: 100%;
        padding: 5px 7px 5px 22px;
        border-radius: 6px;
        color: #313131;
        cursor: pointer;
        position: relative;

        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }
    .tree a {
        text-decoration: none;
    }
    .tree .toggle-button {
        /* provide a bigger clickable area than just 10x10px */
        width: 16px;
        height: 16px;
        /* vertically center the button */
        position: absolute;
        top: 50%;
        margin-top: -8px;
        margin-left: -18px;
    }
    .tree .toggle-icon {
        width: 10px;
        height: 10px;
        /* position the icon in the center of the clickable area */
        margin-left: 3px;
        margin-top: 3px;
        background-size: 10px 20px;
        background-color: #ccc;
    }
    .tree .toggle-icon.empty {
        width: 10px;
        height: 10px;
        position: absolute;
        top: 50%;
        margin-top: -5px;
        margin-left: -15px;
        background-size: 10px 10px;
    }
    .tree ul ul .tree-inner {
        padding-left: 37px;
    }
    .tree ul ul ul .tree-inner {
        padding-left: 52px;
    }
    .tree ul ul ul ul .tree-inner {
        padding-left: 67px;
    }
    .tree ul ul ul ul ul .tree-inner {
        padding-left: 82px;
    }
    .tree .tree-inner:hover {
        background: #dfdfdf;
    }
    .tree .tree-inner.active, .tree .tree-inner.active:hover {
        background: #dfdfdf;
        font-weight: bold;
        color: #313131;
    }
    .tree .tree-inner.active .toggle-icon, .tree .tree-inner:hover .toggle-icon, .tree .tree-inner.active:hover .toggle-icon {
        background-image: url(\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAgBAMAAADpp+X/AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3QweDhEYXWn+sAAAABhQTFRFAAAA39/f39/f39/f39/fZmZm39/f////gc3YPwAAAAV0Uk5TAAtAc6ZeVyCYAAAAAWJLR0QF+G/pxwAAAE1JREFUGNNjSHMSYGBgUEljSGYAAzMGBwiDhUEBwmBiEIAwGBmwgXIgQGWgA7h2uIFwK+CWwp1BpHvYC6DuATEYkBlY3IOmBq6dCPcAADqLE4MnBi/fAAAAAElFTkSuQmCC\");
        background-color: #aaa;
    }
    .tree .tree-inner.active .toggle-icon.empty, .tree .tree-inner:hover .toggle-icon.empty, .tree .tree-inner.active:hover .toggle-icon.empty {
        background-image: url(\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQBAMAAADt3eJSAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3QweDhoucSey4gAAABVQTFRFAAAA39/f39/f39/f39/fZmZm39/fD5Dx2AAAAAV0Uk5TAAtAc6ZeVyCYAAAAAWJLR0QF+G/pxwAAADJJREFUCNdjSHMSYGBgUEljSGYAAzMGBwiDhUEBwmBiEIAwGBnIA3DtcAPhVsAthTkDAFOfBKW9C1iqAAAAAElFTkSuQmCC\");
    }
    .tree-details {
        border-left: 1px solid #dfdfdf;
        background: white;
        margin-left: 250px;
        padding: 30px 40px 40px;
    }
    .tree-details h3 {
        position: relative;
    }
    .tree-details .toggle-icon {
        width: 16px;
        height: 16px;
        /* vertically center the button */
        position: absolute;
        top: 50%;
        margin-top: -9px;
        margin-left: 6px;
    }
    .form-type {
        color: #999999;
    }
    .hidden {
        display: none;
    }
    .badge-error {
        float: right;
        background: #a33;
        color: #fff;
        padding: 1px 4px;
        font-size: 10px;
        font-weight: bold;
        vertical-align: middle;
        border-radius: 6px;
    }
    .errors h3 {
        color: #800;
    }
    .errors th, .errors td {
        border-color: #800;
    }
    .errors th {
        background: #a33;
        color: #fff;
    }
    .errors .toggle-icon {
        background-color: #a33;
    }
    h3 a, h3 a:hover, h3 a:focus {
        color: inherit;
        text-decoration: inherit;
    }
    </style>

    ";
        // line 181
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "data", array()), "forms", array()))) {
            // line 182
            echo "        <div class=\"window\">
            <div class=\"tree\">
                <h2>Forms</h2>

                <ul>
                ";
            // line 187
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "data", array()), "forms", array()));
            foreach ($context['_seq'] as $context["formName"] => $context["formData"]) {
                // line 188
                echo "                    ";
                echo $context["__internal_65a06926c69a70ff4796d749e7cda2fd59c9734555624261249debeb04ab921d"]->getform_tree_entry($context["formName"], $context["formData"], true);
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['formName'], $context['formData'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 190
            echo "                </ul>
            </div>

            ";
            // line 193
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "data", array()), "forms", array()));
            foreach ($context['_seq'] as $context["formName"] => $context["formData"]) {
                // line 194
                echo "                ";
                echo $context["__internal_65a06926c69a70ff4796d749e7cda2fd59c9734555624261249debeb04ab921d"]->getform_tree_details($context["formName"], $context["formData"], $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "data", array()), "forms_by_hash", array()));
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['formName'], $context['formData'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 196
            echo "        </div>
    ";
        } else {
            // line 198
            echo "        <p><em>No forms were submitted for this request.</em></p>
    ";
        }
        // line 200
        echo "
    <script>
    function Toggler(storage) {
        \"use strict\";

        var STORAGE_KEY = 'sf_toggle_data',

            states = {},

            isCollapsed = function (button) {
                return Sfjs.hasClass(button, 'closed');
            },

            isExpanded = function (button) {
                return !isCollapsed(button);
            },

            expand = function (button) {
                var targetId = button.dataset.toggleTargetId,
                    target = document.getElementById(targetId);

                if (!target) {
                    throw \"Toggle target \" + targetId + \" does not exist\";
                }

                if (isCollapsed(button)) {
                    Sfjs.removeClass(button, 'closed');
                    Sfjs.removeClass(target, 'hidden');

                    states[targetId] = 1;
                    storage.setItem(STORAGE_KEY, states);
                }
            },

            collapse = function (button) {
                var targetId = button.dataset.toggleTargetId,
                    target = document.getElementById(targetId);

                if (!target) {
                    throw \"Toggle target \" + targetId + \" does not exist\";
                }

                if (isExpanded(button)) {
                    Sfjs.addClass(button, 'closed');
                    Sfjs.addClass(target, 'hidden');

                    states[targetId] = 0;
                    storage.setItem(STORAGE_KEY, states);
                }
            },

            toggle = function (button) {
                if (Sfjs.hasClass(button, 'closed')) {
                    expand(button);
                } else {
                    collapse(button);
                }
            },

            initButtons = function (buttons) {
                states = storage.getItem(STORAGE_KEY, {});

                // must be an object, not an array or anything else
                // `typeof` returns \"object\" also for arrays, so the following
                // check must be done
                // see http://stackoverflow.com/questions/4775722/check-if-object-is-array
                if ('[object Object]' !== Object.prototype.toString.call(states)) {
                    states = {};
                }

                for (var i = 0, l = buttons.length; i < l; ++i) {
                    var targetId = buttons[i].dataset.toggleTargetId,
                        target = document.getElementById(targetId);

                    if (!target) {
                        throw \"Toggle target \" + targetId + \" does not exist\";
                    }

                    // correct the initial state of the button
                    if (Sfjs.hasClass(target, 'hidden')) {
                        Sfjs.addClass(buttons[i], 'closed');
                    }

                    // attach listener for expanding/collapsing the target
                    clickHandler(buttons[i], toggle);

                    if (states.hasOwnProperty(targetId)) {
                        // open or collapse based on stored data
                        if (0 === states[targetId]) {
                            collapse(buttons[i]);
                        } else {
                            expand(buttons[i]);
                        }
                    }
                }
            };

        return {
            initButtons: initButtons,

            toggle: toggle,

            isExpanded: isExpanded,

            isCollapsed: isCollapsed,

            expand: expand,

            collapse: collapse
        };
    }

    function JsonStorage(storage) {
        var setItem = function (key, data) {
                storage.setItem(key, JSON.stringify(data));
            },

            getItem = function (key, defaultValue) {
                var data = storage.getItem(key);

                if (null !== data) {
                    try {
                        return JSON.parse(data);
                    } catch(e) {
                    }
                }

                return defaultValue;
            };

        return {
            setItem: setItem,

            getItem: getItem
        };
    }

    function TabView() {
        \"use strict\";

        var activeTab = null,

            activeTarget = null,

            select = function (tab) {
                var targetId = tab.dataset.tabTargetId,
                    target = document.getElementById(targetId);

                if (!target) {
                    throw \"Tab target \" + targetId + \" does not exist\";
                }

                if (activeTab) {
                    Sfjs.removeClass(activeTab, 'active');
                }

                if (activeTarget) {
                    Sfjs.addClass(activeTarget, 'hidden');
                }

                Sfjs.addClass(tab, 'active');
                Sfjs.removeClass(target, 'hidden');

                activeTab = tab;
                activeTarget = target;
            },

            initTabs = function (tabs) {
                for (var i = 0, l = tabs.length; i < l; ++i) {
                    var targetId = tabs[i].dataset.tabTargetId,
                        target = document.getElementById(targetId);

                    if (!target) {
                        throw \"Tab target \" + targetId + \" does not exist\";
                    }

                    clickHandler(tabs[i], select);

                    Sfjs.addClass(target, 'hidden');
                }

                if (tabs.length > 0) {
                    select(tabs[0]);
                }
            };

        return {
            initTabs: initTabs,

            select: select
        };
    }

    var tabTarget = new TabView(),
        toggler = new Toggler(new JsonStorage(sessionStorage)),
        clickHandler = function (element, callback) {
            Sfjs.addEventListener(element, 'click', function (e) {
                if (!e) {
                    e = window.event;
                }

                callback(this);

                if (e.preventDefault) {
                    e.preventDefault();
                } else {
                    e.returnValue = false;
                }

                e.stopPropagation();

                return false;
            });
        };

    tabTarget.initTabs(document.querySelectorAll('.tree .tree-inner'));
    toggler.initButtons(document.querySelectorAll('a.toggle-button'));
    </script>
";
        
        $__internal_7c056bc010a0ff5e361ef793c6d8fc4132de57cb22d0dc742f9ba6461a367d9b->leave($__internal_7c056bc010a0ff5e361ef793c6d8fc4132de57cb22d0dc742f9ba6461a367d9b_prof);

    }

    // line 420
    public function getform_tree_entry($__name__ = null, $__data__ = null, $__expanded__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "data" => $__data__,
            "expanded" => $__expanded__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_129b83f2d663d386d8ebd7382549407a3688ac125256916ba178e394703763a0 = $this->env->getExtension("native_profiler");
            $__internal_129b83f2d663d386d8ebd7382549407a3688ac125256916ba178e394703763a0->enter($__internal_129b83f2d663d386d8ebd7382549407a3688ac125256916ba178e394703763a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "form_tree_entry"));

            // line 421
            echo "    <li>
        <div class=\"tree-inner\" data-tab-target-id=\"";
            // line 422
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "id", array()), "html", null, true);
            echo "-details\">
            ";
            // line 423
            if ( !twig_test_empty($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "children", array()))) {
                // line 424
                echo "                <a class=\"toggle-button\" data-toggle-target-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "id", array()), "html", null, true);
                echo "-children\" href=\"#\"><span class=\"toggle-icon\"></span></a>
            ";
            } else {
                // line 426
                echo "                <div class=\"toggle-icon empty\"></div>
            ";
            }
            // line 428
            echo "            ";
            echo twig_escape_filter($this->env, ((array_key_exists("name", $context)) ? (_twig_default_filter((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "(no name)")) : ("(no name)")), "html", null, true);
            echo " ";
            if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "type_class", array(), "any", true, true) && $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "type", array(), "any", true, true))) {
                echo "[<abbr title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "type_class", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "type", array()), "html", null, true);
                echo "</abbr>]";
            }
            // line 429
            echo "            ";
            if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "errors", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "errors", array())) > 0))) {
                // line 430
                echo "            <div class=\"badge-error\">";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "errors", array())), "html", null, true);
                echo "</div>
            ";
            }
            // line 432
            echo "        </div>

        ";
            // line 434
            if ( !twig_test_empty($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "children", array()))) {
                // line 435
                echo "            <ul id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "id", array()), "html", null, true);
                echo "-children\"";
                if ( !(isset($context["expanded"]) ? $context["expanded"] : $this->getContext($context, "expanded"))) {
                    echo " class=\"hidden\"";
                }
                echo ">
                ";
                // line 436
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "children", array()));
                foreach ($context['_seq'] as $context["childName"] => $context["childData"]) {
                    // line 437
                    echo "                    ";
                    echo $this->getAttribute($this, "form_tree_entry", array(0 => $context["childName"], 1 => $context["childData"], 2 => false), "method");
                    echo "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['childName'], $context['childData'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 439
                echo "            </ul>
        ";
            }
            // line 441
            echo "    </li>
";
            
            $__internal_129b83f2d663d386d8ebd7382549407a3688ac125256916ba178e394703763a0->leave($__internal_129b83f2d663d386d8ebd7382549407a3688ac125256916ba178e394703763a0_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 444
    public function getform_tree_details($__name__ = null, $__data__ = null, $__forms_by_hash__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "data" => $__data__,
            "forms_by_hash" => $__forms_by_hash__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_620063495d30638dac885a01fcabcd86dec206fb4f090659bac23c1b6151702b = $this->env->getExtension("native_profiler");
            $__internal_620063495d30638dac885a01fcabcd86dec206fb4f090659bac23c1b6151702b->enter($__internal_620063495d30638dac885a01fcabcd86dec206fb4f090659bac23c1b6151702b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "form_tree_details"));

            // line 445
            echo "    <div class=\"tree-details\" ";
            if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "id", array(), "any", true, true)) {
                echo " id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "id", array()), "html", null, true);
                echo "-details\"";
            }
            echo ">
        <h2>
            ";
            // line 447
            echo twig_escape_filter($this->env, ((array_key_exists("name", $context)) ? (_twig_default_filter((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "(no name)")) : ("(no name)")), "html", null, true);
            echo "
            ";
            // line 448
            if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "type_class", array(), "any", true, true) && $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "type", array(), "any", true, true))) {
                // line 449
                echo "            <span class=\"form-type\">[<abbr title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "type_class", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "type", array()), "html", null, true);
                echo "</abbr>]</span>
            ";
            }
            // line 451
            echo "        </h2>

        ";
            // line 453
            if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "errors", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "errors", array())) > 0))) {
                // line 454
                echo "        <div class=\"errors\">
            <h3>
                <a class=\"toggle-button\" data-toggle-target-id=\"";
                // line 456
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "id", array()), "html", null, true);
                echo "-errors\" href=\"#\">
                    Errors
                    <span class=\"toggle-icon\"></span>
                </a>
            </h3>

            <table id=\"";
                // line 462
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "id", array()), "html", null, true);
                echo "-errors\">
                <tr>
                    <th>Message</th>
                    <th>Origin</th>
                    <th>Cause</th>
                </tr>
                ";
                // line 468
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "errors", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 469
                    echo "                <tr>
                    <td>";
                    // line 470
                    echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                    echo "</td>
                    <td>
                        ";
                    // line 472
                    if (twig_test_empty($this->getAttribute($context["error"], "origin", array()))) {
                        // line 473
                        echo "                            <em>This form.</em>
                        ";
                    } elseif ( !$this->getAttribute(                    // line 474
(isset($context["forms_by_hash"]) ? $context["forms_by_hash"] : null), $this->getAttribute($context["error"], "origin", array()), array(), "array", true, true)) {
                        // line 475
                        echo "                            <em>Unknown.</em>
                        ";
                    } else {
                        // line 477
                        echo "                            ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["forms_by_hash"]) ? $context["forms_by_hash"] : $this->getContext($context, "forms_by_hash")), $this->getAttribute($context["error"], "origin", array()), array(), "array"), "name", array()), "html", null, true);
                        echo "
                        ";
                    }
                    // line 479
                    echo "                    </td>
                    <td>
                        ";
                    // line 481
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["error"], "trace", array()));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                        // line 482
                        echo "                            ";
                        if ( !$this->getAttribute($context["loop"], "first", array())) {
                            // line 483
                            echo "                                <br/>Caused by:<br/><br/>
                            ";
                        }
                        // line 485
                        echo "                            ";
                        if ($this->getAttribute($context["trace"], "root", array(), "any", true, true)) {
                            // line 486
                            echo "                                <strong>";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["trace"], "class", array()), "html", null, true);
                            echo "</strong><br/>
                                <pre>";
                            // line 488
                            echo twig_escape_filter($this->env, $this->getAttribute($context["trace"], "root", array()), "html", null, true);
                            // line 489
                            if ( !twig_test_empty($this->getAttribute($context["trace"], "path", array()))) {
                                // line 490
                                if ((twig_first($this->env, $this->getAttribute($context["trace"], "path", array())) != "[")) {
                                    echo ".";
                                }
                                // line 491
                                echo twig_escape_filter($this->env, $this->getAttribute($context["trace"], "path", array()), "html", null, true);
                            }
                            // line 492
                            echo " = ";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["trace"], "value", array()), "html", null, true);
                            // line 493
                            echo "</pre>
                            ";
                        } elseif ($this->getAttribute(                        // line 494
$context["trace"], "message", array(), "any", true, true)) {
                            // line 495
                            echo "                                <strong>";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["trace"], "class", array()), "html", null, true);
                            echo "</strong><br/>
                                <pre>";
                            // line 496
                            echo twig_escape_filter($this->env, $this->getAttribute($context["trace"], "message", array()), "html", null, true);
                            echo "</pre>
                            ";
                        } else {
                            // line 498
                            echo "                                <pre>";
                            echo twig_escape_filter($this->env, $context["trace"], "html", null, true);
                            echo "</pre>
                            ";
                        }
                        // line 500
                        echo "                        ";
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
                        // line 501
                        echo "                            <em>Unknown.</em>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 503
                    echo "                    </td>
                </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 506
                echo "            </table>
        </div>
        ";
            }
            // line 509
            echo "
        ";
            // line 510
            if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "default_data", array(), "any", true, true)) {
                // line 511
                echo "        <h3>
            <a class=\"toggle-button\" data-toggle-target-id=\"";
                // line 512
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "id", array()), "html", null, true);
                echo "-default_data\" href=\"#\">
                Default Data
                <span class=\"toggle-icon\"></span>
            </a>
        </h3>

        <div id=\"";
                // line 518
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "id", array()), "html", null, true);
                echo "-default_data\">
            <table>
                <tr>
                    <th width=\"180\">Model Format</th>
                    <td>
                        ";
                // line 523
                if ($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "default_data", array(), "any", false, true), "model", array(), "any", true, true)) {
                    // line 524
                    echo "                            <pre>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "default_data", array()), "model", array()), "html", null, true);
                    echo "</pre>
                        ";
                } else {
                    // line 526
                    echo "                            <em>same as normalized format</em>
                        ";
                }
                // line 528
                echo "                    </td>
                </tr>
                <tr>
                    <th>Normalized Format</th>
                    <td><pre>";
                // line 532
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "default_data", array()), "norm", array()), "html", null, true);
                echo "</pre></td>
                </tr>
                <tr>
                    <th>View Format</th>
                    <td>
                        ";
                // line 537
                if ($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "default_data", array(), "any", false, true), "view", array(), "any", true, true)) {
                    // line 538
                    echo "                            <pre>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "default_data", array()), "view", array()), "html", null, true);
                    echo "</pre>
                        ";
                } else {
                    // line 540
                    echo "                            <em>same as normalized format</em>
                        ";
                }
                // line 542
                echo "                    </td>
                </tr>
            </table>
        </div>
        ";
            }
            // line 547
            echo "
        ";
            // line 548
            if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "submitted_data", array(), "any", true, true)) {
                // line 549
                echo "        <h3>
            <a class=\"toggle-button\" data-toggle-target-id=\"";
                // line 550
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "id", array()), "html", null, true);
                echo "-submitted_data\" href=\"#\">
                Submitted Data
                <span class=\"toggle-icon\"></span>
            </a>
        </h3>

        <div id=\"";
                // line 556
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "id", array()), "html", null, true);
                echo "-submitted_data\">
        ";
                // line 557
                if ($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "submitted_data", array(), "any", false, true), "norm", array(), "any", true, true)) {
                    // line 558
                    echo "            <table>
                <tr>
                    <th width=\"180\">View Format</th>
                    <td>
                        ";
                    // line 562
                    if ($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "submitted_data", array(), "any", false, true), "view", array(), "any", true, true)) {
                        // line 563
                        echo "                            <pre>";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "submitted_data", array()), "view", array()), "html", null, true);
                        echo "</pre>
                        ";
                    } else {
                        // line 565
                        echo "                            <em>same as normalized format</em>
                        ";
                    }
                    // line 567
                    echo "                    </td>
                </tr>
                <tr>
                    <th>Normalized Format</th>
                    <td><pre>";
                    // line 571
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "submitted_data", array()), "norm", array()), "html", null, true);
                    echo "</pre></td>
                </tr>
                <tr>
                    <th>Model Format</th>
                    <td>
                        ";
                    // line 576
                    if ($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "submitted_data", array(), "any", false, true), "model", array(), "any", true, true)) {
                        // line 577
                        echo "                            <pre>";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "submitted_data", array()), "model", array()), "html", null, true);
                        echo "</pre>
                        ";
                    } else {
                        // line 579
                        echo "                            <em>same as normalized format</em>
                        ";
                    }
                    // line 581
                    echo "                    </td>
                </tr>
            </table>
        ";
                } else {
                    // line 585
                    echo "            <p><em>This form was not submitted.</em></p>
        ";
                }
                // line 587
                echo "        </div>
        ";
            }
            // line 589
            echo "
        ";
            // line 590
            if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "passed_options", array(), "any", true, true)) {
                // line 591
                echo "        <h3>
            <a class=\"toggle-button\" data-toggle-target-id=\"";
                // line 592
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "id", array()), "html", null, true);
                echo "-passed_options\" href=\"#\">
                Passed Options
                <span class=\"toggle-icon\"></span>
            </a>
        </h3>

        <div id=\"";
                // line 598
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "id", array()), "html", null, true);
                echo "-passed_options\">
            ";
                // line 599
                if (twig_length_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "passed_options", array()))) {
                    // line 600
                    echo "            <table>
                <tr>
                    <th width=\"180\">Option</th>
                    <th>Passed Value</th>
                    <th>Resolved Value</th>
                </tr>
                ";
                    // line 606
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "passed_options", array()));
                    foreach ($context['_seq'] as $context["option"] => $context["value"]) {
                        // line 607
                        echo "                <tr>
                    <th>";
                        // line 608
                        echo twig_escape_filter($this->env, $context["option"], "html", null, true);
                        echo "</th>
                    <td><pre>";
                        // line 609
                        echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                        echo "</pre></td>
                    <td>
                        ";
                        // line 611
                        if (($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "resolved_options", array()), $context["option"], array(), "array") === $context["value"])) {
                            // line 612
                            echo "                            <em>same as passed value</em>
                        ";
                        } else {
                            // line 614
                            echo "                            <pre>";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "resolved_options", array()), $context["option"], array(), "array"), "html", null, true);
                            echo "</pre>
                        ";
                        }
                        // line 616
                        echo "                    </td>
                </tr>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['option'], $context['value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 619
                    echo "            </table>
            ";
                } else {
                    // line 621
                    echo "            <p><em>No options where passed when constructing this form.</em></p>
            ";
                }
                // line 623
                echo "        </div>
        ";
            }
            // line 625
            echo "
        ";
            // line 626
            if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "resolved_options", array(), "any", true, true)) {
                // line 627
                echo "        <h3>
            <a class=\"toggle-button\" data-toggle-target-id=\"";
                // line 628
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "id", array()), "html", null, true);
                echo "-resolved_options\" href=\"#\">
                Resolved Options
                <span class=\"toggle-icon\"></span>
            </a>
        </h3>

        <div id=\"";
                // line 634
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "id", array()), "html", null, true);
                echo "-resolved_options\" class=\"hidden\">
            <table>
                <tr>
                    <th width=\"180\">Option</th>
                    <th>Value</th>
                </tr>
                ";
                // line 640
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "resolved_options", array()));
                foreach ($context['_seq'] as $context["option"] => $context["value"]) {
                    // line 641
                    echo "                <tr>
                    <th>";
                    // line 642
                    echo twig_escape_filter($this->env, $context["option"], "html", null, true);
                    echo "</th>
                    <td><pre>";
                    // line 643
                    echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                    echo "</pre></td>
                </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['option'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 646
                echo "            </table>
        </div>
        ";
            }
            // line 649
            echo "
        ";
            // line 650
            if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "view_vars", array(), "any", true, true)) {
                // line 651
                echo "        <h3>
            <a class=\"toggle-button\" data-toggle-target-id=\"";
                // line 652
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "id", array()), "html", null, true);
                echo "-view_vars\" href=\"#\">
                View Variables
                <span class=\"toggle-icon\"></span>
            </a>
        </h3>

        <div id=\"";
                // line 658
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "id", array()), "html", null, true);
                echo "-view_vars\" class=\"hidden\">
            <table>
                <tr>
                    <th width=\"180\">Variable</th>
                    <th>Value</th>
                </tr>
                ";
                // line 664
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "view_vars", array()));
                foreach ($context['_seq'] as $context["variable"] => $context["value"]) {
                    // line 665
                    echo "                <tr>
                    <th>";
                    // line 666
                    echo twig_escape_filter($this->env, $context["variable"], "html", null, true);
                    echo "</th>
                    <td><pre>";
                    // line 667
                    echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                    echo "</pre></td>
                </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['variable'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 670
                echo "            </table>
        </div>
        ";
            }
            // line 673
            echo "    </div>

    ";
            // line 675
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "children", array()));
            foreach ($context['_seq'] as $context["childName"] => $context["childData"]) {
                // line 676
                echo "        ";
                echo $this->getAttribute($this, "form_tree_details", array(0 => $context["childName"], 1 => $context["childData"], 2 => (isset($context["forms_by_hash"]) ? $context["forms_by_hash"] : $this->getContext($context, "forms_by_hash"))), "method");
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['childName'], $context['childData'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_620063495d30638dac885a01fcabcd86dec206fb4f090659bac23c1b6151702b->leave($__internal_620063495d30638dac885a01fcabcd86dec206fb4f090659bac23c1b6151702b_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1188 => 676,  1184 => 675,  1180 => 673,  1175 => 670,  1166 => 667,  1162 => 666,  1159 => 665,  1155 => 664,  1146 => 658,  1137 => 652,  1134 => 651,  1132 => 650,  1129 => 649,  1124 => 646,  1115 => 643,  1111 => 642,  1108 => 641,  1104 => 640,  1095 => 634,  1086 => 628,  1083 => 627,  1081 => 626,  1078 => 625,  1074 => 623,  1070 => 621,  1066 => 619,  1058 => 616,  1052 => 614,  1048 => 612,  1046 => 611,  1041 => 609,  1037 => 608,  1034 => 607,  1030 => 606,  1022 => 600,  1020 => 599,  1016 => 598,  1007 => 592,  1004 => 591,  1002 => 590,  999 => 589,  995 => 587,  991 => 585,  985 => 581,  981 => 579,  975 => 577,  973 => 576,  965 => 571,  959 => 567,  955 => 565,  949 => 563,  947 => 562,  941 => 558,  939 => 557,  935 => 556,  926 => 550,  923 => 549,  921 => 548,  918 => 547,  911 => 542,  907 => 540,  901 => 538,  899 => 537,  891 => 532,  885 => 528,  881 => 526,  875 => 524,  873 => 523,  865 => 518,  856 => 512,  853 => 511,  851 => 510,  848 => 509,  843 => 506,  835 => 503,  828 => 501,  815 => 500,  809 => 498,  804 => 496,  799 => 495,  797 => 494,  794 => 493,  791 => 492,  788 => 491,  784 => 490,  782 => 489,  780 => 488,  775 => 486,  772 => 485,  768 => 483,  765 => 482,  747 => 481,  743 => 479,  737 => 477,  733 => 475,  731 => 474,  728 => 473,  726 => 472,  721 => 470,  718 => 469,  714 => 468,  705 => 462,  696 => 456,  692 => 454,  690 => 453,  686 => 451,  678 => 449,  676 => 448,  672 => 447,  662 => 445,  646 => 444,  631 => 441,  627 => 439,  618 => 437,  614 => 436,  605 => 435,  603 => 434,  599 => 432,  593 => 430,  590 => 429,  579 => 428,  575 => 426,  569 => 424,  567 => 423,  563 => 422,  560 => 421,  544 => 420,  319 => 200,  315 => 198,  311 => 196,  302 => 194,  298 => 193,  293 => 190,  284 => 188,  280 => 187,  273 => 182,  271 => 181,  115 => 27,  109 => 26,  101 => 23,  95 => 21,  93 => 20,  88 => 17,  82 => 16,  74 => 13,  72 => 12,  69 => 11,  54 => 9,  51 => 8,  48 => 7,  45 => 6,  39 => 5,  32 => 1,  30 => 3,  11 => 1,);
    }
}
