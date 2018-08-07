<?php

/* C:\xampp\htdocs\nasp/themes/nasp/partials/account/register.htm */
class __TwigTemplate_8db4c8209565f20894f47c7a0e265e5de97c6e7c4be6e197617cdc3ba2ad1f5b extends Twig_Template
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
        if (($context["canRegister"] ?? null)) {
            // line 2
            echo "    <form
        data-request=\"onRegister\">
\t
\t";
            // line 5
            if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "all", array(), "method")) {
                // line 6
                echo "\t  <ul class=\"alert alert-danger\">
\t\t  ";
                // line 7
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "all", array(), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 8
                    echo "\t\t\t  <li style=\"float:none;display:block\">";
                    echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                    echo "</li>
\t\t  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 10
                echo "\t  </ul>

\t";
            }
            // line 13
            echo "\t<ul>
      <li>
            <!--<label for=\"registerName\">Full Name</label>-->
            <input
                name=\"name\"
                type=\"text\"
                class=\"form-control\"
                id=\"registerName\"
                placeholder=\"";
            // line 21
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Nom & Prénom"));
            echo "\" />
\t\t</li>

        <li>
            <!--<label for=\"registerEmail\">Email</label>-->
            <input
                name=\"email\"
                type=\"email\"
                class=\"form-control\"
                id=\"registerEmail\"
                placeholder=\"";
            // line 31
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("E-mail"));
            echo "\" />
        </li>

        ";
            // line 34
            if ((($context["loginAttribute"] ?? null) == "username")) {
                // line 35
                echo "            <li>
                <!--<label for=\"registerUsername\">Username</label>-->
                <input
                    name=\"username\"
                    type=\"text\"
                    class=\"form-control\"
                    id=\"registerUsername\"
                    placeholder=\"Enter your username\" />
            </li>
        ";
            }
            // line 45
            echo "
        <li>
            <!--<label for=\"registerPassword\">Password</label>-->
            <input
                name=\"password\"
                type=\"password\"
                class=\"form-control\"
                id=\"registerPassword\"
                placeholder=\"";
            // line 53
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Mot de passe"));
            echo "\" />
        </li>

        <li><input type=\"submit\" class=\"btn btn-default\" value=\"";
            // line 56
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Valider"));
            echo "\"></li>
    </form>
";
        } else {
            // line 59
            echo "    <!-- Registration is disabled. -->
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\nasp/themes/nasp/partials/account/register.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 59,  112 => 56,  106 => 53,  96 => 45,  84 => 35,  82 => 34,  76 => 31,  63 => 21,  53 => 13,  48 => 10,  39 => 8,  35 => 7,  32 => 6,  30 => 5,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if canRegister %}
    <form
        data-request=\"onRegister\">
\t
\t{% if errors.all()  %}
\t  <ul class=\"alert alert-danger\">
\t\t  {% for error in errors.all() %}
\t\t\t  <li style=\"float:none;display:block\">{{ error }}</li>
\t\t  {% endfor %}
\t  </ul>

\t{% endif %}
\t<ul>
      <li>
            <!--<label for=\"registerName\">Full Name</label>-->
            <input
                name=\"name\"
                type=\"text\"
                class=\"form-control\"
                id=\"registerName\"
                placeholder=\"{{ 'Nom & Prénom'|_ }}\" />
\t\t</li>

        <li>
            <!--<label for=\"registerEmail\">Email</label>-->
            <input
                name=\"email\"
                type=\"email\"
                class=\"form-control\"
                id=\"registerEmail\"
                placeholder=\"{{ 'E-mail'|_ }}\" />
        </li>

        {% if loginAttribute == \"username\" %}
            <li>
                <!--<label for=\"registerUsername\">Username</label>-->
                <input
                    name=\"username\"
                    type=\"text\"
                    class=\"form-control\"
                    id=\"registerUsername\"
                    placeholder=\"Enter your username\" />
            </li>
        {% endif %}

        <li>
            <!--<label for=\"registerPassword\">Password</label>-->
            <input
                name=\"password\"
                type=\"password\"
                class=\"form-control\"
                id=\"registerPassword\"
                placeholder=\"{{ 'Mot de passe'|_ }}\" />
        </li>

        <li><input type=\"submit\" class=\"btn btn-default\" value=\"{{ 'Valider'|_ }}\"></li>
    </form>
{% else %}
    <!-- Registration is disabled. -->
{% endif %}", "C:\\xampp\\htdocs\\nasp/themes/nasp/partials/account/register.htm", "");
    }
}
