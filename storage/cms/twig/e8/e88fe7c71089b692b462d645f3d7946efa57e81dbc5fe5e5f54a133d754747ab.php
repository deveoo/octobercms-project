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
<!--<form data-request=\"onSave\">-->
<form method=\"POST\" action=\"";
        // line 3
        echo url("detail-emploi");
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "slug", array()), "html", null, true);
        echo "\" accept-charset=\"UTF8\" enctype=\"multipart/form-data\">

  <input name=\"_handler\" type=\"hidden\" value=\"onSave\"  />
  ";
        // line 6
        echo call_user_func_array($this->env->getFunction('form_token')->getCallable(), array("token"));
        echo "
  ";
        // line 7
        echo call_user_func_array($this->env->getFunction('form_sessionkey')->getCallable(), array("sessionkey"));
        echo "

  ";
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        // line 9
        $context["type"] = "success"        ;        foreach (Flash::success        () as $message) {
            $context["message"] = $message;            // line 10
            echo "    <div class=\"alert alert-info\"> ";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Nous avons bien reçu votre demande. Nous vous contacterons dans les plus brefs délais"));
            echo "</div>
  ";
        }
        $context["type"] = $_type;        $context["message"] = $_message;        // line 12
        echo "
  ";
        // line 13
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "all", array(), "method")) {
            // line 14
            echo "  <ul class=\"alert alert-danger\">
      ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "all", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 16
                echo "          <li style=\"float:none;display:block\">";
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "  </ul>

  ";
        }
        // line 21
        echo "  <ul>
        <input name=\"offre_id\" id=\"\" type=\"hidden\" value=\"";
        // line 22
        echo twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "titre", array());
        echo "\"  />
      <li>
        <input name=\"nom\" id=\"\" type=\"text\" value=\"\" placeholder=\"";
        // line 24
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Nom & prénom"));
        echo "\" />
        ";
        // line 25
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "nom"), "method")) {
            echo "  <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "nom"), "method"), "html", null, true);
            echo "</div> ";
        }
        // line 26
        echo "      </li>
      <li>
        <input name=\"phone\" id=\"\" type=\"text\" value=\"\" placeholder=\"";
        // line 28
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Téléphone"));
        echo "\" />
        ";
        // line 29
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "phone"), "method")) {
            echo "   <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "phone"), "method"), "html", null, true);
            echo "</div> ";
        }
        // line 30
        echo "      </li>
      <li>
        <input name=\"email\" id=\"\" type=\"email\" value=\"\" placeholder=\"";
        // line 32
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("E-mail"));
        echo "\" />
        ";
        // line 33
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "email"), "method")) {
            echo " <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "email"), "method"), "html", null, true);
            echo "</div>";
        }
        // line 34
        echo "      </li>
      <li>
        <select name=\"pays\">
          <option value=\"\">";
        // line 37
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Pays"));
        echo "</option>
          <option value=\"Algerie\">";
        // line 38
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Algérie"));
        echo "</option>
          <option value=\"Algerie\">";
        // line 39
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Lybie"));
        echo "</option>
          <option value=\"Maroc\">";
        // line 40
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Maroc"));
        echo "</option>
          <option value=\"Tunisie\">";
        // line 41
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Tunisie"));
        echo "</option>
        </select>
      </li>
      <li>
      CV
        <input name=\"cv\" id=\"\" type=\"file\" />
        ";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "cv"), "method"), "html", null, true);
        echo "
      </li>
      <li>
        <textarea name=\"description\" placeholder=\"Description\"></textarea>
        ";
        // line 51
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "description"), "method")) {
            echo " <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "description"), "method"), "html", null, true);
            echo "</div>";
        }
        // line 52
        echo "      </li>
      <li><input type=\"submit\" id=\"\" class=\"gform_button button\" value=\" ";
        // line 53
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
        return array (  170 => 53,  167 => 52,  161 => 51,  154 => 47,  145 => 41,  141 => 40,  137 => 39,  133 => 38,  129 => 37,  124 => 34,  118 => 33,  114 => 32,  110 => 30,  104 => 29,  100 => 28,  96 => 26,  90 => 25,  86 => 24,  81 => 22,  78 => 21,  73 => 18,  64 => 16,  60 => 15,  57 => 14,  55 => 13,  52 => 12,  46 => 10,  44 => 9,  39 => 7,  35 => 6,  27 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<!--<form data-request=\"onSave\">-->
<form method=\"POST\" action=\"{{ url('detail-emploi') }}/{{record.slug}}\" accept-charset=\"UTF8\" enctype=\"multipart/form-data\">

  <input name=\"_handler\" type=\"hidden\" value=\"onSave\"  />
  {{ form_token() }}
  {{ form_sessionkey() }}

  {% flash success %}
    <div class=\"alert alert-info\"> {{'Nous avons bien reçu votre demande. Nous vous contacterons dans les plus brefs délais'|_}}</div>
  {% endflash %}

  {% if errors.all()  %}
  <ul class=\"alert alert-danger\">
      {% for error in errors.all() %}
          <li style=\"float:none;display:block\">{{ error }}</li>
      {% endfor %}
  </ul>

  {% endif %}
  <ul>
        <input name=\"offre_id\" id=\"\" type=\"hidden\" value=\"{{ record.titre|raw }}\"  />
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
          <option value=\"\">{{ 'Pays'|_ }}</option>
          <option value=\"Algerie\">{{ 'Algérie'|_ }}</option>
          <option value=\"Algerie\">{{ 'Lybie'|_ }}</option>
          <option value=\"Maroc\">{{ 'Maroc'|_ }}</option>
          <option value=\"Tunisie\">{{ 'Tunisie'|_ }}</option>
        </select>
      </li>
      <li>
      CV
        <input name=\"cv\" id=\"\" type=\"file\" />
        {{ errors.first('cv') }}
      </li>
      <li>
        <textarea name=\"description\" placeholder=\"Description\"></textarea>
        {% if errors.first('description')  %} <div class=\"alert alert-danger\">{{ errors.first('description') }}</div>{% endif %}
      </li>
      <li><input type=\"submit\" id=\"\" class=\"gform_button button\" value=\" {{ 'Envoyer'|_ }}\" tabindex=\"9\" /></li>

  </ul>
</form>
", "C:\\xampp\\htdocs\\nasp/plugins/dg/postuler/components/postulerform/default.htm", "");
    }
}
