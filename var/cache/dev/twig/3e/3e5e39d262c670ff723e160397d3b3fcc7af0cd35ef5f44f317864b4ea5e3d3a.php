<?php

/* base.html.twig */
class __TwigTemplate_70f2ea4d9ba6befff2419e33e81e4263a6a39804101f8049eb9b3bfd1f26a548 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_45ba5dfdadd3125cb65bb3e7149b16b72539951ad298d7139d45752c8eb4e3b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45ba5dfdadd3125cb65bb3e7149b16b72539951ad298d7139d45752c8eb4e3b6->enter($__internal_45ba5dfdadd3125cb65bb3e7149b16b72539951ad298d7139d45752c8eb4e3b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_a86f394a0b7fda7812cff348c96c5915c222a0d028aad10c324facaf34e245b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a86f394a0b7fda7812cff348c96c5915c222a0d028aad10c324facaf34e245b7->enter($__internal_a86f394a0b7fda7812cff348c96c5915c222a0d028aad10c324facaf34e245b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 12
        echo "</head>
<body class=\"body\">

    <div id=\"content\">";
        // line 15
        $this->displayBlock('content', $context, $blocks);
        echo "</div>

    <div class=\"footer letra-default\">
        ";
        // line 18
        $this->displayBlock('footer', $context, $blocks);
        // line 23
        echo "  
    </div>
</body>
</html>
";
        
        $__internal_45ba5dfdadd3125cb65bb3e7149b16b72539951ad298d7139d45752c8eb4e3b6->leave($__internal_45ba5dfdadd3125cb65bb3e7149b16b72539951ad298d7139d45752c8eb4e3b6_prof);

        
        $__internal_a86f394a0b7fda7812cff348c96c5915c222a0d028aad10c324facaf34e245b7->leave($__internal_a86f394a0b7fda7812cff348c96c5915c222a0d028aad10c324facaf34e245b7_prof);

    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        $__internal_fb5e622615c8860f9cb4d60425fbeb71b524bf27791d6916a67808c4ad5b20c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb5e622615c8860f9cb4d60425fbeb71b524bf27791d6916a67808c4ad5b20c3->enter($__internal_fb5e622615c8860f9cb4d60425fbeb71b524bf27791d6916a67808c4ad5b20c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a400271dd8b24a57d64f88c730df27794c25c755855a3dea66a0e87bea749aae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a400271dd8b24a57d64f88c730df27794c25c755855a3dea66a0e87bea749aae->enter($__internal_a400271dd8b24a57d64f88c730df27794c25c755855a3dea66a0e87bea749aae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 5
        echo "        <link href=\"https://fonts.googleapis.com/css?family=Andada\" rel=\"stylesheet\"> 
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("imatges/logo.png"), "html", null, true);
        echo "\" />
        <title> ";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo " - Symfony</title>
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" />
        <!-- Carregar CSS -->
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" />
    ";
        
        $__internal_a400271dd8b24a57d64f88c730df27794c25c755855a3dea66a0e87bea749aae->leave($__internal_a400271dd8b24a57d64f88c730df27794c25c755855a3dea66a0e87bea749aae_prof);

        
        $__internal_fb5e622615c8860f9cb4d60425fbeb71b524bf27791d6916a67808c4ad5b20c3->leave($__internal_fb5e622615c8860f9cb4d60425fbeb71b524bf27791d6916a67808c4ad5b20c3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_bed0a26ffa9fc7800ec7462f331f62db3a30119fda4db26a419139034bd434e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bed0a26ffa9fc7800ec7462f331f62db3a30119fda4db26a419139034bd434e0->enter($__internal_bed0a26ffa9fc7800ec7462f331f62db3a30119fda4db26a419139034bd434e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9e78a1e2e1e3bc5fb7610b9fed089f31013c368ed6569a54773431431609961c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e78a1e2e1e3bc5fb7610b9fed089f31013c368ed6569a54773431431609961c->enter($__internal_9e78a1e2e1e3bc5fb7610b9fed089f31013c368ed6569a54773431431609961c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_9e78a1e2e1e3bc5fb7610b9fed089f31013c368ed6569a54773431431609961c->leave($__internal_9e78a1e2e1e3bc5fb7610b9fed089f31013c368ed6569a54773431431609961c_prof);

        
        $__internal_bed0a26ffa9fc7800ec7462f331f62db3a30119fda4db26a419139034bd434e0->leave($__internal_bed0a26ffa9fc7800ec7462f331f62db3a30119fda4db26a419139034bd434e0_prof);

    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        $__internal_6eca7bd272f1cb64de8c72ec01fac4c0b087b5f3b0f8751fea3308ad5393777f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6eca7bd272f1cb64de8c72ec01fac4c0b087b5f3b0f8751fea3308ad5393777f->enter($__internal_6eca7bd272f1cb64de8c72ec01fac4c0b087b5f3b0f8751fea3308ad5393777f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_c1ac4db488fe799f889402fddb8aeb7ef152b8f865b4ad6b6b09c5a7373754c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1ac4db488fe799f889402fddb8aeb7ef152b8f865b4ad6b6b09c5a7373754c0->enter($__internal_c1ac4db488fe799f889402fddb8aeb7ef152b8f865b4ad6b6b09c5a7373754c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_c1ac4db488fe799f889402fddb8aeb7ef152b8f865b4ad6b6b09c5a7373754c0->leave($__internal_c1ac4db488fe799f889402fddb8aeb7ef152b8f865b4ad6b6b09c5a7373754c0_prof);

        
        $__internal_6eca7bd272f1cb64de8c72ec01fac4c0b087b5f3b0f8751fea3308ad5393777f->leave($__internal_6eca7bd272f1cb64de8c72ec01fac4c0b087b5f3b0f8751fea3308ad5393777f_prof);

    }

    // line 18
    public function block_footer($context, array $blocks = array())
    {
        $__internal_6a83c9caca94d328fa2f4004f7441f8cff069ed5728c4a4d03606d53e6c41d96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a83c9caca94d328fa2f4004f7441f8cff069ed5728c4a4d03606d53e6c41d96->enter($__internal_6a83c9caca94d328fa2f4004f7441f8cff069ed5728c4a4d03606d53e6c41d96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_7158b2b7ad58bdf02f9b9ad7a0cf30f2423ff2a28b7af9b620d3bed45584e52d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7158b2b7ad58bdf02f9b9ad7a0cf30f2423ff2a28b7af9b620d3bed45584e52d->enter($__internal_7158b2b7ad58bdf02f9b9ad7a0cf30f2423ff2a28b7af9b620d3bed45584e52d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 19
        echo "            <p>
                <p>Created by: Jordi Baliellas & Jimmy Ramos</p>
                <p>Contact information: <a href=\"https://moodle.iescarlesvallbona.cat/\">https://moodle.iescarlesvallbona.cat/</a></p>
            </p>
        ";
        
        $__internal_7158b2b7ad58bdf02f9b9ad7a0cf30f2423ff2a28b7af9b620d3bed45584e52d->leave($__internal_7158b2b7ad58bdf02f9b9ad7a0cf30f2423ff2a28b7af9b620d3bed45584e52d_prof);

        
        $__internal_6a83c9caca94d328fa2f4004f7441f8cff069ed5728c4a4d03606d53e6c41d96->leave($__internal_6a83c9caca94d328fa2f4004f7441f8cff069ed5728c4a4d03606d53e6c41d96_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  140 => 19,  131 => 18,  114 => 15,  97 => 7,  85 => 10,  79 => 7,  75 => 6,  72 => 5,  63 => 4,  49 => 23,  47 => 18,  41 => 15,  36 => 12,  34 => 4,  29 => 1,);
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
    {% block head %}
        <link href=\"https://fonts.googleapis.com/css?family=Andada\" rel=\"stylesheet\"> 
        <link rel=\"icon\" type=\"image/png\" href=\"{{ asset('imatges/logo.png') }}\" />
        <title> {% block title %}{% endblock %} - Symfony</title>
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" />
        <!-- Carregar CSS -->
        <link rel=\"stylesheet\" href=\"{{ asset('css/main.css') }}\" />
    {% endblock %}
</head>
<body class=\"body\">

    <div id=\"content\">{% block content %}{% endblock %}</div>

    <div class=\"footer letra-default\">
        {% block footer %}
            <p>
                <p>Created by: Jordi Baliellas & Jimmy Ramos</p>
                <p>Contact information: <a href=\"https://moodle.iescarlesvallbona.cat/\">https://moodle.iescarlesvallbona.cat/</a></p>
            </p>
        {% endblock %}  
    </div>
</body>
</html>
", "base.html.twig", "/opt/lampp/htdocs/symfony_m14/app/Resources/views/base.html.twig");
    }
}
