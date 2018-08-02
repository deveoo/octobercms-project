<?php

/* C:\xampp\htdocs\nasp/themes/nasp/pages/documents-utiles.htm */
class __TwigTemplate_e4ffd13aba38854e81e7c12b37319e3adc54178d921a56e3e8d5a940e629c4e4 extends Twig_Template
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
        echo "<table class=\"table table-striped\">
\t<thead>
\t\t<tr>
\t\t\t<th scope=\"col\">";
        // line 4
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Titre"));
        echo "</th>
\t\t\t<th scope=\"col\">Description</th>
\t\t\t<th scope=\"col\">";
        // line 6
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Pays"));
        echo "</th>
\t\t\t<th scope=\"col\">";
        // line 7
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Télécharger"));
        echo "</th>
\t\t</tr>
\t</thead>
\t<tbody>
\t\t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["offres"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["offre"]) {
            // line 12
            echo "\t\t\t<tr>
\t\t\t\t<td>";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "titre", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td>
            ";
            // line 15
            if ((twig_get_attribute($this->env, $this->source, $context["offre"], "description", array()) != "")) {
                // line 16
                echo "              ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "description", array()), "html", null, true);
                echo "
            ";
            } else {
                // line 18
                echo "            -
            ";
            }
            // line 20
            echo "        </td>
\t\t\t\t<td><img src=\"";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["offre"], "pays", array()), "image", array()), "path", array()), "html", null, true);
            echo "\" width=\"20\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["offre"], "pays", array()), "titre", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["offre"], "document", array()), "path", array()), "html", null, true);
            echo "\" target=\"_blank\" style=\"color: #fff; background:#0e73c0; padding: 5px 10px;\"><i class=\" fa fa-download\"></i> ";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Télécharger"));
            echo " </a> </td>
\t\t\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "\t</tbody>
</table>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\nasp/themes/nasp/pages/documents-utiles.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 25,  77 => 22,  71 => 21,  68 => 20,  64 => 18,  58 => 16,  56 => 15,  51 => 13,  48 => 12,  44 => 11,  37 => 7,  33 => 6,  28 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table class=\"table table-striped\">
\t<thead>
\t\t<tr>
\t\t\t<th scope=\"col\">{{ 'Titre'|_ }}</th>
\t\t\t<th scope=\"col\">Description</th>
\t\t\t<th scope=\"col\">{{ 'Pays'|_ }}</th>
\t\t\t<th scope=\"col\">{{ 'Télécharger'|_ }}</th>
\t\t</tr>
\t</thead>
\t<tbody>
\t\t{% for offre in offres %}
\t\t\t<tr>
\t\t\t\t<td>{{ offre.titre }}</td>
\t\t\t\t<td>
            {% if offre.description != '' %}
              {{ offre.description }}
            {% else %}
            -
            {% endif %}
        </td>
\t\t\t\t<td><img src=\"{{ offre.pays.image.path }}\" width=\"20\"> {{ offre.pays.titre }}</td>
\t\t\t\t<td><a href=\"{{ offre.document.path }}\" target=\"_blank\" style=\"color: #fff; background:#0e73c0; padding: 5px 10px;\"><i class=\" fa fa-download\"></i> {{ 'Télécharger'|_ }} </a> </td>
\t\t\t</tr>
\t\t{% endfor %}
\t</tbody>
</table>", "C:\\xampp\\htdocs\\nasp/themes/nasp/pages/documents-utiles.htm", "");
    }
}
