<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_cf162f25fa3b6f82cee69ba6f883fb7c82621dcf246f7c18429b115a3511835f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_f2e2daa2462044d808f6b23a62a247b6ca4dc4d36a038c633cc9c8f525f48920 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2e2daa2462044d808f6b23a62a247b6ca4dc4d36a038c633cc9c8f525f48920->enter($__internal_f2e2daa2462044d808f6b23a62a247b6ca4dc4d36a038c633cc9c8f525f48920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_6ff00c5a57c7398dd400b9e99f782846dc28296b91adfe443bc2ebaf07972114 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ff00c5a57c7398dd400b9e99f782846dc28296b91adfe443bc2ebaf07972114->enter($__internal_6ff00c5a57c7398dd400b9e99f782846dc28296b91adfe443bc2ebaf07972114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2e2daa2462044d808f6b23a62a247b6ca4dc4d36a038c633cc9c8f525f48920->leave($__internal_f2e2daa2462044d808f6b23a62a247b6ca4dc4d36a038c633cc9c8f525f48920_prof);

        
        $__internal_6ff00c5a57c7398dd400b9e99f782846dc28296b91adfe443bc2ebaf07972114->leave($__internal_6ff00c5a57c7398dd400b9e99f782846dc28296b91adfe443bc2ebaf07972114_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_33713e70e4bce0aa5089099af9fc98a865ce51010da8ba8c95093b618c0f547c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33713e70e4bce0aa5089099af9fc98a865ce51010da8ba8c95093b618c0f547c->enter($__internal_33713e70e4bce0aa5089099af9fc98a865ce51010da8ba8c95093b618c0f547c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_cc6abd673b8e32cd8c87a9aeb084756275ebeb290e5551d9f7541f114a887b9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc6abd673b8e32cd8c87a9aeb084756275ebeb290e5551d9f7541f114a887b9b->enter($__internal_cc6abd673b8e32cd8c87a9aeb084756275ebeb290e5551d9f7541f114a887b9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_cc6abd673b8e32cd8c87a9aeb084756275ebeb290e5551d9f7541f114a887b9b->leave($__internal_cc6abd673b8e32cd8c87a9aeb084756275ebeb290e5551d9f7541f114a887b9b_prof);

        
        $__internal_33713e70e4bce0aa5089099af9fc98a865ce51010da8ba8c95093b618c0f547c->leave($__internal_33713e70e4bce0aa5089099af9fc98a865ce51010da8ba8c95093b618c0f547c_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_19ff2c91be468e44c139586cd7781ca2b9f7dc601b77f1ee66a5fdf24ac04b17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19ff2c91be468e44c139586cd7781ca2b9f7dc601b77f1ee66a5fdf24ac04b17->enter($__internal_19ff2c91be468e44c139586cd7781ca2b9f7dc601b77f1ee66a5fdf24ac04b17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b32ee99d65165a170ffe39ec1c4666d374f0e4835ee886b63884fad708679299 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b32ee99d65165a170ffe39ec1c4666d374f0e4835ee886b63884fad708679299->enter($__internal_b32ee99d65165a170ffe39ec1c4666d374f0e4835ee886b63884fad708679299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_b32ee99d65165a170ffe39ec1c4666d374f0e4835ee886b63884fad708679299->leave($__internal_b32ee99d65165a170ffe39ec1c4666d374f0e4835ee886b63884fad708679299_prof);

        
        $__internal_19ff2c91be468e44c139586cd7781ca2b9f7dc601b77f1ee66a5fdf24ac04b17->leave($__internal_19ff2c91be468e44c139586cd7781ca2b9f7dc601b77f1ee66a5fdf24ac04b17_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_758af48f38f5b2f84bad32881b4bbb370f3d22c7bdbb8290e09c4b74dd8fc074 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_758af48f38f5b2f84bad32881b4bbb370f3d22c7bdbb8290e09c4b74dd8fc074->enter($__internal_758af48f38f5b2f84bad32881b4bbb370f3d22c7bdbb8290e09c4b74dd8fc074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_225757966ce5a16d15dde83fc5be6d724aad18fccddb20990eceb8382273bedb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_225757966ce5a16d15dde83fc5be6d724aad18fccddb20990eceb8382273bedb->enter($__internal_225757966ce5a16d15dde83fc5be6d724aad18fccddb20990eceb8382273bedb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_225757966ce5a16d15dde83fc5be6d724aad18fccddb20990eceb8382273bedb->leave($__internal_225757966ce5a16d15dde83fc5be6d724aad18fccddb20990eceb8382273bedb_prof);

        
        $__internal_758af48f38f5b2f84bad32881b4bbb370f3d22c7bdbb8290e09c4b74dd8fc074->leave($__internal_758af48f38f5b2f84bad32881b4bbb370f3d22c7bdbb8290e09c4b74dd8fc074_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/danielbakyono/cs497/cs497-Web_Project/cs497WebProject/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
