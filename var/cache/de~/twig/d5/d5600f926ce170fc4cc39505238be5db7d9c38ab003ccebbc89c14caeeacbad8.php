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
        $__internal_d8a90968bc550580d89d530fadcc87de5844d7273f8533401150d14a63d68669 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8a90968bc550580d89d530fadcc87de5844d7273f8533401150d14a63d68669->enter($__internal_d8a90968bc550580d89d530fadcc87de5844d7273f8533401150d14a63d68669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VallbonaWebBundle:Default:index.html.twig"));

        $__internal_f8c57d7550674cc776c5029ecd506e08c06768e6de41740093f3b151059286a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8c57d7550674cc776c5029ecd506e08c06768e6de41740093f3b151059286a6->enter($__internal_f8c57d7550674cc776c5029ecd506e08c06768e6de41740093f3b151059286a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VallbonaWebBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_d8a90968bc550580d89d530fadcc87de5844d7273f8533401150d14a63d68669->leave($__internal_d8a90968bc550580d89d530fadcc87de5844d7273f8533401150d14a63d68669_prof);

        
        $__internal_f8c57d7550674cc776c5029ecd506e08c06768e6de41740093f3b151059286a6->leave($__internal_f8c57d7550674cc776c5029ecd506e08c06768e6de41740093f3b151059286a6_prof);

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
