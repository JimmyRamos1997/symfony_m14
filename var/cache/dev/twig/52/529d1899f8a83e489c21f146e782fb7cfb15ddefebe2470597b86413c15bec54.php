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
        $__internal_f0f86edd82f481b9ce44d4c6fb17926f4ee4d88c5d5c975438b2be7938909a3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0f86edd82f481b9ce44d4c6fb17926f4ee4d88c5d5c975438b2be7938909a3d->enter($__internal_f0f86edd82f481b9ce44d4c6fb17926f4ee4d88c5d5c975438b2be7938909a3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VallbonaWebBundle:form:createSubtasca.html.twig"));

        $__internal_41078253c155abb36de7e75bb73c9ac7feca4e433c90771822a335ba5a9003d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41078253c155abb36de7e75bb73c9ac7feca4e433c90771822a335ba5a9003d8->enter($__internal_41078253c155abb36de7e75bb73c9ac7feca4e433c90771822a335ba5a9003d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VallbonaWebBundle:form:createSubtasca.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0f86edd82f481b9ce44d4c6fb17926f4ee4d88c5d5c975438b2be7938909a3d->leave($__internal_f0f86edd82f481b9ce44d4c6fb17926f4ee4d88c5d5c975438b2be7938909a3d_prof);

        
        $__internal_41078253c155abb36de7e75bb73c9ac7feca4e433c90771822a335ba5a9003d8->leave($__internal_41078253c155abb36de7e75bb73c9ac7feca4e433c90771822a335ba5a9003d8_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_38e5baf6d7f68070570b0e1dd8f19fbc914246071e996bf55883ad01a78b6466 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38e5baf6d7f68070570b0e1dd8f19fbc914246071e996bf55883ad01a78b6466->enter($__internal_38e5baf6d7f68070570b0e1dd8f19fbc914246071e996bf55883ad01a78b6466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ecf969c5e757c5422a80e9b6579ebe4e6cee75127822b251f5fe5454e17a2d00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecf969c5e757c5422a80e9b6579ebe4e6cee75127822b251f5fe5454e17a2d00->enter($__internal_ecf969c5e757c5422a80e9b6579ebe4e6cee75127822b251f5fe5454e17a2d00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Subtasca";
        
        $__internal_ecf969c5e757c5422a80e9b6579ebe4e6cee75127822b251f5fe5454e17a2d00->leave($__internal_ecf969c5e757c5422a80e9b6579ebe4e6cee75127822b251f5fe5454e17a2d00_prof);

        
        $__internal_38e5baf6d7f68070570b0e1dd8f19fbc914246071e996bf55883ad01a78b6466->leave($__internal_38e5baf6d7f68070570b0e1dd8f19fbc914246071e996bf55883ad01a78b6466_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_1b832439a711827f06deae1de765f8d50aca2d275a798860f449dc768fc9ae96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b832439a711827f06deae1de765f8d50aca2d275a798860f449dc768fc9ae96->enter($__internal_1b832439a711827f06deae1de765f8d50aca2d275a798860f449dc768fc9ae96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_71eb3c0deaf0902a2a89e27baf2a057ef28e9ba40752952266d62c85beaefe67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71eb3c0deaf0902a2a89e27baf2a057ef28e9ba40752952266d62c85beaefe67->enter($__internal_71eb3c0deaf0902a2a89e27baf2a057ef28e9ba40752952266d62c85beaefe67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "success"), "method")) {
            // line 5
            echo "        <div class=\"alert alert-success\">
              ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 7
                echo "                <div class=\"alert alert-success\">
                    ";
                // line 8
                echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                echo "
                </div>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "        </div>
    ";
        }
        // line 13
        echo "

\t
";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => "", "method" => "POST"));
        echo " 
";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_71eb3c0deaf0902a2a89e27baf2a057ef28e9ba40752952266d62c85beaefe67->leave($__internal_71eb3c0deaf0902a2a89e27baf2a057ef28e9ba40752952266d62c85beaefe67_prof);

        
        $__internal_1b832439a711827f06deae1de765f8d50aca2d275a798860f449dc768fc9ae96->leave($__internal_1b832439a711827f06deae1de765f8d50aca2d275a798860f449dc768fc9ae96_prof);

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
        return array (  102 => 17,  98 => 16,  93 => 13,  89 => 11,  80 => 8,  77 => 7,  73 => 6,  70 => 5,  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
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
{% if app.session.flashBag.has('success') %}
        <div class=\"alert alert-success\">
              {% for msg in app.session.flashBag.get('success') %}
                <div class=\"alert alert-success\">
                    {{ msg }}
                </div>
{% endfor %}
        </div>
    {% endif %}


\t
{{form_start(form, {'action':'', 'method':'POST'})}} 
{{form_end(form)}}
{% endblock %}", "VallbonaWebBundle:form:createSubtasca.html.twig", "/opt/lampp/htdocs/symfony_m14/src/Vallbona/WebBundle/Resources/views/form/createSubtasca.html.twig");
    }
}
