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
        $__internal_708a56079dfa49d3e40724b852cae69695b5a5d62a90359fd5e8910c2113090d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_708a56079dfa49d3e40724b852cae69695b5a5d62a90359fd5e8910c2113090d->enter($__internal_708a56079dfa49d3e40724b852cae69695b5a5d62a90359fd5e8910c2113090d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_2e73807f977954af7d25c9e319cd2ee47bd8f79fdc84a42cc6ecf356ab2d0903 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e73807f977954af7d25c9e319cd2ee47bd8f79fdc84a42cc6ecf356ab2d0903->enter($__internal_2e73807f977954af7d25c9e319cd2ee47bd8f79fdc84a42cc6ecf356ab2d0903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_708a56079dfa49d3e40724b852cae69695b5a5d62a90359fd5e8910c2113090d->leave($__internal_708a56079dfa49d3e40724b852cae69695b5a5d62a90359fd5e8910c2113090d_prof);

        
        $__internal_2e73807f977954af7d25c9e319cd2ee47bd8f79fdc84a42cc6ecf356ab2d0903->leave($__internal_2e73807f977954af7d25c9e319cd2ee47bd8f79fdc84a42cc6ecf356ab2d0903_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_fb10c3e35248d7437a9ce528822564593708ef33ccfc59077325b3b79a816e82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb10c3e35248d7437a9ce528822564593708ef33ccfc59077325b3b79a816e82->enter($__internal_fb10c3e35248d7437a9ce528822564593708ef33ccfc59077325b3b79a816e82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a86a0052e3f062837a32b74300fa6cdd82d030fef114d0e6d796b1a888a0d4a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a86a0052e3f062837a32b74300fa6cdd82d030fef114d0e6d796b1a888a0d4a1->enter($__internal_a86a0052e3f062837a32b74300fa6cdd82d030fef114d0e6d796b1a888a0d4a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a86a0052e3f062837a32b74300fa6cdd82d030fef114d0e6d796b1a888a0d4a1->leave($__internal_a86a0052e3f062837a32b74300fa6cdd82d030fef114d0e6d796b1a888a0d4a1_prof);

        
        $__internal_fb10c3e35248d7437a9ce528822564593708ef33ccfc59077325b3b79a816e82->leave($__internal_fb10c3e35248d7437a9ce528822564593708ef33ccfc59077325b3b79a816e82_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b351280fe7f4507f2bcbdf1525ea3eb288908a68ff83e88559872a8b53ad2176 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b351280fe7f4507f2bcbdf1525ea3eb288908a68ff83e88559872a8b53ad2176->enter($__internal_b351280fe7f4507f2bcbdf1525ea3eb288908a68ff83e88559872a8b53ad2176_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_352302abb408a6c4ecd63598ff69a8dc7699dab526757ae595bbf7e905fa509a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_352302abb408a6c4ecd63598ff69a8dc7699dab526757ae595bbf7e905fa509a->enter($__internal_352302abb408a6c4ecd63598ff69a8dc7699dab526757ae595bbf7e905fa509a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_352302abb408a6c4ecd63598ff69a8dc7699dab526757ae595bbf7e905fa509a->leave($__internal_352302abb408a6c4ecd63598ff69a8dc7699dab526757ae595bbf7e905fa509a_prof);

        
        $__internal_b351280fe7f4507f2bcbdf1525ea3eb288908a68ff83e88559872a8b53ad2176->leave($__internal_b351280fe7f4507f2bcbdf1525ea3eb288908a68ff83e88559872a8b53ad2176_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_d8a4a434aeed9368f5fde48a12322335d5d9dc76df1228e8b6dbe901b0be4030 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8a4a434aeed9368f5fde48a12322335d5d9dc76df1228e8b6dbe901b0be4030->enter($__internal_d8a4a434aeed9368f5fde48a12322335d5d9dc76df1228e8b6dbe901b0be4030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_32359d2c95e82f6ae43be250a1031c2872ebcf3f749be7aab6a0960be7e8e2a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32359d2c95e82f6ae43be250a1031c2872ebcf3f749be7aab6a0960be7e8e2a3->enter($__internal_32359d2c95e82f6ae43be250a1031c2872ebcf3f749be7aab6a0960be7e8e2a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_32359d2c95e82f6ae43be250a1031c2872ebcf3f749be7aab6a0960be7e8e2a3->leave($__internal_32359d2c95e82f6ae43be250a1031c2872ebcf3f749be7aab6a0960be7e8e2a3_prof);

        
        $__internal_d8a4a434aeed9368f5fde48a12322335d5d9dc76df1228e8b6dbe901b0be4030->leave($__internal_d8a4a434aeed9368f5fde48a12322335d5d9dc76df1228e8b6dbe901b0be4030_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8849adce52df32824a45e153f1f047553119e35a2511dd81ffc757a11f226bfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8849adce52df32824a45e153f1f047553119e35a2511dd81ffc757a11f226bfc->enter($__internal_8849adce52df32824a45e153f1f047553119e35a2511dd81ffc757a11f226bfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_27332263677da5e8d330eb785b379390ff3c0168c5879777f02b7a6497e11a36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27332263677da5e8d330eb785b379390ff3c0168c5879777f02b7a6497e11a36->enter($__internal_27332263677da5e8d330eb785b379390ff3c0168c5879777f02b7a6497e11a36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_27332263677da5e8d330eb785b379390ff3c0168c5879777f02b7a6497e11a36->leave($__internal_27332263677da5e8d330eb785b379390ff3c0168c5879777f02b7a6497e11a36_prof);

        
        $__internal_8849adce52df32824a45e153f1f047553119e35a2511dd81ffc757a11f226bfc->leave($__internal_8849adce52df32824a45e153f1f047553119e35a2511dd81ffc757a11f226bfc_prof);

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
", "base.html.twig", "/opt/lampp/htdocs/symfony_m14/app/Resources/views/base.html.twig");
    }
}
