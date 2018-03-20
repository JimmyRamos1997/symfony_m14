<?php

/* VallbonaWebBundle:lista:listaUsuarios.html.twig */
class __TwigTemplate_55ff9f856279ece5ff4a7164b767a388b58dfa9c245d2787ca28d1100e490130 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("menu.html.twig", "VallbonaWebBundle:lista:listaUsuarios.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_791256b221875cdd1d8718c36a8fa98422313bdcd483341471e72ca0cba64870 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_791256b221875cdd1d8718c36a8fa98422313bdcd483341471e72ca0cba64870->enter($__internal_791256b221875cdd1d8718c36a8fa98422313bdcd483341471e72ca0cba64870_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VallbonaWebBundle:lista:listaUsuarios.html.twig"));

        $__internal_923b3724864edd34627d401925cf321b334c3f45ba4213bb4fca00672a55c2f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_923b3724864edd34627d401925cf321b334c3f45ba4213bb4fca00672a55c2f9->enter($__internal_923b3724864edd34627d401925cf321b334c3f45ba4213bb4fca00672a55c2f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VallbonaWebBundle:lista:listaUsuarios.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_791256b221875cdd1d8718c36a8fa98422313bdcd483341471e72ca0cba64870->leave($__internal_791256b221875cdd1d8718c36a8fa98422313bdcd483341471e72ca0cba64870_prof);

        
        $__internal_923b3724864edd34627d401925cf321b334c3f45ba4213bb4fca00672a55c2f9->leave($__internal_923b3724864edd34627d401925cf321b334c3f45ba4213bb4fca00672a55c2f9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c8960c7df2095a6bd5c8b96a41158fa1acf5bf42e5e59501081cbd28f479be58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8960c7df2095a6bd5c8b96a41158fa1acf5bf42e5e59501081cbd28f479be58->enter($__internal_c8960c7df2095a6bd5c8b96a41158fa1acf5bf42e5e59501081cbd28f479be58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0496c4efe79a2e03fbd966d9c9944324457c5cecb5c887f455f29ad5e57a2ba5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0496c4efe79a2e03fbd966d9c9944324457c5cecb5c887f455f29ad5e57a2ba5->enter($__internal_0496c4efe79a2e03fbd966d9c9944324457c5cecb5c887f455f29ad5e57a2ba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Llistar Usuaris";
        
        $__internal_0496c4efe79a2e03fbd966d9c9944324457c5cecb5c887f455f29ad5e57a2ba5->leave($__internal_0496c4efe79a2e03fbd966d9c9944324457c5cecb5c887f455f29ad5e57a2ba5_prof);

        
        $__internal_c8960c7df2095a6bd5c8b96a41158fa1acf5bf42e5e59501081cbd28f479be58->leave($__internal_c8960c7df2095a6bd5c8b96a41158fa1acf5bf42e5e59501081cbd28f479be58_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_4a5216bc30aeb470cebf8d9cfa1a5252f6a723b6b54e426ad4d5db0223e8a978 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a5216bc30aeb470cebf8d9cfa1a5252f6a723b6b54e426ad4d5db0223e8a978->enter($__internal_4a5216bc30aeb470cebf8d9cfa1a5252f6a723b6b54e426ad4d5db0223e8a978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_cc825148ad952e3e0e13cf7827366279b424201eca6ff80227cd4c0176a1077f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc825148ad952e3e0e13cf7827366279b424201eca6ff80227cd4c0176a1077f->enter($__internal_cc825148ad952e3e0e13cf7827366279b424201eca6ff80227cd4c0176a1077f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    ";
        $this->displayParentBlock("content", $context, $blocks);
        echo "
    <div class=\"container menuinici letra-default llistar\">
        <h4 class=\"letra-default titlemenu\">Llistat de Usuaris</h4>
        <div class=\"centrartaula\">
            ";
        // line 10
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "success"), "method")) {
            echo "       
              ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 12
                echo "                <div class=\"alert alert-success\">
                    ";
                // line 13
                echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "       
        ";
        }
        // line 17
        echo "        <table>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Cognom</th>
                <th>Correo</th>
                <th>Editar</th>   
                <th>Eliminar</th>
            </tr>
            ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 27
            echo "                <tr>
                    <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "nom", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "cognom", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "correo", array()), "html", null, true);
            echo "</td>        
                    <td><button>Editar</button></td>
                    <td>
                        <a href=\"delete-user/";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "\"><button>Eliminar</button></a>
                    </td>
                </tr>


            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        </table>
    </div>
</div>

";
        
        $__internal_cc825148ad952e3e0e13cf7827366279b424201eca6ff80227cd4c0176a1077f->leave($__internal_cc825148ad952e3e0e13cf7827366279b424201eca6ff80227cd4c0176a1077f_prof);

        
        $__internal_4a5216bc30aeb470cebf8d9cfa1a5252f6a723b6b54e426ad4d5db0223e8a978->leave($__internal_4a5216bc30aeb470cebf8d9cfa1a5252f6a723b6b54e426ad4d5db0223e8a978_prof);

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
        return array (  148 => 40,  136 => 34,  130 => 31,  126 => 30,  122 => 29,  118 => 28,  115 => 27,  111 => 26,  100 => 17,  96 => 15,  87 => 13,  84 => 12,  80 => 11,  76 => 10,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"menu.html.twig\" %}

{% block title %}Llistar Usuaris{% endblock %}

{% block content %}
    {{ parent() }}
    <div class=\"container menuinici letra-default llistar\">
        <h4 class=\"letra-default titlemenu\">Llistat de Usuaris</h4>
        <div class=\"centrartaula\">
            {% if app.session.flashBag.has('success') %}       
              {% for msg in app.session.flashBag.get('success') %}
                <div class=\"alert alert-success\">
                    {{ msg }}
                </div>
            {% endfor %}       
        {% endif %}
        <table>
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
    </div>
</div>

{% endblock %}", "VallbonaWebBundle:lista:listaUsuarios.html.twig", "/opt/lampp/htdocs/symfony_m14/src/Vallbona/WebBundle/Resources/views/lista/listaUsuarios.html.twig");
    }
}
