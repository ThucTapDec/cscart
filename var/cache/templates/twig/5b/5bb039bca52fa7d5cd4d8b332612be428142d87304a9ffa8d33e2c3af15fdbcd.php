<?php

/* __string_template__a514e70d40e524ed66b619200151a649c052a445ba21da60760b7f9e3f27924d */
class __TwigTemplate_de1fd75eb527c8936decc193a0442ecc3efb01e50739fa421c6936cca962425f extends Twig_Template
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
        echo (isset($context["company_name"]) ? $context["company_name"] : null);
        echo ": ";
        echo (isset($context["subject"]) ? $context["subject"] : null);
    }

    public function getTemplateName()
    {
        return "__string_template__a514e70d40e524ed66b619200151a649c052a445ba21da60760b7f9e3f27924d";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* {{ company_name }}: {{ subject }}*/
