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
        $__internal_40e88d1322c019ac6b2c5a1d3a95c95209626718c870fa5ff7ce70565c05cfb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40e88d1322c019ac6b2c5a1d3a95c95209626718c870fa5ff7ce70565c05cfb5->enter($__internal_40e88d1322c019ac6b2c5a1d3a95c95209626718c870fa5ff7ce70565c05cfb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_3cac8bc8e0f1eec0f60dd334962965d81a99f7262a1690fa5f7f10f74deddb1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cac8bc8e0f1eec0f60dd334962965d81a99f7262a1690fa5f7f10f74deddb1d->enter($__internal_3cac8bc8e0f1eec0f60dd334962965d81a99f7262a1690fa5f7f10f74deddb1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 13
        echo "</head>
<body class=\"body\">

    ";
        // line 16
        $this->displayBlock('content', $context, $blocks);
        // line 17
        echo "
    <div class=\"footer letra-default\">
        ";
        // line 19
        $this->displayBlock('footer', $context, $blocks);
        // line 24
        echo "  
    </div>
</body>
</html>
";
        
        $__internal_40e88d1322c019ac6b2c5a1d3a95c95209626718c870fa5ff7ce70565c05cfb5->leave($__internal_40e88d1322c019ac6b2c5a1d3a95c95209626718c870fa5ff7ce70565c05cfb5_prof);

        
        $__internal_3cac8bc8e0f1eec0f60dd334962965d81a99f7262a1690fa5f7f10f74deddb1d->leave($__internal_3cac8bc8e0f1eec0f60dd334962965d81a99f7262a1690fa5f7f10f74deddb1d_prof);

    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        $__internal_c72d422b0f9ee6244bf3afc8d78d5b5d4a516ceaf14990581d2b92d8a9341b34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c72d422b0f9ee6244bf3afc8d78d5b5d4a516ceaf14990581d2b92d8a9341b34->enter($__internal_c72d422b0f9ee6244bf3afc8d78d5b5d4a516ceaf14990581d2b92d8a9341b34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e3f92130cc5ae2d0f2fe9d9ddd265210fbf48b24332a53283204e93a4e509afd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3f92130cc5ae2d0f2fe9d9ddd265210fbf48b24332a53283204e93a4e509afd->enter($__internal_e3f92130cc5ae2d0f2fe9d9ddd265210fbf48b24332a53283204e93a4e509afd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        <script defer src=\"https://use.fontawesome.com/releases/v5.0.8/js/all.js\" integrity=\"sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ\" crossorigin=\"anonymous\"></script>
    ";
        
        $__internal_e3f92130cc5ae2d0f2fe9d9ddd265210fbf48b24332a53283204e93a4e509afd->leave($__internal_e3f92130cc5ae2d0f2fe9d9ddd265210fbf48b24332a53283204e93a4e509afd_prof);

        
        $__internal_c72d422b0f9ee6244bf3afc8d78d5b5d4a516ceaf14990581d2b92d8a9341b34->leave($__internal_c72d422b0f9ee6244bf3afc8d78d5b5d4a516ceaf14990581d2b92d8a9341b34_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0fb8b8c85a4963e427b39ddde06b5a27c6cb0a4d02333017275ef2da04664bb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fb8b8c85a4963e427b39ddde06b5a27c6cb0a4d02333017275ef2da04664bb2->enter($__internal_0fb8b8c85a4963e427b39ddde06b5a27c6cb0a4d02333017275ef2da04664bb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b4538cdc68ca9288dbda52cb7f9860ad53f4c4a14e23cca759d43a6d5f1bc3b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4538cdc68ca9288dbda52cb7f9860ad53f4c4a14e23cca759d43a6d5f1bc3b3->enter($__internal_b4538cdc68ca9288dbda52cb7f9860ad53f4c4a14e23cca759d43a6d5f1bc3b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_b4538cdc68ca9288dbda52cb7f9860ad53f4c4a14e23cca759d43a6d5f1bc3b3->leave($__internal_b4538cdc68ca9288dbda52cb7f9860ad53f4c4a14e23cca759d43a6d5f1bc3b3_prof);

        
        $__internal_0fb8b8c85a4963e427b39ddde06b5a27c6cb0a4d02333017275ef2da04664bb2->leave($__internal_0fb8b8c85a4963e427b39ddde06b5a27c6cb0a4d02333017275ef2da04664bb2_prof);

    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        $__internal_b52f9dd76b76a46098c82d14dec254f160153e8223d67f1b95201c8105ef193e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b52f9dd76b76a46098c82d14dec254f160153e8223d67f1b95201c8105ef193e->enter($__internal_b52f9dd76b76a46098c82d14dec254f160153e8223d67f1b95201c8105ef193e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_556eb8224e7ff9aed4ab91bf2bd3ce7837ad05080b4d19ad582c78abd03da2dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_556eb8224e7ff9aed4ab91bf2bd3ce7837ad05080b4d19ad582c78abd03da2dd->enter($__internal_556eb8224e7ff9aed4ab91bf2bd3ce7837ad05080b4d19ad582c78abd03da2dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_556eb8224e7ff9aed4ab91bf2bd3ce7837ad05080b4d19ad582c78abd03da2dd->leave($__internal_556eb8224e7ff9aed4ab91bf2bd3ce7837ad05080b4d19ad582c78abd03da2dd_prof);

        
        $__internal_b52f9dd76b76a46098c82d14dec254f160153e8223d67f1b95201c8105ef193e->leave($__internal_b52f9dd76b76a46098c82d14dec254f160153e8223d67f1b95201c8105ef193e_prof);

    }

    // line 19
    public function block_footer($context, array $blocks = array())
    {
        $__internal_bdc28e383c1a2cf8912223e9cdf75ab4906035fd30a5897886abb2d7857dc533 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdc28e383c1a2cf8912223e9cdf75ab4906035fd30a5897886abb2d7857dc533->enter($__internal_bdc28e383c1a2cf8912223e9cdf75ab4906035fd30a5897886abb2d7857dc533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_699c03d62c707793150ef17c075ffc8e5eef97a220a75f13c97a2a52dd2fb5fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_699c03d62c707793150ef17c075ffc8e5eef97a220a75f13c97a2a52dd2fb5fa->enter($__internal_699c03d62c707793150ef17c075ffc8e5eef97a220a75f13c97a2a52dd2fb5fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 20
        echo "            <p>
                <p>Created by: Jordi Baliellas & Jimmy Ramos</p>
                <p>Contact information: <a href=\"https://moodle.iescarlesvallbona.cat/\">https://moodle.iescarlesvallbona.cat/</a></p>
            </p>
        ";
        
        $__internal_699c03d62c707793150ef17c075ffc8e5eef97a220a75f13c97a2a52dd2fb5fa->leave($__internal_699c03d62c707793150ef17c075ffc8e5eef97a220a75f13c97a2a52dd2fb5fa_prof);

        
        $__internal_bdc28e383c1a2cf8912223e9cdf75ab4906035fd30a5897886abb2d7857dc533->leave($__internal_bdc28e383c1a2cf8912223e9cdf75ab4906035fd30a5897886abb2d7857dc533_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  141 => 20,  132 => 19,  115 => 16,  98 => 7,  85 => 10,  79 => 7,  75 => 6,  72 => 5,  63 => 4,  49 => 24,  47 => 19,  43 => 17,  41 => 16,  36 => 13,  34 => 4,  29 => 1,);
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
        <script defer src=\"https://use.fontawesome.com/releases/v5.0.8/js/all.js\" integrity=\"sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ\" crossorigin=\"anonymous\"></script>
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
