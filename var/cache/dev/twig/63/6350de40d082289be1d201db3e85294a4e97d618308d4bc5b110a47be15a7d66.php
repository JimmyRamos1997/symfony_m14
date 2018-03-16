<?php

/* VallbonaWebBundle:lista:listaSubtasques.html.twig */
class __TwigTemplate_f345fe3fab70367c1ce4f033043ed4acdd694926dfeede35bb4ab1488ab75d44 extends Twig_Template
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
        $__internal_101ad03eea1be528a5a1df0bda0b617f995d473183936459266e524a2d60f581 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_101ad03eea1be528a5a1df0bda0b617f995d473183936459266e524a2d60f581->enter($__internal_101ad03eea1be528a5a1df0bda0b617f995d473183936459266e524a2d60f581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VallbonaWebBundle:lista:listaSubtasques.html.twig"));

        $__internal_3c2dd6521c45a75a20b180bd2352c4b18677dd9cfd2cc0acd04f6fa91613809a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c2dd6521c45a75a20b180bd2352c4b18677dd9cfd2cc0acd04f6fa91613809a->enter($__internal_3c2dd6521c45a75a20b180bd2352c4b18677dd9cfd2cc0acd04f6fa91613809a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VallbonaWebBundle:lista:listaSubtasques.html.twig"));

        // line 1
        echo "<h1>Listado de Subtasques</h1>
<table border=\"1\">
    <tr>
        <th>Id</th>
        <th>Nom</th>
        <th>Descripcio</th>
        <th>Data d'inici</th>
        <th>Data de finalització</th>
        <th>Tasca-Referencia</th>
        <th>Editar</th>
        <th>Eliminar</th>
    </tr>
    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["subtasques"] ?? $this->getContext($context, "subtasques")));
        foreach ($context['_seq'] as $context["_key"] => $context["subtasca"]) {
            // line 14
            echo "    <tr>
        <td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["subtasca"], "id", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["subtasca"], "nom", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["subtasca"], "descripcio", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["subtasca"], "dataInici", array()), "d-m-Y"), "html", null, true);
            echo "</td>
        <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["subtasca"], "dataFinal", array()), "d-m-Y"), "html", null, true);
            echo "</td>
        <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["subtasca"], "idTasca", array()), "html", null, true);
            echo "</td>
        <td><button class=\"btn btn-primary\">Eliminar</button></td>
        <td><button class=\"btn btn-danger\">Editar</button></td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subtasca'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "</table>";
        
        $__internal_101ad03eea1be528a5a1df0bda0b617f995d473183936459266e524a2d60f581->leave($__internal_101ad03eea1be528a5a1df0bda0b617f995d473183936459266e524a2d60f581_prof);

        
        $__internal_3c2dd6521c45a75a20b180bd2352c4b18677dd9cfd2cc0acd04f6fa91613809a->leave($__internal_3c2dd6521c45a75a20b180bd2352c4b18677dd9cfd2cc0acd04f6fa91613809a_prof);

    }

    public function getTemplateName()
    {
        return "VallbonaWebBundle:lista:listaSubtasques.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 25,  66 => 20,  62 => 19,  58 => 18,  54 => 17,  50 => 16,  46 => 15,  43 => 14,  39 => 13,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>Listado de Subtasques</h1>
<table border=\"1\">
    <tr>
        <th>Id</th>
        <th>Nom</th>
        <th>Descripcio</th>
        <th>Data d'inici</th>
        <th>Data de finalització</th>
        <th>Tasca-Referencia</th>
        <th>Editar</th>
        <th>Eliminar</th>
    </tr>
    {% for subtasca in subtasques %}
    <tr>
        <td>{{ subtasca.id }}</td>
        <td>{{ subtasca.nom }}</td>
        <td>{{ subtasca.descripcio }}</td>
        <td>{{ subtasca.dataInici | date('d-m-Y')}}</td>
        <td>{{ subtasca.dataFinal | date('d-m-Y') }}</td>
        <td>{{ subtasca.idTasca }}</td>
        <td><button class=\"btn btn-primary\">Eliminar</button></td>
        <td><button class=\"btn btn-danger\">Editar</button></td>
    </tr>
    {% endfor %}
</table>", "VallbonaWebBundle:lista:listaSubtasques.html.twig", "/opt/lampp/htdocs/symfony_m14/src/Vallbona/WebBundle/Resources/views/lista/listaSubtasques.html.twig");
    }
}
