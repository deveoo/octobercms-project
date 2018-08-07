<?php

/* C:\xampp\htdocs\nasp/themes/nasp/partials/account/signin.htm */
class __TwigTemplate_7b887b85a2bc7b5ed06ec3d94783c25de6caaaf4e58a85ed62bbbbd8dad944d1 extends Twig_Template
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
        echo "<form
    data-request=\"onSignin\">
\t";
        // line 3
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "all", array(), "method")) {
            // line 4
            echo "\t  <ul class=\"alert alert-danger\">
\t\t  ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "all", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 6
                echo "\t\t\t  <li style=\"float:none;display:block\">";
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</li>
\t\t  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "\t  </ul>

\t";
        }
        // line 11
        echo "\t<ul>
      <li>
       <!--<label for=\"userSigninLogin\">";
        // line 13
        echo twig_escape_filter($this->env, ($context["loginAttributeLabel"] ?? null), "html", null, true);
        echo "</label>-->
        <input
            name=\"login\"
            type=\"text\"
            class=\"form-control\"
            id=\"userSigninLogin\"
            placeholder=\"";
        // line 19
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Email"));
        echo "\" />
    </li>

    <li>
        <input
            name=\"password\"
            type=\"password\"
            class=\"form-control\"
            id=\"userSigninPassword\"
            placeholder=\"";
        // line 28
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Mot de passe"));
        echo "\" />
    </li>

    <li><input type=\"submit\" class=\"btn btn-default\" value=\"";
        // line 31
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("connexion"));
        echo "\"></li>
\t</li>
</form>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\nasp/themes/nasp/partials/account/signin.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 31,  75 => 28,  63 => 19,  54 => 13,  50 => 11,  45 => 8,  36 => 6,  32 => 5,  29 => 4,  27 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<form
    data-request=\"onSignin\">
\t{% if errors.all()  %}
\t  <ul class=\"alert alert-danger\">
\t\t  {% for error in errors.all() %}
\t\t\t  <li style=\"float:none;display:block\">{{ error }}</li>
\t\t  {% endfor %}
\t  </ul>

\t{% endif %}
\t<ul>
      <li>
       <!--<label for=\"userSigninLogin\">{{ loginAttributeLabel }}</label>-->
        <input
            name=\"login\"
            type=\"text\"
            class=\"form-control\"
            id=\"userSigninLogin\"
            placeholder=\"{{ 'Email'|_ }}\" />
    </li>

    <li>
        <input
            name=\"password\"
            type=\"password\"
            class=\"form-control\"
            id=\"userSigninPassword\"
            placeholder=\"{{ 'Mot de passe'|_ }}\" />
    </li>

    <li><input type=\"submit\" class=\"btn btn-default\" value=\"{{ 'connexion'|_ }}\"></li>
\t</li>
</form>", "C:\\xampp\\htdocs\\nasp/themes/nasp/partials/account/signin.htm", "");
    }
}
