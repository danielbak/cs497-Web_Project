<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_6305549b69a58ca0f9541aca6ee0d862a0ee83b30389b00a8aade3862eea91ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_296262693b8dd2361064619c6c05c12d8fed7a5774a745daa07d2c56ba9753e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_296262693b8dd2361064619c6c05c12d8fed7a5774a745daa07d2c56ba9753e6->enter($__internal_296262693b8dd2361064619c6c05c12d8fed7a5774a745daa07d2c56ba9753e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_02bcc803cf4df444533421c13b7f8223b431e223b62da80426cbbdccb656407a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02bcc803cf4df444533421c13b7f8223b431e223b62da80426cbbdccb656407a->enter($__internal_02bcc803cf4df444533421c13b7f8223b431e223b62da80426cbbdccb656407a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_296262693b8dd2361064619c6c05c12d8fed7a5774a745daa07d2c56ba9753e6->leave($__internal_296262693b8dd2361064619c6c05c12d8fed7a5774a745daa07d2c56ba9753e6_prof);

        
        $__internal_02bcc803cf4df444533421c13b7f8223b431e223b62da80426cbbdccb656407a->leave($__internal_02bcc803cf4df444533421c13b7f8223b431e223b62da80426cbbdccb656407a_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2b816d865a8508639f2ae2f7515c6c5622b327df5cd8da3ccc5fb648d2e989d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b816d865a8508639f2ae2f7515c6c5622b327df5cd8da3ccc5fb648d2e989d6->enter($__internal_2b816d865a8508639f2ae2f7515c6c5622b327df5cd8da3ccc5fb648d2e989d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_046b7dc47c60fdc4ee0ac7957fbce2b708a0fb5b935fe91a527cce2231713a6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_046b7dc47c60fdc4ee0ac7957fbce2b708a0fb5b935fe91a527cce2231713a6e->enter($__internal_046b7dc47c60fdc4ee0ac7957fbce2b708a0fb5b935fe91a527cce2231713a6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if (($context["targetUrl"] ?? $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, ($context["targetUrl"] ?? $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_046b7dc47c60fdc4ee0ac7957fbce2b708a0fb5b935fe91a527cce2231713a6e->leave($__internal_046b7dc47c60fdc4ee0ac7957fbce2b708a0fb5b935fe91a527cce2231713a6e_prof);

        
        $__internal_2b816d865a8508639f2ae2f7515c6c5622b327df5cd8da3ccc5fb648d2e989d6->leave($__internal_2b816d865a8508639f2ae2f7515c6c5622b327df5cd8da3ccc5fb648d2e989d6_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/confirmed.html.twig", "/home/danielbakyono/cs497/cs497-Web_Project/cs497WebProject/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}
