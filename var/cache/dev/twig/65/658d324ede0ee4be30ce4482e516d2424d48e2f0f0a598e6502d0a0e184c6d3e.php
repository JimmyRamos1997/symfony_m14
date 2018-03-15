<?php

/* VallbonaWebBundle:form:createTasca.html.twig */
class __TwigTemplate_d3e1159b0ed722fa71241cb05f7d0be051b45901fc433cf88030d1c582bbbe55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "VallbonaWebBundle:form:createTasca.html.twig", 1);
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
        $__internal_1950c63bb121378f6da2ab5566183654b6ee97abfead826751074b9bb066b452 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1950c63bb121378f6da2ab5566183654b6ee97abfead826751074b9bb066b452->enter($__internal_1950c63bb121378f6da2ab5566183654b6ee97abfead826751074b9bb066b452_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VallbonaWebBundle:form:createTasca.html.twig"));

        $__internal_883677182a15dd8fbe3361d3895e55de03d0d621924219498292cccbf710287d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_883677182a15dd8fbe3361d3895e55de03d0d621924219498292cccbf710287d->enter($__internal_883677182a15dd8fbe3361d3895e55de03d0d621924219498292cccbf710287d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VallbonaWebBundle:form:createTasca.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1950c63bb121378f6da2ab5566183654b6ee97abfead826751074b9bb066b452->leave($__internal_1950c63bb121378f6da2ab5566183654b6ee97abfead826751074b9bb066b452_prof);

        
        $__internal_883677182a15dd8fbe3361d3895e55de03d0d621924219498292cccbf710287d->leave($__internal_883677182a15dd8fbe3361d3895e55de03d0d621924219498292cccbf710287d_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_f3c785c9b57e3f53aa62c36579bd44f104859824b424566f2b18bcc9b32ac08f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3c785c9b57e3f53aa62c36579bd44f104859824b424566f2b18bcc9b32ac08f->enter($__internal_f3c785c9b57e3f53aa62c36579bd44f104859824b424566f2b18bcc9b32ac08f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_871a9d9a78beb1f95e85d1cdfb39751a42062fdc104014b3e9db0a813d1c3866 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_871a9d9a78beb1f95e85d1cdfb39751a42062fdc104014b3e9db0a813d1c3866->enter($__internal_871a9d9a78beb1f95e85d1cdfb39751a42062fdc104014b3e9db0a813d1c3866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "User";
        
        $__internal_871a9d9a78beb1f95e85d1cdfb39751a42062fdc104014b3e9db0a813d1c3866->leave($__internal_871a9d9a78beb1f95e85d1cdfb39751a42062fdc104014b3e9db0a813d1c3866_prof);

        
        $__internal_f3c785c9b57e3f53aa62c36579bd44f104859824b424566f2b18bcc9b32ac08f->leave($__internal_f3c785c9b57e3f53aa62c36579bd44f104859824b424566f2b18bcc9b32ac08f_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_95f923d6d9b68a5dcbcbdf0aedc89b676f13f057c99f585250fa340f6254afbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95f923d6d9b68a5dcbcbdf0aedc89b676f13f057c99f585250fa340f6254afbc->enter($__internal_95f923d6d9b68a5dcbcbdf0aedc89b676f13f057c99f585250fa340f6254afbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_844df2470a23ab700526d2720eef624e2589e418efefb686051c9e4cc5650367 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_844df2470a23ab700526d2720eef624e2589e418efefb686051c9e4cc5650367->enter($__internal_844df2470a23ab700526d2720eef624e2589e418efefb686051c9e4cc5650367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "

";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => "", "method" => "POST"));
        echo " 
";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", array()), 'label');
        echo "
";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", array()), 'errors');
        echo "
";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("id" => "idnom")));
        echo "
";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_844df2470a23ab700526d2720eef624e2589e418efefb686051c9e4cc5650367->leave($__internal_844df2470a23ab700526d2720eef624e2589e418efefb686051c9e4cc5650367_prof);

        
        $__internal_95f923d6d9b68a5dcbcbdf0aedc89b676f13f057c99f585250fa340f6254afbc->leave($__internal_95f923d6d9b68a5dcbcbdf0aedc89b676f13f057c99f585250fa340f6254afbc_prof);

    }

    public function getTemplateName()
    {
        return "VallbonaWebBundle:form:createTasca.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  84 => 10,  80 => 9,  76 => 8,  72 => 7,  68 => 5,  59 => 4,  41 => 2,  11 => 1,);
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

{% block content %}


{{form_start(form, {'action':'', 'method':'POST'})}} 
{{ form_label(form.nom) }}
{{ form_errors(form.nom) }}
{{ form_widget(form.nom, {'attr': {'id': 'idnom'}}) }}
{{form_end(form)}}
{% endblock %}", "VallbonaWebBundle:form:createTasca.html.twig", "/opt/lampp/htdocs/symfony_m14/src/Vallbona/WebBundle/Resources/views/form/createTasca.html.twig");
    }
}
