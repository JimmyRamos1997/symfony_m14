<?php

/* VallbonaWebBundle:lista:listaTasques.html.twig */
class __TwigTemplate_b5777f3a39352d0bd88864189794f3133a9ea06803d57f22057323db2ca163d7 extends Twig_Template
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
        $__internal_da6d03a22604ee6c60dcf07288f62684dfcc16c9262aced7bf205e1b056a83f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da6d03a22604ee6c60dcf07288f62684dfcc16c9262aced7bf205e1b056a83f5->enter($__internal_da6d03a22604ee6c60dcf07288f62684dfcc16c9262aced7bf205e1b056a83f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VallbonaWebBundle:lista:listaTasques.html.twig"));

        $__internal_a751eaeaf07358242755b4d8307bcd335a85600aee021832865e1b9de27459ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a751eaeaf07358242755b4d8307bcd335a85600aee021832865e1b9de27459ff->enter($__internal_a751eaeaf07358242755b4d8307bcd335a85600aee021832865e1b9de27459ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VallbonaWebBundle:lista:listaTasques.html.twig"));

        // line 1
        echo "<h1>Listado de Tasques</h1>
<table border=\"1\">
    <tr>
        <th>Id</th>
        <th>Nom</th>
        <th>Descripcio</th>
        <th>Data d'inici</th>
        <th>Data de finalització</th>       
        <th>Editar</th>
        <th>Eliminar</th>
    </tr>
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tasques"] ?? $this->getContext($context, "tasques")));
        foreach ($context['_seq'] as $context["_key"] => $context["tasca"]) {
            // line 13
            echo "    <tr>
        <td>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["tasca"], "id", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["tasca"], "nom", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["tasca"], "descripcio", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 17
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["tasca"], "dataInici", array()), "d-m-Y"), "html", null, true);
            echo "</td>
        <td>";
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["tasca"], "dataFinal", array()), "d-m-Y"), "html", null, true);
            echo "</td>      
        <td><button class=\"btn btn-primary\">Eliminar</button></td>
        <td><button class=\"btn btn-danger\">Editar</button></td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tasca'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "</table>";
        
        $__internal_da6d03a22604ee6c60dcf07288f62684dfcc16c9262aced7bf205e1b056a83f5->leave($__internal_da6d03a22604ee6c60dcf07288f62684dfcc16c9262aced7bf205e1b056a83f5_prof);

        
        $__internal_a751eaeaf07358242755b4d8307bcd335a85600aee021832865e1b9de27459ff->leave($__internal_a751eaeaf07358242755b4d8307bcd335a85600aee021832865e1b9de27459ff_prof);

    }

    public function getTemplateName()
    {
        return "VallbonaWebBundle:lista:listaTasques.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 23,  61 => 18,  57 => 17,  53 => 16,  49 => 15,  45 => 14,  42 => 13,  38 => 12,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>Listado de Tasques</h1>
<table border=\"1\">
    <tr>
        <th>Id</th>
        <th>Nom</th>
        <th>Descripcio</th>
        <th>Data d'inici</th>
        <th>Data de finalització</th>       
        <th>Editar</th>
        <th>Eliminar</th>
    </tr>
    {% for tasca in tasques %}
    <tr>
        <td>{{ tasca.id }}</td>
        <td>{{ tasca.nom }}</td>
        <td>{{ tasca.descripcio }}</td>
        <td>{{ tasca.dataInici | date('d-m-Y')}}</td>
        <td>{{ tasca.dataFinal | date('d-m-Y') }}</td>      
        <td><button class=\"btn btn-primary\">Eliminar</button></td>
        <td><button class=\"btn btn-danger\">Editar</button></td>
    </tr>
    {% endfor %}
</table>", "VallbonaWebBundle:lista:listaTasques.html.twig", "/opt/lampp/htdocs/symfony_m14/src/Vallbona/WebBundle/Resources/views/lista/listaTasques.html.twig");
    }
}
