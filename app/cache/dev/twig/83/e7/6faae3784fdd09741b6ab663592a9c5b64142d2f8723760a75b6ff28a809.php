<?php

/* FOSUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_83e76faae3784fdd09741b6ab663592a9c5b64142d2f8723760a75b6ff28a809 extends Twig_Template
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
        // line 2
        echo "
<form action=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        ";
        // line 5
        if (array_key_exists("invalid_username", $context)) {
            // line 6
            echo "            <p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.invalid_username", array("%username%" => (isset($context["invalid_username"]) ? $context["invalid_username"] : $this->getContext($context, "invalid_username"))), "FOSUserBundle"), "html", null, true);
            echo "</p>
        ";
        }
        // line 8
        echo "        <label for=\"username\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 4,  20 => 1,  178 => 69,  155 => 61,  148 => 58,  84 => 29,  165 => 35,  114 => 34,  90 => 29,  118 => 39,  153 => 59,  126 => 51,  77 => 28,  195 => 84,  58 => 18,  34 => 7,  137 => 40,  110 => 30,  100 => 27,  76 => 24,  198 => 76,  191 => 74,  185 => 72,  175 => 69,  167 => 63,  124 => 51,  81 => 24,  65 => 21,  127 => 35,  70 => 24,  289 => 96,  284 => 8,  242 => 103,  234 => 97,  231 => 96,  225 => 95,  205 => 91,  192 => 83,  184 => 78,  160 => 69,  152 => 66,  113 => 37,  104 => 28,  97 => 32,  53 => 11,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 110,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 93,  177 => 70,  169 => 60,  140 => 43,  132 => 54,  128 => 53,  107 => 29,  61 => 19,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 81,  208 => 68,  204 => 72,  179 => 69,  159 => 62,  143 => 42,  135 => 41,  119 => 35,  102 => 34,  71 => 22,  67 => 20,  63 => 21,  59 => 21,  38 => 8,  94 => 27,  89 => 28,  85 => 22,  75 => 23,  68 => 22,  56 => 18,  87 => 25,  21 => 1,  26 => 12,  93 => 29,  88 => 30,  78 => 26,  46 => 14,  27 => 5,  44 => 9,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 37,  166 => 71,  163 => 63,  158 => 47,  156 => 66,  151 => 63,  142 => 55,  138 => 54,  136 => 55,  121 => 41,  117 => 50,  105 => 38,  91 => 27,  62 => 19,  49 => 11,  24 => 7,  25 => 3,  19 => 2,  79 => 27,  72 => 21,  69 => 23,  47 => 8,  40 => 11,  37 => 5,  22 => 3,  246 => 108,  157 => 56,  145 => 46,  139 => 45,  131 => 40,  123 => 50,  120 => 49,  115 => 49,  111 => 37,  108 => 41,  101 => 33,  98 => 35,  96 => 31,  83 => 28,  74 => 25,  66 => 22,  55 => 18,  52 => 14,  50 => 10,  43 => 12,  41 => 9,  35 => 8,  32 => 4,  29 => 6,  209 => 92,  203 => 77,  199 => 67,  193 => 73,  189 => 73,  187 => 84,  182 => 71,  176 => 75,  173 => 65,  168 => 65,  164 => 62,  162 => 57,  154 => 60,  149 => 58,  147 => 58,  144 => 63,  141 => 57,  133 => 55,  130 => 52,  125 => 52,  122 => 51,  116 => 35,  112 => 38,  109 => 36,  106 => 35,  103 => 28,  99 => 29,  95 => 33,  92 => 23,  86 => 25,  82 => 27,  80 => 25,  73 => 24,  64 => 20,  60 => 22,  57 => 20,  54 => 16,  51 => 14,  48 => 12,  45 => 11,  42 => 9,  39 => 7,  36 => 7,  33 => 4,  30 => 2,);
    }
}
