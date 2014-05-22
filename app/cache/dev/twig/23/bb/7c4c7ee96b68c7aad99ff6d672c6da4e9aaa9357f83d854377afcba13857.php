<?php

/* StaticBundle::layout.html.twig */
class __TwigTemplate_23bb7c4c7ee96b68c7aad99ff6d672c6da4e9aaa9357f83d854377afcba13857 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"no-js\"> <!--<![endif]-->
  <head>
    <meta charset=\"utf-8\">
    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo " » Grafit Group</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width\">

    ";
        // line 12
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "7797d03_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7797d03_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/style_bootstrap_1.css");
            // line 18
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
            // asset "7797d03_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7797d03_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/style_bootstrap-theme_2.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
            // asset "7797d03_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7797d03_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/style_style_3.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
            // asset "7797d03_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7797d03_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/style_lightbox_4.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        } else {
            // asset "7797d03"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7797d03") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/style.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        }
        unset($context["asset_url"]);
        // line 20
        echo "    <!--script src=\"js/vendor/modernizr-2.6.2.min.js\"></script-->
    <style>
        @font-face
        {
            font-family: Bebas;
            src: url('";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/static/Font/BebasNeue.otf"), "html", null, true);
        echo "');
        }
     </style>
  </head>

  <body>
    <div class=\"navbar navbar-fixed-top\" style=\"height: 250px; background: white url('";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/static/Font/backgroud.jpg"), "html", null, true);
        echo "') repeat-y; \">
      <div class=\"navbar-inner\">
        <div class=\"container\" style=\"margin-top: 10px;\">
          <div class=\"flags\">
                <a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("home", array("_locale" => "en"));
        echo "\">
                    <img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/static/images/en.gif"), "html", null, true);
        echo "\" alt=\"eng\">
                </a>
                <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("home", array("_locale" => "sl"));
        echo "\">
                    <img src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/static/images/sl.jpg"), "html", null, true);
        echo "\" alt=\"slo\">
                </a>
            </div>
          <div class=\"my-top-meni\">
            <div>
              <img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/static/images/LOGO.jpg"), "html", null, true);
        echo "\" style=\"width: 150%;\"/>
            </div>
            <div style=\"float: right;\">
              <form name=\"cse\" id=\"searchbox_demo\" action=\"http://www.google.com/cse\">
                <input type=\"hidden\" name=\"cref\" value=\"\" />
                <input type=\"hidden\" name=\"ie\" value=\"utf-8\" />
                <input type=\"hidden\" name=\"hl\" value=\"\" />
                <input name=\"q\" type=\"text\" size=\"20\" />
                <input class=\"my-button\" type=\"submit\" name=\"search\" value=\"Search\" />
              </form>
            </div>
          </div>
           
           <div class=\"my-meni-labels\"> 
            <ul class=\"nav nav2\" style=\"margin: -5px 0 0 20px;\">
              <li style=\"float: left; list-style-type: none; text-align: center; margin-left: -20px; background-color: #5DC13B;\">
                  <a style=\"color: #c6c8c9;\" href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("home");
        echo "\"><span class=\"main-menu-title\" style=\"color: white; margin-left: -20px;\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Domov", array(), "messages");
        echo "</span></a>
              </li>
              <li style=\"float: left; width: list-style-type: none; text-align: center; margin-left: -20px; border-left: none;\">
                  <a style=\"color: #c6c8c9;\" href=\"";
        // line 63
        echo $this->env->getExtension('routing')->getPath("_about");
        echo "\"><span class=\"main-menu-title\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("O nas", array(), "messages");
        echo "</span></a>
              </li>
              <li style=\"float: left; width: list-style-type: none; text-align: center; margin-left: -20px;\">
                  <a style=\"color: #c6c8c9;\" href=\"";
        // line 66
        echo $this->env->getExtension('routing')->getPath("_news");
        echo "\"><span class=\"main-menu-title\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Novice", array(), "messages");
        echo "</span></a>
              </li>
              <li style=\"float: left; width: list-style-type: none; text-align: center; margin-left: -20px;\">
                  <a style=\"color: #c6c8c9;\" href=\"";
        // line 69
        echo $this->env->getExtension('routing')->getPath("_shop");
        echo "\"><span class=\"main-menu-title\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Trgovina", array(), "messages");
        echo "</span></a>
              </li>
              <li style=\"float: left; width: list-style-type: none; text-align: center; margin-left: -20px;\">
                  <a style=\"color: #c6c8c9;\" href=\"";
        // line 72
        echo $this->env->getExtension('routing')->getPath("_services");
        echo "\"><span class=\"main-menu-title\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Storitve", array(), "messages");
        echo "</span></a>
              </li>
              <li style=\"float: left; width: list-style-type: none; text-align: center; margin-left: -20px;\">
                  <a style=\"color: #c6c8c9;\" href=\"";
        // line 75
        echo $this->env->getExtension('routing')->getPath("_galery");
        echo "\"><span class=\"main-menu-title\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Galerija", array(), "messages");
        echo "</span></a>
              </li>
              <li style=\"float: left; width: list-style-type: none; text-align: center; margin-left: -20px;\">
                  <a style=\"color: #c6c8c9;\" href=\"";
        // line 78
        echo $this->env->getExtension('routing')->getPath("_contact");
        echo "\"><span class=\"main-menu-title\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Kontakt", array(), "messages");
        echo "</span></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class=\"container\">
      ";
        // line 86
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 87
            echo "          ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 88
                echo "              <div class=\"alert alert-";
                echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
                echo " fade in\" data-alert=\"alert\"><a class=\"close\" data-dismiss=\"alert\" href=\"#\">&times;</a><div class=\"alert-heading\">";
                echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
                echo "</div></div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "      ";
        $this->displayBlock('content', $context, $blocks);
        // line 92
        echo "
    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    ";
        // line 98
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "aa92e5b_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_aa92e5b_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/scripts_jquery-1.11.0.min_1.js");
            // line 103
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "aa92e5b_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_aa92e5b_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/scripts_lightbox.min_2.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "aa92e5b_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_aa92e5b_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/scripts_bootstrap_3.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "aa92e5b_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_aa92e5b_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/scripts_part_4_script_1.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "aa92e5b"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_aa92e5b") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/scripts.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 105
        echo "
  </body>
</html>";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
    }

    // line 91
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "StaticBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 91,  276 => 8,  270 => 105,  238 => 103,  234 => 98,  226 => 92,  223 => 91,  217 => 90,  206 => 88,  201 => 87,  184 => 78,  168 => 72,  152 => 66,  144 => 63,  136 => 60,  109 => 39,  100 => 36,  73 => 20,  41 => 18,  37 => 12,  30 => 8,  21 => 1,  211 => 79,  208 => 78,  197 => 86,  192 => 74,  185 => 72,  183 => 71,  179 => 70,  176 => 75,  171 => 68,  169 => 67,  160 => 69,  157 => 59,  147 => 57,  142 => 56,  135 => 54,  133 => 53,  128 => 52,  123 => 51,  121 => 50,  117 => 44,  110 => 46,  105 => 38,  98 => 43,  96 => 35,  91 => 41,  89 => 31,  80 => 25,  74 => 31,  68 => 28,  49 => 12,  42 => 8,  38 => 6,  35 => 5,  29 => 3,);
    }
}
