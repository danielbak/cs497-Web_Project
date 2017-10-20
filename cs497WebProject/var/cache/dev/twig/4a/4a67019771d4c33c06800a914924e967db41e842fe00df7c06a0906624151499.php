<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_1878275fdbc32b660cfbee6afea5d6e15c55adb100b0dbddcb4be415750c22a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e904950de7d477e7a4af6b0557b6af18bbb1e9282a026003b88d2edd9bee015a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e904950de7d477e7a4af6b0557b6af18bbb1e9282a026003b88d2edd9bee015a->enter($__internal_e904950de7d477e7a4af6b0557b6af18bbb1e9282a026003b88d2edd9bee015a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_01effffc3d1a68298987c427e7ca5394dda061618868322027249e87604f1aac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01effffc3d1a68298987c427e7ca5394dda061618868322027249e87604f1aac->enter($__internal_01effffc3d1a68298987c427e7ca5394dda061618868322027249e87604f1aac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e904950de7d477e7a4af6b0557b6af18bbb1e9282a026003b88d2edd9bee015a->leave($__internal_e904950de7d477e7a4af6b0557b6af18bbb1e9282a026003b88d2edd9bee015a_prof);

        
        $__internal_01effffc3d1a68298987c427e7ca5394dda061618868322027249e87604f1aac->leave($__internal_01effffc3d1a68298987c427e7ca5394dda061618868322027249e87604f1aac_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bf0759ada80f21e460d3fd863234f00cd30a1f6f10636f008b04c6dc3c9c1773 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf0759ada80f21e460d3fd863234f00cd30a1f6f10636f008b04c6dc3c9c1773->enter($__internal_bf0759ada80f21e460d3fd863234f00cd30a1f6f10636f008b04c6dc3c9c1773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4d5286aa0acbd9dbcd3d39df4e04d9471d9777467f49bd56647b4765defc58c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d5286aa0acbd9dbcd3d39df4e04d9471d9777467f49bd56647b4765defc58c6->enter($__internal_4d5286aa0acbd9dbcd3d39df4e04d9471d9777467f49bd56647b4765defc58c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_4d5286aa0acbd9dbcd3d39df4e04d9471d9777467f49bd56647b4765defc58c6->leave($__internal_4d5286aa0acbd9dbcd3d39df4e04d9471d9777467f49bd56647b4765defc58c6_prof);

        
        $__internal_bf0759ada80f21e460d3fd863234f00cd30a1f6f10636f008b04c6dc3c9c1773->leave($__internal_bf0759ada80f21e460d3fd863234f00cd30a1f6f10636f008b04c6dc3c9c1773_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_b442a8de6c3468aa0dc5223cc2a79581b5a09abe8ede620defd1114fdd0422b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b442a8de6c3468aa0dc5223cc2a79581b5a09abe8ede620defd1114fdd0422b8->enter($__internal_b442a8de6c3468aa0dc5223cc2a79581b5a09abe8ede620defd1114fdd0422b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_17320c0857522d0788ce6b60e6d2e36845484dc54cad2d1f5439e3e018718625 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17320c0857522d0788ce6b60e6d2e36845484dc54cad2d1f5439e3e018718625->enter($__internal_17320c0857522d0788ce6b60e6d2e36845484dc54cad2d1f5439e3e018718625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_17320c0857522d0788ce6b60e6d2e36845484dc54cad2d1f5439e3e018718625->leave($__internal_17320c0857522d0788ce6b60e6d2e36845484dc54cad2d1f5439e3e018718625_prof);

        
        $__internal_b442a8de6c3468aa0dc5223cc2a79581b5a09abe8ede620defd1114fdd0422b8->leave($__internal_b442a8de6c3468aa0dc5223cc2a79581b5a09abe8ede620defd1114fdd0422b8_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_04bcc7083655a79350f41e54d36373bc0d25cbe6b1bb3922e26fac1bb4fd0ba9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04bcc7083655a79350f41e54d36373bc0d25cbe6b1bb3922e26fac1bb4fd0ba9->enter($__internal_04bcc7083655a79350f41e54d36373bc0d25cbe6b1bb3922e26fac1bb4fd0ba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6de4852f06b8d517c069a5ee587ee8717bad54b6a3612d3bb27921213f0aabc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6de4852f06b8d517c069a5ee587ee8717bad54b6a3612d3bb27921213f0aabc0->enter($__internal_6de4852f06b8d517c069a5ee587ee8717bad54b6a3612d3bb27921213f0aabc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_6de4852f06b8d517c069a5ee587ee8717bad54b6a3612d3bb27921213f0aabc0->leave($__internal_6de4852f06b8d517c069a5ee587ee8717bad54b6a3612d3bb27921213f0aabc0_prof);

        
        $__internal_04bcc7083655a79350f41e54d36373bc0d25cbe6b1bb3922e26fac1bb4fd0ba9->leave($__internal_04bcc7083655a79350f41e54d36373bc0d25cbe6b1bb3922e26fac1bb4fd0ba9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/danielbakyono/cs497/cs497-Web_Project/cs497WebProject/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
