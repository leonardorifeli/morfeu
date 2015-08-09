<?php

/* @WebProfiler/Collector/time.html.twig */
class __TwigTemplate_6ac6de3244cd306f034894317917dfdf16ddb4729687c86a99664cdd41fd37fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/time.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
            'panelContent' => array($this, 'block_panelContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_35714314cf3aa6a88245294760b55e4057cd718e9bb9a4583eb2f3e0febeb4d2 = $this->env->getExtension("native_profiler");
        $__internal_35714314cf3aa6a88245294760b55e4057cd718e9bb9a4583eb2f3e0febeb4d2->enter($__internal_35714314cf3aa6a88245294760b55e4057cd718e9bb9a4583eb2f3e0febeb4d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/time.html.twig"));

        // line 3
        $context["__internal_efc23764d302dabd9b2dc05743d4169bed4db330909cc88cd0b3c7253f8784db"] = $this;
        // line 5
        if ( !array_key_exists("colors", $context)) {
            // line 6
            $context["colors"] = array("default" => "#aacd4e", "section" => "#666", "event_listener" => "#3dd", "event_listener_loading" => "#add", "template" => "#dd3", "doctrine" => "#d3d", "propel" => "#f4d", "child_sections" => "#eed");
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35714314cf3aa6a88245294760b55e4057cd718e9bb9a4583eb2f3e0febeb4d2->leave($__internal_35714314cf3aa6a88245294760b55e4057cd718e9bb9a4583eb2f3e0febeb4d2_prof);

    }

    // line 18
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_81119e21d6c38fac28c8083dee0851cceb6e726e1a32cbd2ca05a45c87964426 = $this->env->getExtension("native_profiler");
        $__internal_81119e21d6c38fac28c8083dee0851cceb6e726e1a32cbd2ca05a45c87964426->enter($__internal_81119e21d6c38fac28c8083dee0851cceb6e726e1a32cbd2ca05a45c87964426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 19
        echo "    ";
        $context["duration"] = ((twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "events", array()))) ? (sprintf("%.0f ms", $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "duration", array()))) : ("n/a"));
        // line 20
        echo "    ";
        ob_start();
        // line 21
        echo "        <svg width=\"16\" height=\"28\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 16 28\" enable-background=\"new 0 0 16 28\" xml:space=\"preserve\"><rect x=\"6\" y=\"4\" fill=\"#3F3F3F\" width=\"4\" height=\"2\"/><path fill=\"#3F3F3F\" d=\"M8 7c-4.4 0-8 3.6-8 8s3.6 8 8 8s8-3.6 8-8S12.4 7 8 7z M12 16H9H7v-6h2v4h3V16z\"/></svg>
        <span>";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["duration"]) ? $context["duration"] : $this->getContext($context, "duration")), "html", null, true);
        echo "</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 24
        echo "    ";
        ob_start();
        // line 25
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Total time</b>
            <span>";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["duration"]) ? $context["duration"] : $this->getContext($context, "duration")), "html", null, true);
        echo "</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 30
        echo "    ";
        $this->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig", "@WebProfiler/Collector/time.html.twig", 30)->display(array_merge($context, array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")))));
        
        $__internal_81119e21d6c38fac28c8083dee0851cceb6e726e1a32cbd2ca05a45c87964426->leave($__internal_81119e21d6c38fac28c8083dee0851cceb6e726e1a32cbd2ca05a45c87964426_prof);

    }

    // line 33
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3d3e6433689ff8cf094a1c3d341b949b92ae0074d484a122336ab3d15c26f4f4 = $this->env->getExtension("native_profiler");
        $__internal_3d3e6433689ff8cf094a1c3d341b949b92ae0074d484a122336ab3d15c26f4f4->enter($__internal_3d3e6433689ff8cf094a1c3d341b949b92ae0074d484a122336ab3d15c26f4f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 34
        echo "<span class=\"label\">
    <span class=\"icon\"><svg width=\"30\" height=\"33\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 30 33\" enable-background=\"new 0 0 30 33\" xml:space=\"preserve\"><rect x=\"11\" y=\"2\" fill=\"#3F3F3F\" width=\"8\" height=\"3\"/><path fill=\"#3F3F3F\" d=\"M15 6.1c-6.6 0-12 5.4-12 12s5.4 12 12 12s12-5.4 12-12S21.6 6.1 15 6.1z M22 20h-6h-3V10h3v7h6V20z\"/></svg></span>
    <strong>Timeline</strong>
</span>
";
        
        $__internal_3d3e6433689ff8cf094a1c3d341b949b92ae0074d484a122336ab3d15c26f4f4->leave($__internal_3d3e6433689ff8cf094a1c3d341b949b92ae0074d484a122336ab3d15c26f4f4_prof);

    }

    // line 40
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3871c0d515f5f4d623259491c908802b5a7021caf0605ba5dbf7a0d75add773b = $this->env->getExtension("native_profiler");
        $__internal_3871c0d515f5f4d623259491c908802b5a7021caf0605ba5dbf7a0d75add773b->enter($__internal_3871c0d515f5f4d623259491c908802b5a7021caf0605ba5dbf7a0d75add773b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 41
        echo "    <h2>Timeline</h2>
    ";
        // line 42
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "events", array()))) {
            // line 43
            echo "        ";
            $this->displayBlock("panelContent", $context, $blocks);
            echo "
    ";
        } else {
            // line 45
            echo "        <p>
            <em>No timing events have been recorded. Are you sure that debugging is enabled in the kernel?</em>
        </p>
    ";
        }
        
        $__internal_3871c0d515f5f4d623259491c908802b5a7021caf0605ba5dbf7a0d75add773b->leave($__internal_3871c0d515f5f4d623259491c908802b5a7021caf0605ba5dbf7a0d75add773b_prof);

    }

    // line 51
    public function block_panelContent($context, array $blocks = array())
    {
        $__internal_8555038f116f2445716fb83d9f62b24421f981418d0b108f3e2ac7bfd9256c7b = $this->env->getExtension("native_profiler");
        $__internal_8555038f116f2445716fb83d9f62b24421f981418d0b108f3e2ac7bfd9256c7b->enter($__internal_8555038f116f2445716fb83d9f62b24421f981418d0b108f3e2ac7bfd9256c7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panelContent"));

        // line 52
        echo "    <form id=\"timeline-control\" action=\"\" method=\"get\">
        <input type=\"hidden\" name=\"panel\" value=\"time\">
        <table>
            <tr>
                <th style=\"width: 20%\">Total time</th>
                <td>";
        // line 57
        echo twig_escape_filter($this->env, sprintf("%.0f", $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "duration", array())), "html", null, true);
        echo " ms</td>
            </tr>
            <tr>
                <th>Initialization time</th>
                <td>";
        // line 61
        echo twig_escape_filter($this->env, sprintf("%.0f", $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "inittime", array())), "html", null, true);
        echo " ms</td>
            </tr>
            <tr>
                <th>Threshold</th>
                <td><input type=\"number\" size=\"3\" name=\"threshold\" value=\"1\" min=\"0\"> ms</td>
            </tr>
        </table>
    </form>

    <h3>
        ";
        // line 71
        echo (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "parent", array())) ? ("Request") : ("Main Request"));
        echo "
        <small>
            - ";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "events", array()), "__section__", array()), "duration", array()), "html", null, true);
        echo " ms
            ";
        // line 74
        if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "parent", array())) {
            // line 75
            echo "                - <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "parent", array()), "token", array()), "panel" => "time")), "html", null, true);
            echo "\">parent</a>
            ";
        }
        // line 77
        echo "        </small>
    </h3>

    ";
        // line 80
        echo $context["__internal_efc23764d302dabd9b2dc05743d4169bed4db330909cc88cd0b3c7253f8784db"]->getdisplay_timeline(("timeline_" . (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token"))), $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "events", array()), (isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")));
        echo "

    ";
        // line 82
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "children", array()))) {
            // line 83
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 84
                echo "            ";
                $context["events"] = $this->getAttribute($this->getAttribute($context["child"], "getcollector", array(0 => "time"), "method"), "events", array());
                // line 85
                echo "            <h3>
                Sub-request \"<a href=\"";
                // line 86
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getAttribute($context["child"], "token", array()), "panel" => "time")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["child"], "getcollector", array(0 => "request"), "method"), "requestattributes", array()), "get", array(0 => "_controller"), "method"), "html", null, true);
                echo "</a>\"
                <small> - ";
                // line 87
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")), "__section__", array()), "duration", array()), "html", null, true);
                echo " ms</small>
            </h3>

            ";
                // line 90
                echo $context["__internal_efc23764d302dabd9b2dc05743d4169bed4db330909cc88cd0b3c7253f8784db"]->getdisplay_timeline(("timeline_" . $this->getAttribute($context["child"], "token", array())), (isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")), (isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")));
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "    ";
        }
        // line 93
        echo "
    <script>";
        // line 94
        echo "//<![CDATA[
        /**
         * In-memory key-value cache manager
         */
        var cache = new function() {
            \"use strict\";
            var dict = {};

            this.get = function(key) {
                return dict.hasOwnProperty(key)
                    ? dict[key]
                    : null;
                };

            this.set = function(key, value) {
                dict[key] = value;

                return value;
            };
        };

        /**
         * Query an element with a CSS selector.
         *
         * @param string selector a CSS-selector-compatible query string.
         *
         * @return DOMElement|null
         */
        function query(selector)
        {
            \"use strict\";
            var key = 'SELECTOR: ' + selector;

            return cache.get(key) || cache.set(key, document.querySelector(selector));
        }

        /**
         * Canvas Manager
         */
        function CanvasManager(requests, maxRequestTime) {
            \"use strict\";

            var _drawingColors = ";
        // line 136
        echo twig_jsonencode_filter((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")));
        echo ",
                _storagePrefix = 'timeline/',
                _threshold = 1,
                _requests = requests,
                _maxRequestTime = maxRequestTime;

            /**
             * Check whether this event is a child event.
             *
             * @return true if it is.
             */
            function isChildEvent(event)
            {
                return '__section__.child' === event.name;
            }

            /**
             * Check whether this event is categorized in 'section'.
             *
             * @return true if it is.
             */
            function isSectionEvent(event)
            {
                return 'section' === event.category;
            }

            /**
             * Get the width of the container.
             */
            function getContainerWidth()
            {
                return query('#collector-content h2').clientWidth;
            }

            /**
             * Draw one canvas.
             *
             * @param request   the request object
             * @param max       <subjected for removal>
             * @param threshold the threshold (lower bound) of the length of the timeline (in milliseconds).
             * @param width     the width of the canvas.
             */
            this.drawOne = function(request, max, threshold, width)
            {
                \"use strict\";
                var text,
                    ms,
                    xc,
                    drawableEvents,
                    mainEvents,
                    elementId = 'timeline_' + request.id,
                    canvasHeight = 0,
                    gapPerEvent = 38,
                    colors = _drawingColors,
                    space = 10.5,
                    ratio = (width - space * 2) / max,
                    h = space,
                    x = request.left * ratio + space, // position
                    canvas = cache.get(elementId) || cache.set(elementId, document.getElementById(elementId)),
                    ctx = canvas.getContext(\"2d\"),
                    scaleRatio,
                    devicePixelRatio;

                // Filter events whose total time is below the threshold.
                drawableEvents = request.events.filter(function(event) {
                    return event.duration >= threshold;
                });

                canvasHeight += gapPerEvent * drawableEvents.length;

                // For retina displays so text and boxes will be crisp
                devicePixelRatio = window.devicePixelRatio == \"undefined\" ? 1 : window.devicePixelRatio;
                scaleRatio = devicePixelRatio / 1;

                canvas.width = width * scaleRatio;
                canvas.height = canvasHeight * scaleRatio;

                canvas.style.width = width + 'px';
                canvas.style.height = canvasHeight + 'px';

                ctx.scale(scaleRatio, scaleRatio);

                ctx.textBaseline = \"middle\";
                ctx.lineWidth = 0;

                // For each event, draw a line.
                ctx.strokeStyle = \"#dfdfdf\";

                drawableEvents.forEach(function(event) {
                    event.periods.forEach(function(period) {
                        var timelineHeadPosition = x + period.start * ratio;

                        if (isChildEvent(event)) {
                            ctx.fillStyle = colors.child_sections;
                            ctx.fillRect(timelineHeadPosition, 0, (period.end - period.start) * ratio, canvasHeight);
                        } else if (isSectionEvent(event)) {
                            var timelineTailPosition = x + period.end * ratio;

                            ctx.beginPath();
                            ctx.moveTo(timelineHeadPosition, 0);
                            ctx.lineTo(timelineHeadPosition, canvasHeight);
                            ctx.moveTo(timelineTailPosition, 0);
                            ctx.lineTo(timelineTailPosition, canvasHeight);
                            ctx.fill();
                            ctx.closePath();
                            ctx.stroke();
                        }
                    });
                });

                // Filter for main events.
                mainEvents = drawableEvents.filter(function(event) {
                    return !isChildEvent(event)
                });

                // For each main event, draw the visual presentation of timelines.
                mainEvents.forEach(function(event) {

                    h += 8;

                    // For each sub event, ...
                    event.periods.forEach(function(period) {
                        // Set the drawing style.
                        ctx.fillStyle = colors['default'];
                        ctx.strokeStyle = colors['default'];

                        if (colors[event.name]) {
                            ctx.fillStyle = colors[event.name];
                            ctx.strokeStyle = colors[event.name];
                        } else if (colors[event.category]) {
                            ctx.fillStyle = colors[event.category];
                            ctx.strokeStyle = colors[event.category];
                        }

                        // Draw the timeline
                        var timelineHeadPosition = x + period.start * ratio;

                        if (!isSectionEvent(event)) {
                            ctx.fillRect(timelineHeadPosition, h + 3, 2, 6);
                            ctx.fillRect(timelineHeadPosition, h, (period.end - period.start) * ratio || 2, 6);
                        } else {
                            var timelineTailPosition = x + period.end * ratio;

                            ctx.beginPath();
                            ctx.moveTo(timelineHeadPosition, h);
                            ctx.lineTo(timelineHeadPosition, h + 11);
                            ctx.lineTo(timelineHeadPosition + 8, h);
                            ctx.lineTo(timelineHeadPosition, h);
                            ctx.fill();
                            ctx.closePath();
                            ctx.stroke();

                            ctx.beginPath();
                            ctx.moveTo(timelineTailPosition, h);
                            ctx.lineTo(timelineTailPosition, h + 11);
                            ctx.lineTo(timelineTailPosition - 8, h);
                            ctx.lineTo(timelineTailPosition, h);
                            ctx.fill();
                            ctx.closePath();
                            ctx.stroke();

                            ctx.beginPath();
                            ctx.moveTo(timelineHeadPosition, h);
                            ctx.lineTo(timelineTailPosition, h);
                            ctx.lineTo(timelineTailPosition, h + 2);
                            ctx.lineTo(timelineHeadPosition, h + 2);
                            ctx.lineTo(timelineHeadPosition, h);
                            ctx.fill();
                            ctx.closePath();
                            ctx.stroke();
                        }
                    });

                    h += 30;

                    ctx.beginPath();
                    ctx.strokeStyle = \"#dfdfdf\";
                    ctx.moveTo(0, h - 10);
                    ctx.lineTo(width, h - 10);
                    ctx.closePath();
                    ctx.stroke();
                });

                h = space;

                // For each event, draw the label.
                mainEvents.forEach(function(event) {

                    ctx.fillStyle = \"#444\";
                    ctx.font = \"12px sans-serif\";
                    text = event.name;
                    ms = \" ~ \" + (event.duration < 1 ? event.duration : parseInt(event.duration, 10)) + \" ms / ~ \" + event.memory + \" MB\";
                    if (x + event.starttime * ratio + ctx.measureText(text + ms).width > width) {
                        ctx.textAlign = \"end\";
                        ctx.font = \"10px sans-serif\";
                        xc = x + event.endtime * ratio - 1;
                        ctx.fillText(ms, xc, h);

                        xc -= ctx.measureText(ms).width;
                        ctx.font = \"12px sans-serif\";
                        ctx.fillText(text, xc, h);
                    } else {
                        ctx.textAlign = \"start\";
                        ctx.font = \"12px sans-serif\";
                        xc = x + event.starttime * ratio + 1;
                        ctx.fillText(text, xc, h);

                        xc += ctx.measureText(text).width;
                        ctx.font = \"10px sans-serif\";
                        ctx.fillText(ms, xc, h);
                    }

                    h += gapPerEvent;
                });
            };

            this.drawAll = function(width, threshold)
            {
                \"use strict\";

                width = width || getContainerWidth();
                threshold = threshold || this.getThreshold();

                var self = this;

                _requests.forEach(function(request) {
                    self.drawOne(request, _maxRequestTime, threshold, width);
                });
            };

            this.getThreshold = function() {
                var threshold = Sfjs.getPreference(_storagePrefix + 'threshold');

                if (null === threshold) {
                    return _threshold;
                }

                _threshold = parseInt(threshold);

                return _threshold;
            };

            this.setThreshold = function(threshold)
            {
                _threshold = threshold;

                Sfjs.setPreference(_storagePrefix + 'threshold', threshold);

                return this;
            };
        }

        function canvasAutoUpdateOnResizeAndSubmit(e) {
            e.preventDefault();
            canvasManager.drawAll();
        }

        function canvasAutoUpdateOnThresholdChange(e) {
            canvasManager
                .setThreshold(query('input[name=\"threshold\"]').value)
                .drawAll();
        }

        var requests_data = {
            \"max\": ";
        // line 400
        echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "events", array()), "__section__", array()), "endtime", array())), "js", null, true);
        echo ",
            \"requests\": [
";
        // line 402
        echo $context["__internal_efc23764d302dabd9b2dc05743d4169bed4db330909cc88cd0b3c7253f8784db"]->getdump_request_data((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), (isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "events", array()), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "events", array()), "__section__", array()), "origin", array()));
        echo "

";
        // line 404
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "children", array()))) {
            // line 405
            echo "                ,
";
            // line 406
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "children", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 407
                echo $context["__internal_efc23764d302dabd9b2dc05743d4169bed4db330909cc88cd0b3c7253f8784db"]->getdump_request_data($this->getAttribute($context["child"], "token", array()), $context["child"], $this->getAttribute($this->getAttribute($context["child"], "getcollector", array(0 => "time"), "method"), "events", array()), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "events", array()), "__section__", array()), "origin", array()));
                echo (($this->getAttribute($context["loop"], "last", array())) ? ("") : (","));
                echo "
";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 410
        echo "            ]
        };

        var canvasManager = new CanvasManager(requests_data.requests, requests_data.max);

        query('input[name=\"threshold\"]').value = canvasManager.getThreshold();
        canvasManager.drawAll();

        // Update the colors of legends.
        var timelineLegends = document.querySelectorAll('.sf-profiler-timeline > .legends > span[data-color]');

        for (var i = 0; i < timelineLegends.length; ++i) {
            var timelineLegend = timelineLegends[i];

            timelineLegend.style.borderLeftColor = timelineLegend.getAttribute('data-color');
        }

        // Bind event handlers
        var elementTimelineControl = query('#timeline-control'),
            elementThresholdControl = query('input[name=\"threshold\"]');

        window.onresize = canvasAutoUpdateOnResizeAndSubmit;
        elementTimelineControl.onsubmit = canvasAutoUpdateOnResizeAndSubmit;

        elementThresholdControl.onclick = canvasAutoUpdateOnThresholdChange;
        elementThresholdControl.onchange = canvasAutoUpdateOnThresholdChange;
        elementThresholdControl.onkeyup = canvasAutoUpdateOnThresholdChange;

        window.setTimeout(function() {
            canvasAutoUpdateOnThresholdChange(null);
        }, 50);

    //]]>";
        // line 442
        echo "</script>
";
        
        $__internal_8555038f116f2445716fb83d9f62b24421f981418d0b108f3e2ac7bfd9256c7b->leave($__internal_8555038f116f2445716fb83d9f62b24421f981418d0b108f3e2ac7bfd9256c7b_prof);

    }

    // line 445
    public function getdump_request_data($__token__ = null, $__profile__ = null, $__events__ = null, $__origin__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "token" => $__token__,
            "profile" => $__profile__,
            "events" => $__events__,
            "origin" => $__origin__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_eec4a5e73815e4f842360f769496b1ad9eece9bdfd3136ba6b1dad3552007811 = $this->env->getExtension("native_profiler");
            $__internal_eec4a5e73815e4f842360f769496b1ad9eece9bdfd3136ba6b1dad3552007811->enter($__internal_eec4a5e73815e4f842360f769496b1ad9eece9bdfd3136ba6b1dad3552007811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "dump_request_data"));

            // line 447
            $context["__internal_ffd04da7927bb5f0e5ac26cc1ae2b1da318e9884e1b5653d682f9779c649c2dd"] = $this;
            // line 448
            echo "                {
                    \"id\": \"";
            // line 449
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "js", null, true);
            echo "\",
                    \"left\": ";
            // line 450
            echo twig_escape_filter($this->env, sprintf("%F", ($this->getAttribute($this->getAttribute((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")), "__section__", array()), "origin", array()) - (isset($context["origin"]) ? $context["origin"] : $this->getContext($context, "origin")))), "js", null, true);
            echo ",
                    \"events\": [
";
            // line 452
            echo $context["__internal_ffd04da7927bb5f0e5ac26cc1ae2b1da318e9884e1b5653d682f9779c649c2dd"]->getdump_events((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")));
            echo "
                    ]
                }
";
            
            $__internal_eec4a5e73815e4f842360f769496b1ad9eece9bdfd3136ba6b1dad3552007811->leave($__internal_eec4a5e73815e4f842360f769496b1ad9eece9bdfd3136ba6b1dad3552007811_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 458
    public function getdump_events($__events__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "events" => $__events__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_5e33e5c06e3040025a9cdcd6789555449d166ef48e6d1fdaac09c735c36ed001 = $this->env->getExtension("native_profiler");
            $__internal_5e33e5c06e3040025a9cdcd6789555449d166ef48e6d1fdaac09c735c36ed001->enter($__internal_5e33e5c06e3040025a9cdcd6789555449d166ef48e6d1fdaac09c735c36ed001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "dump_events"));

            // line 460
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")));
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
            foreach ($context['_seq'] as $context["name"] => $context["event"]) {
                // line 461
                if (("__section__" != $context["name"])) {
                    // line 462
                    echo "                        {
                            \"name\": \"";
                    // line 463
                    echo twig_escape_filter($this->env, $context["name"], "js", null, true);
                    echo "\",
                            \"category\": \"";
                    // line 464
                    echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "category", array()), "js", null, true);
                    echo "\",
                            \"origin\": ";
                    // line 465
                    echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute($context["event"], "origin", array())), "js", null, true);
                    echo ",
                            \"starttime\": ";
                    // line 466
                    echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute($context["event"], "starttime", array())), "js", null, true);
                    echo ",
                            \"endtime\": ";
                    // line 467
                    echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute($context["event"], "endtime", array())), "js", null, true);
                    echo ",
                            \"duration\": ";
                    // line 468
                    echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute($context["event"], "duration", array())), "js", null, true);
                    echo ",
                            \"memory\": ";
                    // line 469
                    echo twig_escape_filter($this->env, sprintf("%.1F", (($this->getAttribute($context["event"], "memory", array()) / 1024) / 1024)), "js", null, true);
                    echo ",
                            \"periods\": [";
                    // line 471
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["event"], "periods", array()));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["period"]) {
                        // line 472
                        echo "{\"start\": ";
                        echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute($context["period"], "starttime", array())), "js", null, true);
                        echo ", \"end\": ";
                        echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute($context["period"], "endtime", array())), "js", null, true);
                        echo "}";
                        echo (($this->getAttribute($context["loop"], "last", array())) ? ("") : (", "));
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['period'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 474
                    echo "]
                        }";
                    // line 475
                    echo (($this->getAttribute($context["loop"], "last", array())) ? ("") : (","));
                    echo "
";
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_5e33e5c06e3040025a9cdcd6789555449d166ef48e6d1fdaac09c735c36ed001->leave($__internal_5e33e5c06e3040025a9cdcd6789555449d166ef48e6d1fdaac09c735c36ed001_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 481
    public function getdisplay_timeline($__id__ = null, $__events__ = null, $__colors__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "id" => $__id__,
            "events" => $__events__,
            "colors" => $__colors__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_14f933cf198a29c7bfeef6239ba0f671085ce727674b112a6af4cb73ad6ea36c = $this->env->getExtension("native_profiler");
            $__internal_14f933cf198a29c7bfeef6239ba0f671085ce727674b112a6af4cb73ad6ea36c->enter($__internal_14f933cf198a29c7bfeef6239ba0f671085ce727674b112a6af4cb73ad6ea36c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "display_timeline"));

            // line 482
            echo "    <div class=\"sf-profiler-timeline\">
        <div class=\"legends\">
            ";
            // line 484
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")));
            foreach ($context['_seq'] as $context["category"] => $context["color"]) {
                // line 485
                echo "                <span data-color=\"";
                echo twig_escape_filter($this->env, $context["color"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["category"], "html", null, true);
                echo "</span>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['category'], $context['color'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 487
            echo "        </div>
        <canvas width=\"680\" height=\"\" id=\"";
            // line 488
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\" class=\"timeline\"></canvas>
    </div>
";
            
            $__internal_14f933cf198a29c7bfeef6239ba0f671085ce727674b112a6af4cb73ad6ea36c->leave($__internal_14f933cf198a29c7bfeef6239ba0f671085ce727674b112a6af4cb73ad6ea36c_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  852 => 488,  849 => 487,  838 => 485,  834 => 484,  830 => 482,  814 => 481,  785 => 475,  782 => 474,  763 => 472,  746 => 471,  742 => 469,  738 => 468,  734 => 467,  730 => 466,  726 => 465,  722 => 464,  718 => 463,  715 => 462,  713 => 461,  696 => 460,  682 => 458,  664 => 452,  659 => 450,  655 => 449,  652 => 448,  650 => 447,  633 => 445,  625 => 442,  591 => 410,  573 => 407,  556 => 406,  553 => 405,  551 => 404,  546 => 402,  541 => 400,  274 => 136,  230 => 94,  227 => 93,  224 => 92,  216 => 90,  210 => 87,  204 => 86,  201 => 85,  198 => 84,  193 => 83,  191 => 82,  186 => 80,  181 => 77,  175 => 75,  173 => 74,  169 => 73,  164 => 71,  151 => 61,  144 => 57,  137 => 52,  131 => 51,  120 => 45,  114 => 43,  112 => 42,  109 => 41,  103 => 40,  92 => 34,  86 => 33,  78 => 30,  72 => 27,  68 => 25,  65 => 24,  60 => 22,  57 => 21,  54 => 20,  51 => 19,  45 => 18,  38 => 1,  35 => 6,  33 => 5,  31 => 3,  11 => 1,);
    }
}
