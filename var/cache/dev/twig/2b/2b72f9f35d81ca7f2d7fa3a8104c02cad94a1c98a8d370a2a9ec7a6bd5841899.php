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
        $__internal_c21c291129296e806420763b45726e8c2f2c3009c7e15920dfb4b5e0c1211113 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c21c291129296e806420763b45726e8c2f2c3009c7e15920dfb4b5e0c1211113->enter($__internal_c21c291129296e806420763b45726e8c2f2c3009c7e15920dfb4b5e0c1211113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_d3f321a737ca98f5871a4beea180d34f3a1d93268623410b9ecfb5f1bfdeb482 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3f321a737ca98f5871a4beea180d34f3a1d93268623410b9ecfb5f1bfdeb482->enter($__internal_d3f321a737ca98f5871a4beea180d34f3a1d93268623410b9ecfb5f1bfdeb482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c21c291129296e806420763b45726e8c2f2c3009c7e15920dfb4b5e0c1211113->leave($__internal_c21c291129296e806420763b45726e8c2f2c3009c7e15920dfb4b5e0c1211113_prof);

        
        $__internal_d3f321a737ca98f5871a4beea180d34f3a1d93268623410b9ecfb5f1bfdeb482->leave($__internal_d3f321a737ca98f5871a4beea180d34f3a1d93268623410b9ecfb5f1bfdeb482_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7181a52a00c5fc77cec3675acd0bea60685e6124c3572413cd4b3690d8055441 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7181a52a00c5fc77cec3675acd0bea60685e6124c3572413cd4b3690d8055441->enter($__internal_7181a52a00c5fc77cec3675acd0bea60685e6124c3572413cd4b3690d8055441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_74b80fa6154996d303696f9fb3b27a7d7aaaf762cd04c909ae041e7cb69f3dc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74b80fa6154996d303696f9fb3b27a7d7aaaf762cd04c909ae041e7cb69f3dc8->enter($__internal_74b80fa6154996d303696f9fb3b27a7d7aaaf762cd04c909ae041e7cb69f3dc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_74b80fa6154996d303696f9fb3b27a7d7aaaf762cd04c909ae041e7cb69f3dc8->leave($__internal_74b80fa6154996d303696f9fb3b27a7d7aaaf762cd04c909ae041e7cb69f3dc8_prof);

        
        $__internal_7181a52a00c5fc77cec3675acd0bea60685e6124c3572413cd4b3690d8055441->leave($__internal_7181a52a00c5fc77cec3675acd0bea60685e6124c3572413cd4b3690d8055441_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_89499f06b1423652c20e1ee83c5d0e680971b84f940840dbc8f5c5b236913f73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89499f06b1423652c20e1ee83c5d0e680971b84f940840dbc8f5c5b236913f73->enter($__internal_89499f06b1423652c20e1ee83c5d0e680971b84f940840dbc8f5c5b236913f73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_af74a8e64ab7e4cf525c96c24a5be8b5a99a49d07b398aaba3c4655d2bb74c8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af74a8e64ab7e4cf525c96c24a5be8b5a99a49d07b398aaba3c4655d2bb74c8b->enter($__internal_af74a8e64ab7e4cf525c96c24a5be8b5a99a49d07b398aaba3c4655d2bb74c8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_af74a8e64ab7e4cf525c96c24a5be8b5a99a49d07b398aaba3c4655d2bb74c8b->leave($__internal_af74a8e64ab7e4cf525c96c24a5be8b5a99a49d07b398aaba3c4655d2bb74c8b_prof);

        
        $__internal_89499f06b1423652c20e1ee83c5d0e680971b84f940840dbc8f5c5b236913f73->leave($__internal_89499f06b1423652c20e1ee83c5d0e680971b84f940840dbc8f5c5b236913f73_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_756f60aad160bc84ac6c57e4349fb1c7e2a966e5dfa2ae805529321e96e3b297 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_756f60aad160bc84ac6c57e4349fb1c7e2a966e5dfa2ae805529321e96e3b297->enter($__internal_756f60aad160bc84ac6c57e4349fb1c7e2a966e5dfa2ae805529321e96e3b297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8443a936a4290d8efdb86d1d909bba687bc8976a89c535f027848b7f57c8093d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8443a936a4290d8efdb86d1d909bba687bc8976a89c535f027848b7f57c8093d->enter($__internal_8443a936a4290d8efdb86d1d909bba687bc8976a89c535f027848b7f57c8093d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8443a936a4290d8efdb86d1d909bba687bc8976a89c535f027848b7f57c8093d->leave($__internal_8443a936a4290d8efdb86d1d909bba687bc8976a89c535f027848b7f57c8093d_prof);

        
        $__internal_756f60aad160bc84ac6c57e4349fb1c7e2a966e5dfa2ae805529321e96e3b297->leave($__internal_756f60aad160bc84ac6c57e4349fb1c7e2a966e5dfa2ae805529321e96e3b297_prof);

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
