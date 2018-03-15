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
        $__internal_dc3ab51edf614786d829296b70657f588b3bc3d8c1ed146afdb90aeaf722d241 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc3ab51edf614786d829296b70657f588b3bc3d8c1ed146afdb90aeaf722d241->enter($__internal_dc3ab51edf614786d829296b70657f588b3bc3d8c1ed146afdb90aeaf722d241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VallbonaWebBundle:form:createSubtasca.html.twig"));

        $__internal_ec6d1414a85b6149500a80f19a0e419d7bdfa0ac0f24edfde7f489d7e9c37802 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec6d1414a85b6149500a80f19a0e419d7bdfa0ac0f24edfde7f489d7e9c37802->enter($__internal_ec6d1414a85b6149500a80f19a0e419d7bdfa0ac0f24edfde7f489d7e9c37802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VallbonaWebBundle:form:createSubtasca.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc3ab51edf614786d829296b70657f588b3bc3d8c1ed146afdb90aeaf722d241->leave($__internal_dc3ab51edf614786d829296b70657f588b3bc3d8c1ed146afdb90aeaf722d241_prof);

        
        $__internal_ec6d1414a85b6149500a80f19a0e419d7bdfa0ac0f24edfde7f489d7e9c37802->leave($__internal_ec6d1414a85b6149500a80f19a0e419d7bdfa0ac0f24edfde7f489d7e9c37802_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_2913cc826b7d22c6a6b785111bf78ebef05188b973e39203450c8d1e70852973 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2913cc826b7d22c6a6b785111bf78ebef05188b973e39203450c8d1e70852973->enter($__internal_2913cc826b7d22c6a6b785111bf78ebef05188b973e39203450c8d1e70852973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9c5e91c0a81084fca1f1c1132f8287f75c25eb7083aadacfa16f3eef5427fd3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c5e91c0a81084fca1f1c1132f8287f75c25eb7083aadacfa16f3eef5427fd3a->enter($__internal_9c5e91c0a81084fca1f1c1132f8287f75c25eb7083aadacfa16f3eef5427fd3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Subtasca";
        
        $__internal_9c5e91c0a81084fca1f1c1132f8287f75c25eb7083aadacfa16f3eef5427fd3a->leave($__internal_9c5e91c0a81084fca1f1c1132f8287f75c25eb7083aadacfa16f3eef5427fd3a_prof);

        
        $__internal_2913cc826b7d22c6a6b785111bf78ebef05188b973e39203450c8d1e70852973->leave($__internal_2913cc826b7d22c6a6b785111bf78ebef05188b973e39203450c8d1e70852973_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_9f40b4baa2351609b2be687bb877ba03b7949ea0b0598828d6b228c6c0c52c05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f40b4baa2351609b2be687bb877ba03b7949ea0b0598828d6b228c6c0c52c05->enter($__internal_9f40b4baa2351609b2be687bb877ba03b7949ea0b0598828d6b228c6c0c52c05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_bd6fc3f94ee6faabdb64327e035c136d2a68c7978ec51a8391c94cb72b1e0b77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd6fc3f94ee6faabdb64327e035c136d2a68c7978ec51a8391c94cb72b1e0b77->enter($__internal_bd6fc3f94ee6faabdb64327e035c136d2a68c7978ec51a8391c94cb72b1e0b77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "
";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => "", "method" => "POST"));
        echo " ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

";
        // line 8
        if ( !(null === ($context["data"] ?? $this->getContext($context, "data")))) {
            // line 9
            echo "    <p>";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "nom", array()), "html", null, true);
            echo "</p>
\t<p>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "descripcio", array()), "html", null, true);
            echo "</p>
\t<p>";
            // line 11
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "dataInici", array()), "Y-m-d"), "html", null, true);
            echo "</p>
\t<p>";
            // line 12
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "dataFinal", array()), "Y-m-d"), "html", null, true);
            echo "</p>
\t<p>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "idTasca", array()), "html", null, true);
            echo "</p>
";
        }
        // line 15
        echo "
";
        
        $__internal_bd6fc3f94ee6faabdb64327e035c136d2a68c7978ec51a8391c94cb72b1e0b77->leave($__internal_bd6fc3f94ee6faabdb64327e035c136d2a68c7978ec51a8391c94cb72b1e0b77_prof);

        
        $__internal_9f40b4baa2351609b2be687bb877ba03b7949ea0b0598828d6b228c6c0c52c05->leave($__internal_9f40b4baa2351609b2be687bb877ba03b7949ea0b0598828d6b228c6c0c52c05_prof);

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
        return array (  102 => 15,  97 => 13,  93 => 12,  89 => 11,  85 => 10,  80 => 9,  78 => 8,  71 => 6,  68 => 5,  59 => 4,  41 => 2,  11 => 1,);
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

{% if data is not null %}
    <p>{{ data.nom }}</p>
\t<p>{{ data.descripcio }}</p>
\t<p>{{ data.dataInici|date('Y-m-d') }}</p>
\t<p>{{ data.dataFinal|date('Y-m-d') }}</p>
\t<p>{{ data.idTasca }}</p>
{% endif %}

{% endblock %}", "VallbonaWebBundle:form:createSubtasca.html.twig", "/opt/lampp/htdocs/symfony_m14/src/Vallbona/WebBundle/Resources/views/form/createSubtasca.html.twig");
    }
}
