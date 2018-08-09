<?php

/* C:\xampp\htdocs\nasp/themes/nasp/pages/ma-societe.htm */
class __TwigTemplate_ccaa5d327a0af73e77521505a7219abd46c501ac0a26bf1d1922b173b1cfd167 extends Twig_Template
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
        echo "<div class=\"col-md-6 col-lg-6 col col-xs-12\">
  <h2>";
        // line 2
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Information de la société"));
        echo "</h2>

  <div class=\"websiteForm\">
    <!--<form data-request=\"onSave\">-->
    <form method=\"POST\" action=\"\" accept-charset=\"UTF8\" enctype=\"multipart/form-data\">

      <input name=\"_handler\" type=\"hidden\" value=\"onSave\"  />
      ";
        // line 9
        echo call_user_func_array($this->env->getFunction('form_token')->getCallable(), array("token"));
        echo "
      ";
        // line 10
        echo call_user_func_array($this->env->getFunction('form_sessionkey')->getCallable(), array("sessionkey"));
        echo "

      ";
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        // line 12
        $context["type"] = "success"        ;        foreach (Flash::success        () as $message) {
            $context["message"] = $message;            // line 13
            echo "        <div class=\"alert alert-info\"> ";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Nous avons bien reçu votre demande. Nous vous contacterons dans les plus brefs délais"));
            echo "</div>
      ";
        }
        $context["type"] = $_type;        $context["message"] = $_message;        // line 15
        echo "
      ";
        // line 16
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "all", array(), "method")) {
            // line 17
            echo "      <ul class=\"alert alert-danger\">
          ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "all", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 19
                echo "              <li style=\"float:none;display:block\">";
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "      </ul>

      ";
        }
        // line 24
        echo "      <ul>

          <li>
              <label for=\"societe\">";
        // line 27
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Société"));
        echo "</label>
              <input name=\"titre\" id=\"societe\" type=\"text\" value=\"\" placeholder=\"";
        // line 28
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Société"));
        echo "\" />
            ";
        // line 29
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "titre"), "method")) {
            echo "  <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "titre"), "method"), "html", null, true);
            echo "</div> ";
        }
        // line 30
        echo "          </li>
          <li>
            <label for=\"email\">";
        // line 32
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Email"));
        echo "</label>
            <input name=\"email\" id=\"\" type=\"email\" value=\"\" placeholder=\"";
        // line 33
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("E-mail"));
        echo "\" />
            ";
        // line 34
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "email"), "method")) {
            echo " <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "email"), "method"), "html", null, true);
            echo "</div>";
        }
        // line 35
        echo "          </li>
          <li>
            <label for=\"phone\">";
        // line 37
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Téléphone"));
        echo "</label>
            <input name=\"phone\" id=\"\" type=\"text\" value=\"\" placeholder=\"";
        // line 38
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Téléphone"));
        echo "\" />
            ";
        // line 39
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "email"), "method")) {
            echo " <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "email"), "method"), "html", null, true);
            echo "</div>";
        }
        // line 40
        echo "          </li>
          <li>
            <label for=\"extrait\">";
        // line 42
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Description"));
        echo "</label>
            <textarea name=\"extrait\" id=\"extrait\" type=\"text\" value=\"\" placeholder=\"";
        // line 43
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Extrait"));
        echo "\" ></textarea>
            ";
        // line 44
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "extrait"), "method")) {
            echo "   <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "extrait"), "method"), "html", null, true);
            echo "</div> ";
        }
        // line 45
        echo "          </li>

          <li>
            <select name=\"pays\">
              <option value=\"\">";
        // line 49
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Pays"));
        echo "</option>
              <option value=\"Algerie\">";
        // line 50
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Algérie"));
        echo "</option>
              <option value=\"Algerie\">";
        // line 51
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Lybie"));
        echo "</option>
              <option value=\"Maroc\">";
        // line 52
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Maroc"));
        echo "</option>
              <option value=\"Tunisie\">";
        // line 53
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Tunisie"));
        echo "</option>
            </select>
          </li>
          <li>
          CV
            <input name=\"cv\" id=\"\" type=\"file\" />
            ";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "cv"), "method"), "html", null, true);
        echo "
          </li>
          <li>
            <textarea name=\"description\" placeholder=\"Description\"></textarea>
            ";
        // line 63
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "description"), "method")) {
            echo " <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "description"), "method"), "html", null, true);
            echo "</div>";
        }
        // line 64
        echo "          </li>
          <li><input type=\"submit\" id=\"\" class=\"gform_button button\" value=\" ";
        // line 65
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Envoyer"));
        echo "\" tabindex=\"9\" /></li>

      </ul>
    </form>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\nasp/themes/nasp/pages/ma-societe.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 65,  196 => 64,  190 => 63,  183 => 59,  174 => 53,  170 => 52,  166 => 51,  162 => 50,  158 => 49,  152 => 45,  146 => 44,  142 => 43,  138 => 42,  134 => 40,  128 => 39,  124 => 38,  120 => 37,  116 => 35,  110 => 34,  106 => 33,  102 => 32,  98 => 30,  92 => 29,  88 => 28,  84 => 27,  79 => 24,  74 => 21,  65 => 19,  61 => 18,  58 => 17,  56 => 16,  53 => 15,  47 => 13,  45 => 12,  40 => 10,  36 => 9,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"col-md-6 col-lg-6 col col-xs-12\">
  <h2>{{ 'Information de la société'|_ }}</h2>

  <div class=\"websiteForm\">
    <!--<form data-request=\"onSave\">-->
    <form method=\"POST\" action=\"\" accept-charset=\"UTF8\" enctype=\"multipart/form-data\">

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

          <li>
              <label for=\"societe\">{{ 'Société'|_ }}</label>
              <input name=\"titre\" id=\"societe\" type=\"text\" value=\"\" placeholder=\"{{ 'Société'|_ }}\" />
            {% if errors.first('titre')  %}  <div class=\"alert alert-danger\">{{ errors.first('titre') }}</div> {% endif %}
          </li>
          <li>
            <label for=\"email\">{{ 'Email'|_ }}</label>
            <input name=\"email\" id=\"\" type=\"email\" value=\"\" placeholder=\"{{ 'E-mail'|_ }}\" />
            {% if errors.first('email')  %} <div class=\"alert alert-danger\">{{ errors.first('email') }}</div>{% endif %}
          </li>
          <li>
            <label for=\"phone\">{{ 'Téléphone'|_ }}</label>
            <input name=\"phone\" id=\"\" type=\"text\" value=\"\" placeholder=\"{{ 'Téléphone'|_ }}\" />
            {% if errors.first('email')  %} <div class=\"alert alert-danger\">{{ errors.first('email') }}</div>{% endif %}
          </li>
          <li>
            <label for=\"extrait\">{{ 'Description'|_ }}</label>
            <textarea name=\"extrait\" id=\"extrait\" type=\"text\" value=\"\" placeholder=\"{{ 'Extrait'|_ }}\" ></textarea>
            {% if errors.first('extrait')  %}   <div class=\"alert alert-danger\">{{ errors.first('extrait') }}</div> {% endif %}
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
  </div>
</div>", "C:\\xampp\\htdocs\\nasp/themes/nasp/pages/ma-societe.htm", "");
    }
}
