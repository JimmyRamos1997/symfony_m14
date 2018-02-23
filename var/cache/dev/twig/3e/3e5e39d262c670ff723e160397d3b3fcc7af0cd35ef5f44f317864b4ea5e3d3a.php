<?php

/* base.html.twig */
class __TwigTemplate_70f2ea4d9ba6befff2419e33e81e4263a6a39804101f8049eb9b3bfd1f26a548 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8d40869513a105fe79f3d566fc5e9bfec71c14f45e3ed2c596c2a1cc61ba386a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d40869513a105fe79f3d566fc5e9bfec71c14f45e3ed2c596c2a1cc61ba386a->enter($__internal_8d40869513a105fe79f3d566fc5e9bfec71c14f45e3ed2c596c2a1cc61ba386a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_16f2c8ee72a8fa6d3d5ee09e39d18c55735459dfe71db949a4f76972409db17c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16f2c8ee72a8fa6d3d5ee09e39d18c55735459dfe71db949a4f76972409db17c->enter($__internal_16f2c8ee72a8fa6d3d5ee09e39d18c55735459dfe71db949a4f76972409db17c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_8d40869513a105fe79f3d566fc5e9bfec71c14f45e3ed2c596c2a1cc61ba386a->leave($__internal_8d40869513a105fe79f3d566fc5e9bfec71c14f45e3ed2c596c2a1cc61ba386a_prof);

        
        $__internal_16f2c8ee72a8fa6d3d5ee09e39d18c55735459dfe71db949a4f76972409db17c->leave($__internal_16f2c8ee72a8fa6d3d5ee09e39d18c55735459dfe71db949a4f76972409db17c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7c75eaac3fc2f99a346758379f842c844a1219056dbdc2cb47d519334d4390c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c75eaac3fc2f99a346758379f842c844a1219056dbdc2cb47d519334d4390c5->enter($__internal_7c75eaac3fc2f99a346758379f842c844a1219056dbdc2cb47d519334d4390c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f4158b6fb5d6296dcac1e4e89d96d5467fbdd981dbffbdc616763a9320f94a51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4158b6fb5d6296dcac1e4e89d96d5467fbdd981dbffbdc616763a9320f94a51->enter($__internal_f4158b6fb5d6296dcac1e4e89d96d5467fbdd981dbffbdc616763a9320f94a51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f4158b6fb5d6296dcac1e4e89d96d5467fbdd981dbffbdc616763a9320f94a51->leave($__internal_f4158b6fb5d6296dcac1e4e89d96d5467fbdd981dbffbdc616763a9320f94a51_prof);

        
        $__internal_7c75eaac3fc2f99a346758379f842c844a1219056dbdc2cb47d519334d4390c5->leave($__internal_7c75eaac3fc2f99a346758379f842c844a1219056dbdc2cb47d519334d4390c5_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a8645b20e0af8928046c1cafece3978e3597a76830e6ac9a75186bb71e65f101 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8645b20e0af8928046c1cafece3978e3597a76830e6ac9a75186bb71e65f101->enter($__internal_a8645b20e0af8928046c1cafece3978e3597a76830e6ac9a75186bb71e65f101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_5d4ddade24f2377d12893b6c2f4fa4e69fa6dfbe168aec8a7fd714c3e17a1bad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d4ddade24f2377d12893b6c2f4fa4e69fa6dfbe168aec8a7fd714c3e17a1bad->enter($__internal_5d4ddade24f2377d12893b6c2f4fa4e69fa6dfbe168aec8a7fd714c3e17a1bad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5d4ddade24f2377d12893b6c2f4fa4e69fa6dfbe168aec8a7fd714c3e17a1bad->leave($__internal_5d4ddade24f2377d12893b6c2f4fa4e69fa6dfbe168aec8a7fd714c3e17a1bad_prof);

        
        $__internal_a8645b20e0af8928046c1cafece3978e3597a76830e6ac9a75186bb71e65f101->leave($__internal_a8645b20e0af8928046c1cafece3978e3597a76830e6ac9a75186bb71e65f101_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c0b609ac8174e6dbf7482c3fde0ad9859cddb6e9092f26de874c65d75d535ab9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0b609ac8174e6dbf7482c3fde0ad9859cddb6e9092f26de874c65d75d535ab9->enter($__internal_c0b609ac8174e6dbf7482c3fde0ad9859cddb6e9092f26de874c65d75d535ab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c90cb17d2754f91441091fc926f1480d3c9b8f09e6b148168581bfd78da34fbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c90cb17d2754f91441091fc926f1480d3c9b8f09e6b148168581bfd78da34fbb->enter($__internal_c90cb17d2754f91441091fc926f1480d3c9b8f09e6b148168581bfd78da34fbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c90cb17d2754f91441091fc926f1480d3c9b8f09e6b148168581bfd78da34fbb->leave($__internal_c90cb17d2754f91441091fc926f1480d3c9b8f09e6b148168581bfd78da34fbb_prof);

        
        $__internal_c0b609ac8174e6dbf7482c3fde0ad9859cddb6e9092f26de874c65d75d535ab9->leave($__internal_c0b609ac8174e6dbf7482c3fde0ad9859cddb6e9092f26de874c65d75d535ab9_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_356735c18a3d9d8713c0a97ee744c74d4b72beb61fbe881097ec806df2e78d1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_356735c18a3d9d8713c0a97ee744c74d4b72beb61fbe881097ec806df2e78d1e->enter($__internal_356735c18a3d9d8713c0a97ee744c74d4b72beb61fbe881097ec806df2e78d1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_da7d443ffd94b0a4af45982303176514261f7b22cd50ca6a7b78cc94008e73bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da7d443ffd94b0a4af45982303176514261f7b22cd50ca6a7b78cc94008e73bc->enter($__internal_da7d443ffd94b0a4af45982303176514261f7b22cd50ca6a7b78cc94008e73bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_da7d443ffd94b0a4af45982303176514261f7b22cd50ca6a7b78cc94008e73bc->leave($__internal_da7d443ffd94b0a4af45982303176514261f7b22cd50ca6a7b78cc94008e73bc_prof);

        
        $__internal_356735c18a3d9d8713c0a97ee744c74d4b72beb61fbe881097ec806df2e78d1e->leave($__internal_356735c18a3d9d8713c0a97ee744c74d4b72beb61fbe881097ec806df2e78d1e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/opt/lampp/htdocs/Jimmy_Ramos_Proyecto_Symfony3/app/Resources/views/base.html.twig");
    }
}
