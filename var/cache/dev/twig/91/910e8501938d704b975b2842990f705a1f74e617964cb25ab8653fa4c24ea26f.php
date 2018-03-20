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
        $__internal_3f958ddfd7e8772e0204d8753591ea5d02009f2022a9bdd44f4f02bdeba801e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f958ddfd7e8772e0204d8753591ea5d02009f2022a9bdd44f4f02bdeba801e2->enter($__internal_3f958ddfd7e8772e0204d8753591ea5d02009f2022a9bdd44f4f02bdeba801e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VallbonaWebBundle:form:create.html.twig"));

        $__internal_f7dc26ae4c33658d0f68aee94877f015ca95bab3b73725787ad58e6d797f8282 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7dc26ae4c33658d0f68aee94877f015ca95bab3b73725787ad58e6d797f8282->enter($__internal_f7dc26ae4c33658d0f68aee94877f015ca95bab3b73725787ad58e6d797f8282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VallbonaWebBundle:form:create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f958ddfd7e8772e0204d8753591ea5d02009f2022a9bdd44f4f02bdeba801e2->leave($__internal_3f958ddfd7e8772e0204d8753591ea5d02009f2022a9bdd44f4f02bdeba801e2_prof);

        
        $__internal_f7dc26ae4c33658d0f68aee94877f015ca95bab3b73725787ad58e6d797f8282->leave($__internal_f7dc26ae4c33658d0f68aee94877f015ca95bab3b73725787ad58e6d797f8282_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_b45d66ab1fec9da75b4ea37702cda27f926105cad6af4dee90556dc163531592 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b45d66ab1fec9da75b4ea37702cda27f926105cad6af4dee90556dc163531592->enter($__internal_b45d66ab1fec9da75b4ea37702cda27f926105cad6af4dee90556dc163531592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9beb5c84a7053ed65315419cd6d062063d28ecf5068d5f9f1f381303c7eeb821 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9beb5c84a7053ed65315419cd6d062063d28ecf5068d5f9f1f381303c7eeb821->enter($__internal_9beb5c84a7053ed65315419cd6d062063d28ecf5068d5f9f1f381303c7eeb821_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "User";
        
        $__internal_9beb5c84a7053ed65315419cd6d062063d28ecf5068d5f9f1f381303c7eeb821->leave($__internal_9beb5c84a7053ed65315419cd6d062063d28ecf5068d5f9f1f381303c7eeb821_prof);

        
        $__internal_b45d66ab1fec9da75b4ea37702cda27f926105cad6af4dee90556dc163531592->leave($__internal_b45d66ab1fec9da75b4ea37702cda27f926105cad6af4dee90556dc163531592_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_a4efbef9fd3255c87a33aafc5178e3f40b8f1e151b9399ef99f34637c7017b9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4efbef9fd3255c87a33aafc5178e3f40b8f1e151b9399ef99f34637c7017b9e->enter($__internal_a4efbef9fd3255c87a33aafc5178e3f40b8f1e151b9399ef99f34637c7017b9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_5e8c3cf89f22730f267c5c18b5b8dde18f3c33608a2ab2ecff60324c57ed3fd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e8c3cf89f22730f267c5c18b5b8dde18f3c33608a2ab2ecff60324c57ed3fd2->enter($__internal_5e8c3cf89f22730f267c5c18b5b8dde18f3c33608a2ab2ecff60324c57ed3fd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo " \t";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "danger"), "method")) {
            // line 5
            echo "              \t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "danger"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 6
                echo "                <div class=\"alert alert-danger\">
                    ";
                // line 7
                echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                echo "
                </div>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "    ";
        }
        // line 11
        echo "\t\t<div class=\"formproj\">
\t\t<div class=\"centrarform\">
\t\t";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => "", "method" => "POST"));
        echo " 
\t\t";
        // line 14
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "\t\t
\t\t</div>
\t\t</div>
\t";
        
        $__internal_5e8c3cf89f22730f267c5c18b5b8dde18f3c33608a2ab2ecff60324c57ed3fd2->leave($__internal_5e8c3cf89f22730f267c5c18b5b8dde18f3c33608a2ab2ecff60324c57ed3fd2_prof);

        
        $__internal_a4efbef9fd3255c87a33aafc5178e3f40b8f1e151b9399ef99f34637c7017b9e->leave($__internal_a4efbef9fd3255c87a33aafc5178e3f40b8f1e151b9399ef99f34637c7017b9e_prof);

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
        return array (  99 => 14,  95 => 13,  91 => 11,  88 => 10,  79 => 7,  76 => 6,  71 => 5,  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
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
 \t{% if app.session.flashBag.has('danger') %}
              \t{% for msg in app.session.flashBag.get('danger') %}
                <div class=\"alert alert-danger\">
                    {{ msg }}
                </div>
\t\t\t\t{% endfor %}
    {% endif %}
\t\t<div class=\"formproj\">
\t\t<div class=\"centrarform\">
\t\t{{form_start(form,{'action':'', 'method':'POST'})}} 
\t\t{{form_end(form)}}\t\t
\t\t</div>
\t\t</div>
\t{% endblock %}", "VallbonaWebBundle:form:create.html.twig", "/opt/lampp/htdocs/symfony_m14/src/Vallbona/WebBundle/Resources/views/form/create.html.twig");
    }
}
