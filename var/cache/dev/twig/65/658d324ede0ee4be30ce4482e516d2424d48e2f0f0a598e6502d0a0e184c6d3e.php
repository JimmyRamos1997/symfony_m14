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
        $__internal_3ae026b9dd098de12dd1cfe7e4a2aadd92ef9300b67762e138a952f4517d5bbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ae026b9dd098de12dd1cfe7e4a2aadd92ef9300b67762e138a952f4517d5bbf->enter($__internal_3ae026b9dd098de12dd1cfe7e4a2aadd92ef9300b67762e138a952f4517d5bbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VallbonaWebBundle:form:createTasca.html.twig"));

        $__internal_720f8e825969c6ed01595841e222ac868478f3321aabbbc93853530e9df1e995 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_720f8e825969c6ed01595841e222ac868478f3321aabbbc93853530e9df1e995->enter($__internal_720f8e825969c6ed01595841e222ac868478f3321aabbbc93853530e9df1e995_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VallbonaWebBundle:form:createTasca.html.twig"));

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
";
        }
        // line 14
        echo "</body>
</html>";
        
        $__internal_3ae026b9dd098de12dd1cfe7e4a2aadd92ef9300b67762e138a952f4517d5bbf->leave($__internal_3ae026b9dd098de12dd1cfe7e4a2aadd92ef9300b67762e138a952f4517d5bbf_prof);

        
        $__internal_720f8e825969c6ed01595841e222ac868478f3321aabbbc93853530e9df1e995->leave($__internal_720f8e825969c6ed01595841e222ac868478f3321aabbbc93853530e9df1e995_prof);

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
        return array (  59 => 14,  54 => 12,  50 => 11,  46 => 10,  41 => 9,  39 => 8,  33 => 7,  25 => 1,);
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
{% if data is not null %}
    <p>{{ data.nom }}</p>
\t<p>{{ data.descripcio }}</p>
\t<p>{{ data.dataInici|date('Y-m-d') }}</p>
\t<p>{{ data.dataFinal|date('Y-m-d') }}</p>
{% endif %}
</body>
</html>", "VallbonaWebBundle:form:createTasca.html.twig", "/opt/lampp/htdocs/symfony_m14/src/Vallbona/WebBundle/Resources/views/form/createTasca.html.twig");
    }
}
