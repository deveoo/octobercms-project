<?php

/* C:\xampp\htdocs\nasp/plugins/dg/contact/components/contactform/default.htm */
class __TwigTemplate_cbe252ce44670787a4e162442b6afe18a8a2275e1cc0f9e73e91ba8e1e69b344 extends Twig_Template
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
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        // line 4
        $context["type"] = "success"        ;        foreach (Flash::success        () as $message) {
            $context["message"] = $message;            // line 5
            echo "    <div class=\"alert alert-info\"> ";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Nous avons bien reçu votre demande. Nous vous contacterons dans les plus brefs délais"));
            echo "</div>
  ";
        }
        $context["type"] = $_type;        $context["message"] = $_message;        // line 7
        echo "
  ";
        // line 8
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "all", array(), "method")) {
            // line 9
            echo "  <ul class=\"alert alert-danger\">
      ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "all", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 11
                echo "          <li style=\"float:none;display:block\">";
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "  </ul>

  ";
        }
        // line 16
        echo "  <ul>
      <li>
        <input name=\"nom\" id=\"\" type=\"text\" value=\"\" placeholder=\"";
        // line 18
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Nom & prénom"));
        echo "\" />
        ";
        // line 19
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "nom"), "method")) {
            echo "  <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "nom"), "method"), "html", null, true);
            echo "</div> ";
        }
        // line 20
        echo "      </li>
      <li>
        <input name=\"phone\" id=\"\" type=\"text\" value=\"\" placeholder=\"";
        // line 22
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Téléphone"));
        echo "\" />
        ";
        // line 23
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "phone"), "method")) {
            echo "   <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "phone"), "method"), "html", null, true);
            echo "</div> ";
        }
        // line 24
        echo "      </li>
      <li>
        <input name=\"email\" id=\"\" type=\"email\" value=\"\" placeholder=\"";
        // line 26
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("E-mail"));
        echo "\" />
        ";
        // line 27
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "email"), "method")) {
            echo " <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "email"), "method"), "html", null, true);
            echo "</div>";
        }
        // line 28
        echo "      </li>
      <li>
        <textarea name=\"message\" id=\"\"  tabindex=\"8\" placeholder=\" ";
        // line 30
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Message"));
        echo "\" rows=\"3\" cols=\"50\"></textarea>
        ";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "Message"), "method"), "html", null, true);
        echo "
      </li>
      <li><input type=\"submit\" id=\"\" class=\"gform_button button\" value=\" ";
        // line 33
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Envoyer"));
        echo "\" tabindex=\"9\" /></li>

  </ul>
</form>
";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\nasp/plugins/dg/contact/components/contactform/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  112 => 31,  108 => 30,  104 => 28,  98 => 27,  94 => 26,  90 => 24,  84 => 23,  80 => 22,  76 => 20,  70 => 19,  66 => 18,  62 => 16,  57 => 13,  48 => 11,  44 => 10,  41 => 9,  39 => 8,  36 => 7,  30 => 5,  28 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<form data-request=\"onSend\">

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
        <textarea name=\"message\" id=\"\"  tabindex=\"8\" placeholder=\" {{ 'Message'|_ }}\" rows=\"3\" cols=\"50\"></textarea>
        {{ errors.first('Message') }}
      </li>
      <li><input type=\"submit\" id=\"\" class=\"gform_button button\" value=\" {{ 'Envoyer'|_ }}\" tabindex=\"9\" /></li>

  </ul>
</form>
", "C:\\xampp\\htdocs\\nasp/plugins/dg/contact/components/contactform/default.htm", "");
    }
}
