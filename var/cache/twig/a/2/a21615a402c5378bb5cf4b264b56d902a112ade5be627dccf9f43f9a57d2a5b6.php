<?php

/* @WebProfiler/Profiler/base.html.twig */
class __TwigTemplate_a21615a402c5378bb5cf4b264b56d902a112ade5be627dccf9f43f9a57d2a5b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3848aa394e4ad1e27911cd432025e289c85c50ea1d15a26f07b5497b8f9f8eeb = $this->env->getExtension("native_profiler");
        $__internal_3848aa394e4ad1e27911cd432025e289c85c50ea1d15a26f07b5497b8f9f8eeb->enter($__internal_3848aa394e4ad1e27911cd432025e289c85c50ea1d15a26f07b5497b8f9f8eeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/x-icon\" sizes=\"16x16\" href=\"data:image/ico;base64,AAABAAEAEBAAAAEAIABoBAAAFgAAACgAAAAQAAAAIAAAAAEAIAAAAAAAAAQAABMLAAATCwAAAAAAAAAAAAAAAAAAAAAAADIvMQAyLzEIMi8xSzEuMKoyLzHkMi8x/TIvMf0yLzHlMi8xrDIvMU4yLzEJMi8xAAAAAAAAAAAAAAAAADIvMQAyLzEYMS4wkTMwMu45Njj/MS4w/zEuMP8yLzH/Mi8x/zIvMf8yLzHvMi8xlDIvMRkyLzEAAAAAADIvMQAyLzEXMS4wrTk2OPyVk5T7kI6P/nl3ef8+Oz3/MS4w/zIvMf8yLzH/Mi8x/zIvMf4yLzGxMi8xGjIvMQAyLzEGMi8xkDEuMP4/PD79wcDA+oB+gP6Ni4z/paOk/zk2OP8xLjD/Mi8x/zIvMf8yLzH/Mi8x/zIvMZQyLzEIMi8xSTIvMewyLzH/MS4w/z06PP81MjT+TktN/93c3f97eXv/MC0v/zIvMf8yLzH/Mi8x/zIvMf8yLzHuMi8xTzIvMaUyLzH/Mi8x/0lHSf9kYmP/XFpb/zs4Ov/DwsL+ycjI/zs4Ov8xLjD/Mi8x/zIvMf8yLzH/Mi8x/zIvMawyLzHfMC0v/1tYWv+opqf/YV5g/8bFxf96eHn+m5qb/u7u7v9WVFX/MC0v/zIvMf8yLzH/Mi8x/zIvMf8yLzHkMi8x+jAtL/9iYGH/mZiZ/2dlZv/p6On/oJ+g/np4ev/6+vr/dXN1/y0qLP8xLjD/Mi8x/zIvMf8yLzH/Mi8x/DIvMfoyLzH/MzAy/0A+QP7JyMj85eXl/1tYWv9XVVf/8fDx/6qpqv9ZV1j/Q0BC/zIvMf8yLzH/Mi8x/zIvMfwyLzHeMi8x/zEuMP8/PD762dnZ9JWTlP81MjT/ZmRm/+Dg4P/DwsP/YV5g/6Wkpf9BPkD/MS4w/zIvMf8yLzHjMi8xozIvMf8yLzH/Mi8x/nZ0dv2amJn4dXN0+V5bXf+Pjo//0tLS/0hFR/9vbG7/Ozg6/zEuMP8yLzH/Mi8xqTIvMUcyLzHrMi8x/zIvMf8xLjD/Ozg6/Do3OfwwLS//REFD/728vP9nZWb/TktN/4mIif05Nzn/Mi8x7jMwMkwyLzEGMi8xjDIvMf4yLzH/Mi8x/zIvMf8yLzH/Mi8x/zAtL/9XVFb/goGC+Hx6e+6qqanwOzg6/DMwMpJDQEIIMi8xADIvMRUyLzGrMi8x/jIvMf8yLzH/Mi8x/zIvMf8yLzH/MS4w/zg2N/xBPkD3OTY4/DIvMa8yLzEYMi8xAAAAAAAyLzEAMi8xGDIvMY0yLzHqMi8x/zIvMf8yLzH/Mi8x/zIvMf8yLzH/MS4w7DEuMJEyLzEaMi8xAAAAAAAAAAAAAAAAADIvMQAyLzEGMi8xQzIvMZ4yLzHdMi8x+jIvMfoyLzHeMi8xoDIvMUUyLzEGMi8xAAAAAAAAAAAA4AcAAMADAACAAQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAIABAADAAwAA4AcAAA==\">
        <style>
            ";
        // line 9
        $this->loadTemplate("@WebProfiler/Profiler/body.css.twig", "@WebProfiler/Profiler/base.html.twig", 9)->display($context);
        // line 10
        echo "        </style>
        ";
        // line 11
        $this->displayBlock('head', $context, $blocks);
        // line 16
        echo "        <style>
            ";
        // line 17
        $this->loadTemplate("@WebProfiler/Profiler/toolbar.css.twig", "@WebProfiler/Profiler/base.html.twig", 17)->display(array_merge($context, array("position" => "top", "floatable" => false)));
        // line 18
        echo "        </style>
    </head>
    <body>
        ";
        // line 21
        $this->displayBlock('body', $context, $blocks);
        // line 22
        echo "    </body>
</html>
";
        
        $__internal_3848aa394e4ad1e27911cd432025e289c85c50ea1d15a26f07b5497b8f9f8eeb->leave($__internal_3848aa394e4ad1e27911cd432025e289c85c50ea1d15a26f07b5497b8f9f8eeb_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_45be7908262c117162780edb270f07f7114344d57f6b820cf833cc0a18e00049 = $this->env->getExtension("native_profiler");
        $__internal_45be7908262c117162780edb270f07f7114344d57f6b820cf833cc0a18e00049->enter($__internal_45be7908262c117162780edb270f07f7114344d57f6b820cf833cc0a18e00049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Profiler";
        
        $__internal_45be7908262c117162780edb270f07f7114344d57f6b820cf833cc0a18e00049->leave($__internal_45be7908262c117162780edb270f07f7114344d57f6b820cf833cc0a18e00049_prof);

    }

    // line 11
    public function block_head($context, array $blocks = array())
    {
        $__internal_43c1c8d84534dff5731cc41ec1a581c5bf768ae90eeb0e87e91475476af8bb39 = $this->env->getExtension("native_profiler");
        $__internal_43c1c8d84534dff5731cc41ec1a581c5bf768ae90eeb0e87e91475476af8bb39->enter($__internal_43c1c8d84534dff5731cc41ec1a581c5bf768ae90eeb0e87e91475476af8bb39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 12
        echo "            <style>
                ";
        // line 13
        $this->loadTemplate("@WebProfiler/Profiler/profiler.css.twig", "@WebProfiler/Profiler/base.html.twig", 13)->display($context);
        // line 14
        echo "            </style>
        ";
        
        $__internal_43c1c8d84534dff5731cc41ec1a581c5bf768ae90eeb0e87e91475476af8bb39->leave($__internal_43c1c8d84534dff5731cc41ec1a581c5bf768ae90eeb0e87e91475476af8bb39_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_e624e078a2ae2f21c16f29e30e05ac7d93007d116ff8dedd5783b83638898e36 = $this->env->getExtension("native_profiler");
        $__internal_e624e078a2ae2f21c16f29e30e05ac7d93007d116ff8dedd5783b83638898e36->enter($__internal_e624e078a2ae2f21c16f29e30e05ac7d93007d116ff8dedd5783b83638898e36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "";
        
        $__internal_e624e078a2ae2f21c16f29e30e05ac7d93007d116ff8dedd5783b83638898e36->leave($__internal_e624e078a2ae2f21c16f29e30e05ac7d93007d116ff8dedd5783b83638898e36_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 21,  92 => 14,  90 => 13,  87 => 12,  81 => 11,  69 => 6,  60 => 22,  58 => 21,  53 => 18,  51 => 17,  48 => 16,  46 => 11,  43 => 10,  41 => 9,  35 => 6,  30 => 4,  25 => 1,);
    }
}
