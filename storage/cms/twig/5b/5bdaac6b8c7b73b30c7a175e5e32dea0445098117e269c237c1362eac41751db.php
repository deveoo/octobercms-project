<?php

/* C:\xampp\htdocs\nasp/themes/nasp/pages/emploi.htm */
class __TwigTemplate_c2b1cdf48b463d428fd77a55a675b07a0ca6bb94730285d17a655c6cac231e21 extends Twig_Template
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
        // line 2
        echo "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<p>&nbsp;</p>

<table class=\"table table-striped\">
\t<thead>
\t\t<tr>
\t\t\t<th scope=\"col\">";
        // line 8
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Poste"));
        echo "</th>
\t\t\t<th scope=\"col\">Description</th>
\t\t\t<th scope=\"col\">";
        // line 10
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Pays"));
        echo "</th>
\t\t\t<th scope=\"col\">";
        // line 11
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Publication"));
        echo "</th>
\t\t\t<th scope=\"col\">D&eacute;tails</th>
\t\t</tr>
\t</thead>
\t<tbody>
\t\t";
        // line 16
        $context["paysTitle"] = ($context["Null"] ?? null);
        // line 17
        echo "\t\t";
        $context["paysImage"] = ($context["Null"] ?? null);
        // line 18
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["offres"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["offre"]) {
            // line 19
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                // line 20
                echo "\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["country"], "id", array()) == twig_get_attribute($this->env, $this->source, $context["offre"], "pays_id", array()))) {
                    // line 21
                    echo "
\t\t\t\t\t";
                    // line 22
                    $context["paysTitle"] = twig_get_attribute($this->env, $this->source, $context["country"], "titre", array());
                    // line 23
                    echo "\t\t\t\t\t";
                    $context["paysImage"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["country"], "image", array()), "path", array());
                    // line 24
                    echo "
\t\t\t\t";
                }
                // line 26
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "
\t\t\t<tr>
\t\t\t\t<td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "titre", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "extrait", array()), "html", null, true);
            echo "</td>

\t\t\t\t<td>
\t\t\t\t\t<img src=\"";
            // line 33
            echo twig_escape_filter($this->env, ($context["paysImage"] ?? null), "html", null, true);
            echo "\" width=\"20\"> ";
            echo twig_escape_filter($this->env, ($context["paysTitle"] ?? null), "html", null, true);
            echo "
\t\t\t\t</td>

\t\t\t\t<td>";
            // line 36
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "created_at", array()), "d-m-Y"), "html", null, true);
            echo "</td>
\t\t\t\t<td><a class=\"btn btn-primary\" href=\"";
            // line 37
            echo twig_escape_filter($this->env, ($context["lien"] ?? null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "slug", array()), "html", null, true);
            echo "\">D&eacute;tails</a></td>
\t\t\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "\t</tbody>
</table>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\nasp/themes/nasp/pages/emploi.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 40,  110 => 37,  106 => 36,  98 => 33,  92 => 30,  88 => 29,  84 => 27,  78 => 26,  74 => 24,  71 => 23,  69 => 22,  66 => 21,  63 => 20,  58 => 19,  53 => 18,  50 => 17,  48 => 16,  40 => 11,  36 => 10,  31 => 8,  23 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{##}
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<p>&nbsp;</p>

<table class=\"table table-striped\">
\t<thead>
\t\t<tr>
\t\t\t<th scope=\"col\">{{ 'Poste'|_ }}</th>
\t\t\t<th scope=\"col\">Description</th>
\t\t\t<th scope=\"col\">{{ 'Pays'|_ }}</th>
\t\t\t<th scope=\"col\">{{ 'Publication'|_ }}</th>
\t\t\t<th scope=\"col\">D&eacute;tails</th>
\t\t</tr>
\t</thead>
\t<tbody>
\t\t{% set paysTitle = Null %}
\t\t{% set paysImage = Null %}
\t\t{% for offre in offres %}
\t\t\t{% for country in countries %}
\t\t\t\t{% if country.id == offre.pays_id  %}

\t\t\t\t\t{% set paysTitle = country.titre %}
\t\t\t\t\t{% set paysImage = country.image.path %}

\t\t\t\t{% endif %}
\t\t\t{% endfor  %}

\t\t\t<tr>
\t\t\t\t<td>{{ offre.titre }}</td>
\t\t\t\t<td>{{ offre.extrait }}</td>

\t\t\t\t<td>
\t\t\t\t\t<img src=\"{{paysImage}}\" width=\"20\"> {{paysTitle}}
\t\t\t\t</td>

\t\t\t\t<td>{{ offre.created_at|date(\"d-m-Y\") }}</td>
\t\t\t\t<td><a class=\"btn btn-primary\" href=\"{{lien}}/{{ offre.slug }}\">D&eacute;tails</a></td>
\t\t\t</tr>
\t\t{% endfor %}
\t</tbody>
</table>", "C:\\xampp\\htdocs\\nasp/themes/nasp/pages/emploi.htm", "");
    }
}
