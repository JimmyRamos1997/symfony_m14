<?php

/* VallbonaWebBundle:lista:listaUsuarios.html.twig */
class __TwigTemplate_55ff9f856279ece5ff4a7164b767a388b58dfa9c245d2787ca28d1100e490130 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "VallbonaWebBundle:lista:listaUsuarios.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_555316eb89cb1beeeedc5583c31cd40ecc0aa01215f15f6f854a2b02cb680568 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_555316eb89cb1beeeedc5583c31cd40ecc0aa01215f15f6f854a2b02cb680568->enter($__internal_555316eb89cb1beeeedc5583c31cd40ecc0aa01215f15f6f854a2b02cb680568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VallbonaWebBundle:lista:listaUsuarios.html.twig"));

        $__internal_dad40bc8ff2cdd6c31c6ee283312ae94def88d6b5df95f0b9f4d4f21ea4f3f14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dad40bc8ff2cdd6c31c6ee283312ae94def88d6b5df95f0b9f4d4f21ea4f3f14->enter($__internal_dad40bc8ff2cdd6c31c6ee283312ae94def88d6b5df95f0b9f4d4f21ea4f3f14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VallbonaWebBundle:lista:listaUsuarios.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_555316eb89cb1beeeedc5583c31cd40ecc0aa01215f15f6f854a2b02cb680568->leave($__internal_555316eb89cb1beeeedc5583c31cd40ecc0aa01215f15f6f854a2b02cb680568_prof);

        
        $__internal_dad40bc8ff2cdd6c31c6ee283312ae94def88d6b5df95f0b9f4d4f21ea4f3f14->leave($__internal_dad40bc8ff2cdd6c31c6ee283312ae94def88d6b5df95f0b9f4d4f21ea4f3f14_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_0b3cc21c43f01573fe2f027d06acfcb9f9043d29087dabac86880350062341b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b3cc21c43f01573fe2f027d06acfcb9f9043d29087dabac86880350062341b1->enter($__internal_0b3cc21c43f01573fe2f027d06acfcb9f9043d29087dabac86880350062341b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_cefff9f3ae7f8008ed3e53484832c06f6c99163aae8f00cbb89d47bbdee87452 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cefff9f3ae7f8008ed3e53484832c06f6c99163aae8f00cbb89d47bbdee87452->enter($__internal_cefff9f3ae7f8008ed3e53484832c06f6c99163aae8f00cbb89d47bbdee87452_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "<h1>Listado de Usuarios</h1>
    ";
        // line 4
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "success"), "method")) {
            echo "       
              ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 6
                echo "                <div class=\"alert alert-success\">
                    ";
                // line 7
                echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                echo "
                </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "       
    ";
        }
        // line 11
        echo "<table border=\"1\">
    <tr>
        <th>Id</th>
        <th>Nom</th>
        <th>Cognom</th>
        <th>Correo</th>
        <th>Editar</th>   
        <th>Eliminar</th>
    </tr>
     ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 21
            echo "    <tr>
        <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "nom", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "cognom", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "correo", array()), "html", null, true);
            echo "</td>        
        <td><button>Editar</button></td>
        <td>
            <a href=\"delete-user/";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "\"><button>Eliminar</button></a>
        </td>
    </tr>
 

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "</table>

";
        
        $__internal_cefff9f3ae7f8008ed3e53484832c06f6c99163aae8f00cbb89d47bbdee87452->leave($__internal_cefff9f3ae7f8008ed3e53484832c06f6c99163aae8f00cbb89d47bbdee87452_prof);

        
        $__internal_0b3cc21c43f01573fe2f027d06acfcb9f9043d29087dabac86880350062341b1->leave($__internal_0b3cc21c43f01573fe2f027d06acfcb9f9043d29087dabac86880350062341b1_prof);

    }

    public function getTemplateName()
    {
        return "VallbonaWebBundle:lista:listaUsuarios.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 34,  112 => 28,  106 => 25,  102 => 24,  98 => 23,  94 => 22,  91 => 21,  87 => 20,  76 => 11,  72 => 9,  63 => 7,  60 => 6,  56 => 5,  52 => 4,  49 => 3,  40 => 2,  11 => 1,);
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
{% block content %}
<h1>Listado de Usuarios</h1>
    {% if app.session.flashBag.has('success') %}       
              {% for msg in app.session.flashBag.get('success') %}
                <div class=\"alert alert-success\">
                    {{ msg }}
                </div>
                {% endfor %}       
    {% endif %}
<table border=\"1\">
    <tr>
        <th>Id</th>
        <th>Nom</th>
        <th>Cognom</th>
        <th>Correo</th>
        <th>Editar</th>   
        <th>Eliminar</th>
    </tr>
     {% for user in users %}
    <tr>
        <td>{{ user.id }}</td>
        <td>{{ user.nom }}</td>
        <td>{{ user.cognom }}</td>
        <td>{{ user.correo }}</td>        
        <td><button>Editar</button></td>
        <td>
            <a href=\"delete-user/{{ user.id }}\"><button>Eliminar</button></a>
        </td>
    </tr>
 

    {% endfor %}
</table>

{% endblock %}", "VallbonaWebBundle:lista:listaUsuarios.html.twig", "/opt/lampp/htdocs/symfony_m14/src/Vallbona/WebBundle/Resources/views/lista/listaUsuarios.html.twig");
    }
}
