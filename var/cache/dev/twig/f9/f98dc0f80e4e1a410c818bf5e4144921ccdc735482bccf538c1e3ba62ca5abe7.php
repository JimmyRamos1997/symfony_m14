<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_c87710f357776402c9631da4bda3850b78ef8adca6273d8bd36cbe5e2fe827f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7aa22e52a57c19d3d024469d1a1efe625e860bcd8f8866187f18b9ad7deb0b4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7aa22e52a57c19d3d024469d1a1efe625e860bcd8f8866187f18b9ad7deb0b4d->enter($__internal_7aa22e52a57c19d3d024469d1a1efe625e860bcd8f8866187f18b9ad7deb0b4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_d856aff8c248347263adae1071462734a71467eec5da8d8ca88b23961ebe9cc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d856aff8c248347263adae1071462734a71467eec5da8d8ca88b23961ebe9cc9->enter($__internal_d856aff8c248347263adae1071462734a71467eec5da8d8ca88b23961ebe9cc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7aa22e52a57c19d3d024469d1a1efe625e860bcd8f8866187f18b9ad7deb0b4d->leave($__internal_7aa22e52a57c19d3d024469d1a1efe625e860bcd8f8866187f18b9ad7deb0b4d_prof);

        
        $__internal_d856aff8c248347263adae1071462734a71467eec5da8d8ca88b23961ebe9cc9->leave($__internal_d856aff8c248347263adae1071462734a71467eec5da8d8ca88b23961ebe9cc9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a0591bd124c33b15747a15fdfd71b7e6ff4d8d3bb7ab52d99e411115a3283a71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0591bd124c33b15747a15fdfd71b7e6ff4d8d3bb7ab52d99e411115a3283a71->enter($__internal_a0591bd124c33b15747a15fdfd71b7e6ff4d8d3bb7ab52d99e411115a3283a71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1210d5b682a3bfcd2ed62fad53522ac0c24d5e6440ddc0b8457beb7170379dd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1210d5b682a3bfcd2ed62fad53522ac0c24d5e6440ddc0b8457beb7170379dd8->enter($__internal_1210d5b682a3bfcd2ed62fad53522ac0c24d5e6440ddc0b8457beb7170379dd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_1210d5b682a3bfcd2ed62fad53522ac0c24d5e6440ddc0b8457beb7170379dd8->leave($__internal_1210d5b682a3bfcd2ed62fad53522ac0c24d5e6440ddc0b8457beb7170379dd8_prof);

        
        $__internal_a0591bd124c33b15747a15fdfd71b7e6ff4d8d3bb7ab52d99e411115a3283a71->leave($__internal_a0591bd124c33b15747a15fdfd71b7e6ff4d8d3bb7ab52d99e411115a3283a71_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_16c7afe55cd784351d7caaf44cecf1889fa445daea831f7e12f5a5d098cd64a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16c7afe55cd784351d7caaf44cecf1889fa445daea831f7e12f5a5d098cd64a4->enter($__internal_16c7afe55cd784351d7caaf44cecf1889fa445daea831f7e12f5a5d098cd64a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_264c5c2bca15898e985681ba911cbb7709c6452d861e77ebe9ba42b5917fe2a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_264c5c2bca15898e985681ba911cbb7709c6452d861e77ebe9ba42b5917fe2a3->enter($__internal_264c5c2bca15898e985681ba911cbb7709c6452d861e77ebe9ba42b5917fe2a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_264c5c2bca15898e985681ba911cbb7709c6452d861e77ebe9ba42b5917fe2a3->leave($__internal_264c5c2bca15898e985681ba911cbb7709c6452d861e77ebe9ba42b5917fe2a3_prof);

        
        $__internal_16c7afe55cd784351d7caaf44cecf1889fa445daea831f7e12f5a5d098cd64a4->leave($__internal_16c7afe55cd784351d7caaf44cecf1889fa445daea831f7e12f5a5d098cd64a4_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cb412215b144e5cc49665c7e151a579b0336e3387284f324fbb368ff0e21f711 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb412215b144e5cc49665c7e151a579b0336e3387284f324fbb368ff0e21f711->enter($__internal_cb412215b144e5cc49665c7e151a579b0336e3387284f324fbb368ff0e21f711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_04ecbbd5ebadbae1a9de143314372424c5e2640c3b239efdb9fbf4eaa829f50a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04ecbbd5ebadbae1a9de143314372424c5e2640c3b239efdb9fbf4eaa829f50a->enter($__internal_04ecbbd5ebadbae1a9de143314372424c5e2640c3b239efdb9fbf4eaa829f50a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_04ecbbd5ebadbae1a9de143314372424c5e2640c3b239efdb9fbf4eaa829f50a->leave($__internal_04ecbbd5ebadbae1a9de143314372424c5e2640c3b239efdb9fbf4eaa829f50a_prof);

        
        $__internal_cb412215b144e5cc49665c7e151a579b0336e3387284f324fbb368ff0e21f711->leave($__internal_cb412215b144e5cc49665c7e151a579b0336e3387284f324fbb368ff0e21f711_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/opt/lampp/htdocs/Jimmy_Ramos_Proyecto_Symfony3/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
