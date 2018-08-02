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
      <li>
        <input name=\"nom\" id=\"\" type=\"text\" value=\"\" placeholder=\"";
        // line 13
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Nom & prénom"));
        echo "\" />
        ";
        // line 14
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "nom"), "method")) {
            echo "  <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "nom"), "method"), "html", null, true);
            echo "</div> ";
        }
        // line 15
        echo "      </li>
      <li>
        <input name=\"phone\" id=\"\" type=\"text\" value=\"\" placeholder=\"";
        // line 17
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Téléphone"));
        echo "\" />
        ";
        // line 18
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "phone"), "method")) {
            echo "   <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "phone"), "method"), "html", null, true);
            echo "</div> ";
        }
        // line 19
        echo "      </li>
      <li>
        <input name=\"email\" id=\"\" type=\"email\" value=\"\" placeholder=\"";
        // line 21
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("E-mail"));
        echo "\" />
        ";
        // line 22
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "email"), "method")) {
            echo " <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "email"), "method"), "html", null, true);
            echo "</div>";
        }
        // line 23
        echo "      </li>
      <li>
        <textarea name=\"message\" id=\"\"  tabindex=\"8\" placeholder=\" ";
        // line 25
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Message"));
        echo "\" rows=\"3\" cols=\"50\"></textarea>
        ";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "first", array(0 => "Message"), "method"), "html", null, true);
        echo "
      </li>
      <li><input type=\"submit\" id=\"\" class=\"gform_button button\" value=\" ";
        // line 28
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
        return array (  105 => 28,  100 => 26,  96 => 25,  92 => 23,  86 => 22,  82 => 21,  78 => 19,  72 => 18,  68 => 17,  64 => 15,  58 => 14,  54 => 13,  50 => 11,  45 => 8,  36 => 6,  32 => 5,  29 => 4,  27 => 3,  23 => 1,);
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
