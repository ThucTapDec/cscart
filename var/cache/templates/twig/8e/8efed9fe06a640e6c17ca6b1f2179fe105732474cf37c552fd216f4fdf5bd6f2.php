<?php

/* __string_template__958da8ff3d90fb23dae7c41fa816b3e79310b7d4f5b44046d5b440d031b14f9c */
class __TwigTemplate_8a4a96d4b0a3d87c20d1e3d938f5491297443074c2190c5fb8c7d477dd17da61 extends Twig_Template
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
        echo $this->env->getExtension('tygh.core')->snippetFunction($this->env, $context, "header");
        echo "

";
        // line 3
        echo (isset($context["body"]) ? $context["body"] : null);
        echo "

";
        // line 5
        echo $this->env->getExtension('tygh.core')->snippetFunction($this->env, $context, "footer");
    }

    public function getTemplateName()
    {
        return "__string_template__958da8ff3d90fb23dae7c41fa816b3e79310b7d4f5b44046d5b440d031b14f9c";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 5,  24 => 3,  19 => 1,);
    }
}
/* {{ snippet("header") }}*/
/* */
/* {{ body }}*/
/* */
/* {{ snippet("footer") }}*/
