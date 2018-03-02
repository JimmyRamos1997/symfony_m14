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
        $__internal_54b5d0ba206e8f3add512a5356a10b71ecd6d4bc08f3b8f22991b535620f2955 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54b5d0ba206e8f3add512a5356a10b71ecd6d4bc08f3b8f22991b535620f2955->enter($__internal_54b5d0ba206e8f3add512a5356a10b71ecd6d4bc08f3b8f22991b535620f2955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_d247de0fd243a00163cdd1a9f8d0931b6570b43b31c6079577375e5ff9dd5f0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d247de0fd243a00163cdd1a9f8d0931b6570b43b31c6079577375e5ff9dd5f0d->enter($__internal_d247de0fd243a00163cdd1a9f8d0931b6570b43b31c6079577375e5ff9dd5f0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_54b5d0ba206e8f3add512a5356a10b71ecd6d4bc08f3b8f22991b535620f2955->leave($__internal_54b5d0ba206e8f3add512a5356a10b71ecd6d4bc08f3b8f22991b535620f2955_prof);

        
        $__internal_d247de0fd243a00163cdd1a9f8d0931b6570b43b31c6079577375e5ff9dd5f0d->leave($__internal_d247de0fd243a00163cdd1a9f8d0931b6570b43b31c6079577375e5ff9dd5f0d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b6214d3ce0ef4124c59391eab26acc42ba71521b196c3e364624a5e2e846c5e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6214d3ce0ef4124c59391eab26acc42ba71521b196c3e364624a5e2e846c5e5->enter($__internal_b6214d3ce0ef4124c59391eab26acc42ba71521b196c3e364624a5e2e846c5e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_365cea72627ab6212b760669e61ce538174c96faa9324f2527e003e52ed65f6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_365cea72627ab6212b760669e61ce538174c96faa9324f2527e003e52ed65f6b->enter($__internal_365cea72627ab6212b760669e61ce538174c96faa9324f2527e003e52ed65f6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_365cea72627ab6212b760669e61ce538174c96faa9324f2527e003e52ed65f6b->leave($__internal_365cea72627ab6212b760669e61ce538174c96faa9324f2527e003e52ed65f6b_prof);

        
        $__internal_b6214d3ce0ef4124c59391eab26acc42ba71521b196c3e364624a5e2e846c5e5->leave($__internal_b6214d3ce0ef4124c59391eab26acc42ba71521b196c3e364624a5e2e846c5e5_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_3baf6a7ea0f3b49574abd358bada37caf6022a205a0ddac6aebc6157a0914231 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3baf6a7ea0f3b49574abd358bada37caf6022a205a0ddac6aebc6157a0914231->enter($__internal_3baf6a7ea0f3b49574abd358bada37caf6022a205a0ddac6aebc6157a0914231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_eb2dc7ec749aba7901a5d35e413bde0c1662485df255060f9ecf27cd97fa84d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb2dc7ec749aba7901a5d35e413bde0c1662485df255060f9ecf27cd97fa84d3->enter($__internal_eb2dc7ec749aba7901a5d35e413bde0c1662485df255060f9ecf27cd97fa84d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_eb2dc7ec749aba7901a5d35e413bde0c1662485df255060f9ecf27cd97fa84d3->leave($__internal_eb2dc7ec749aba7901a5d35e413bde0c1662485df255060f9ecf27cd97fa84d3_prof);

        
        $__internal_3baf6a7ea0f3b49574abd358bada37caf6022a205a0ddac6aebc6157a0914231->leave($__internal_3baf6a7ea0f3b49574abd358bada37caf6022a205a0ddac6aebc6157a0914231_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_2ad6b7e4b7a3613ea4a5ef4916d05aad4826670d18ee057ccbcacfc23294dbb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ad6b7e4b7a3613ea4a5ef4916d05aad4826670d18ee057ccbcacfc23294dbb9->enter($__internal_2ad6b7e4b7a3613ea4a5ef4916d05aad4826670d18ee057ccbcacfc23294dbb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c68af675673cdfcdeac6662d84d14e03c944bac37bbcf8b01a3b8b814d614a68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c68af675673cdfcdeac6662d84d14e03c944bac37bbcf8b01a3b8b814d614a68->enter($__internal_c68af675673cdfcdeac6662d84d14e03c944bac37bbcf8b01a3b8b814d614a68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c68af675673cdfcdeac6662d84d14e03c944bac37bbcf8b01a3b8b814d614a68->leave($__internal_c68af675673cdfcdeac6662d84d14e03c944bac37bbcf8b01a3b8b814d614a68_prof);

        
        $__internal_2ad6b7e4b7a3613ea4a5ef4916d05aad4826670d18ee057ccbcacfc23294dbb9->leave($__internal_2ad6b7e4b7a3613ea4a5ef4916d05aad4826670d18ee057ccbcacfc23294dbb9_prof);

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
