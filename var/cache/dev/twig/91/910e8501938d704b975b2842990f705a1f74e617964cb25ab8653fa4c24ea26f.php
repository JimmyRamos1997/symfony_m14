<?php

/* VallbonaWebBundle:form:create.html.twig */
class __TwigTemplate_9d1e5f5e3e015128e1031e155a3ca6d712abb3604e2b573511cc3c8c6591668b extends Twig_Template
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
        $__internal_92c174cef7cffe500a5a945f3e5f32b22fb2503dd429949af2f308e4baa65145 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92c174cef7cffe500a5a945f3e5f32b22fb2503dd429949af2f308e4baa65145->enter($__internal_92c174cef7cffe500a5a945f3e5f32b22fb2503dd429949af2f308e4baa65145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VallbonaWebBundle:form:create.html.twig"));

        $__internal_2b54426db157eaff805cbb621ba6c4e9e39872638163e432f41fe60d0dfef5d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b54426db157eaff805cbb621ba6c4e9e39872638163e432f41fe60d0dfef5d7->enter($__internal_2b54426db157eaff805cbb621ba6c4e9e39872638163e432f41fe60d0dfef5d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VallbonaWebBundle:form:create.html.twig"));

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
        
        $__internal_92c174cef7cffe500a5a945f3e5f32b22fb2503dd429949af2f308e4baa65145->leave($__internal_92c174cef7cffe500a5a945f3e5f32b22fb2503dd429949af2f308e4baa65145_prof);

        
        $__internal_2b54426db157eaff805cbb621ba6c4e9e39872638163e432f41fe60d0dfef5d7->leave($__internal_2b54426db157eaff805cbb621ba6c4e9e39872638163e432f41fe60d0dfef5d7_prof);

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
</html>", "VallbonaWebBundle:form:create.html.twig", "/opt/lampp/htdocs/symfony_m14/src/Vallbona/WebBundle/Resources/views/form/create.html.twig");
    }
}
