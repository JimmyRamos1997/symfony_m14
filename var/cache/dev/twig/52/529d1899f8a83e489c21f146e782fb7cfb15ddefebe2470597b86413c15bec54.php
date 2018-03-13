<?php

/* VallbonaWebBundle:form:createSubtasca.html.twig */
class __TwigTemplate_20096f2b1da831d2fd32de79fef391c672b0232414f49efb99d6516066718b6e extends Twig_Template
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
        $__internal_2045a02dae6cb4606debf70e4e8e91b6a8bc273b0f7983d8ce46af73a3650157 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2045a02dae6cb4606debf70e4e8e91b6a8bc273b0f7983d8ce46af73a3650157->enter($__internal_2045a02dae6cb4606debf70e4e8e91b6a8bc273b0f7983d8ce46af73a3650157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VallbonaWebBundle:form:createSubtasca.html.twig"));

        $__internal_8dae8659bef39902428934a6f811cf833a0a3aec33c1cb412bd795704f86e8db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dae8659bef39902428934a6f811cf833a0a3aec33c1cb412bd795704f86e8db->enter($__internal_8dae8659bef39902428934a6f811cf833a0a3aec33c1cb412bd795704f86e8db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VallbonaWebBundle:form:createSubtasca.html.twig"));

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
        if ( !(null === ($context["data"] ?? $this->getContext($context, "data")))) {
            // line 10
            echo "    <p>";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "nom", array()), "html", null, true);
            echo "</p>
\t<p>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "descripcio", array()), "html", null, true);
            echo "</p>
\t<p>";
            // line 12
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "dataInici", array()), "Y-m-d"), "html", null, true);
            echo "</p>
\t<p>";
            // line 13
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "dataFinal", array()), "Y-m-d"), "html", null, true);
            echo "</p>
\t<p>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "idTasca", array()), "html", null, true);
            echo "</p>
";
        }
        // line 16
        echo "</body>
</html>";
        
        $__internal_2045a02dae6cb4606debf70e4e8e91b6a8bc273b0f7983d8ce46af73a3650157->leave($__internal_2045a02dae6cb4606debf70e4e8e91b6a8bc273b0f7983d8ce46af73a3650157_prof);

        
        $__internal_8dae8659bef39902428934a6f811cf833a0a3aec33c1cb412bd795704f86e8db->leave($__internal_8dae8659bef39902428934a6f811cf833a0a3aec33c1cb412bd795704f86e8db_prof);

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
        return array (  64 => 16,  59 => 14,  55 => 13,  51 => 12,  47 => 11,  42 => 10,  40 => 9,  33 => 7,  25 => 1,);
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
\t<p>{{ data.idTasca }}</p>
{% endif %}
</body>
</html>", "VallbonaWebBundle:form:createSubtasca.html.twig", "/opt/lampp/htdocs/symfony_m14/src/Vallbona/WebBundle/Resources/views/form/createSubtasca.html.twig");
    }
}
