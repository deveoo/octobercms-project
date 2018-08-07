<?php

/* C:\xampp\htdocs\nasp/themes/nasp/pages/opportunites-affaire.htm */
class __TwigTemplate_57a1477d612d4a4931c5f502a9c134b411cc1484c48affe9b5ba11fabe1de80c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<p> </p>

<table class=\"table table-striped\">
\t<thead>
\t\t<tr>
\t\t\t<th scope=\"col\">";
        // line 7
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Titre"));
        echo "</th>
\t\t\t<th scope=\"col\">Description</th>
\t\t\t<th scope=\"col\">";
        // line 9
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Pays"));
        echo "</th>
\t\t\t<th scope=\"col\">";
        // line 10
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Publication"));
        echo "</th>
\t\t\t<!--<th scope=\"col\">Détails</th>-->
\t\t</tr>
\t</thead>
\t<tbody>
\t\t";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["offres"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["offre"]) {
            // line 16
            echo "\t\t\t<tr>
\t\t\t\t<td>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "titre", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "extrait", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "pays", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "created_at", array()), "d-m-Y"), "html", null, true);
            echo "</td>
\t\t\t\t<!--<td><a class=\"btn btn-primary\" href=\"/nasp/superuser/";
            // line 21
            echo twig_escape_filter($this->env, ($context["lien"] ?? null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "slug", array()), "html", null, true);
            echo "\">Détails</a></td>-->
\t\t\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "\t</tbody>
</table>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\nasp/themes/nasp/pages/opportunites-affaire.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 24,  71 => 21,  67 => 20,  63 => 19,  59 => 18,  55 => 17,  52 => 16,  48 => 15,  40 => 10,  36 => 9,  31 => 7,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<p> </p>

<table class=\"table table-striped\">
\t<thead>
\t\t<tr>
\t\t\t<th scope=\"col\">{{ 'Titre'|_ }}</th>
\t\t\t<th scope=\"col\">Description</th>
\t\t\t<th scope=\"col\">{{ 'Pays'|_ }}</th>
\t\t\t<th scope=\"col\">{{ 'Publication'|_ }}</th>
\t\t\t<!--<th scope=\"col\">Détails</th>-->
\t\t</tr>
\t</thead>
\t<tbody>
\t\t{% for offre in offres %}
\t\t\t<tr>
\t\t\t\t<td>{{ offre.titre }}</td>
\t\t\t\t<td>{{ offre.extrait }}</td>
\t\t\t\t<td>{{ offre.pays }}</td>
\t\t\t\t<td>{{ offre.created_at|date(\"d-m-Y\") }}</td>
\t\t\t\t<!--<td><a class=\"btn btn-primary\" href=\"/nasp/superuser/{{lien}}/{{ offre.slug }}\">Détails</a></td>-->
\t\t\t</tr>
\t\t{% endfor %}
\t</tbody>
</table>", "C:\\xampp\\htdocs\\nasp/themes/nasp/pages/opportunites-affaire.htm", "");
    }
}
