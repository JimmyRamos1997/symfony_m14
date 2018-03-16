<?php

/* VallbonaWebBundle:form:create.html.twig */
class __TwigTemplate_9d1e5f5e3e015128e1031e155a3ca6d712abb3604e2b573511cc3c8c6591668b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "VallbonaWebBundle:form:create.html.twig", 1);
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
        $__internal_382f5549022631f935f1000f4069a25e7bc010f1a009cc56752e12da87738950 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_382f5549022631f935f1000f4069a25e7bc010f1a009cc56752e12da87738950->enter($__internal_382f5549022631f935f1000f4069a25e7bc010f1a009cc56752e12da87738950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VallbonaWebBundle:form:create.html.twig"));

        $__internal_e8205a4e51ae5a04a31f498734e3d413cb77c5b550b08b199d2819503597080d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8205a4e51ae5a04a31f498734e3d413cb77c5b550b08b199d2819503597080d->enter($__internal_e8205a4e51ae5a04a31f498734e3d413cb77c5b550b08b199d2819503597080d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VallbonaWebBundle:form:create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_382f5549022631f935f1000f4069a25e7bc010f1a009cc56752e12da87738950->leave($__internal_382f5549022631f935f1000f4069a25e7bc010f1a009cc56752e12da87738950_prof);

        
        $__internal_e8205a4e51ae5a04a31f498734e3d413cb77c5b550b08b199d2819503597080d->leave($__internal_e8205a4e51ae5a04a31f498734e3d413cb77c5b550b08b199d2819503597080d_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_8800c500a446020e4aed6f55ec47a4a5937e4f383c538497cb5414e4c91bbfa2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8800c500a446020e4aed6f55ec47a4a5937e4f383c538497cb5414e4c91bbfa2->enter($__internal_8800c500a446020e4aed6f55ec47a4a5937e4f383c538497cb5414e4c91bbfa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a904090fb81139314927539c9b650c972400cebb213db7a1248ae7504da50d10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a904090fb81139314927539c9b650c972400cebb213db7a1248ae7504da50d10->enter($__internal_a904090fb81139314927539c9b650c972400cebb213db7a1248ae7504da50d10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "User";
        
        $__internal_a904090fb81139314927539c9b650c972400cebb213db7a1248ae7504da50d10->leave($__internal_a904090fb81139314927539c9b650c972400cebb213db7a1248ae7504da50d10_prof);

        
        $__internal_8800c500a446020e4aed6f55ec47a4a5937e4f383c538497cb5414e4c91bbfa2->leave($__internal_8800c500a446020e4aed6f55ec47a4a5937e4f383c538497cb5414e4c91bbfa2_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_b186895cfee22575b0a452082fef5c8cf1b920cfbe47c43527d073fb8936a1e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b186895cfee22575b0a452082fef5c8cf1b920cfbe47c43527d073fb8936a1e3->enter($__internal_b186895cfee22575b0a452082fef5c8cf1b920cfbe47c43527d073fb8936a1e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_bfcc5030982a87e6c42bed6cf9ef7df55ea98be27e8d992780c277dabbedc838 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfcc5030982a87e6c42bed6cf9ef7df55ea98be27e8d992780c277dabbedc838->enter($__internal_bfcc5030982a87e6c42bed6cf9ef7df55ea98be27e8d992780c277dabbedc838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "\t\t<div class=\"formproj\">
\t\t<div class=\"centrarform\">

\t\t";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => "", "method" => "POST"));
        echo " ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

\t\t
\t\t</div>
\t\t</div>
\t";
        
        $__internal_bfcc5030982a87e6c42bed6cf9ef7df55ea98be27e8d992780c277dabbedc838->leave($__internal_bfcc5030982a87e6c42bed6cf9ef7df55ea98be27e8d992780c277dabbedc838_prof);

        
        $__internal_b186895cfee22575b0a452082fef5c8cf1b920cfbe47c43527d073fb8936a1e3->leave($__internal_b186895cfee22575b0a452082fef5c8cf1b920cfbe47c43527d073fb8936a1e3_prof);

    }

    public function getTemplateName()
    {
        return "VallbonaWebBundle:form:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 8,  68 => 5,  59 => 4,  41 => 2,  11 => 1,);
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
{% block title %}User{% endblock %}

\t{% block content %}
\t\t<div class=\"formproj\">
\t\t<div class=\"centrarform\">

\t\t{{form_start(form, {'action':'', 'method':'POST'})}} {{form_end(form)}}

\t\t
\t\t</div>
\t\t</div>
\t{% endblock %}", "VallbonaWebBundle:form:create.html.twig", "/opt/lampp/htdocs/symfony_m14/src/Vallbona/WebBundle/Resources/views/form/create.html.twig");
    }
}
