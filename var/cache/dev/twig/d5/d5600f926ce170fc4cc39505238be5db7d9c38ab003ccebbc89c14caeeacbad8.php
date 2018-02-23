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
        $__internal_83d97a7d3fb8e1ab429ffe6bd7c9c1479aa7b5b06804164a734fadcd41c0092a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83d97a7d3fb8e1ab429ffe6bd7c9c1479aa7b5b06804164a734fadcd41c0092a->enter($__internal_83d97a7d3fb8e1ab429ffe6bd7c9c1479aa7b5b06804164a734fadcd41c0092a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VallbonaWebBundle:Default:index.html.twig"));

        $__internal_6b273273e91e3e0cec379af661d056ab73ee4073fbb140172a86125846f48040 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b273273e91e3e0cec379af661d056ab73ee4073fbb140172a86125846f48040->enter($__internal_6b273273e91e3e0cec379af661d056ab73ee4073fbb140172a86125846f48040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VallbonaWebBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_83d97a7d3fb8e1ab429ffe6bd7c9c1479aa7b5b06804164a734fadcd41c0092a->leave($__internal_83d97a7d3fb8e1ab429ffe6bd7c9c1479aa7b5b06804164a734fadcd41c0092a_prof);

        
        $__internal_6b273273e91e3e0cec379af661d056ab73ee4073fbb140172a86125846f48040->leave($__internal_6b273273e91e3e0cec379af661d056ab73ee4073fbb140172a86125846f48040_prof);

    }

    public function getTemplateName()
    {
        return "VallbonaWebBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World!
", "VallbonaWebBundle:Default:index.html.twig", "/opt/lampp/htdocs/Jimmy_Ramos_Proyecto_Symfony3/src/Vallbona/WebBundle/Resources/views/Default/index.html.twig");
    }
}
