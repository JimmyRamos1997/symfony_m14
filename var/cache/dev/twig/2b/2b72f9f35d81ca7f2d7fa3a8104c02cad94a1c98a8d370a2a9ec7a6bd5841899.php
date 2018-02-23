<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_6bdc415026468751b0fd3b8ea4bb5b8b9e992dbfca85e1c86f20068b91fbe660 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_d7d45dea6f8de0df6d369ee65856cb52b6992d3a37edc8237f2c601f7bbba636 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7d45dea6f8de0df6d369ee65856cb52b6992d3a37edc8237f2c601f7bbba636->enter($__internal_d7d45dea6f8de0df6d369ee65856cb52b6992d3a37edc8237f2c601f7bbba636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_ff6cc652e05cf3be448ce1b3a948ca370725ae436bbe5decb44977667a2f3b7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff6cc652e05cf3be448ce1b3a948ca370725ae436bbe5decb44977667a2f3b7f->enter($__internal_ff6cc652e05cf3be448ce1b3a948ca370725ae436bbe5decb44977667a2f3b7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7d45dea6f8de0df6d369ee65856cb52b6992d3a37edc8237f2c601f7bbba636->leave($__internal_d7d45dea6f8de0df6d369ee65856cb52b6992d3a37edc8237f2c601f7bbba636_prof);

        
        $__internal_ff6cc652e05cf3be448ce1b3a948ca370725ae436bbe5decb44977667a2f3b7f->leave($__internal_ff6cc652e05cf3be448ce1b3a948ca370725ae436bbe5decb44977667a2f3b7f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9ac26e2959950390db27ab352ef78b6e0c22f57eecab44af067167043f4eb0d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ac26e2959950390db27ab352ef78b6e0c22f57eecab44af067167043f4eb0d4->enter($__internal_9ac26e2959950390db27ab352ef78b6e0c22f57eecab44af067167043f4eb0d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2d9ec149cb1e57c976deaff11fa75654cdcf94ee0842af2acdc4166e568f9aab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d9ec149cb1e57c976deaff11fa75654cdcf94ee0842af2acdc4166e568f9aab->enter($__internal_2d9ec149cb1e57c976deaff11fa75654cdcf94ee0842af2acdc4166e568f9aab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2d9ec149cb1e57c976deaff11fa75654cdcf94ee0842af2acdc4166e568f9aab->leave($__internal_2d9ec149cb1e57c976deaff11fa75654cdcf94ee0842af2acdc4166e568f9aab_prof);

        
        $__internal_9ac26e2959950390db27ab352ef78b6e0c22f57eecab44af067167043f4eb0d4->leave($__internal_9ac26e2959950390db27ab352ef78b6e0c22f57eecab44af067167043f4eb0d4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a9baf24098ff20cdd143e95416c923d9283c7ba076962d2f8598e868b2cce66d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9baf24098ff20cdd143e95416c923d9283c7ba076962d2f8598e868b2cce66d->enter($__internal_a9baf24098ff20cdd143e95416c923d9283c7ba076962d2f8598e868b2cce66d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_076d4085cb86f9d2474d78594d9f05549b820a20f367a510d7326d8994ed2397 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_076d4085cb86f9d2474d78594d9f05549b820a20f367a510d7326d8994ed2397->enter($__internal_076d4085cb86f9d2474d78594d9f05549b820a20f367a510d7326d8994ed2397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_076d4085cb86f9d2474d78594d9f05549b820a20f367a510d7326d8994ed2397->leave($__internal_076d4085cb86f9d2474d78594d9f05549b820a20f367a510d7326d8994ed2397_prof);

        
        $__internal_a9baf24098ff20cdd143e95416c923d9283c7ba076962d2f8598e868b2cce66d->leave($__internal_a9baf24098ff20cdd143e95416c923d9283c7ba076962d2f8598e868b2cce66d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_edc6d848f3370e7d395ab27d9bc95127ce16fddf53e01645c1cf8c53c4ec7d00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edc6d848f3370e7d395ab27d9bc95127ce16fddf53e01645c1cf8c53c4ec7d00->enter($__internal_edc6d848f3370e7d395ab27d9bc95127ce16fddf53e01645c1cf8c53c4ec7d00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1ff3624c9a79074a8bab4bae617eefee55a2c174af98d713ec8c7b8b27c1c458 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ff3624c9a79074a8bab4bae617eefee55a2c174af98d713ec8c7b8b27c1c458->enter($__internal_1ff3624c9a79074a8bab4bae617eefee55a2c174af98d713ec8c7b8b27c1c458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1ff3624c9a79074a8bab4bae617eefee55a2c174af98d713ec8c7b8b27c1c458->leave($__internal_1ff3624c9a79074a8bab4bae617eefee55a2c174af98d713ec8c7b8b27c1c458_prof);

        
        $__internal_edc6d848f3370e7d395ab27d9bc95127ce16fddf53e01645c1cf8c53c4ec7d00->leave($__internal_edc6d848f3370e7d395ab27d9bc95127ce16fddf53e01645c1cf8c53c4ec7d00_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/opt/lampp/htdocs/Jimmy_Ramos_Proyecto_Symfony3/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
