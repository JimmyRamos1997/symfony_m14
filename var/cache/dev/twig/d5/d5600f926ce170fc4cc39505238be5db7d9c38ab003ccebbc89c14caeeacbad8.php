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
        $__internal_6e3c67ad7e7161fd24474cf49412df5211b28d301f291f37393974bae18e6cbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e3c67ad7e7161fd24474cf49412df5211b28d301f291f37393974bae18e6cbe->enter($__internal_6e3c67ad7e7161fd24474cf49412df5211b28d301f291f37393974bae18e6cbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VallbonaWebBundle:Default:index.html.twig"));

        $__internal_c8f113f60471768b82afe1306f58204674b8d61f84894915d5c596faadf90fd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8f113f60471768b82afe1306f58204674b8d61f84894915d5c596faadf90fd1->enter($__internal_c8f113f60471768b82afe1306f58204674b8d61f84894915d5c596faadf90fd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VallbonaWebBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e3c67ad7e7161fd24474cf49412df5211b28d301f291f37393974bae18e6cbe->leave($__internal_6e3c67ad7e7161fd24474cf49412df5211b28d301f291f37393974bae18e6cbe_prof);

        
        $__internal_c8f113f60471768b82afe1306f58204674b8d61f84894915d5c596faadf90fd1->leave($__internal_c8f113f60471768b82afe1306f58204674b8d61f84894915d5c596faadf90fd1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d241c466bab6388649d8c9aca8a0e5c09f181c4c4dc1d99944e337de4b4078d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d241c466bab6388649d8c9aca8a0e5c09f181c4c4dc1d99944e337de4b4078d8->enter($__internal_d241c466bab6388649d8c9aca8a0e5c09f181c4c4dc1d99944e337de4b4078d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c8ea82d89f37864c13af3915a9322c19bc6b696e502cc67dab049f6423f8d2a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8ea82d89f37864c13af3915a9322c19bc6b696e502cc67dab049f6423f8d2a6->enter($__internal_c8ea82d89f37864c13af3915a9322c19bc6b696e502cc67dab049f6423f8d2a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Home";
        
        $__internal_c8ea82d89f37864c13af3915a9322c19bc6b696e502cc67dab049f6423f8d2a6->leave($__internal_c8ea82d89f37864c13af3915a9322c19bc6b696e502cc67dab049f6423f8d2a6_prof);

        
        $__internal_d241c466bab6388649d8c9aca8a0e5c09f181c4c4dc1d99944e337de4b4078d8->leave($__internal_d241c466bab6388649d8c9aca8a0e5c09f181c4c4dc1d99944e337de4b4078d8_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_e383243ffe552c77df6c5c9172ef7d426bab0788f63da202622e2d9b63f07ca5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e383243ffe552c77df6c5c9172ef7d426bab0788f63da202622e2d9b63f07ca5->enter($__internal_e383243ffe552c77df6c5c9172ef7d426bab0788f63da202622e2d9b63f07ca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_79c199553d7f8022b9f33025c6e2ed4b1dc14bfde541544a31d019af410f82dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79c199553d7f8022b9f33025c6e2ed4b1dc14bfde541544a31d019af410f82dd->enter($__internal_79c199553d7f8022b9f33025c6e2ed4b1dc14bfde541544a31d019af410f82dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "\t\t<img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("imatges/logo.png"), "html", null, true);
        echo "\"> 
\t\t<div class=\"container letra-default\" style=\"padding:10%;\">

\t\t\t<h4 style=\"text-align: center; color:white\" class=\"letra-default\">Formularis</h4>

\t\t\t<p class=\"text-center\"><a href=\"/symfony_m14/web/app_dev.php/create-tasca\"><button class=\"btn btn-primary tamaño\"> Crear tasca</button></a></p>
\t\t\t<p class=\"text-center\"><a href=\"/symfony_m14/web/app_dev.php/create-subtasca\"><button class=\"btn btn-primary tamaño\"> Crear subtasca</button></a></p>
\t\t\t<p class=\"text-center\"><a href=\"/symfony_m14/web/app_dev.php/create-user\"><button class=\"btn btn-primary tamaño\"> Crear usuario</button></a></p>

\t\t</div>
\t\t<div class=\"footer letra-default\">
\t\t\t<p>
\t\t\t\t<p>Created by: Jordi Baliellas & Jimmy Ramos</p>
\t\t\t\t<p>Contact information: <a href=\"https://moodle.iescarlesvallbona.cat/\">https://moodle.iescarlesvallbona.cat/</a></p>
\t\t\t</p>
\t\t</div>
\t";
        
        $__internal_79c199553d7f8022b9f33025c6e2ed4b1dc14bfde541544a31d019af410f82dd->leave($__internal_79c199553d7f8022b9f33025c6e2ed4b1dc14bfde541544a31d019af410f82dd_prof);

        
        $__internal_e383243ffe552c77df6c5c9172ef7d426bab0788f63da202622e2d9b63f07ca5->leave($__internal_e383243ffe552c77df6c5c9172ef7d426bab0788f63da202622e2d9b63f07ca5_prof);

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
\t\t<div class=\"container letra-default\" style=\"padding:10%;\">

\t\t\t<h4 style=\"text-align: center; color:white\" class=\"letra-default\">Formularis</h4>

\t\t\t<p class=\"text-center\"><a href=\"/symfony_m14/web/app_dev.php/create-tasca\"><button class=\"btn btn-primary tamaño\"> Crear tasca</button></a></p>
\t\t\t<p class=\"text-center\"><a href=\"/symfony_m14/web/app_dev.php/create-subtasca\"><button class=\"btn btn-primary tamaño\"> Crear subtasca</button></a></p>
\t\t\t<p class=\"text-center\"><a href=\"/symfony_m14/web/app_dev.php/create-user\"><button class=\"btn btn-primary tamaño\"> Crear usuario</button></a></p>

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
