<?php

/* __string_template__541a394b7913f2752ffd5aafcbebb9a486fb21e37eedee0d2893a3de85faa6af */
class __TwigTemplate_7212ec3d331cbe07771e3de0466b2d1ff8f88cf53b019d5660489c2f7790de58 extends Twig_Template
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
        echo "<table width=\"600\" style=\" font-family: Helvetica, Arial, sans-serif; border-collapse: separate;\" rel=\"min-width: 800px; font-family: Helvetica, Arial, sans-serif; border-collapse: separate;\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\">
<tbody>
<tr style=\"vertical-align: top;\">
    <td>
        <table width=\"100%;\" cellspacing=\"0\" border=\"0\" style=\"border-collapse: separate; font-family: Helvetica, Arial, sans-serif;\">
        <tbody>
        <tr>
            <td width=\"50%\" style=\"padding: 0px; padding-bottom: 10px; padding-right: 40px; vertical-align: top; font-family: Helvetica, Arial, sans-serif;\">
                ";
        // line 9
        echo $this->env->getExtension('tygh.core')->snippetFunction($this->env, $context, "ship_to");
        echo "
            </td>
            <td width=\"50%\" style=\"padding: 0px; padding-bottom: 10px; padding-left: 40px; -webkit-print-color-adjust: exact; vertical-align: top; font-family: Helvetica, Arial, sans-serif;\">
                <p style=\"color: #787878; font-size: 14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px; margin: 0px;\">
                    <span style=\"color: #444444; font-weight: 600; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase;\">";
        // line 13
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "order_date");
        echo "</span>  ";
        echo $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "timestamp", array());
        echo "
                </p>
                <p style=\"color: #787878; font-size: 14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px; margin: 0px;\">
                    <span style=\"color: #444444; font-weight: 600; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase;\">";
        // line 16
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "payment");
        echo "</span>  ";
        echo $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "payment", array());
        echo "
                </p>
                <p style=\"color: #787878; font-size: 14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px; margin: 0px;\">
                    <span style=\"color: #444444; font-weight: 600; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase;\">";
        // line 19
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "shipping");
        echo "</span>  ";
        echo $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "shippings_method", array());
        echo "
                </p>
                ";
        // line 21
        if ($this->getAttribute((isset($context["o"]) ? $context["o"] : null), "tracking_number", array())) {
            // line 22
            echo "                <p style=\"color: #787878; font-size: 14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px; margin: 0px;\">
                    <span style=\"color: #444444; font-weight: 600; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase;\">";
            // line 23
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "tracking_number");
            echo "</span>  ";
            echo $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "tracking_number", array());
            echo "
                </p>
                ";
        }
        // line 26
        echo "            </td>
        </tr>
        </tbody>
        </table>
    </td>
</tr>
<tr>
    <td style=\"padding: 0px;\">
        ";
        // line 34
        echo $this->env->getExtension('tygh.core')->snippetFunction($this->env, $context, "products_table");
        echo "
    </td>
</tr>
<tr>
    <td style=\"padding: 0px; border-top: 2px solid #f5f5f5; padding-top: 10px; font-family: Helvetica, Arial, sans-serif;\">
        <table width=\"100%\" style=\"border-collapse: separate; font-family: Helvetica, Arial, sans-serif;\">
        <tbody>
        <tr>
            <td width=\"66%\" style=\"font-size: 14px; font-family: Helvetica, Arial, sans-serif; line-height: 21px; color: #444444; padding-right: 30px; vertical-align:top;\">
                ";
        // line 43
        if ($this->getAttribute((isset($context["o"]) ? $context["o"] : null), "notes", array())) {
            // line 44
            echo "                <h2 style=\"margin: 0px; font-size: 22px; font-family: Helvetica, Arial, sans-serif; color: #444444; text-transform: uppercase; padding-bottom: 20px; border-bottom: 3px solid #e8e8e8; margin-bottom: 10px;\">";
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "customer_notes");
            echo "</h2>
                ";
            // line 45
            echo $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "notes", array());
            echo "
                                ";
        }
        // line 47
        echo "            </td>
            <td width=\"34%\" style=\"vertical-align: top; font-family: Helvetica, Arial, sans-serif;\">
                <table width=\"100%;\" style=\"font-size: 14px; font-family: Helvetica, Arial, sans-serif; color: #444;\">
                <tbody>
                    <tr style=\" vertical-align: top; font-family: Helvetica, Arial, sans-serif;\">
                        <td align=\"left\" style=\"padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;\">";
        // line 52
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "subtotal");
        echo "
                        </td>
                        <td align=\"right\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 54
        echo $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "display_subtotal", array());
        echo "
                        </td>
                    </tr>
                    <tr style=\" vertical-align: top;\">
                        <td align=\"left\" style=\"padding-bottom: 20px; text-transform: uppercase; font-family: Helvetica, Arial, sans-serif;\">";
        // line 58
        echo $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "tax_name", array());
        echo "
                        </td>
                        <td align=\"right\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 60
        echo $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "tax_total", array());
        echo "
                        </td>
                    </tr>
                    <tr style=\" vertical-align: top;\">
                        <td align=\"left\" style=\"padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;\">";
        // line 64
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "shipping");
        echo "
                        </td>
                        <td align=\"right\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 66
        echo $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "display_shipping_cost", array());
        echo "
                        </td>
                    </tr>
                    <tr style=\" vertical-align: top;\">
                        <td style=\"padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;\" align=\"left\">";
        // line 70
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "payment_surcharge");
        echo "
                        </td>
                        <td style=\"font-family: Helvetica, Arial, sans-serif;\" align=\"right\">";
        // line 72
        echo $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "payment_surcharge", array());
        echo "
                        </td>
                    </tr>
                    <tr style=\" vertical-align: top; font-family: Helvetica, Arial, sans-serif;\">
                        <td align=\"left\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 76
        if ($this->getAttribute((isset($context["o"]) ? $context["o"] : null), "coupon_code", array())) {
            echo " <div style=\"padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;\"> ";
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "coupon");
            echo " </div> ";
        }
        // line 77
        echo "                        </td>
                        <td align=\"right\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 78
        if ($this->getAttribute((isset($context["o"]) ? $context["o"] : null), "coupon_code", array())) {
            echo " ";
            echo $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "coupon_code", array());
            echo " ";
        }
        // line 79
        echo "                        </td>
                    </tr>
                    <tr style=\" vertical-align: top; font-family: Helvetica, Arial, sans-serif;\">
                        <td align=\"left\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 82
        if ($this->getAttribute($this->getAttribute((isset($context["o"]) ? $context["o"] : null), "raw", array()), "discount", array())) {
            echo " <div style=\"padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;\"> ";
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "including_discount");
            echo " </div> ";
        }
        // line 83
        echo "                        </td>
                        <td align=\"right\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 84
        if ($this->getAttribute($this->getAttribute((isset($context["o"]) ? $context["o"] : null), "raw", array()), "discount", array())) {
            echo " ";
            echo $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "discount", array());
            echo " ";
        }
        // line 85
        echo "                        </td>
                    </tr>
                    <tr style=\" vertical-align: top; font-family: Helvetica, Arial, sans-serif;\">
                        <td align=\"left\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 88
        if ($this->getAttribute($this->getAttribute((isset($context["o"]) ? $context["o"] : null), "raw", array()), "subtotal_discount", array())) {
            echo " <div style=\"padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;\"> ";
            echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "order_discount");
            echo " </div> ";
        }
        // line 89
        echo "                        </td>
                        <td align=\"right\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 90
        if ($this->getAttribute($this->getAttribute((isset($context["o"]) ? $context["o"] : null), "raw", array()), "subtotal_discount", array())) {
            echo " ";
            echo $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "subtotal_discount", array());
            echo " ";
        }
        // line 91
        echo "                        </td>
                    </tr>
                    <tr style=\" vertical-align: top; font-size: 22px; font-weight: 600; font-family: Helvetica, Arial, sans-serif;\">
                        <td align=\"left\" style=\"padding-top: 20px; border-top: 1px solid #e8e8e8; font-size: 22px; font-family: Helvetica, Arial, sans-serif;\">";
        // line 94
        echo $this->env->getExtension('tygh.core')->translateFunction($this->env, $context, "total");
        echo "
                        </td>
                        <td align=\"right\" style=\"padding-top: 20px; border-top: 1px solid #e8e8e8; font-size: 22px; font-family: Helvetica, Arial, sans-serif;\">";
        // line 96
        echo $this->getAttribute((isset($context["o"]) ? $context["o"] : null), "total", array());
        echo "
                        </td>
                    </tr>
                </tbody>
                </table>
            </td>
        </tr>
        </tbody>
        </table>
    </td>
</tr>
</tbody>
</table>";
    }

    public function getTemplateName()
    {
        return "__string_template__541a394b7913f2752ffd5aafcbebb9a486fb21e37eedee0d2893a3de85faa6af";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 96,  221 => 94,  216 => 91,  210 => 90,  207 => 89,  201 => 88,  196 => 85,  190 => 84,  187 => 83,  181 => 82,  176 => 79,  170 => 78,  167 => 77,  161 => 76,  154 => 72,  149 => 70,  142 => 66,  137 => 64,  130 => 60,  125 => 58,  118 => 54,  113 => 52,  106 => 47,  101 => 45,  96 => 44,  94 => 43,  82 => 34,  72 => 26,  64 => 23,  61 => 22,  59 => 21,  52 => 19,  44 => 16,  36 => 13,  29 => 9,  19 => 1,);
    }
}
/* <table width="600" style=" font-family: Helvetica, Arial, sans-serif; border-collapse: separate;" rel="min-width: 800px; font-family: Helvetica, Arial, sans-serif; border-collapse: separate;" cellspacing="0" cellpadding="0" border="0">*/
/* <tbody>*/
/* <tr style="vertical-align: top;">*/
/*     <td>*/
/*         <table width="100%;" cellspacing="0" border="0" style="border-collapse: separate; font-family: Helvetica, Arial, sans-serif;">*/
/*         <tbody>*/
/*         <tr>*/
/*             <td width="50%" style="padding: 0px; padding-bottom: 10px; padding-right: 40px; vertical-align: top; font-family: Helvetica, Arial, sans-serif;">*/
/*                 {{ snippet("ship_to") }}*/
/*             </td>*/
/*             <td width="50%" style="padding: 0px; padding-bottom: 10px; padding-left: 40px; -webkit-print-color-adjust: exact; vertical-align: top; font-family: Helvetica, Arial, sans-serif;">*/
/*                 <p style="color: #787878; font-size: 14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px; margin: 0px;">*/
/*                     <span style="color: #444444; font-weight: 600; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase;">{{__("order_date")}}</span>  {{o.timestamp}}*/
/*                 </p>*/
/*                 <p style="color: #787878; font-size: 14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px; margin: 0px;">*/
/*                     <span style="color: #444444; font-weight: 600; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase;">{{__("payment")}}</span>  {{p.payment}}*/
/*                 </p>*/
/*                 <p style="color: #787878; font-size: 14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px; margin: 0px;">*/
/*                     <span style="color: #444444; font-weight: 600; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase;">{{__("shipping")}}</span>  {{o.shippings_method}}*/
/*                 </p>*/
/*                 {% if o.tracking_number %}*/
/*                 <p style="color: #787878; font-size: 14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px; margin: 0px;">*/
/*                     <span style="color: #444444; font-weight: 600; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase;">{{__("tracking_number")}}</span>  {{o.tracking_number}}*/
/*                 </p>*/
/*                 {% endif %}*/
/*             </td>*/
/*         </tr>*/
/*         </tbody>*/
/*         </table>*/
/*     </td>*/
/* </tr>*/
/* <tr>*/
/*     <td style="padding: 0px;">*/
/*         {{ snippet("products_table") }}*/
/*     </td>*/
/* </tr>*/
/* <tr>*/
/*     <td style="padding: 0px; border-top: 2px solid #f5f5f5; padding-top: 10px; font-family: Helvetica, Arial, sans-serif;">*/
/*         <table width="100%" style="border-collapse: separate; font-family: Helvetica, Arial, sans-serif;">*/
/*         <tbody>*/
/*         <tr>*/
/*             <td width="66%" style="font-size: 14px; font-family: Helvetica, Arial, sans-serif; line-height: 21px; color: #444444; padding-right: 30px; vertical-align:top;">*/
/*                 {% if o.notes %}*/
/*                 <h2 style="margin: 0px; font-size: 22px; font-family: Helvetica, Arial, sans-serif; color: #444444; text-transform: uppercase; padding-bottom: 20px; border-bottom: 3px solid #e8e8e8; margin-bottom: 10px;">{{ __("customer_notes") }}</h2>*/
/*                 {{ o.notes }}*/
/*                                 {% endif %}*/
/*             </td>*/
/*             <td width="34%" style="vertical-align: top; font-family: Helvetica, Arial, sans-serif;">*/
/*                 <table width="100%;" style="font-size: 14px; font-family: Helvetica, Arial, sans-serif; color: #444;">*/
/*                 <tbody>*/
/*                     <tr style=" vertical-align: top; font-family: Helvetica, Arial, sans-serif;">*/
/*                         <td align="left" style="padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;">{{ __("subtotal") }}*/
/*                         </td>*/
/*                         <td align="right" style="font-family: Helvetica, Arial, sans-serif;">{{o.display_subtotal}}*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr style=" vertical-align: top;">*/
/*                         <td align="left" style="padding-bottom: 20px; text-transform: uppercase; font-family: Helvetica, Arial, sans-serif;">{{o.tax_name}}*/
/*                         </td>*/
/*                         <td align="right" style="font-family: Helvetica, Arial, sans-serif;">{{o.tax_total}}*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr style=" vertical-align: top;">*/
/*                         <td align="left" style="padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;">{{ __("shipping") }}*/
/*                         </td>*/
/*                         <td align="right" style="font-family: Helvetica, Arial, sans-serif;">{{ o.display_shipping_cost }}*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr style=" vertical-align: top;">*/
/*                         <td style="padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;" align="left">{{ __("payment_surcharge") }}*/
/*                         </td>*/
/*                         <td style="font-family: Helvetica, Arial, sans-serif;" align="right">{{ o.payment_surcharge }}*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr style=" vertical-align: top; font-family: Helvetica, Arial, sans-serif;">*/
/*                         <td align="left" style="font-family: Helvetica, Arial, sans-serif;">{% if o.coupon_code %} <div style="padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;"> {{ __("coupon") }} </div> {% endif %}*/
/*                         </td>*/
/*                         <td align="right" style="font-family: Helvetica, Arial, sans-serif;">{% if o.coupon_code %} {{o.coupon_code}} {% endif %}*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr style=" vertical-align: top; font-family: Helvetica, Arial, sans-serif;">*/
/*                         <td align="left" style="font-family: Helvetica, Arial, sans-serif;">{% if o.raw.discount %} <div style="padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;"> {{ __("including_discount") }} </div> {% endif %}*/
/*                         </td>*/
/*                         <td align="right" style="font-family: Helvetica, Arial, sans-serif;">{% if o.raw.discount %} {{o.discount}} {% endif %}*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr style=" vertical-align: top; font-family: Helvetica, Arial, sans-serif;">*/
/*                         <td align="left" style="font-family: Helvetica, Arial, sans-serif;">{% if o.raw.subtotal_discount %} <div style="padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;"> {{ __("order_discount") }} </div> {% endif %}*/
/*                         </td>*/
/*                         <td align="right" style="font-family: Helvetica, Arial, sans-serif;">{% if o.raw.subtotal_discount %} {{o.subtotal_discount}} {% endif %}*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr style=" vertical-align: top; font-size: 22px; font-weight: 600; font-family: Helvetica, Arial, sans-serif;">*/
/*                         <td align="left" style="padding-top: 20px; border-top: 1px solid #e8e8e8; font-size: 22px; font-family: Helvetica, Arial, sans-serif;">{{ __("total") }}*/
/*                         </td>*/
/*                         <td align="right" style="padding-top: 20px; border-top: 1px solid #e8e8e8; font-size: 22px; font-family: Helvetica, Arial, sans-serif;">{{o.total}}*/
/*                         </td>*/
/*                     </tr>*/
/*                 </tbody>*/
/*                 </table>*/
/*             </td>*/
/*         </tr>*/
/*         </tbody>*/
/*         </table>*/
/*     </td>*/
/* </tr>*/
/* </tbody>*/
/* </table>*/
