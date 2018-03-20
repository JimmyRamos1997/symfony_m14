<?php

/* menu.html.twig */
class __TwigTemplate_4f6f2578c259ecabb52dba63931090c0726b21c3f84493fd25f554f558b44149 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "menu.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2de6ea78fbb9c9b026ff440b3d1ac5c0448bb6a9bb3a874f83da27ae1e2c0ebc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2de6ea78fbb9c9b026ff440b3d1ac5c0448bb6a9bb3a874f83da27ae1e2c0ebc->enter($__internal_2de6ea78fbb9c9b026ff440b3d1ac5c0448bb6a9bb3a874f83da27ae1e2c0ebc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "menu.html.twig"));

        $__internal_b8cdd34c7af087054e217233ff7092bc4e254b9b20b581b70b1ef14c5a24c2c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8cdd34c7af087054e217233ff7092bc4e254b9b20b581b70b1ef14c5a24c2c4->enter($__internal_b8cdd34c7af087054e217233ff7092bc4e254b9b20b581b70b1ef14c5a24c2c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2de6ea78fbb9c9b026ff440b3d1ac5c0448bb6a9bb3a874f83da27ae1e2c0ebc->leave($__internal_2de6ea78fbb9c9b026ff440b3d1ac5c0448bb6a9bb3a874f83da27ae1e2c0ebc_prof);

        
        $__internal_b8cdd34c7af087054e217233ff7092bc4e254b9b20b581b70b1ef14c5a24c2c4->leave($__internal_b8cdd34c7af087054e217233ff7092bc4e254b9b20b581b70b1ef14c5a24c2c4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f17873b2507c8ec9f5b598b303fa08d5e3f5c2b485120388fbe05e296c7418a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f17873b2507c8ec9f5b598b303fa08d5e3f5c2b485120388fbe05e296c7418a0->enter($__internal_f17873b2507c8ec9f5b598b303fa08d5e3f5c2b485120388fbe05e296c7418a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_87f9b482a10d07d8ac5ddeda6dda91e47d4167fc9de1346e5a4af4a767ef1384 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87f9b482a10d07d8ac5ddeda6dda91e47d4167fc9de1346e5a4af4a767ef1384->enter($__internal_87f9b482a10d07d8ac5ddeda6dda91e47d4167fc9de1346e5a4af4a767ef1384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "\t";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
\t<link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/menu.css"), "html", null, true);
        echo "\" />
    ";
        
        $__internal_87f9b482a10d07d8ac5ddeda6dda91e47d4167fc9de1346e5a4af4a767ef1384->leave($__internal_87f9b482a10d07d8ac5ddeda6dda91e47d4167fc9de1346e5a4af4a767ef1384_prof);

        
        $__internal_f17873b2507c8ec9f5b598b303fa08d5e3f5c2b485120388fbe05e296c7418a0->leave($__internal_f17873b2507c8ec9f5b598b303fa08d5e3f5c2b485120388fbe05e296c7418a0_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_9f9b2006f51b199d823883f9c1b4d69b0f02c77e4cec8a03eca68da103d5364e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f9b2006f51b199d823883f9c1b4d69b0f02c77e4cec8a03eca68da103d5364e->enter($__internal_9f9b2006f51b199d823883f9c1b4d69b0f02c77e4cec8a03eca68da103d5364e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_19aa79134f99e894436b19e7f95fc567b93309969d67a94cbf0f7c42354809ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19aa79134f99e894436b19e7f95fc567b93309969d67a94cbf0f7c42354809ae->enter($__internal_19aa79134f99e894436b19e7f95fc567b93309969d67a94cbf0f7c42354809ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "
\t<ul class=\"menu\">
\t\t<li><a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vallbona_web_homepage");
        echo "\"><i class=\"fas fa-home\"></i> Inici</a></li>
\t\t<li><a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vallbona_web_listarTasca");
        echo "\"><i class=\"fas fa-tasks\"></i> Taques </a></li>
\t\t<li><a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vallbona_web_listarSubtasca");
        echo "\"><i class=\"fas fa-code-branch\"></i> Subtasca </a></li>
\t\t<li><a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vallbona_web_listarUser");
        echo "\"><i class=\"fas fa-user\"></i> Usuaris </a></li>
\t</ul>

";
        
        $__internal_19aa79134f99e894436b19e7f95fc567b93309969d67a94cbf0f7c42354809ae->leave($__internal_19aa79134f99e894436b19e7f95fc567b93309969d67a94cbf0f7c42354809ae_prof);

        
        $__internal_9f9b2006f51b199d823883f9c1b4d69b0f02c77e4cec8a03eca68da103d5364e->leave($__internal_9f9b2006f51b199d823883f9c1b4d69b0f02c77e4cec8a03eca68da103d5364e_prof);

    }

    public function getTemplateName()
    {
        return "menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 14,  88 => 13,  84 => 12,  80 => 11,  76 => 9,  67 => 8,  55 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block head %}
\t{{ parent() }}
\t<link rel=\"stylesheet\" href=\"{{ asset('css/menu.css') }}\" />
    {% endblock %}

{% block content %}

\t<ul class=\"menu\">
\t\t<li><a href=\"{{ path('vallbona_web_homepage') }}\"><i class=\"fas fa-home\"></i> Inici</a></li>
\t\t<li><a href=\"{{ path('vallbona_web_listarTasca') }}\"><i class=\"fas fa-tasks\"></i> Taques </a></li>
\t\t<li><a href=\"{{ path('vallbona_web_listarSubtasca') }}\"><i class=\"fas fa-code-branch\"></i> Subtasca </a></li>
\t\t<li><a href=\"{{ path('vallbona_web_listarUser') }}\"><i class=\"fas fa-user\"></i> Usuaris </a></li>
\t</ul>

{% endblock %}", "menu.html.twig", "/opt/lampp/htdocs/symfony_m14/app/Resources/views/menu.html.twig");
    }
}
