<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_3433c28c6cac637fd71963105578c31278264eef042c20e758b6a9de83b5a312 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_a1fca002c378a7ce62e96dd64bba2619f870e179e1d6dec458ca13da8a1f4f12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1fca002c378a7ce62e96dd64bba2619f870e179e1d6dec458ca13da8a1f4f12->enter($__internal_a1fca002c378a7ce62e96dd64bba2619f870e179e1d6dec458ca13da8a1f4f12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_92f7a666c50cb213ec9278c1791c0e9cbe2be667368d355a220a629573dfb1e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92f7a666c50cb213ec9278c1791c0e9cbe2be667368d355a220a629573dfb1e2->enter($__internal_92f7a666c50cb213ec9278c1791c0e9cbe2be667368d355a220a629573dfb1e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1fca002c378a7ce62e96dd64bba2619f870e179e1d6dec458ca13da8a1f4f12->leave($__internal_a1fca002c378a7ce62e96dd64bba2619f870e179e1d6dec458ca13da8a1f4f12_prof);

        
        $__internal_92f7a666c50cb213ec9278c1791c0e9cbe2be667368d355a220a629573dfb1e2->leave($__internal_92f7a666c50cb213ec9278c1791c0e9cbe2be667368d355a220a629573dfb1e2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3236c5feaf8b0c5ca1850361efcfb004fc5aabe482a6142805c236b2def6e531 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3236c5feaf8b0c5ca1850361efcfb004fc5aabe482a6142805c236b2def6e531->enter($__internal_3236c5feaf8b0c5ca1850361efcfb004fc5aabe482a6142805c236b2def6e531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c8bf6a67e9c5a87378ed07c5d339dd2502c30f007e88623383caeb7eb0bbed88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8bf6a67e9c5a87378ed07c5d339dd2502c30f007e88623383caeb7eb0bbed88->enter($__internal_c8bf6a67e9c5a87378ed07c5d339dd2502c30f007e88623383caeb7eb0bbed88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_c8bf6a67e9c5a87378ed07c5d339dd2502c30f007e88623383caeb7eb0bbed88->leave($__internal_c8bf6a67e9c5a87378ed07c5d339dd2502c30f007e88623383caeb7eb0bbed88_prof);

        
        $__internal_3236c5feaf8b0c5ca1850361efcfb004fc5aabe482a6142805c236b2def6e531->leave($__internal_3236c5feaf8b0c5ca1850361efcfb004fc5aabe482a6142805c236b2def6e531_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/home/danielbakyono/cs497/cs497-Web_Project/cs497WebProject/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
