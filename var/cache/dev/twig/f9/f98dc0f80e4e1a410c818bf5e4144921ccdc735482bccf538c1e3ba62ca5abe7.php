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
        $__internal_a1ecf31177c520629336a3433da502837dc3227f179bf646ce0560cb813764e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1ecf31177c520629336a3433da502837dc3227f179bf646ce0560cb813764e6->enter($__internal_a1ecf31177c520629336a3433da502837dc3227f179bf646ce0560cb813764e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_916b10c3227ab02720914f2f4ee77d114a8bbee9df88409322590096a20057ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_916b10c3227ab02720914f2f4ee77d114a8bbee9df88409322590096a20057ce->enter($__internal_916b10c3227ab02720914f2f4ee77d114a8bbee9df88409322590096a20057ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1ecf31177c520629336a3433da502837dc3227f179bf646ce0560cb813764e6->leave($__internal_a1ecf31177c520629336a3433da502837dc3227f179bf646ce0560cb813764e6_prof);

        
        $__internal_916b10c3227ab02720914f2f4ee77d114a8bbee9df88409322590096a20057ce->leave($__internal_916b10c3227ab02720914f2f4ee77d114a8bbee9df88409322590096a20057ce_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8852da1a4c18d1e87da42ce2b6b3a6d40a0efabb7e9f567ec0b4b546d5124776 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8852da1a4c18d1e87da42ce2b6b3a6d40a0efabb7e9f567ec0b4b546d5124776->enter($__internal_8852da1a4c18d1e87da42ce2b6b3a6d40a0efabb7e9f567ec0b4b546d5124776_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_08518a438c5b274ab5e04ad5865fa7931eb8865d63e74a119582dcedd33e7fac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08518a438c5b274ab5e04ad5865fa7931eb8865d63e74a119582dcedd33e7fac->enter($__internal_08518a438c5b274ab5e04ad5865fa7931eb8865d63e74a119582dcedd33e7fac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_08518a438c5b274ab5e04ad5865fa7931eb8865d63e74a119582dcedd33e7fac->leave($__internal_08518a438c5b274ab5e04ad5865fa7931eb8865d63e74a119582dcedd33e7fac_prof);

        
        $__internal_8852da1a4c18d1e87da42ce2b6b3a6d40a0efabb7e9f567ec0b4b546d5124776->leave($__internal_8852da1a4c18d1e87da42ce2b6b3a6d40a0efabb7e9f567ec0b4b546d5124776_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_67e17edc0efa9630e907829fe6f3ccd01bccffd66c655388c514634aa3841f76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67e17edc0efa9630e907829fe6f3ccd01bccffd66c655388c514634aa3841f76->enter($__internal_67e17edc0efa9630e907829fe6f3ccd01bccffd66c655388c514634aa3841f76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_93ee59f9b8330a10e5895d8573a8ca91c3e3ededb2ebf53b2760b0771ced0807 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93ee59f9b8330a10e5895d8573a8ca91c3e3ededb2ebf53b2760b0771ced0807->enter($__internal_93ee59f9b8330a10e5895d8573a8ca91c3e3ededb2ebf53b2760b0771ced0807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_93ee59f9b8330a10e5895d8573a8ca91c3e3ededb2ebf53b2760b0771ced0807->leave($__internal_93ee59f9b8330a10e5895d8573a8ca91c3e3ededb2ebf53b2760b0771ced0807_prof);

        
        $__internal_67e17edc0efa9630e907829fe6f3ccd01bccffd66c655388c514634aa3841f76->leave($__internal_67e17edc0efa9630e907829fe6f3ccd01bccffd66c655388c514634aa3841f76_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_306fcfefb5cfb85ebd34af95f97ca38270e255d9eee00674c917fa5f666fde90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_306fcfefb5cfb85ebd34af95f97ca38270e255d9eee00674c917fa5f666fde90->enter($__internal_306fcfefb5cfb85ebd34af95f97ca38270e255d9eee00674c917fa5f666fde90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b68ca82b3606feaee9bf778c671ceb413a1e332ab5998e5b79f1c8d2807c4646 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b68ca82b3606feaee9bf778c671ceb413a1e332ab5998e5b79f1c8d2807c4646->enter($__internal_b68ca82b3606feaee9bf778c671ceb413a1e332ab5998e5b79f1c8d2807c4646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_b68ca82b3606feaee9bf778c671ceb413a1e332ab5998e5b79f1c8d2807c4646->leave($__internal_b68ca82b3606feaee9bf778c671ceb413a1e332ab5998e5b79f1c8d2807c4646_prof);

        
        $__internal_306fcfefb5cfb85ebd34af95f97ca38270e255d9eee00674c917fa5f666fde90->leave($__internal_306fcfefb5cfb85ebd34af95f97ca38270e255d9eee00674c917fa5f666fde90_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/opt/lampp/htdocs/symfony_m14/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
