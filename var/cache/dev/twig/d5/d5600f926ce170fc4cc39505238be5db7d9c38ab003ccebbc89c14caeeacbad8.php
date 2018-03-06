<?php

/* VallbonaWebBundle:Default:index.html.twig */
class __TwigTemplate_7a8f24017402abb96c348b24a95fdf6ffa6cf34db3bab132771f37a80fafbcdf extends Twig_Template
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
        $__internal_895937c994d3f6acfbc56aec54edf36c47448051e5bc24f530b580da83a93d86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_895937c994d3f6acfbc56aec54edf36c47448051e5bc24f530b580da83a93d86->enter($__internal_895937c994d3f6acfbc56aec54edf36c47448051e5bc24f530b580da83a93d86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VallbonaWebBundle:Default:index.html.twig"));

        $__internal_0a52274c61bdfa14ff82378258fb2241577ae7485540810150e31cbc27f0e9d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a52274c61bdfa14ff82378258fb2241577ae7485540810150e31cbc27f0e9d5->enter($__internal_0a52274c61bdfa14ff82378258fb2241577ae7485540810150e31cbc27f0e9d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VallbonaWebBundle:Default:index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
<link href=\"https://fonts.googleapis.com/css?family=Andada\" rel=\"stylesheet\"> 
<link rel=\"icon\" type=\"image/png\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("imatges/logo.png"), "html", null, true);
        echo "\" />
\t<title>Home projecte</title>
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" />
<!-- Carregar CSS -->
<link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" />
</head>
<body class=\"body\">
\t<div class=\"jumbotron toplogo\">
    <div>
      <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("imatges/logo.png"), "html", null, true);
        echo "\">
    </div>
    <div>
      <h3 style=\"color:white\" class=\"letra-default\">Projecte Symfony</h3>
    </div>    
  </div>
<div class=\"container letra-default\" style=\"padding:10%;\">

<h4 style=\"text-align: center; color:white\" class=\"letra-default\">Formularis</h4>

<p class=\"text-center\"><a href=\"/symfony_m14/web/app_dev.php/create-tasca\"><button class=\"btn btn-primary tamaño\"> Crear tasca</button></a></p>
<p class=\"text-center\"><a href=\"#\"><button class=\"btn btn-primary tamaño\"> Crear subtasca</button></a></p>
<p class=\"text-center\"><a href=\"/symfony_m14/web/app_dev.php/create-user\"><button class=\"btn btn-primary tamaño\"> Crear usuario</button></a></p>

</div>
<div class=\"footer letra-default\">
  <p>
  <p>Created by: Jordi Baliellas & Jimmy Ramos</p>
  <p>Contact information: <a href=\"https://moodle.iescarlesvallbona.cat/\">https://moodle.iescarlesvallbona.cat/</a></p>
</p>
</div>
</body>


<script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\"></script>
</html>
";
        
        $__internal_895937c994d3f6acfbc56aec54edf36c47448051e5bc24f530b580da83a93d86->leave($__internal_895937c994d3f6acfbc56aec54edf36c47448051e5bc24f530b580da83a93d86_prof);

        
        $__internal_0a52274c61bdfa14ff82378258fb2241577ae7485540810150e31cbc27f0e9d5->leave($__internal_0a52274c61bdfa14ff82378258fb2241577ae7485540810150e31cbc27f0e9d5_prof);

    }

    public function getTemplateName()
    {
        return "VallbonaWebBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 14,  38 => 9,  31 => 5,  25 => 1,);
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
<html>
<head>
<link href=\"https://fonts.googleapis.com/css?family=Andada\" rel=\"stylesheet\"> 
<link rel=\"icon\" type=\"image/png\" href=\"{{ asset('imatges/logo.png') }}\" />
\t<title>Home projecte</title>
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" />
<!-- Carregar CSS -->
<link rel=\"stylesheet\" href=\"{{ asset('css/main.css') }}\" />
</head>
<body class=\"body\">
\t<div class=\"jumbotron toplogo\">
    <div>
      <img src=\"{{ asset('imatges/logo.png') }}\">
    </div>
    <div>
      <h3 style=\"color:white\" class=\"letra-default\">Projecte Symfony</h3>
    </div>    
  </div>
<div class=\"container letra-default\" style=\"padding:10%;\">

<h4 style=\"text-align: center; color:white\" class=\"letra-default\">Formularis</h4>

<p class=\"text-center\"><a href=\"/symfony_m14/web/app_dev.php/create-tasca\"><button class=\"btn btn-primary tamaño\"> Crear tasca</button></a></p>
<p class=\"text-center\"><a href=\"#\"><button class=\"btn btn-primary tamaño\"> Crear subtasca</button></a></p>
<p class=\"text-center\"><a href=\"/symfony_m14/web/app_dev.php/create-user\"><button class=\"btn btn-primary tamaño\"> Crear usuario</button></a></p>

</div>
<div class=\"footer letra-default\">
  <p>
  <p>Created by: Jordi Baliellas & Jimmy Ramos</p>
  <p>Contact information: <a href=\"https://moodle.iescarlesvallbona.cat/\">https://moodle.iescarlesvallbona.cat/</a></p>
</p>
</div>
</body>


<script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\"></script>
</html>
", "VallbonaWebBundle:Default:index.html.twig", "/opt/lampp/htdocs/symfony_m14/src/Vallbona/WebBundle/Resources/views/Default/index.html.twig");
    }
}
