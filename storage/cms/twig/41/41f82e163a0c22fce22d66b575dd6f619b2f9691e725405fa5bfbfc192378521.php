<?php

/* C:\xampp\htdocs\nasp/themes/nasp/pages/contact.htm */
class __TwigTemplate_80bc0712a57ba4a2f319a5399df30d413464a781dff9273c4f5c75c1e7dab4a5 extends Twig_Template
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
        echo "<div class=\"row\">
  <div class=\"col-md-6 col-lg-6 col-xs12\">
    <h2> &nbsp;</h2>
    <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3192.7092966146392!2d10.195891715165367!3d36.849437672626436!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12fd34c8cc19838f%3A0x8774820aa8c0dd77!2sImmeuble+Tamayouz%2C+Tunis+1082!5e0!3m2!1sfr!2stn!4v1530609101066\" width=\"100%\" height=\"400\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
  </div>
  <div class=\"col-md-6 col-lg-6 col-xs12\">
      <div class=\"coordonnes\">
        <h2> Coordonées</h2>
        <p>
          <b><i class=\"fa fa-home\"></i></b> Lorem imsum dolor, 1002 tunis
        <p>
        <p>
          <b><i class=\"fa fa-phone\"></i></b> 00216 01 02 03 04
        <p>
        <p>
          <b><i class=\"fa fa-fax\"></i></b> 00216 01 02 03 04
        <p>
        <p>
          <b><i class=\"fa fa-envelope\"></i></b> contact[@]security-providers.com
        <p>
      </div>
      <div class=\"websiteForm\">
        ";
        // line 23
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contactform"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 24
        echo "      </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\nasp/themes/nasp/pages/contact.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 24,  47 => 23,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"row\">
  <div class=\"col-md-6 col-lg-6 col-xs12\">
    <h2> &nbsp;</h2>
    <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3192.7092966146392!2d10.195891715165367!3d36.849437672626436!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12fd34c8cc19838f%3A0x8774820aa8c0dd77!2sImmeuble+Tamayouz%2C+Tunis+1082!5e0!3m2!1sfr!2stn!4v1530609101066\" width=\"100%\" height=\"400\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
  </div>
  <div class=\"col-md-6 col-lg-6 col-xs12\">
      <div class=\"coordonnes\">
        <h2> Coordonées</h2>
        <p>
          <b><i class=\"fa fa-home\"></i></b> Lorem imsum dolor, 1002 tunis
        <p>
        <p>
          <b><i class=\"fa fa-phone\"></i></b> 00216 01 02 03 04
        <p>
        <p>
          <b><i class=\"fa fa-fax\"></i></b> 00216 01 02 03 04
        <p>
        <p>
          <b><i class=\"fa fa-envelope\"></i></b> contact[@]security-providers.com
        <p>
      </div>
      <div class=\"websiteForm\">
        {% component 'contactform' %}
      </div>
  </div>
</div>", "C:\\xampp\\htdocs\\nasp/themes/nasp/pages/contact.htm", "");
    }
}
