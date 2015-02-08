<?php

/* layouts/base.twig */
class __TwigTemplate_79cea3befdf9dba88a3a336aaa7427dd595cf756a4714fe46fd304e2c0b5e18e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->env->loadTemplate("includes/head.twig")->display($context);
        // line 2
        echo "
<body ";
        // line 3
        echo $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "body_class", array());
        echo " >

  ";
        // line 5
        $this->env->loadTemplate("includes/header.twig")->display($context);
        // line 6
        echo "
  <div class=\"wrap container\" role=\"document\">
    <div class=\"content\">
      ";
        // line 9
        $this->displayBlock('content', $context, $blocks);
        // line 10
        echo "    </div><!-- /.content -->
  </div><!-- /.wrap -->

  ";
        // line 13
        $this->env->loadTemplate("includes/footer.twig")->display($context);
        // line 14
        echo "
  ";
        // line 15
        echo $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "wp_footer", array());
        echo "

</body>
</html>";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layouts/base.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 9,  49 => 15,  46 => 14,  44 => 13,  39 => 10,  37 => 9,  32 => 6,  30 => 5,  25 => 3,  22 => 2,  20 => 1,);
    }
}
