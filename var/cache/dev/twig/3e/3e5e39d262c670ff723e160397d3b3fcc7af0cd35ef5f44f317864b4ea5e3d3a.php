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
        $__internal_f9aed92e4dc4df2a820e64f5a724b4ec93f4c5ae303b389200291f9b522b4b94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9aed92e4dc4df2a820e64f5a724b4ec93f4c5ae303b389200291f9b522b4b94->enter($__internal_f9aed92e4dc4df2a820e64f5a724b4ec93f4c5ae303b389200291f9b522b4b94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_82252dec925e4fb6a35729f02d2c93423b371159813c0d48047198905b667a0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82252dec925e4fb6a35729f02d2c93423b371159813c0d48047198905b667a0a->enter($__internal_82252dec925e4fb6a35729f02d2c93423b371159813c0d48047198905b667a0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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

    ";
        // line 15
        $this->displayBlock('content', $context, $blocks);
        // line 16
        echo "
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
        
        $__internal_f9aed92e4dc4df2a820e64f5a724b4ec93f4c5ae303b389200291f9b522b4b94->leave($__internal_f9aed92e4dc4df2a820e64f5a724b4ec93f4c5ae303b389200291f9b522b4b94_prof);

        
        $__internal_82252dec925e4fb6a35729f02d2c93423b371159813c0d48047198905b667a0a->leave($__internal_82252dec925e4fb6a35729f02d2c93423b371159813c0d48047198905b667a0a_prof);

    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        $__internal_cb78a0e43376db76121fbbc6aaf9a67baf605e8882858b9892dd296e3cf1f07a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb78a0e43376db76121fbbc6aaf9a67baf605e8882858b9892dd296e3cf1f07a->enter($__internal_cb78a0e43376db76121fbbc6aaf9a67baf605e8882858b9892dd296e3cf1f07a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_911750386cf99b208b0a40fef8c433262598a5c199d5a71e8e0ea235478e9c2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_911750386cf99b208b0a40fef8c433262598a5c199d5a71e8e0ea235478e9c2d->enter($__internal_911750386cf99b208b0a40fef8c433262598a5c199d5a71e8e0ea235478e9c2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_911750386cf99b208b0a40fef8c433262598a5c199d5a71e8e0ea235478e9c2d->leave($__internal_911750386cf99b208b0a40fef8c433262598a5c199d5a71e8e0ea235478e9c2d_prof);

        
        $__internal_cb78a0e43376db76121fbbc6aaf9a67baf605e8882858b9892dd296e3cf1f07a->leave($__internal_cb78a0e43376db76121fbbc6aaf9a67baf605e8882858b9892dd296e3cf1f07a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d1f85a51b66e02cda8cc57cc82d6588ee4c48bae3c77c447817790eadfa7ede1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1f85a51b66e02cda8cc57cc82d6588ee4c48bae3c77c447817790eadfa7ede1->enter($__internal_d1f85a51b66e02cda8cc57cc82d6588ee4c48bae3c77c447817790eadfa7ede1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_adbb89d9a1b04e9ab257e81ac3049ffb5b69d8a13505e941eb2676e6c6ddf76a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adbb89d9a1b04e9ab257e81ac3049ffb5b69d8a13505e941eb2676e6c6ddf76a->enter($__internal_adbb89d9a1b04e9ab257e81ac3049ffb5b69d8a13505e941eb2676e6c6ddf76a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_adbb89d9a1b04e9ab257e81ac3049ffb5b69d8a13505e941eb2676e6c6ddf76a->leave($__internal_adbb89d9a1b04e9ab257e81ac3049ffb5b69d8a13505e941eb2676e6c6ddf76a_prof);

        
        $__internal_d1f85a51b66e02cda8cc57cc82d6588ee4c48bae3c77c447817790eadfa7ede1->leave($__internal_d1f85a51b66e02cda8cc57cc82d6588ee4c48bae3c77c447817790eadfa7ede1_prof);

    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        $__internal_4059da7e2dff1611a7b8648682e9f55fb1155f62af3be7b1572a12ddddde43ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4059da7e2dff1611a7b8648682e9f55fb1155f62af3be7b1572a12ddddde43ab->enter($__internal_4059da7e2dff1611a7b8648682e9f55fb1155f62af3be7b1572a12ddddde43ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_6a1b8cf5280638a190532e4379caa0dd1d9dcfc187b96d4f4b4c562dce7014fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a1b8cf5280638a190532e4379caa0dd1d9dcfc187b96d4f4b4c562dce7014fb->enter($__internal_6a1b8cf5280638a190532e4379caa0dd1d9dcfc187b96d4f4b4c562dce7014fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_6a1b8cf5280638a190532e4379caa0dd1d9dcfc187b96d4f4b4c562dce7014fb->leave($__internal_6a1b8cf5280638a190532e4379caa0dd1d9dcfc187b96d4f4b4c562dce7014fb_prof);

        
        $__internal_4059da7e2dff1611a7b8648682e9f55fb1155f62af3be7b1572a12ddddde43ab->leave($__internal_4059da7e2dff1611a7b8648682e9f55fb1155f62af3be7b1572a12ddddde43ab_prof);

    }

    // line 18
    public function block_footer($context, array $blocks = array())
    {
        $__internal_a33d286be8a84ca0f406bdd4949fff76bfbe4329e3134994c39e6e7811c9b738 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a33d286be8a84ca0f406bdd4949fff76bfbe4329e3134994c39e6e7811c9b738->enter($__internal_a33d286be8a84ca0f406bdd4949fff76bfbe4329e3134994c39e6e7811c9b738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_f14cdf38e09ee532fc0307086d79bb52e1cc886c7551ba120af40995cfcc16e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f14cdf38e09ee532fc0307086d79bb52e1cc886c7551ba120af40995cfcc16e3->enter($__internal_f14cdf38e09ee532fc0307086d79bb52e1cc886c7551ba120af40995cfcc16e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 19
        echo "            <p>
                <p>Created by: Jordi Baliellas & Jimmy Ramos</p>
                <p>Contact information: <a href=\"https://moodle.iescarlesvallbona.cat/\">https://moodle.iescarlesvallbona.cat/</a></p>
            </p>
        ";
        
        $__internal_f14cdf38e09ee532fc0307086d79bb52e1cc886c7551ba120af40995cfcc16e3->leave($__internal_f14cdf38e09ee532fc0307086d79bb52e1cc886c7551ba120af40995cfcc16e3_prof);

        
        $__internal_a33d286be8a84ca0f406bdd4949fff76bfbe4329e3134994c39e6e7811c9b738->leave($__internal_a33d286be8a84ca0f406bdd4949fff76bfbe4329e3134994c39e6e7811c9b738_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  140 => 19,  131 => 18,  114 => 15,  97 => 7,  85 => 10,  79 => 7,  75 => 6,  72 => 5,  63 => 4,  49 => 23,  47 => 18,  43 => 16,  41 => 15,  36 => 12,  34 => 4,  29 => 1,);
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

    {% block content %}{% endblock %}

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
