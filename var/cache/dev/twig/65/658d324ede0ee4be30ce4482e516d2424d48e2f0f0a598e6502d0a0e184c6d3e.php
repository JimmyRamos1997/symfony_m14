<?php

/* VallbonaWebBundle:form:createTasca.html.twig */
class __TwigTemplate_d3e1159b0ed722fa71241cb05f7d0be051b45901fc433cf88030d1c582bbbe55 extends Twig_Template
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
        $__internal_e9b6d44189346cd80bb4cb42d2a67752f5912a9931a2ccea69c82072041c79bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9b6d44189346cd80bb4cb42d2a67752f5912a9931a2ccea69c82072041c79bb->enter($__internal_e9b6d44189346cd80bb4cb42d2a67752f5912a9931a2ccea69c82072041c79bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VallbonaWebBundle:form:createTasca.html.twig"));

        $__internal_3612c5c2c68fa4bd9477e7cbabcef1d3b06b4d7adf914d70a9732a461d93773a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3612c5c2c68fa4bd9477e7cbabcef1d3b06b4d7adf914d70a9732a461d93773a->enter($__internal_3612c5c2c68fa4bd9477e7cbabcef1d3b06b4d7adf914d70a9732a461d93773a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VallbonaWebBundle:form:createTasca.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
\t<title></title>
</head>
<body>
";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => "", "method" => "POST"));
        echo " ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["data"] ?? $this->getContext($context, "data")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 10
            echo "<p>";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "</p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "</body>
</html>";
        
        $__internal_e9b6d44189346cd80bb4cb42d2a67752f5912a9931a2ccea69c82072041c79bb->leave($__internal_e9b6d44189346cd80bb4cb42d2a67752f5912a9931a2ccea69c82072041c79bb_prof);

        
        $__internal_3612c5c2c68fa4bd9477e7cbabcef1d3b06b4d7adf914d70a9732a461d93773a->leave($__internal_3612c5c2c68fa4bd9477e7cbabcef1d3b06b4d7adf914d70a9732a461d93773a_prof);

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
        return array (  53 => 12,  44 => 10,  40 => 9,  33 => 7,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
\t<title></title>
</head>
<body>
{{form_start(form, {'action':'', 'method':'POST'})}} {{form_end(form)}}

{% for item in data %}
<p>{{ item }}</p>
{% endfor %}
</body>
</html>", "VallbonaWebBundle:form:createTasca.html.twig", "/opt/lampp/htdocs/symfony_m14/src/Vallbona/WebBundle/Resources/views/form/createTasca.html.twig");
    }
}
