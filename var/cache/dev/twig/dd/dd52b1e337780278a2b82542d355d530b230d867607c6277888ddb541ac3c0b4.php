<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_8142be88f30ddc2e15c390a592bfe4d1edcf12b006788748e7c1a989bb635821 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0d853b5f161092b2973f3a6fb376d99cae1b8166648804c3dbc50cbdbbe65921 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d853b5f161092b2973f3a6fb376d99cae1b8166648804c3dbc50cbdbbe65921->enter($__internal_0d853b5f161092b2973f3a6fb376d99cae1b8166648804c3dbc50cbdbbe65921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_b42bd584982eb2a5c05f2211bc03e4244da4ea2c5e9937fe59d9428925074898 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b42bd584982eb2a5c05f2211bc03e4244da4ea2c5e9937fe59d9428925074898->enter($__internal_b42bd584982eb2a5c05f2211bc03e4244da4ea2c5e9937fe59d9428925074898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_0d853b5f161092b2973f3a6fb376d99cae1b8166648804c3dbc50cbdbbe65921->leave($__internal_0d853b5f161092b2973f3a6fb376d99cae1b8166648804c3dbc50cbdbbe65921_prof);

        
        $__internal_b42bd584982eb2a5c05f2211bc03e4244da4ea2c5e9937fe59d9428925074898->leave($__internal_b42bd584982eb2a5c05f2211bc03e4244da4ea2c5e9937fe59d9428925074898_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4fdad413ae9bb23264d30d09eaf65f1dd4f8361885b41b5d2c033765557c476c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fdad413ae9bb23264d30d09eaf65f1dd4f8361885b41b5d2c033765557c476c->enter($__internal_4fdad413ae9bb23264d30d09eaf65f1dd4f8361885b41b5d2c033765557c476c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_59954b6676ce6edb470c693a5c0fe498a0d832092d8a68f6306e3f3a698eadd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59954b6676ce6edb470c693a5c0fe498a0d832092d8a68f6306e3f3a698eadd9->enter($__internal_59954b6676ce6edb470c693a5c0fe498a0d832092d8a68f6306e3f3a698eadd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_59954b6676ce6edb470c693a5c0fe498a0d832092d8a68f6306e3f3a698eadd9->leave($__internal_59954b6676ce6edb470c693a5c0fe498a0d832092d8a68f6306e3f3a698eadd9_prof);

        
        $__internal_4fdad413ae9bb23264d30d09eaf65f1dd4f8361885b41b5d2c033765557c476c->leave($__internal_4fdad413ae9bb23264d30d09eaf65f1dd4f8361885b41b5d2c033765557c476c_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_e9127f99c5dafbded0b606f39e1cc3428992d957cf107483be3992214febf96e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9127f99c5dafbded0b606f39e1cc3428992d957cf107483be3992214febf96e->enter($__internal_e9127f99c5dafbded0b606f39e1cc3428992d957cf107483be3992214febf96e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_889652f5cd91b64b43bbaeb6d8b647572e2bd006e47fcc252a8ceb5e9d0a8d53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_889652f5cd91b64b43bbaeb6d8b647572e2bd006e47fcc252a8ceb5e9d0a8d53->enter($__internal_889652f5cd91b64b43bbaeb6d8b647572e2bd006e47fcc252a8ceb5e9d0a8d53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_889652f5cd91b64b43bbaeb6d8b647572e2bd006e47fcc252a8ceb5e9d0a8d53->leave($__internal_889652f5cd91b64b43bbaeb6d8b647572e2bd006e47fcc252a8ceb5e9d0a8d53_prof);

        
        $__internal_e9127f99c5dafbded0b606f39e1cc3428992d957cf107483be3992214febf96e->leave($__internal_e9127f99c5dafbded0b606f39e1cc3428992d957cf107483be3992214febf96e_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_ffe1980baca058a4d059510624278586dccbeae6fc5994c8faeb036c5e2c45dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffe1980baca058a4d059510624278586dccbeae6fc5994c8faeb036c5e2c45dd->enter($__internal_ffe1980baca058a4d059510624278586dccbeae6fc5994c8faeb036c5e2c45dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cd318834755825b1b97842a47c5fe136a29255f88421331e273f80a00ab59bfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd318834755825b1b97842a47c5fe136a29255f88421331e273f80a00ab59bfc->enter($__internal_cd318834755825b1b97842a47c5fe136a29255f88421331e273f80a00ab59bfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_cd318834755825b1b97842a47c5fe136a29255f88421331e273f80a00ab59bfc->leave($__internal_cd318834755825b1b97842a47c5fe136a29255f88421331e273f80a00ab59bfc_prof);

        
        $__internal_ffe1980baca058a4d059510624278586dccbeae6fc5994c8faeb036c5e2c45dd->leave($__internal_ffe1980baca058a4d059510624278586dccbeae6fc5994c8faeb036c5e2c45dd_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/opt/lampp/htdocs/symfony_m14/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
