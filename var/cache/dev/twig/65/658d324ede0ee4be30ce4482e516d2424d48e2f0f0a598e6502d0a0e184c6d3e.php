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
        $__internal_7aab8b1605e8cb0b34cb489825519557a085fea33d601b2e5c3f971c0c47feda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7aab8b1605e8cb0b34cb489825519557a085fea33d601b2e5c3f971c0c47feda->enter($__internal_7aab8b1605e8cb0b34cb489825519557a085fea33d601b2e5c3f971c0c47feda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VallbonaWebBundle:form:createTasca.html.twig"));

        $__internal_ccf82bed854a97166da4e279c47bbfc8c45b1913689c563e7e57df8648938c25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccf82bed854a97166da4e279c47bbfc8c45b1913689c563e7e57df8648938c25->enter($__internal_ccf82bed854a97166da4e279c47bbfc8c45b1913689c563e7e57df8648938c25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VallbonaWebBundle:form:createTasca.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7aab8b1605e8cb0b34cb489825519557a085fea33d601b2e5c3f971c0c47feda->leave($__internal_7aab8b1605e8cb0b34cb489825519557a085fea33d601b2e5c3f971c0c47feda_prof);

        
        $__internal_ccf82bed854a97166da4e279c47bbfc8c45b1913689c563e7e57df8648938c25->leave($__internal_ccf82bed854a97166da4e279c47bbfc8c45b1913689c563e7e57df8648938c25_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_7b333d1f5d5bb86b4f3889429c7a2dfba88b8cf00fd54d2931699a47ec070142 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b333d1f5d5bb86b4f3889429c7a2dfba88b8cf00fd54d2931699a47ec070142->enter($__internal_7b333d1f5d5bb86b4f3889429c7a2dfba88b8cf00fd54d2931699a47ec070142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_66e46e2a11b88cfe9aff7f6d5e13fb728293f9b8ccb9cce36fd907b6bba9a33a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66e46e2a11b88cfe9aff7f6d5e13fb728293f9b8ccb9cce36fd907b6bba9a33a->enter($__internal_66e46e2a11b88cfe9aff7f6d5e13fb728293f9b8ccb9cce36fd907b6bba9a33a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "User";
        
        $__internal_66e46e2a11b88cfe9aff7f6d5e13fb728293f9b8ccb9cce36fd907b6bba9a33a->leave($__internal_66e46e2a11b88cfe9aff7f6d5e13fb728293f9b8ccb9cce36fd907b6bba9a33a_prof);

        
        $__internal_7b333d1f5d5bb86b4f3889429c7a2dfba88b8cf00fd54d2931699a47ec070142->leave($__internal_7b333d1f5d5bb86b4f3889429c7a2dfba88b8cf00fd54d2931699a47ec070142_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_bf131b8ecfb87621334c9c955a98b1f0c730653f5458c5071ca804da01fa01f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf131b8ecfb87621334c9c955a98b1f0c730653f5458c5071ca804da01fa01f9->enter($__internal_bf131b8ecfb87621334c9c955a98b1f0c730653f5458c5071ca804da01fa01f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_e240b2f57cb9b2cf9fa9ad9c8567921968d931f2d51ee9926d8cfcb1cc76b9eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e240b2f57cb9b2cf9fa9ad9c8567921968d931f2d51ee9926d8cfcb1cc76b9eb->enter($__internal_e240b2f57cb9b2cf9fa9ad9c8567921968d931f2d51ee9926d8cfcb1cc76b9eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        // line 13
        if ( !(null === ($context["data"] ?? $this->getContext($context, "data")))) {
            // line 14
            echo "    <p>";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "nom", array()), "html", null, true);
            echo "</p>
\t<p>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "descripcio", array()), "html", null, true);
            echo "</p>
\t<p>";
            // line 16
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "dataInici", array()), "Y-m-d"), "html", null, true);
            echo "</p>
\t<p>";
            // line 17
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "dataFinal", array()), "Y-m-d"), "html", null, true);
            echo "</p>
";
        }
        // line 19
        echo "
";
        
        $__internal_e240b2f57cb9b2cf9fa9ad9c8567921968d931f2d51ee9926d8cfcb1cc76b9eb->leave($__internal_e240b2f57cb9b2cf9fa9ad9c8567921968d931f2d51ee9926d8cfcb1cc76b9eb_prof);

        
        $__internal_bf131b8ecfb87621334c9c955a98b1f0c730653f5458c5071ca804da01fa01f9->leave($__internal_bf131b8ecfb87621334c9c955a98b1f0c730653f5458c5071ca804da01fa01f9_prof);

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
        return array (  113 => 19,  108 => 17,  104 => 16,  100 => 15,  95 => 14,  93 => 13,  88 => 11,  84 => 10,  80 => 9,  76 => 8,  72 => 7,  68 => 5,  59 => 4,  41 => 2,  11 => 1,);
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

{% if data is not null %}
    <p>{{ data.nom }}</p>
\t<p>{{ data.descripcio }}</p>
\t<p>{{ data.dataInici|date('Y-m-d') }}</p>
\t<p>{{ data.dataFinal|date('Y-m-d') }}</p>
{% endif %}

{% endblock %}", "VallbonaWebBundle:form:createTasca.html.twig", "/opt/lampp/htdocs/symfony_m14/src/Vallbona/WebBundle/Resources/views/form/createTasca.html.twig");
    }
}
