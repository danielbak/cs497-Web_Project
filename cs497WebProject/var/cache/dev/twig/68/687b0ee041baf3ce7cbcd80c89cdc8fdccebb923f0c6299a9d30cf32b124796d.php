<?php

/* register.html.twig */
class __TwigTemplate_2d0c44d96149abd1e37c3021e5fa6538afa088cdb3f4398d52b73f02ca05a22e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b4a443df7405c080264965865b9d985ff10d0f00c627065cf7eb3b83c9e01b24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4a443df7405c080264965865b9d985ff10d0f00c627065cf7eb3b83c9e01b24->enter($__internal_b4a443df7405c080264965865b9d985ff10d0f00c627065cf7eb3b83c9e01b24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "register.html.twig"));

        $__internal_a829dab952865b24b784095c60e5ad2e564286ca8337a331f9e8aa8fa8034e28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a829dab952865b24b784095c60e5ad2e564286ca8337a331f9e8aa8fa8034e28->enter($__internal_a829dab952865b24b784095c60e5ad2e564286ca8337a331f9e8aa8fa8034e28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "register.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"This page helps register new users to the website\">
    <meta name=\"author\" content=\"Ognomo Daniel Bakyono\">
    <link rel=\"icon\" href=\"../../../../favicon.ico\">
<link rel=\"stylesheet\"
\thref=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\"
\thref=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/bootstrap/dist/css/signin.css"), "html", null, true);
        echo "\">

    <title>Register</title>

  </head>

  <body>

    <div class=\"container\">
        <a class=\"btn btn-lg\" href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\">Back Home <span class=\"sr-only\">(current)</span></a>

      <form class=\"form-signin\">
        <h2 class=\"form-signin-heading\">Please register</h2>
        <label for=\"inputEmail\" class=\"sr-only\">Email address</label>
        <input type=\"email\" id=\"inputEmail\" class=\"form-control\" placeholder=\"Email address\" required autofocus>
        <label for=\"inputPassword\" class=\"sr-only\">Password</label>
        <input type=\"password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Password\" required>
        <label for=\"inputPassword\" class=\"sr-only\">Confirm Password</label>
        <input type=\"password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Confirm Password\" required>
        <div class=\"checkbox\">
        </div>
        <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Register</button>
      </form>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/bootstrap/dist/css/ie10-viewport-bug-workaround.js"), "html", null, true);
        echo "\"></script>
  </body>
</html>
";
        
        $__internal_b4a443df7405c080264965865b9d985ff10d0f00c627065cf7eb3b83c9e01b24->leave($__internal_b4a443df7405c080264965865b9d985ff10d0f00c627065cf7eb3b83c9e01b24_prof);

        
        $__internal_a829dab952865b24b784095c60e5ad2e564286ca8337a331f9e8aa8fa8034e28->leave($__internal_a829dab952865b24b784095c60e5ad2e564286ca8337a331f9e8aa8fa8034e28_prof);

    }

    public function getTemplateName()
    {
        return "register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 43,  53 => 21,  41 => 12,  36 => 10,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"This page helps register new users to the website\">
    <meta name=\"author\" content=\"Ognomo Daniel Bakyono\">
    <link rel=\"icon\" href=\"../../../../favicon.ico\">
<link rel=\"stylesheet\"
\thref=\"{{ asset('assets/vendor/bootstrap/dist/css/bootstrap.min.css') }}\">
<link rel=\"stylesheet\"
\thref=\"{{ asset('assets/vendor/bootstrap/dist/css/signin.css') }}\">

    <title>Register</title>

  </head>

  <body>

    <div class=\"container\">
        <a class=\"btn btn-lg\" href=\"{{ path('home') }}\">Back Home <span class=\"sr-only\">(current)</span></a>

      <form class=\"form-signin\">
        <h2 class=\"form-signin-heading\">Please register</h2>
        <label for=\"inputEmail\" class=\"sr-only\">Email address</label>
        <input type=\"email\" id=\"inputEmail\" class=\"form-control\" placeholder=\"Email address\" required autofocus>
        <label for=\"inputPassword\" class=\"sr-only\">Password</label>
        <input type=\"password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Password\" required>
        <label for=\"inputPassword\" class=\"sr-only\">Confirm Password</label>
        <input type=\"password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Confirm Password\" required>
        <div class=\"checkbox\">
        </div>
        <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Register</button>
      </form>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src=\"{{ asset('assets/vendor/bootstrap/dist/css/ie10-viewport-bug-workaround.js') }}\"></script>
  </body>
</html>
", "register.html.twig", "/home/danielbakyono/cs497/cs497-Web_Project/cs497WebProject/app/Resources/views/register.html.twig");
    }
}
