<?php

/* index.html.twig */
class __TwigTemplate_cb87d08e289c272883ff8a6c55f81a167215cb0e28a6c4e24b4b90499fde4062 extends Twig_Template
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
        $__internal_af511819a83759464165867f5d7faff4f8dd0660f20f7170bac3e921639c8e78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af511819a83759464165867f5d7faff4f8dd0660f20f7170bac3e921639c8e78->enter($__internal_af511819a83759464165867f5d7faff4f8dd0660f20f7170bac3e921639c8e78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_6f671229b6dcdcfd492443d7cf98b71ea1253e8ba681a536a2524d7c50a59153 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f671229b6dcdcfd492443d7cf98b71ea1253e8ba681a536a2524d7c50a59153->enter($__internal_6f671229b6dcdcfd492443d7cf98b71ea1253e8ba681a536a2524d7c50a59153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"This is the Home Page\">
    <meta name=\"author\" content=\"Ognomo Daniel Bakyono\">
<link rel=\"stylesheet\"
\thref=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\"
\thref=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/bootstrap/dist/css/narrow-jumbotron.css"), "html", null, true);
        echo "\">

    <title>Welcome to the LookIt website</title>
  </head>

  <body>

    <div class=\"container\">
      <div class=\"header clearfix\">
        <nav>
          <ul class=\"nav nav-pills float-right\">
            <li class=\"nav-item\">
              <a class=\"nav-link active\" href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\">Home <span class=\"sr-only\">(current)</span></a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("signin");
        echo "\">Sign In</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register");
        echo "\">Register</a>
            </li>
          </ul>
        </nav>
        <h3 class=\"text-muted\">LookIt</h3>
      </div>

      <div class=\"jumbotron\">
        <h1 class=\"display-3\">Welcome to LookIt</h1>
        <p class=\"lead\">LookIt is a search engine that allows users to search through their document for information that are important to them. It allows members to have access to a space that they can use to store their documents and later look for a particular information in those documents.</p>
        <p><a class=\"btn btn-lg btn-success\" href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register");
        echo "\" role=\"button\">Sign up today</a></p>
      </div>

      <div class=\"row marketing\">
        <div class=\"col-lg-6\">
          <h4>Cloud</h4>
          <p>We give our members access to the cloud so that they can store their documents and also manage their documents information.</p>

          <h4>Search Indexing</h4>
          <p>Our technology allows our members to search through huge number of their documents. We are offering an elaborate number of search options that allows our members to find the information that they need.</p>

          <h4>Security</h4>
          <p>We are offering to our customers the best securities technology to protect their data against threats.</p>
        </div>

        <div class=\"col-lg-6\">
          <h4>Online Space Drive</h4>
          <p>We are offering to our member an aggregated 1GB space online that they can access to store their documents and manage their documents.</p>
        </div>
      </div>

      <footer class=\"footer\">
        <p>&copy; LookIt 2017</p>
      </footer>

    </div> <!-- /container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src=\"../../../../assets/js/ie10-viewport-bug-workaround.js\"></script>
  </body>
</html>
";
        
        $__internal_af511819a83759464165867f5d7faff4f8dd0660f20f7170bac3e921639c8e78->leave($__internal_af511819a83759464165867f5d7faff4f8dd0660f20f7170bac3e921639c8e78_prof);

        
        $__internal_6f671229b6dcdcfd492443d7cf98b71ea1253e8ba681a536a2524d7c50a59153->leave($__internal_6f671229b6dcdcfd492443d7cf98b71ea1253e8ba681a536a2524d7c50a59153_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 39,  67 => 29,  61 => 26,  55 => 23,  40 => 11,  35 => 9,  25 => 1,);
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
    <meta name=\"description\" content=\"This is the Home Page\">
    <meta name=\"author\" content=\"Ognomo Daniel Bakyono\">
<link rel=\"stylesheet\"
\thref=\"{{ asset('assets/vendor/bootstrap/dist/css/bootstrap.min.css') }}\">
<link rel=\"stylesheet\"
\thref=\"{{ asset('assets/vendor/bootstrap/dist/css/narrow-jumbotron.css') }}\">

    <title>Welcome to the LookIt website</title>
  </head>

  <body>

    <div class=\"container\">
      <div class=\"header clearfix\">
        <nav>
          <ul class=\"nav nav-pills float-right\">
            <li class=\"nav-item\">
              <a class=\"nav-link active\" href=\"{{ path('home') }}\">Home <span class=\"sr-only\">(current)</span></a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"{{ path('signin') }}\">Sign In</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"{{ path('register') }}\">Register</a>
            </li>
          </ul>
        </nav>
        <h3 class=\"text-muted\">LookIt</h3>
      </div>

      <div class=\"jumbotron\">
        <h1 class=\"display-3\">Welcome to LookIt</h1>
        <p class=\"lead\">LookIt is a search engine that allows users to search through their document for information that are important to them. It allows members to have access to a space that they can use to store their documents and later look for a particular information in those documents.</p>
        <p><a class=\"btn btn-lg btn-success\" href=\"{{ path('register') }}\" role=\"button\">Sign up today</a></p>
      </div>

      <div class=\"row marketing\">
        <div class=\"col-lg-6\">
          <h4>Cloud</h4>
          <p>We give our members access to the cloud so that they can store their documents and also manage their documents information.</p>

          <h4>Search Indexing</h4>
          <p>Our technology allows our members to search through huge number of their documents. We are offering an elaborate number of search options that allows our members to find the information that they need.</p>

          <h4>Security</h4>
          <p>We are offering to our customers the best securities technology to protect their data against threats.</p>
        </div>

        <div class=\"col-lg-6\">
          <h4>Online Space Drive</h4>
          <p>We are offering to our member an aggregated 1GB space online that they can access to store their documents and manage their documents.</p>
        </div>
      </div>

      <footer class=\"footer\">
        <p>&copy; LookIt 2017</p>
      </footer>

    </div> <!-- /container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src=\"../../../../assets/js/ie10-viewport-bug-workaround.js\"></script>
  </body>
</html>
", "index.html.twig", "/home/danielbakyono/cs497/cs497-Web_Project/cs497WebProject/app/Resources/views/index.html.twig");
    }
}
