<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3af4a99c1cb655a4825f0a6e01551d674b52d52b622e47d73e3845cb1496152a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_3f09310539b6b3272dd1300012449aa58978250825e8ebd9b67f4c168baab9dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f09310539b6b3272dd1300012449aa58978250825e8ebd9b67f4c168baab9dc->enter($__internal_3f09310539b6b3272dd1300012449aa58978250825e8ebd9b67f4c168baab9dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_fcc53c0db239a13cb910b997a48494c80ecf88d31630a3fbc8b4b149ca46d848 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcc53c0db239a13cb910b997a48494c80ecf88d31630a3fbc8b4b149ca46d848->enter($__internal_fcc53c0db239a13cb910b997a48494c80ecf88d31630a3fbc8b4b149ca46d848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f09310539b6b3272dd1300012449aa58978250825e8ebd9b67f4c168baab9dc->leave($__internal_3f09310539b6b3272dd1300012449aa58978250825e8ebd9b67f4c168baab9dc_prof);

        
        $__internal_fcc53c0db239a13cb910b997a48494c80ecf88d31630a3fbc8b4b149ca46d848->leave($__internal_fcc53c0db239a13cb910b997a48494c80ecf88d31630a3fbc8b4b149ca46d848_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1cc621d1f1897fd2a0b9f87ee5402e43ab8c694f551ffc07e659b9c5a3b44808 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cc621d1f1897fd2a0b9f87ee5402e43ab8c694f551ffc07e659b9c5a3b44808->enter($__internal_1cc621d1f1897fd2a0b9f87ee5402e43ab8c694f551ffc07e659b9c5a3b44808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_10627c5da3aaffee35f9d2d8523e89048b06af72f0901684f5f482fa16a78da1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10627c5da3aaffee35f9d2d8523e89048b06af72f0901684f5f482fa16a78da1->enter($__internal_10627c5da3aaffee35f9d2d8523e89048b06af72f0901684f5f482fa16a78da1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_10627c5da3aaffee35f9d2d8523e89048b06af72f0901684f5f482fa16a78da1->leave($__internal_10627c5da3aaffee35f9d2d8523e89048b06af72f0901684f5f482fa16a78da1_prof);

        
        $__internal_1cc621d1f1897fd2a0b9f87ee5402e43ab8c694f551ffc07e659b9c5a3b44808->leave($__internal_1cc621d1f1897fd2a0b9f87ee5402e43ab8c694f551ffc07e659b9c5a3b44808_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cdd52cbdf23a5086b67440592a6c6841160c2285ad8fbb1710e393f005dc7fc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdd52cbdf23a5086b67440592a6c6841160c2285ad8fbb1710e393f005dc7fc5->enter($__internal_cdd52cbdf23a5086b67440592a6c6841160c2285ad8fbb1710e393f005dc7fc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4d098941f2d9f9320ebf441bb6a01dcb0855847cd98eedf89918b7ae5ef192b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d098941f2d9f9320ebf441bb6a01dcb0855847cd98eedf89918b7ae5ef192b6->enter($__internal_4d098941f2d9f9320ebf441bb6a01dcb0855847cd98eedf89918b7ae5ef192b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4d098941f2d9f9320ebf441bb6a01dcb0855847cd98eedf89918b7ae5ef192b6->leave($__internal_4d098941f2d9f9320ebf441bb6a01dcb0855847cd98eedf89918b7ae5ef192b6_prof);

        
        $__internal_cdd52cbdf23a5086b67440592a6c6841160c2285ad8fbb1710e393f005dc7fc5->leave($__internal_cdd52cbdf23a5086b67440592a6c6841160c2285ad8fbb1710e393f005dc7fc5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0e2df98bad3be38591bfd1f4b389982d97691a4c9f2eb657000aa5c8e5d6cb60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e2df98bad3be38591bfd1f4b389982d97691a4c9f2eb657000aa5c8e5d6cb60->enter($__internal_0e2df98bad3be38591bfd1f4b389982d97691a4c9f2eb657000aa5c8e5d6cb60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_305e20a6a22b39354d6bd9abe4fec42d51c7a3a0b13979033dc793fc736d390d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_305e20a6a22b39354d6bd9abe4fec42d51c7a3a0b13979033dc793fc736d390d->enter($__internal_305e20a6a22b39354d6bd9abe4fec42d51c7a3a0b13979033dc793fc736d390d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_305e20a6a22b39354d6bd9abe4fec42d51c7a3a0b13979033dc793fc736d390d->leave($__internal_305e20a6a22b39354d6bd9abe4fec42d51c7a3a0b13979033dc793fc736d390d_prof);

        
        $__internal_0e2df98bad3be38591bfd1f4b389982d97691a4c9f2eb657000aa5c8e5d6cb60->leave($__internal_0e2df98bad3be38591bfd1f4b389982d97691a4c9f2eb657000aa5c8e5d6cb60_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/danielbakyono/cs497/cs497-Web_Project/cs497WebProject/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
