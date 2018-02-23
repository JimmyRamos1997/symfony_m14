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
        $__internal_6d5507ef8ee385c62d38f1cb3ca04a190ce7a888094c43181e0872e7cee723b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d5507ef8ee385c62d38f1cb3ca04a190ce7a888094c43181e0872e7cee723b0->enter($__internal_6d5507ef8ee385c62d38f1cb3ca04a190ce7a888094c43181e0872e7cee723b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_02c5e0cfbea4b77adc48aa0f97b706e1f3df443399585d2d8e7da0c2430bb10e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02c5e0cfbea4b77adc48aa0f97b706e1f3df443399585d2d8e7da0c2430bb10e->enter($__internal_02c5e0cfbea4b77adc48aa0f97b706e1f3df443399585d2d8e7da0c2430bb10e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_6d5507ef8ee385c62d38f1cb3ca04a190ce7a888094c43181e0872e7cee723b0->leave($__internal_6d5507ef8ee385c62d38f1cb3ca04a190ce7a888094c43181e0872e7cee723b0_prof);

        
        $__internal_02c5e0cfbea4b77adc48aa0f97b706e1f3df443399585d2d8e7da0c2430bb10e->leave($__internal_02c5e0cfbea4b77adc48aa0f97b706e1f3df443399585d2d8e7da0c2430bb10e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_20a19b5461ca3453f064fb149830c53e250cedcd9279c41d2974ba08585ad149 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20a19b5461ca3453f064fb149830c53e250cedcd9279c41d2974ba08585ad149->enter($__internal_20a19b5461ca3453f064fb149830c53e250cedcd9279c41d2974ba08585ad149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c70edbd3aabbe881a0f88ee3e9a378d343d007475492a0020b2653229de06148 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c70edbd3aabbe881a0f88ee3e9a378d343d007475492a0020b2653229de06148->enter($__internal_c70edbd3aabbe881a0f88ee3e9a378d343d007475492a0020b2653229de06148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_c70edbd3aabbe881a0f88ee3e9a378d343d007475492a0020b2653229de06148->leave($__internal_c70edbd3aabbe881a0f88ee3e9a378d343d007475492a0020b2653229de06148_prof);

        
        $__internal_20a19b5461ca3453f064fb149830c53e250cedcd9279c41d2974ba08585ad149->leave($__internal_20a19b5461ca3453f064fb149830c53e250cedcd9279c41d2974ba08585ad149_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_179a5723e456902a6c95e7fec5561890e4847cd847f142b39e4b79af39787ef9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_179a5723e456902a6c95e7fec5561890e4847cd847f142b39e4b79af39787ef9->enter($__internal_179a5723e456902a6c95e7fec5561890e4847cd847f142b39e4b79af39787ef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_23be4338a1c6ba470e81f0ee4e6fbe062a184ebff87add7ce7d249d815750419 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23be4338a1c6ba470e81f0ee4e6fbe062a184ebff87add7ce7d249d815750419->enter($__internal_23be4338a1c6ba470e81f0ee4e6fbe062a184ebff87add7ce7d249d815750419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_23be4338a1c6ba470e81f0ee4e6fbe062a184ebff87add7ce7d249d815750419->leave($__internal_23be4338a1c6ba470e81f0ee4e6fbe062a184ebff87add7ce7d249d815750419_prof);

        
        $__internal_179a5723e456902a6c95e7fec5561890e4847cd847f142b39e4b79af39787ef9->leave($__internal_179a5723e456902a6c95e7fec5561890e4847cd847f142b39e4b79af39787ef9_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_ed6c6d8e7cc9a7a1a4e5b443291edd667683722008feb132c7a4e03e92fc26f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed6c6d8e7cc9a7a1a4e5b443291edd667683722008feb132c7a4e03e92fc26f6->enter($__internal_ed6c6d8e7cc9a7a1a4e5b443291edd667683722008feb132c7a4e03e92fc26f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7870f9f4d4220cd397242e8d0fb346b3c91858286b1ab5766b7e250f7e9ec40d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7870f9f4d4220cd397242e8d0fb346b3c91858286b1ab5766b7e250f7e9ec40d->enter($__internal_7870f9f4d4220cd397242e8d0fb346b3c91858286b1ab5766b7e250f7e9ec40d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7870f9f4d4220cd397242e8d0fb346b3c91858286b1ab5766b7e250f7e9ec40d->leave($__internal_7870f9f4d4220cd397242e8d0fb346b3c91858286b1ab5766b7e250f7e9ec40d_prof);

        
        $__internal_ed6c6d8e7cc9a7a1a4e5b443291edd667683722008feb132c7a4e03e92fc26f6->leave($__internal_ed6c6d8e7cc9a7a1a4e5b443291edd667683722008feb132c7a4e03e92fc26f6_prof);

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
", "@Twig/layout.html.twig", "/opt/lampp/htdocs/Jimmy_Ramos_Proyecto_Symfony3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
