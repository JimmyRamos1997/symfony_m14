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
        $__internal_c6777d1356250d92a6f57d3a13ad942a107bc5a63c2255387b2ebcfa35076de6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6777d1356250d92a6f57d3a13ad942a107bc5a63c2255387b2ebcfa35076de6->enter($__internal_c6777d1356250d92a6f57d3a13ad942a107bc5a63c2255387b2ebcfa35076de6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VallbonaWebBundle:form:create.html.twig"));

        $__internal_b8ee6ad3d1a84d5c7840dd146efe6f16aa62d561d7b77da80fb6df002355ecf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8ee6ad3d1a84d5c7840dd146efe6f16aa62d561d7b77da80fb6df002355ecf0->enter($__internal_b8ee6ad3d1a84d5c7840dd146efe6f16aa62d561d7b77da80fb6df002355ecf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VallbonaWebBundle:form:create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6777d1356250d92a6f57d3a13ad942a107bc5a63c2255387b2ebcfa35076de6->leave($__internal_c6777d1356250d92a6f57d3a13ad942a107bc5a63c2255387b2ebcfa35076de6_prof);

        
        $__internal_b8ee6ad3d1a84d5c7840dd146efe6f16aa62d561d7b77da80fb6df002355ecf0->leave($__internal_b8ee6ad3d1a84d5c7840dd146efe6f16aa62d561d7b77da80fb6df002355ecf0_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_a75ab7431d7fb07e7632ae6bc9887a4beefc30a84b25d1027ecff3d157c1e695 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a75ab7431d7fb07e7632ae6bc9887a4beefc30a84b25d1027ecff3d157c1e695->enter($__internal_a75ab7431d7fb07e7632ae6bc9887a4beefc30a84b25d1027ecff3d157c1e695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f9496d723565df44cbdc747b30c741fd7c0c21a7cb3e28c0748c3d51fefdcaff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9496d723565df44cbdc747b30c741fd7c0c21a7cb3e28c0748c3d51fefdcaff->enter($__internal_f9496d723565df44cbdc747b30c741fd7c0c21a7cb3e28c0748c3d51fefdcaff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "User";
        
        $__internal_f9496d723565df44cbdc747b30c741fd7c0c21a7cb3e28c0748c3d51fefdcaff->leave($__internal_f9496d723565df44cbdc747b30c741fd7c0c21a7cb3e28c0748c3d51fefdcaff_prof);

        
        $__internal_a75ab7431d7fb07e7632ae6bc9887a4beefc30a84b25d1027ecff3d157c1e695->leave($__internal_a75ab7431d7fb07e7632ae6bc9887a4beefc30a84b25d1027ecff3d157c1e695_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_00466409f412287d833a750a65e5511cdc6cc1fe36f189a8ce43d3bacdecb2d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00466409f412287d833a750a65e5511cdc6cc1fe36f189a8ce43d3bacdecb2d8->enter($__internal_00466409f412287d833a750a65e5511cdc6cc1fe36f189a8ce43d3bacdecb2d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_b0ccf5b7e086aae2db011e753ba760d81ab221f7f765b12b79bf1c3d09b00b1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0ccf5b7e086aae2db011e753ba760d81ab221f7f765b12b79bf1c3d09b00b1c->enter($__internal_b0ccf5b7e086aae2db011e753ba760d81ab221f7f765b12b79bf1c3d09b00b1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "
\t\t";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => "", "method" => "POST"));
        echo " ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

\t";
        
        $__internal_b0ccf5b7e086aae2db011e753ba760d81ab221f7f765b12b79bf1c3d09b00b1c->leave($__internal_b0ccf5b7e086aae2db011e753ba760d81ab221f7f765b12b79bf1c3d09b00b1c_prof);

        
        $__internal_00466409f412287d833a750a65e5511cdc6cc1fe36f189a8ce43d3bacdecb2d8->leave($__internal_00466409f412287d833a750a65e5511cdc6cc1fe36f189a8ce43d3bacdecb2d8_prof);

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
        return array (  71 => 6,  68 => 5,  59 => 4,  41 => 2,  11 => 1,);
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

\t\t{{form_start(form, {'action':'', 'method':'POST'})}} {{form_end(form)}}

\t{% endblock %}", "VallbonaWebBundle:form:create.html.twig", "/opt/lampp/htdocs/symfony_m14/src/Vallbona/WebBundle/Resources/views/form/create.html.twig");
    }
}
