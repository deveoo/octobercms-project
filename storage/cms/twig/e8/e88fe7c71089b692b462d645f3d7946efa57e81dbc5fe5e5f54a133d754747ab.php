<?php

/* C:\xampp\htdocs\nasp/plugins/dg/postuler/components/postulerform/default.htm */
class __TwigTemplate_0e8202d8bd8ddcdd4c0468342e1ff3e7f3ee581724437fc5623cd86f94f41260 extends Twig_Template
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
        echo "
<form data-request=\"onSend\">
  ";
        // line 3
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "all", array(), "method")) {
            // line 4
            echo "  <ul class=\"alert alert-danger\">
      ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "all", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 6
                echo "          <li style=\"float:none;display:block\">";
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "  </ul>

  ";
        }
        // line 11
        echo "  <ul>
        <input name=\"offre\" id=\"\" type=\"hidden\" value=\"\"  />
      <li>
        <input name=\"nom\" id=\"\" type=\"text\" value=\"\" placeholder=\"";
        // line 14
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Nom & prénom"));
        echo "\" />
        ";
        // line 15
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "nom"), "method")) {
            echo "  <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "nom"), "method"), "html", null, true);
            echo "</div> ";
        }
        // line 16
        echo "      </li>
      <li>
        <input name=\"phone\" id=\"\" type=\"text\" value=\"\" placeholder=\"";
        // line 18
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Téléphone"));
        echo "\" />
        ";
        // line 19
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "phone"), "method")) {
            echo "   <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "phone"), "method"), "html", null, true);
            echo "</div> ";
        }
        // line 20
        echo "      </li>
      <li>
        <input name=\"email\" id=\"\" type=\"email\" value=\"\" placeholder=\"";
        // line 22
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("E-mail"));
        echo "\" />
        ";
        // line 23
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "email"), "method")) {
            echo " <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "email"), "method"), "html", null, true);
            echo "</div>";
        }
        // line 24
        echo "      </li>
      <li>
        <select name=\"pays\">
          <option value=\"\">Pays</option>
          <option value=\"algerie\">Algérie</option>
          <option value=\"maroc\">Maroc</option>
          <option value=\"tunisie\">Tunisie</option>
        </select>
        ";
        // line 32
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "email"), "method")) {
            echo " <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "email"), "method"), "html", null, true);
            echo "</div>";
        }
        // line 33
        echo "      </li>
      <li>
      CV
        <input name=\"cv\" id=\"\" type=\"file\" />
        ";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "cv"), "method"), "html", null, true);
        echo "
      </li>
      <li><input type=\"submit\" id=\"\" class=\"gform_button button\" value=\" ";
        // line 39
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Envoyer"));
        echo "\" tabindex=\"9\" /></li>

  </ul>
</form>
";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\nasp/plugins/dg/postuler/components/postulerform/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 39,  115 => 37,  109 => 33,  103 => 32,  93 => 24,  87 => 23,  83 => 22,  79 => 20,  73 => 19,  69 => 18,  65 => 16,  59 => 15,  55 => 14,  50 => 11,  45 => 8,  36 => 6,  32 => 5,  29 => 4,  27 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<form data-request=\"onSend\">
  {% if errors.all()  %}
  <ul class=\"alert alert-danger\">
      {% for error in errors.all() %}
          <li style=\"float:none;display:block\">{{ error }}</li>
      {% endfor %}
  </ul>

  {% endif %}
  <ul>
        <input name=\"offre\" id=\"\" type=\"hidden\" value=\"\"  />
      <li>
        <input name=\"nom\" id=\"\" type=\"text\" value=\"\" placeholder=\"{{ 'Nom & prénom'|_ }}\" />
        {% if errors.first('nom')  %}  <div class=\"alert alert-danger\">{{ errors.first('nom') }}</div> {% endif %}
      </li>
      <li>
        <input name=\"phone\" id=\"\" type=\"text\" value=\"\" placeholder=\"{{ 'Téléphone'|_ }}\" />
        {% if errors.first('phone')  %}   <div class=\"alert alert-danger\">{{ errors.first('phone') }}</div> {% endif %}
      </li>
      <li>
        <input name=\"email\" id=\"\" type=\"email\" value=\"\" placeholder=\"{{ 'E-mail'|_ }}\" />
        {% if errors.first('email')  %} <div class=\"alert alert-danger\">{{ errors.first('email') }}</div>{% endif %}
      </li>
      <li>
        <select name=\"pays\">
          <option value=\"\">Pays</option>
          <option value=\"algerie\">Algérie</option>
          <option value=\"maroc\">Maroc</option>
          <option value=\"tunisie\">Tunisie</option>
        </select>
        {% if errors.first('email')  %} <div class=\"alert alert-danger\">{{ errors.first('email') }}</div>{% endif %}
      </li>
      <li>
      CV
        <input name=\"cv\" id=\"\" type=\"file\" />
        {{ errors.first('cv') }}
      </li>
      <li><input type=\"submit\" id=\"\" class=\"gform_button button\" value=\" {{ 'Envoyer'|_ }}\" tabindex=\"9\" /></li>

  </ul>
</form>
", "C:\\xampp\\htdocs\\nasp/plugins/dg/postuler/components/postulerform/default.htm", "");
    }
}
