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
        $__internal_9bfe213df58673de87108d3e9a81cd81af05abede40e1d3a290fa2549631b7c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bfe213df58673de87108d3e9a81cd81af05abede40e1d3a290fa2549631b7c6->enter($__internal_9bfe213df58673de87108d3e9a81cd81af05abede40e1d3a290fa2549631b7c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_58cd3872b8b36c7fdc088cee287d2dd0f5deff9fb87f926cf9efc0960116051f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58cd3872b8b36c7fdc088cee287d2dd0f5deff9fb87f926cf9efc0960116051f->enter($__internal_58cd3872b8b36c7fdc088cee287d2dd0f5deff9fb87f926cf9efc0960116051f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9bfe213df58673de87108d3e9a81cd81af05abede40e1d3a290fa2549631b7c6->leave($__internal_9bfe213df58673de87108d3e9a81cd81af05abede40e1d3a290fa2549631b7c6_prof);

        
        $__internal_58cd3872b8b36c7fdc088cee287d2dd0f5deff9fb87f926cf9efc0960116051f->leave($__internal_58cd3872b8b36c7fdc088cee287d2dd0f5deff9fb87f926cf9efc0960116051f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cf2d2fe5665c57947237d861612a92ab8ea8159d00ccb9b88d1271eb709016d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf2d2fe5665c57947237d861612a92ab8ea8159d00ccb9b88d1271eb709016d1->enter($__internal_cf2d2fe5665c57947237d861612a92ab8ea8159d00ccb9b88d1271eb709016d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6692607d925567c84e777ad0fc8add6b981950344f3ecaf5c9db66300dff3f6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6692607d925567c84e777ad0fc8add6b981950344f3ecaf5c9db66300dff3f6b->enter($__internal_6692607d925567c84e777ad0fc8add6b981950344f3ecaf5c9db66300dff3f6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_6692607d925567c84e777ad0fc8add6b981950344f3ecaf5c9db66300dff3f6b->leave($__internal_6692607d925567c84e777ad0fc8add6b981950344f3ecaf5c9db66300dff3f6b_prof);

        
        $__internal_cf2d2fe5665c57947237d861612a92ab8ea8159d00ccb9b88d1271eb709016d1->leave($__internal_cf2d2fe5665c57947237d861612a92ab8ea8159d00ccb9b88d1271eb709016d1_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_8a3542c9b6b1877cd4c7f0b6ed7c5155f43b828c086dc3463684735a256dae7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a3542c9b6b1877cd4c7f0b6ed7c5155f43b828c086dc3463684735a256dae7a->enter($__internal_8a3542c9b6b1877cd4c7f0b6ed7c5155f43b828c086dc3463684735a256dae7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d755b7740fa8bed38a6dde16146ee0d35646cd733b5b2fff2755e1859880f428 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d755b7740fa8bed38a6dde16146ee0d35646cd733b5b2fff2755e1859880f428->enter($__internal_d755b7740fa8bed38a6dde16146ee0d35646cd733b5b2fff2755e1859880f428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d755b7740fa8bed38a6dde16146ee0d35646cd733b5b2fff2755e1859880f428->leave($__internal_d755b7740fa8bed38a6dde16146ee0d35646cd733b5b2fff2755e1859880f428_prof);

        
        $__internal_8a3542c9b6b1877cd4c7f0b6ed7c5155f43b828c086dc3463684735a256dae7a->leave($__internal_8a3542c9b6b1877cd4c7f0b6ed7c5155f43b828c086dc3463684735a256dae7a_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_a3de9491b542391b6303350942cc95a9dbaa481af770278fe89a60dc821062cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3de9491b542391b6303350942cc95a9dbaa481af770278fe89a60dc821062cb->enter($__internal_a3de9491b542391b6303350942cc95a9dbaa481af770278fe89a60dc821062cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4f1aa7202b388b9483f2fc6d8074b1d078c509acc13db95677b1b78eaa325e82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f1aa7202b388b9483f2fc6d8074b1d078c509acc13db95677b1b78eaa325e82->enter($__internal_4f1aa7202b388b9483f2fc6d8074b1d078c509acc13db95677b1b78eaa325e82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_4f1aa7202b388b9483f2fc6d8074b1d078c509acc13db95677b1b78eaa325e82->leave($__internal_4f1aa7202b388b9483f2fc6d8074b1d078c509acc13db95677b1b78eaa325e82_prof);

        
        $__internal_a3de9491b542391b6303350942cc95a9dbaa481af770278fe89a60dc821062cb->leave($__internal_a3de9491b542391b6303350942cc95a9dbaa481af770278fe89a60dc821062cb_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/opt/lampp/htdocs/Jimmy_Ramos_Proyecto_Symfony3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
