<?php

/* includes/head.twig */
class __TwigTemplate_91eaddb7eb1e932925625bed5c5e283750e02683ffc1dbd80e547b9bc5a8950b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html class=\"no-js\" ";
        // line 2
        echo $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "language_attributes", array());
        echo ">
<head>
\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<title>";
        // line 7
        echo $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "wp_title", array(0 => "|", 1 => true, 2 => "right"), "method");
        echo "</title>
\t";
        // line 8
        echo $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "wp_head", array());
        echo "
\t<link rel=\"pingback\" href=\"";
        // line 9
        echo $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "bloginfo", array(0 => "pingback_url"), "method");
        echo "\">

  <script type=\"text/javascript\">
    WebFontConfig = {
      google: { families: [ 'Open+Sans::latin' ] }
    };
    (function() {
      var wf = document.createElement('script');
      wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
      '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
      wf.type = 'text/javascript';
      wf.async = 'true';
      var s = document.getElementsByTagName('script')[0];
      s.parentNode.insertBefore(wf, s);
    })();
  </script>
</head>
";
    }

    public function getTemplateName()
    {
        return "includes/head.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 9,  34 => 8,  30 => 7,  22 => 2,  19 => 1,);
    }
}
