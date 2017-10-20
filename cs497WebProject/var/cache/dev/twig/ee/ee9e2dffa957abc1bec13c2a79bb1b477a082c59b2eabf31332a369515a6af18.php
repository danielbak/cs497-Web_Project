<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_da9b1b5486872725897ed4d448fa984835b9b85363ec093b40db1eb292f9eb9b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2a20285b5834c31514f36f8f6042aa99ee0174ac8988964d0816bb99d92f59b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a20285b5834c31514f36f8f6042aa99ee0174ac8988964d0816bb99d92f59b8->enter($__internal_2a20285b5834c31514f36f8f6042aa99ee0174ac8988964d0816bb99d92f59b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_26d338e082a51e84b1dabb48ae47db0dbb25b201e8853e81fe42491f5ce1baa3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26d338e082a51e84b1dabb48ae47db0dbb25b201e8853e81fe42491f5ce1baa3->enter($__internal_26d338e082a51e84b1dabb48ae47db0dbb25b201e8853e81fe42491f5ce1baa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a20285b5834c31514f36f8f6042aa99ee0174ac8988964d0816bb99d92f59b8->leave($__internal_2a20285b5834c31514f36f8f6042aa99ee0174ac8988964d0816bb99d92f59b8_prof);

        
        $__internal_26d338e082a51e84b1dabb48ae47db0dbb25b201e8853e81fe42491f5ce1baa3->leave($__internal_26d338e082a51e84b1dabb48ae47db0dbb25b201e8853e81fe42491f5ce1baa3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7c13f2f1d31dd2ccd95751e47516c59045febc2bf83d749b8c645547aed09cd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c13f2f1d31dd2ccd95751e47516c59045febc2bf83d749b8c645547aed09cd9->enter($__internal_7c13f2f1d31dd2ccd95751e47516c59045febc2bf83d749b8c645547aed09cd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f3ab30653065e31c4372efe33044ef6164afedadeca66e48b8eb8e1fef7a7359 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3ab30653065e31c4372efe33044ef6164afedadeca66e48b8eb8e1fef7a7359->enter($__internal_f3ab30653065e31c4372efe33044ef6164afedadeca66e48b8eb8e1fef7a7359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_f3ab30653065e31c4372efe33044ef6164afedadeca66e48b8eb8e1fef7a7359->leave($__internal_f3ab30653065e31c4372efe33044ef6164afedadeca66e48b8eb8e1fef7a7359_prof);

        
        $__internal_7c13f2f1d31dd2ccd95751e47516c59045febc2bf83d749b8c645547aed09cd9->leave($__internal_7c13f2f1d31dd2ccd95751e47516c59045febc2bf83d749b8c645547aed09cd9_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "/home/danielbakyono/cs497/cs497-Web_Project/cs497WebProject/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
