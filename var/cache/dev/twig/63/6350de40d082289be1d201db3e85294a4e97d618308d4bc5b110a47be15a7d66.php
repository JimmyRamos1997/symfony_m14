<?php

/* VallbonaWebBundle:lista:listaSubtasques.html.twig */
class __TwigTemplate_f345fe3fab70367c1ce4f033043ed4acdd694926dfeede35bb4ab1488ab75d44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("menu.html.twig", "VallbonaWebBundle:lista:listaSubtasques.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f422fbabc0ec8595cd470ac81c250c2f85d8e06e41c2f5bb7bdfef189279958d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f422fbabc0ec8595cd470ac81c250c2f85d8e06e41c2f5bb7bdfef189279958d->enter($__internal_f422fbabc0ec8595cd470ac81c250c2f85d8e06e41c2f5bb7bdfef189279958d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VallbonaWebBundle:lista:listaSubtasques.html.twig"));

        $__internal_9269705e6e96191598573ce5109e6cfb7f3145131c508195859af362aa80f752 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9269705e6e96191598573ce5109e6cfb7f3145131c508195859af362aa80f752->enter($__internal_9269705e6e96191598573ce5109e6cfb7f3145131c508195859af362aa80f752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VallbonaWebBundle:lista:listaSubtasques.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f422fbabc0ec8595cd470ac81c250c2f85d8e06e41c2f5bb7bdfef189279958d->leave($__internal_f422fbabc0ec8595cd470ac81c250c2f85d8e06e41c2f5bb7bdfef189279958d_prof);

        
        $__internal_9269705e6e96191598573ce5109e6cfb7f3145131c508195859af362aa80f752->leave($__internal_9269705e6e96191598573ce5109e6cfb7f3145131c508195859af362aa80f752_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_e3129b5e2daf672a917fb6945a8d7cf5f28b82cd75315e371bd761b377ee44dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3129b5e2daf672a917fb6945a8d7cf5f28b82cd75315e371bd761b377ee44dc->enter($__internal_e3129b5e2daf672a917fb6945a8d7cf5f28b82cd75315e371bd761b377ee44dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_2ad6e33e2fc770e913e82d7bb9a8173db64e216dd7f07997d33c0cc607c2d572 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ad6e33e2fc770e913e82d7bb9a8173db64e216dd7f07997d33c0cc607c2d572->enter($__internal_2ad6e33e2fc770e913e82d7bb9a8173db64e216dd7f07997d33c0cc607c2d572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        $this->displayParentBlock("content", $context, $blocks);
        echo "
        <div class=\"container menuinici letra-default llistar\">
            <h4 class=\"letra-default titlemenu\">Llistat de Subtasques</h4>
            <div class=\"centrartaula\">
<table>
    <tr>
        <th>Id</th>
        <th>Nom</th>
        <th>Descripcio</th>
        <th>Data d'inici</th>
        <th>Data de finalització</th>
        <th>Tasca-Referencia</th>
        <th>Eliminar</th>
        <th>Editar</th>
        
    </tr>
    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["subtasques"] ?? $this->getContext($context, "subtasques")));
        foreach ($context['_seq'] as $context["_key"] => $context["subtasca"]) {
            // line 22
            echo "    <tr>
        <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["subtasca"], "id", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["subtasca"], "nom", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["subtasca"], "descripcio", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["subtasca"], "dataInici", array()), "d-m-Y"), "html", null, true);
            echo "</td>
        <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["subtasca"], "dataFinal", array()), "d-m-Y"), "html", null, true);
            echo "</td>
        <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["subtasca"], "idTasca", array()), "html", null, true);
            echo "</td>        
        <td><i class=\"fas fa-edit\"></td>
        <td>
            <a href=\"delete-subtasca/";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["subtasca"], "id", array()), "html", null, true);
            echo "\"><i class=\"fas fa-trash-alt\"></i></a>
        </td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subtasca'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "</table>
</div>
</div>
";
        
        $__internal_2ad6e33e2fc770e913e82d7bb9a8173db64e216dd7f07997d33c0cc607c2d572->leave($__internal_2ad6e33e2fc770e913e82d7bb9a8173db64e216dd7f07997d33c0cc607c2d572_prof);

        
        $__internal_e3129b5e2daf672a917fb6945a8d7cf5f28b82cd75315e371bd761b377ee44dc->leave($__internal_e3129b5e2daf672a917fb6945a8d7cf5f28b82cd75315e371bd761b377ee44dc_prof);

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
        return array (  111 => 35,  101 => 31,  95 => 28,  91 => 27,  87 => 26,  83 => 25,  79 => 24,  75 => 23,  72 => 22,  68 => 21,  49 => 5,  40 => 4,  11 => 1,);
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


{% block content %}
{{ parent() }}
        <div class=\"container menuinici letra-default llistar\">
            <h4 class=\"letra-default titlemenu\">Llistat de Subtasques</h4>
            <div class=\"centrartaula\">
<table>
    <tr>
        <th>Id</th>
        <th>Nom</th>
        <th>Descripcio</th>
        <th>Data d'inici</th>
        <th>Data de finalització</th>
        <th>Tasca-Referencia</th>
        <th>Eliminar</th>
        <th>Editar</th>
        
    </tr>
    {% for subtasca in subtasques %}
    <tr>
        <td>{{ subtasca.id }}</td>
        <td>{{ subtasca.nom }}</td>
        <td>{{ subtasca.descripcio }}</td>
        <td>{{ subtasca.dataInici | date('d-m-Y')}}</td>
        <td>{{ subtasca.dataFinal | date('d-m-Y') }}</td>
        <td>{{ subtasca.idTasca }}</td>        
        <td><i class=\"fas fa-edit\"></td>
        <td>
            <a href=\"delete-subtasca/{{subtasca.id}}\"><i class=\"fas fa-trash-alt\"></i></a>
        </td>
    </tr>
    {% endfor %}
</table>
</div>
</div>
{% endblock %}", "VallbonaWebBundle:lista:listaSubtasques.html.twig", "/opt/lampp/htdocs/symfony_m14/src/Vallbona/WebBundle/Resources/views/lista/listaSubtasques.html.twig");
    }
}
