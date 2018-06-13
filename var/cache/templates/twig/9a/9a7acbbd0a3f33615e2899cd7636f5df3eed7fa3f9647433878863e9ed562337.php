<?php

/* __string_template__bb124960ee045abb77a430b3ffbf3a12f8e2287e97bb80d484ab74dad0f05386 */
class __TwigTemplate_069d57dbc6c750da2c32e9d4dbfae840d579dd710035c405d6a46184b273b057 extends Twig_Template
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
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "call_requests.text_call_request", array("[customer]" => (isset($context["customer"]) ? $context["customer"] : null), "[href]" => (isset($context["url"]) ? $context["url"] : null), "[phone_number]" => (isset($context["phone_number"]) ? $context["phone_number"] : null)));
        echo " <br /> ";
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "call_requests.text_call_request_call_time", array("[time_from]" => (isset($context["time_from"]) ? $context["time_from"] : null), "[time_to]" => (isset($context["time_to"]) ? $context["time_to"] : null)));
        echo "

";
        // line 5
        echo $this->env->getExtension('tygh.core')->snippetFunction($this->env, $context, "footer");
    }

    public function getTemplateName()
    {
        return "__string_template__bb124960ee045abb77a430b3ffbf3a12f8e2287e97bb80d484ab74dad0f05386";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  24 => 3,  19 => 1,);
    }
}
/* {{ snippet("header") }}*/
/* */
/*  {{ __("call_requests.text_call_request", {"[customer]": customer, "[href]": url, "[phone_number]": phone_number}) }} <br /> {{ __("call_requests.text_call_request_call_time", {"[time_from]": time_from, "[time_to]": time_to}) }}*/
/* */
/* {{ snippet("footer") }}*/
