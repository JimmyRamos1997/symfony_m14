<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_3493af3fc756179f7f6a6e5d68ec04c96d7ea04c3713f8665a1163029b5a11ba extends Twig_Template
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
        $__internal_5fd092402faaf8fbe9d29f810127fd1ca0c3f49d705e5561ac4250a74ee58a4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fd092402faaf8fbe9d29f810127fd1ca0c3f49d705e5561ac4250a74ee58a4b->enter($__internal_5fd092402faaf8fbe9d29f810127fd1ca0c3f49d705e5561ac4250a74ee58a4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_dd5430e1401b68bae0c5e6bc23e6f7dd7fb845fcd27d0a467f022982cea4d5a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd5430e1401b68bae0c5e6bc23e6f7dd7fb845fcd27d0a467f022982cea4d5a4->enter($__internal_dd5430e1401b68bae0c5e6bc23e6f7dd7fb845fcd27d0a467f022982cea4d5a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_5fd092402faaf8fbe9d29f810127fd1ca0c3f49d705e5561ac4250a74ee58a4b->leave($__internal_5fd092402faaf8fbe9d29f810127fd1ca0c3f49d705e5561ac4250a74ee58a4b_prof);

        
        $__internal_dd5430e1401b68bae0c5e6bc23e6f7dd7fb845fcd27d0a467f022982cea4d5a4->leave($__internal_dd5430e1401b68bae0c5e6bc23e6f7dd7fb845fcd27d0a467f022982cea4d5a4_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "/opt/lampp/htdocs/symfony_m14/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
