<?php

/* VallbonaWebBundle:Default:index.html.twig */
class __TwigTemplate_ba786480914dabfc17c3c20dea6531da422686d39957288667839f4d1aafbc3e extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Home";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
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
        return array (  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "VallbonaWebBundle:Default:index.html.twig", "/opt/lampp/htdocs/symfony_m14/src/Vallbona/WebBundle/Resources/views/Default/index.html.twig");
    }
}
