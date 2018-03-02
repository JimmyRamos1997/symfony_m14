<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_ccf06df31639b7c9b2857bbf3c5e82ca65ad8846bad8b03705b504d691c84a56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0d2dee07658cd39074e599f7f67b07088cc08811dbd133984bf9f67c069eb81b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d2dee07658cd39074e599f7f67b07088cc08811dbd133984bf9f67c069eb81b->enter($__internal_0d2dee07658cd39074e599f7f67b07088cc08811dbd133984bf9f67c069eb81b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_6ed4a17dd9b5a589bf29854fc550d4e9f4f5638d3a57efb7739632b6e3c6cff4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ed4a17dd9b5a589bf29854fc550d4e9f4f5638d3a57efb7739632b6e3c6cff4->enter($__internal_6ed4a17dd9b5a589bf29854fc550d4e9f4f5638d3a57efb7739632b6e3c6cff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d2dee07658cd39074e599f7f67b07088cc08811dbd133984bf9f67c069eb81b->leave($__internal_0d2dee07658cd39074e599f7f67b07088cc08811dbd133984bf9f67c069eb81b_prof);

        
        $__internal_6ed4a17dd9b5a589bf29854fc550d4e9f4f5638d3a57efb7739632b6e3c6cff4->leave($__internal_6ed4a17dd9b5a589bf29854fc550d4e9f4f5638d3a57efb7739632b6e3c6cff4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_19913131656fc5aa89756f6b5685c22c8c34d7ddeb82c801104c6f84d4e912f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19913131656fc5aa89756f6b5685c22c8c34d7ddeb82c801104c6f84d4e912f6->enter($__internal_19913131656fc5aa89756f6b5685c22c8c34d7ddeb82c801104c6f84d4e912f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_92ddb409de86e4c80b2579c7cd1481994804ff4a4760c6f038bdd0f07ff532e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92ddb409de86e4c80b2579c7cd1481994804ff4a4760c6f038bdd0f07ff532e3->enter($__internal_92ddb409de86e4c80b2579c7cd1481994804ff4a4760c6f038bdd0f07ff532e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_92ddb409de86e4c80b2579c7cd1481994804ff4a4760c6f038bdd0f07ff532e3->leave($__internal_92ddb409de86e4c80b2579c7cd1481994804ff4a4760c6f038bdd0f07ff532e3_prof);

        
        $__internal_19913131656fc5aa89756f6b5685c22c8c34d7ddeb82c801104c6f84d4e912f6->leave($__internal_19913131656fc5aa89756f6b5685c22c8c34d7ddeb82c801104c6f84d4e912f6_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_ee5e08a2538b74a1c0c0f1b2e8a86077e520bb753515b5d26d1fadccd52af21c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee5e08a2538b74a1c0c0f1b2e8a86077e520bb753515b5d26d1fadccd52af21c->enter($__internal_ee5e08a2538b74a1c0c0f1b2e8a86077e520bb753515b5d26d1fadccd52af21c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_672c9b996633a623360a0ff0d0e01a68b8f88eec823944a6693bf758e85c7c4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_672c9b996633a623360a0ff0d0e01a68b8f88eec823944a6693bf758e85c7c4f->enter($__internal_672c9b996633a623360a0ff0d0e01a68b8f88eec823944a6693bf758e85c7c4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_672c9b996633a623360a0ff0d0e01a68b8f88eec823944a6693bf758e85c7c4f->leave($__internal_672c9b996633a623360a0ff0d0e01a68b8f88eec823944a6693bf758e85c7c4f_prof);

        
        $__internal_ee5e08a2538b74a1c0c0f1b2e8a86077e520bb753515b5d26d1fadccd52af21c->leave($__internal_ee5e08a2538b74a1c0c0f1b2e8a86077e520bb753515b5d26d1fadccd52af21c_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_11d89a7b45437afa6f2368e203f26b896798d122baaefb21da1085b24b208058 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11d89a7b45437afa6f2368e203f26b896798d122baaefb21da1085b24b208058->enter($__internal_11d89a7b45437afa6f2368e203f26b896798d122baaefb21da1085b24b208058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_756e55f40ca524c722bb7a18de0e14a722dc953d18ad7362058cbbdc138f9d65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_756e55f40ca524c722bb7a18de0e14a722dc953d18ad7362058cbbdc138f9d65->enter($__internal_756e55f40ca524c722bb7a18de0e14a722dc953d18ad7362058cbbdc138f9d65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_756e55f40ca524c722bb7a18de0e14a722dc953d18ad7362058cbbdc138f9d65->leave($__internal_756e55f40ca524c722bb7a18de0e14a722dc953d18ad7362058cbbdc138f9d65_prof);

        
        $__internal_11d89a7b45437afa6f2368e203f26b896798d122baaefb21da1085b24b208058->leave($__internal_11d89a7b45437afa6f2368e203f26b896798d122baaefb21da1085b24b208058_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/opt/lampp/htdocs/symfony_m14/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
