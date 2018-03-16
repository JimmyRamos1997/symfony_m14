<?php

/* VallbonaWebBundle:Default:index.html.twig */
class __TwigTemplate_7a8f24017402abb96c348b24a95fdf6ffa6cf34db3bab132771f37a80fafbcdf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "VallbonaWebBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_593cef17b96fb819b02cb000f2b3df7f4076c5af74b2d422fb73fca255a3c5fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_593cef17b96fb819b02cb000f2b3df7f4076c5af74b2d422fb73fca255a3c5fd->enter($__internal_593cef17b96fb819b02cb000f2b3df7f4076c5af74b2d422fb73fca255a3c5fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VallbonaWebBundle:Default:index.html.twig"));

        $__internal_11d836105738fa189ff554172310351211fdbbd652d9bf12fb7f7dfd99b3cd4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11d836105738fa189ff554172310351211fdbbd652d9bf12fb7f7dfd99b3cd4a->enter($__internal_11d836105738fa189ff554172310351211fdbbd652d9bf12fb7f7dfd99b3cd4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VallbonaWebBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_593cef17b96fb819b02cb000f2b3df7f4076c5af74b2d422fb73fca255a3c5fd->leave($__internal_593cef17b96fb819b02cb000f2b3df7f4076c5af74b2d422fb73fca255a3c5fd_prof);

        
        $__internal_11d836105738fa189ff554172310351211fdbbd652d9bf12fb7f7dfd99b3cd4a->leave($__internal_11d836105738fa189ff554172310351211fdbbd652d9bf12fb7f7dfd99b3cd4a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_03f957f791c550224097a86ec4328412b5d20abbc14e2d90223ad69362a5e67c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03f957f791c550224097a86ec4328412b5d20abbc14e2d90223ad69362a5e67c->enter($__internal_03f957f791c550224097a86ec4328412b5d20abbc14e2d90223ad69362a5e67c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2ace7c519133bce52e57681bb467d06912658dbdb82eeabb0797354e9097f41b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ace7c519133bce52e57681bb467d06912658dbdb82eeabb0797354e9097f41b->enter($__internal_2ace7c519133bce52e57681bb467d06912658dbdb82eeabb0797354e9097f41b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Home";
        
        $__internal_2ace7c519133bce52e57681bb467d06912658dbdb82eeabb0797354e9097f41b->leave($__internal_2ace7c519133bce52e57681bb467d06912658dbdb82eeabb0797354e9097f41b_prof);

        
        $__internal_03f957f791c550224097a86ec4328412b5d20abbc14e2d90223ad69362a5e67c->leave($__internal_03f957f791c550224097a86ec4328412b5d20abbc14e2d90223ad69362a5e67c_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_5f1a3f53b30ab040e3f847366619120834f78c654c1605ae9013fcf9ee92be52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f1a3f53b30ab040e3f847366619120834f78c654c1605ae9013fcf9ee92be52->enter($__internal_5f1a3f53b30ab040e3f847366619120834f78c654c1605ae9013fcf9ee92be52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_be73acc02d4106219ca7ca0b1cdb13913ae395e3a13a5589341f97a54bad7194 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be73acc02d4106219ca7ca0b1cdb13913ae395e3a13a5589341f97a54bad7194->enter($__internal_be73acc02d4106219ca7ca0b1cdb13913ae395e3a13a5589341f97a54bad7194_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "\t\t<img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("imatges/logo.png"), "html", null, true);
        echo "\"> 
\t\t<div class=\"container menuinici letra-default\">

\t\t\t<h4 class=\"letra-default titlemenu\">Formularis</h4>

\t\t\t<div class=\"butonsmenu\">
\t\t\t<p class=\"text-center\"><a href=\"/symfony_m14/web/app_dev.php/create-tasca\"><button class=\"btn btn-primary tamaño\"> Crear tasca</button></a></p>
\t\t\t<p class=\"text-center\"><a href=\"/symfony_m14/web/app_dev.php/create-subtasca\"><button class=\"btn btn-primary tamaño\"> Crear subtasca</button></a></p>
\t\t\t<p class=\"text-center\"><a href=\"/symfony_m14/web/app_dev.php/create-user\"><button class=\"btn btn-primary tamaño\"> Crear usuario</button></a></p>
\t\t\t</div>

\t\t</div>
\t\t<div class=\"footer letra-default\">
\t\t\t<p>
\t\t\t\t<p>Created by: Jordi Baliellas & Jimmy Ramos</p>
\t\t\t\t<p>Contact information: <a href=\"https://moodle.iescarlesvallbona.cat/\">https://moodle.iescarlesvallbona.cat/</a></p>
\t\t\t</p>
\t\t</div>
\t";
        
        $__internal_be73acc02d4106219ca7ca0b1cdb13913ae395e3a13a5589341f97a54bad7194->leave($__internal_be73acc02d4106219ca7ca0b1cdb13913ae395e3a13a5589341f97a54bad7194_prof);

        
        $__internal_5f1a3f53b30ab040e3f847366619120834f78c654c1605ae9013fcf9ee92be52->leave($__internal_5f1a3f53b30ab040e3f847366619120834f78c654c1605ae9013fcf9ee92be52_prof);

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
        return array (  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block title %}Home{% endblock %}

\t{% block content %}
\t\t<img src=\"{{ asset('imatges/logo.png') }}\"> 
\t\t<div class=\"container menuinici letra-default\">

\t\t\t<h4 class=\"letra-default titlemenu\">Formularis</h4>

\t\t\t<div class=\"butonsmenu\">
\t\t\t<p class=\"text-center\"><a href=\"/symfony_m14/web/app_dev.php/create-tasca\"><button class=\"btn btn-primary tamaño\"> Crear tasca</button></a></p>
\t\t\t<p class=\"text-center\"><a href=\"/symfony_m14/web/app_dev.php/create-subtasca\"><button class=\"btn btn-primary tamaño\"> Crear subtasca</button></a></p>
\t\t\t<p class=\"text-center\"><a href=\"/symfony_m14/web/app_dev.php/create-user\"><button class=\"btn btn-primary tamaño\"> Crear usuario</button></a></p>
\t\t\t</div>

\t\t</div>
\t\t<div class=\"footer letra-default\">
\t\t\t<p>
\t\t\t\t<p>Created by: Jordi Baliellas & Jimmy Ramos</p>
\t\t\t\t<p>Contact information: <a href=\"https://moodle.iescarlesvallbona.cat/\">https://moodle.iescarlesvallbona.cat/</a></p>
\t\t\t</p>
\t\t</div>
\t{% endblock %}", "VallbonaWebBundle:Default:index.html.twig", "/opt/lampp/htdocs/symfony_m14/src/Vallbona/WebBundle/Resources/views/Default/index.html.twig");
    }
}
