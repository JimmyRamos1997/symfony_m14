<?php

/* VallbonaWebBundle:lista:listaUsuarios.html.twig */
class __TwigTemplate_55ff9f856279ece5ff4a7164b767a388b58dfa9c245d2787ca28d1100e490130 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_471da0e16484b3948082c3efff3206fe6c58d18dbe8a8d9aa6007a52b0ea434e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_471da0e16484b3948082c3efff3206fe6c58d18dbe8a8d9aa6007a52b0ea434e->enter($__internal_471da0e16484b3948082c3efff3206fe6c58d18dbe8a8d9aa6007a52b0ea434e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VallbonaWebBundle:lista:listaUsuarios.html.twig"));

        $__internal_d9c14b8c2187ddf2eac02e8745995b91c18368e05a9a482939ba3705341c35d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9c14b8c2187ddf2eac02e8745995b91c18368e05a9a482939ba3705341c35d4->enter($__internal_d9c14b8c2187ddf2eac02e8745995b91c18368e05a9a482939ba3705341c35d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VallbonaWebBundle:lista:listaUsuarios.html.twig"));

        // line 1
        echo "<h1>Listado de Usuarios</h1>
<table border=\"1\">
    <tr>
        <th>Id</th>
        <th>Nom</th>
        <th>Cognom</th>
        <th>Correo</th>
        <th>Editar</th>
        <th>Eliminar</th>
    </tr>
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 12
            echo "    <tr>
        <td>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "nom", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "cognom", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "correo", array()), "html", null, true);
            echo "</td>
        <td><button class=\"btn btn-primary\">Eliminar</button></td>
        <td><button class=\"btn btn-danger\">Editar</button></td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "</table>";
        
        $__internal_471da0e16484b3948082c3efff3206fe6c58d18dbe8a8d9aa6007a52b0ea434e->leave($__internal_471da0e16484b3948082c3efff3206fe6c58d18dbe8a8d9aa6007a52b0ea434e_prof);

        
        $__internal_d9c14b8c2187ddf2eac02e8745995b91c18368e05a9a482939ba3705341c35d4->leave($__internal_d9c14b8c2187ddf2eac02e8745995b91c18368e05a9a482939ba3705341c35d4_prof);

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
        return array (  67 => 21,  56 => 16,  52 => 15,  48 => 14,  44 => 13,  41 => 12,  37 => 11,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>Listado de Usuarios</h1>
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
        <td><button class=\"btn btn-primary\">Eliminar</button></td>
        <td><button class=\"btn btn-danger\">Editar</button></td>
    </tr>
    {% endfor %}
</table>", "VallbonaWebBundle:lista:listaUsuarios.html.twig", "/opt/lampp/htdocs/symfony_m14/src/Vallbona/WebBundle/Resources/views/lista/listaUsuarios.html.twig");
    }
}
