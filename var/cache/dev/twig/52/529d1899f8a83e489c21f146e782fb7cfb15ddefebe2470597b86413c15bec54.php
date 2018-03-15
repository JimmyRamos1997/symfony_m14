<?php

/* VallbonaWebBundle:form:createSubtasca.html.twig */
class __TwigTemplate_20096f2b1da831d2fd32de79fef391c672b0232414f49efb99d6516066718b6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "VallbonaWebBundle:form:createSubtasca.html.twig", 1);
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
        $__internal_5e19392f63c31d78f229d2ca48a24e19f06c9766ff12277c6cbb10413fa1de99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e19392f63c31d78f229d2ca48a24e19f06c9766ff12277c6cbb10413fa1de99->enter($__internal_5e19392f63c31d78f229d2ca48a24e19f06c9766ff12277c6cbb10413fa1de99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VallbonaWebBundle:form:createSubtasca.html.twig"));

        $__internal_23c2b8ac50892050a9ae2975933e14b0b5691c41af4b52e7f084c44cf2ff3390 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23c2b8ac50892050a9ae2975933e14b0b5691c41af4b52e7f084c44cf2ff3390->enter($__internal_23c2b8ac50892050a9ae2975933e14b0b5691c41af4b52e7f084c44cf2ff3390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VallbonaWebBundle:form:createSubtasca.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e19392f63c31d78f229d2ca48a24e19f06c9766ff12277c6cbb10413fa1de99->leave($__internal_5e19392f63c31d78f229d2ca48a24e19f06c9766ff12277c6cbb10413fa1de99_prof);

        
        $__internal_23c2b8ac50892050a9ae2975933e14b0b5691c41af4b52e7f084c44cf2ff3390->leave($__internal_23c2b8ac50892050a9ae2975933e14b0b5691c41af4b52e7f084c44cf2ff3390_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_326a0b4d489a7c4e243afccaf49dfb08547f5d1fc8d217bc9c47551ca82e3068 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_326a0b4d489a7c4e243afccaf49dfb08547f5d1fc8d217bc9c47551ca82e3068->enter($__internal_326a0b4d489a7c4e243afccaf49dfb08547f5d1fc8d217bc9c47551ca82e3068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b268eaf155d543e8398e39d42f35f9862bd211f2bbb206cc273db1bcbe4bd060 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b268eaf155d543e8398e39d42f35f9862bd211f2bbb206cc273db1bcbe4bd060->enter($__internal_b268eaf155d543e8398e39d42f35f9862bd211f2bbb206cc273db1bcbe4bd060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Subtasca";
        
        $__internal_b268eaf155d543e8398e39d42f35f9862bd211f2bbb206cc273db1bcbe4bd060->leave($__internal_b268eaf155d543e8398e39d42f35f9862bd211f2bbb206cc273db1bcbe4bd060_prof);

        
        $__internal_326a0b4d489a7c4e243afccaf49dfb08547f5d1fc8d217bc9c47551ca82e3068->leave($__internal_326a0b4d489a7c4e243afccaf49dfb08547f5d1fc8d217bc9c47551ca82e3068_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_a7152e097d2b289d4090a8c5f7767b8ee74808f164c5f3f982c2a0df624f8117 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7152e097d2b289d4090a8c5f7767b8ee74808f164c5f3f982c2a0df624f8117->enter($__internal_a7152e097d2b289d4090a8c5f7767b8ee74808f164c5f3f982c2a0df624f8117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_1454ad2ad72d911c28770ec3e94ae4cf27f78bb60230a57d7a4d1caf2f6b7c98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1454ad2ad72d911c28770ec3e94ae4cf27f78bb60230a57d7a4d1caf2f6b7c98->enter($__internal_1454ad2ad72d911c28770ec3e94ae4cf27f78bb60230a57d7a4d1caf2f6b7c98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => "", "method" => "POST"));
        echo " ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_1454ad2ad72d911c28770ec3e94ae4cf27f78bb60230a57d7a4d1caf2f6b7c98->leave($__internal_1454ad2ad72d911c28770ec3e94ae4cf27f78bb60230a57d7a4d1caf2f6b7c98_prof);

        
        $__internal_a7152e097d2b289d4090a8c5f7767b8ee74808f164c5f3f982c2a0df624f8117->leave($__internal_a7152e097d2b289d4090a8c5f7767b8ee74808f164c5f3f982c2a0df624f8117_prof);

    }

    public function getTemplateName()
    {
        return "VallbonaWebBundle:form:createSubtasca.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
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
{% block title %}Subtasca{% endblock %}
{% block content %}
{{form_start(form, {'action':'', 'method':'POST'})}} {{form_end(form)}}
{% endblock %}", "VallbonaWebBundle:form:createSubtasca.html.twig", "/opt/lampp/htdocs/symfony_m14/src/Vallbona/WebBundle/Resources/views/form/createSubtasca.html.twig");
    }
}
