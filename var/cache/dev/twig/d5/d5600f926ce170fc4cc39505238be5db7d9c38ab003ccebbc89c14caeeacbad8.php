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
        $__internal_2e5cade788d01620743e8f205a55d75db98feade3b16cce2d359b694b0d966fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e5cade788d01620743e8f205a55d75db98feade3b16cce2d359b694b0d966fd->enter($__internal_2e5cade788d01620743e8f205a55d75db98feade3b16cce2d359b694b0d966fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VallbonaWebBundle:Default:index.html.twig"));

        $__internal_09018c550157b50c8303354d24521583eea4a9f48176e7cfbb24414382df1d67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09018c550157b50c8303354d24521583eea4a9f48176e7cfbb24414382df1d67->enter($__internal_09018c550157b50c8303354d24521583eea4a9f48176e7cfbb24414382df1d67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VallbonaWebBundle:Default:index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
<link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://fonts.googleapis.com/css?family=Andada"), "html", null, true);
        echo "\" rel=\"stylesheet\"> 
<link rel=\"icon\" type=\"image/png\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://dl2.pushbulletusercontent.com/FefaB9CnGuY0qg62CTsmAscSzYUYIHxa/logo.png"), "html", null, true);
        echo "\" />
\t<title></title>
<link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" />
<style>
.footer {
\tborder-radius: 5px;
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: #2F2F2F;
   color: white;
   text-align: center;
}
.jumbotron{
background-color: #2F2F2F;

}

.text-center{
\ttext-align: center;
}
.tamaño {
\twidth: 20%;
\tmin-width: 150px;
}
.body{
\tbackground-image: url('https://avante.biz/wp-content/uploads/Gradient-Wallpaper/Gradient-Wallpaper-009.jpg');
background-size: cover;
 background-attachment: fixed;
}

.letra-default {
\tfont-family: 'Andada', serif;
}
</style>
</head>
<body class=\"body\">
\t<div class=\"jumbotron\">
    <h3 style=\"color:white\" class=\"letra-default\">Projecte Symfony</h3>      
    
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


<script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://code.jquery.com/jquery-3.2.1.slim.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
</html>
";
        
        $__internal_2e5cade788d01620743e8f205a55d75db98feade3b16cce2d359b694b0d966fd->leave($__internal_2e5cade788d01620743e8f205a55d75db98feade3b16cce2d359b694b0d966fd_prof);

        
        $__internal_09018c550157b50c8303354d24521583eea4a9f48176e7cfbb24414382df1d67->leave($__internal_09018c550157b50c8303354d24521583eea4a9f48176e7cfbb24414382df1d67_prof);

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
        return array (  112 => 68,  108 => 67,  104 => 66,  43 => 8,  39 => 7,  34 => 5,  30 => 4,  25 => 1,);
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
<link href=\"{{ asset('https://fonts.googleapis.com/css?family=Andada') }}\" rel=\"stylesheet\"> 
<link rel=\"icon\" type=\"image/png\" href=\"{{ asset('https://dl2.pushbulletusercontent.com/FefaB9CnGuY0qg62CTsmAscSzYUYIHxa/logo.png') }}\" />
\t<title></title>
<link rel=\"stylesheet\" href=\"{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css') }}\" />
<link rel=\"stylesheet\" href=\"{{ asset('css/main.css') }}\" />
<style>
.footer {
\tborder-radius: 5px;
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: #2F2F2F;
   color: white;
   text-align: center;
}
.jumbotron{
background-color: #2F2F2F;

}

.text-center{
\ttext-align: center;
}
.tamaño {
\twidth: 20%;
\tmin-width: 150px;
}
.body{
\tbackground-image: url('https://avante.biz/wp-content/uploads/Gradient-Wallpaper/Gradient-Wallpaper-009.jpg');
background-size: cover;
 background-attachment: fixed;
}

.letra-default {
\tfont-family: 'Andada', serif;
}
</style>
</head>
<body class=\"body\">
\t<div class=\"jumbotron\">
    <h3 style=\"color:white\" class=\"letra-default\">Projecte Symfony</h3>      
    
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


<script src=\"{{ asset('https://code.jquery.com/jquery-3.2.1.slim.min.js') }}\"></script>
<script src=\"{{ asset('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js') }}\"></script>
<script src=\"{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js') }}\"></script>
</html>
", "VallbonaWebBundle:Default:index.html.twig", "/opt/lampp/htdocs/symfony_m14/src/Vallbona/WebBundle/Resources/views/Default/index.html.twig");
    }
}
