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
        $__internal_165254dcae157b1099f965644628fcfe886abe4526b26e6f57ef9f05643ce07f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_165254dcae157b1099f965644628fcfe886abe4526b26e6f57ef9f05643ce07f->enter($__internal_165254dcae157b1099f965644628fcfe886abe4526b26e6f57ef9f05643ce07f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_aa73d4789b8c1c66bf966b7d98b120aa9a97ecb2e6c1772799d5e42bda1c34df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa73d4789b8c1c66bf966b7d98b120aa9a97ecb2e6c1772799d5e42bda1c34df->enter($__internal_aa73d4789b8c1c66bf966b7d98b120aa9a97ecb2e6c1772799d5e42bda1c34df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_165254dcae157b1099f965644628fcfe886abe4526b26e6f57ef9f05643ce07f->leave($__internal_165254dcae157b1099f965644628fcfe886abe4526b26e6f57ef9f05643ce07f_prof);

        
        $__internal_aa73d4789b8c1c66bf966b7d98b120aa9a97ecb2e6c1772799d5e42bda1c34df->leave($__internal_aa73d4789b8c1c66bf966b7d98b120aa9a97ecb2e6c1772799d5e42bda1c34df_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5483c95a35764fed7e402c9c801249960d9d6df8fbc673a2ee87212f828a6d0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5483c95a35764fed7e402c9c801249960d9d6df8fbc673a2ee87212f828a6d0f->enter($__internal_5483c95a35764fed7e402c9c801249960d9d6df8fbc673a2ee87212f828a6d0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_105cb83bd5595509e32f3a8753abaad2725e2d7f0cc048704eaa521475f590d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_105cb83bd5595509e32f3a8753abaad2725e2d7f0cc048704eaa521475f590d1->enter($__internal_105cb83bd5595509e32f3a8753abaad2725e2d7f0cc048704eaa521475f590d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_105cb83bd5595509e32f3a8753abaad2725e2d7f0cc048704eaa521475f590d1->leave($__internal_105cb83bd5595509e32f3a8753abaad2725e2d7f0cc048704eaa521475f590d1_prof);

        
        $__internal_5483c95a35764fed7e402c9c801249960d9d6df8fbc673a2ee87212f828a6d0f->leave($__internal_5483c95a35764fed7e402c9c801249960d9d6df8fbc673a2ee87212f828a6d0f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9720e73d9470d7197afe960b93447c0e5047c93df3d4fb1ef72347cfd8c5fcb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9720e73d9470d7197afe960b93447c0e5047c93df3d4fb1ef72347cfd8c5fcb9->enter($__internal_9720e73d9470d7197afe960b93447c0e5047c93df3d4fb1ef72347cfd8c5fcb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7cbc45d3ba06d7610f3b30b84ee8d556461e9368dc5cba15475c465b8822b506 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cbc45d3ba06d7610f3b30b84ee8d556461e9368dc5cba15475c465b8822b506->enter($__internal_7cbc45d3ba06d7610f3b30b84ee8d556461e9368dc5cba15475c465b8822b506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7cbc45d3ba06d7610f3b30b84ee8d556461e9368dc5cba15475c465b8822b506->leave($__internal_7cbc45d3ba06d7610f3b30b84ee8d556461e9368dc5cba15475c465b8822b506_prof);

        
        $__internal_9720e73d9470d7197afe960b93447c0e5047c93df3d4fb1ef72347cfd8c5fcb9->leave($__internal_9720e73d9470d7197afe960b93447c0e5047c93df3d4fb1ef72347cfd8c5fcb9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c6780767e0417e4b568eb719ec34c8a9d2b859c076077aa7d74ae99fcacc663d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6780767e0417e4b568eb719ec34c8a9d2b859c076077aa7d74ae99fcacc663d->enter($__internal_c6780767e0417e4b568eb719ec34c8a9d2b859c076077aa7d74ae99fcacc663d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d56f23e623edc4287783975720a24c2bfd0ef932fb5d3d383d60057be99d47b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d56f23e623edc4287783975720a24c2bfd0ef932fb5d3d383d60057be99d47b6->enter($__internal_d56f23e623edc4287783975720a24c2bfd0ef932fb5d3d383d60057be99d47b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d56f23e623edc4287783975720a24c2bfd0ef932fb5d3d383d60057be99d47b6->leave($__internal_d56f23e623edc4287783975720a24c2bfd0ef932fb5d3d383d60057be99d47b6_prof);

        
        $__internal_c6780767e0417e4b568eb719ec34c8a9d2b859c076077aa7d74ae99fcacc663d->leave($__internal_c6780767e0417e4b568eb719ec34c8a9d2b859c076077aa7d74ae99fcacc663d_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/opt/lampp/htdocs/symfony_m14/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
