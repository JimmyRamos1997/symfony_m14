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
        $__internal_b9848f78f7ad06c3e18fa4bf60e4a71179b17220ca6c8bbbdf478f1a2551dbcd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9848f78f7ad06c3e18fa4bf60e4a71179b17220ca6c8bbbdf478f1a2551dbcd->enter($__internal_b9848f78f7ad06c3e18fa4bf60e4a71179b17220ca6c8bbbdf478f1a2551dbcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_8a5123ae78fc42cdaaef47abb8ab21ec82a591347e69d8f54a22f65f2c88fa89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a5123ae78fc42cdaaef47abb8ab21ec82a591347e69d8f54a22f65f2c88fa89->enter($__internal_8a5123ae78fc42cdaaef47abb8ab21ec82a591347e69d8f54a22f65f2c88fa89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9848f78f7ad06c3e18fa4bf60e4a71179b17220ca6c8bbbdf478f1a2551dbcd->leave($__internal_b9848f78f7ad06c3e18fa4bf60e4a71179b17220ca6c8bbbdf478f1a2551dbcd_prof);

        
        $__internal_8a5123ae78fc42cdaaef47abb8ab21ec82a591347e69d8f54a22f65f2c88fa89->leave($__internal_8a5123ae78fc42cdaaef47abb8ab21ec82a591347e69d8f54a22f65f2c88fa89_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4cf496c6002e0f611bf1da9889a934c33035bad43e8c5c579212b7e83b000ba2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cf496c6002e0f611bf1da9889a934c33035bad43e8c5c579212b7e83b000ba2->enter($__internal_4cf496c6002e0f611bf1da9889a934c33035bad43e8c5c579212b7e83b000ba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1dfcd30f28fce7ccc088a37e65c0c3e84d166a1c7ca816a56bf4137561fc7b7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dfcd30f28fce7ccc088a37e65c0c3e84d166a1c7ca816a56bf4137561fc7b7b->enter($__internal_1dfcd30f28fce7ccc088a37e65c0c3e84d166a1c7ca816a56bf4137561fc7b7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_1dfcd30f28fce7ccc088a37e65c0c3e84d166a1c7ca816a56bf4137561fc7b7b->leave($__internal_1dfcd30f28fce7ccc088a37e65c0c3e84d166a1c7ca816a56bf4137561fc7b7b_prof);

        
        $__internal_4cf496c6002e0f611bf1da9889a934c33035bad43e8c5c579212b7e83b000ba2->leave($__internal_4cf496c6002e0f611bf1da9889a934c33035bad43e8c5c579212b7e83b000ba2_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7b70fe2cadceb73986f398d20581806dc223d382570e6388976815029c7bf5ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b70fe2cadceb73986f398d20581806dc223d382570e6388976815029c7bf5ce->enter($__internal_7b70fe2cadceb73986f398d20581806dc223d382570e6388976815029c7bf5ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_64412642357bfa1a0b32a712ce99489f2bd63ce85a0b8cab10d6a6c0d2f56890 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64412642357bfa1a0b32a712ce99489f2bd63ce85a0b8cab10d6a6c0d2f56890->enter($__internal_64412642357bfa1a0b32a712ce99489f2bd63ce85a0b8cab10d6a6c0d2f56890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_64412642357bfa1a0b32a712ce99489f2bd63ce85a0b8cab10d6a6c0d2f56890->leave($__internal_64412642357bfa1a0b32a712ce99489f2bd63ce85a0b8cab10d6a6c0d2f56890_prof);

        
        $__internal_7b70fe2cadceb73986f398d20581806dc223d382570e6388976815029c7bf5ce->leave($__internal_7b70fe2cadceb73986f398d20581806dc223d382570e6388976815029c7bf5ce_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9578ce63f4f067a1c70a348771c978ec8f99a741f6db67bb72633ec418af2246 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9578ce63f4f067a1c70a348771c978ec8f99a741f6db67bb72633ec418af2246->enter($__internal_9578ce63f4f067a1c70a348771c978ec8f99a741f6db67bb72633ec418af2246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7f5ef96a0bbe4bbb826a30ead1e82e08c879576a93455a1b8357db777bd0f473 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f5ef96a0bbe4bbb826a30ead1e82e08c879576a93455a1b8357db777bd0f473->enter($__internal_7f5ef96a0bbe4bbb826a30ead1e82e08c879576a93455a1b8357db777bd0f473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_7f5ef96a0bbe4bbb826a30ead1e82e08c879576a93455a1b8357db777bd0f473->leave($__internal_7f5ef96a0bbe4bbb826a30ead1e82e08c879576a93455a1b8357db777bd0f473_prof);

        
        $__internal_9578ce63f4f067a1c70a348771c978ec8f99a741f6db67bb72633ec418af2246->leave($__internal_9578ce63f4f067a1c70a348771c978ec8f99a741f6db67bb72633ec418af2246_prof);

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
