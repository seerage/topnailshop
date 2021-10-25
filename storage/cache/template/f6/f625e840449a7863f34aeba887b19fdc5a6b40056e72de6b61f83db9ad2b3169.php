<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* marketplace/opencartforum_list.twig */
class __TwigTemplate_2cbb05d855d7ddbf2ca5d9f9c19d8842d08eff36b932e971883c617ba7893d73 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo ($context["header"] ?? null);
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\"></div>
      <h1>";
        // line 6
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 9
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 9);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 9);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-puzzle-piece\"></i> ";
        // line 17
        echo ($context["text_list"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <div class=\"well\">
          <div class=\"input-group\" id=\"extension-filter\">
            <input type=\"text\" name=\"filter_search\" value=\"";
        // line 22
        echo ($context["filter_search"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_search"] ?? null);
        echo "\" class=\"form-control\" />
            <div class=\"input-group-btn\">";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 24
            echo "              ";
            if ((twig_get_attribute($this->env, $this->source, $context["category"], "value", [], "any", false, false, false, 24) == ($context["filter_category"] ?? null))) {
                // line 25
                echo "              <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">";
                echo ($context["text_category"] ?? null);
                echo " (";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "text", [], "any", false, false, false, 25);
                echo ") <span class=\"caret\"></span></button>
              ";
            }
            // line 27
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "              <ul class=\"dropdown-menu\">
                ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 30
            echo "                <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 30);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "text", [], "any", false, false, false, 30);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "              </ul>
              <input type=\"hidden\" name=\"filter_category_id\" value=\"";
        // line 33
        echo ($context["filter_category_id"] ?? null);
        echo "\" class=\"form-control\" />
              <input type=\"hidden\" name=\"filter_download_id\" value=\"";
        // line 34
        echo ($context["filter_download_id"] ?? null);
        echo "\" class=\"form-control\" />
              <input type=\"hidden\" name=\"filter_rating\" value=\"";
        // line 35
        echo ($context["filter_rating"] ?? null);
        echo "\" class=\"form-control\" />
              <input type=\"hidden\" name=\"filter_license\" value=\"";
        // line 36
        echo ($context["filter_license"] ?? null);
        echo "\" class=\"form-control\" />
              <input type=\"hidden\" name=\"filter_partner\" value=\"";
        // line 37
        echo ($context["filter_partner"] ?? null);
        echo "\" class=\"form-control\" />
              <input type=\"hidden\" name=\"sort\" value=\"";
        // line 38
        echo ($context["sort"] ?? null);
        echo "\" class=\"form-control\" />
              <button type=\"button\" id=\"button-filter\" class=\"btn btn-primary\"><i class=\"fa fa-filter\"></i></button>
            </div>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-sm-9 col-xs-7\">
            <div class=\"btn-group\">";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["licenses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["license"]) {
            // line 46
            echo "              ";
            if ((twig_get_attribute($this->env, $this->source, $context["license"], "value", [], "any", false, false, false, 46) == ($context["filter_license"] ?? null))) {
                echo "<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["license"], "href", [], "any", false, false, false, 46);
                echo "\" class=\"btn btn-default active\">";
                echo twig_get_attribute($this->env, $this->source, $context["license"], "text", [], "any", false, false, false, 46);
                echo "</a>";
            } else {
                echo "<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["license"], "href", [], "any", false, false, false, 46);
                echo "\" class=\"btn btn-default\">";
                echo twig_get_attribute($this->env, $this->source, $context["license"], "text", [], "any", false, false, false, 46);
                echo "</a>";
            }
            // line 47
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['license'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</div>
          </div>
          <div class=\"col-sm-3 col-xs-5\">
            <div class=\"input-group pull-right\">
              <div class=\"input-group-addon\"><i class=\"fa fa-sort-amount-asc\"></i></div>
              <select onchange=\"location = this.value;\" class=\"form-control\">
                
              
            
              
                  ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["sorts"]);
        foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
            // line 58
            echo "                  ";
            if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 58) == ($context["sort"] ?? null))) {
                // line 59
                echo "                
              
            
              
                <option value=\"";
                // line 63
                echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 63);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 63);
                echo "</option>
                
              
            
              
                  ";
            } else {
                // line 69
                echo "                
              
            
              
                <option value=\"";
                // line 73
                echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 73);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 73);
                echo "</option>
                
              
            
              
                  ";
            }
            // line 79
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "              
            
          
            
              </select>
            </div>
          </div>
        </div>
        <br />
        <div id=\"extension-list\">";
        // line 89
        if (($context["promotions"] ?? null)) {
            // line 90
            echo "          <h3>Featured</h3>
          <div class=\"row\">";
            // line 91
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["promotions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                // line 92
                echo "            ";
                if ($context["extension"]) {
                    // line 93
                    echo "            <div class=\"col-lg-3 col-md-4 col-sm-6 col-xs-12\">
              <section>
                <div class=\"extension-preview\"><a href=\"";
                    // line 95
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "href", [], "any", false, false, false, 95);
                    echo "\">
                  <div class=\"extension-description\"></div>
                  <img src=\"";
                    // line 97
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "image", [], "any", false, false, false, 97);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 97);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 97);
                    echo "\" class=\"img-responsive\" /></a></div>
                <div class=\"extension-name\">
                  <h4><a href=\"";
                    // line 99
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "href", [], "any", false, false, false, 99);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 99);
                    echo "</a></h4>
                  ";
                    // line 100
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "price", [], "any", false, false, false, 100);
                    echo "</div>
                <div class=\"extension-rate\">
                  <div class=\"row\">
                    <div class=\"col-xs-6\">";
                    // line 103
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 104
                        echo "                      ";
                        if ((twig_get_attribute($this->env, $this->source, $context["extension"], "rating", [], "any", false, false, false, 104) >= $context["i"])) {
                            echo "<i class=\"fa fa-star\"></i>";
                        } else {
                            echo "<i class=\"fa fa-star-o\"></i>";
                        }
                        // line 105
                        echo "                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo "</div>
                    <div class=\"col-xs-6\">
                      <div class=\"text-right\">";
                    // line 107
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "rating_total", [], "any", false, false, false, 107);
                    echo " ";
                    echo ($context["text_reviews"] ?? null);
                    echo "</div>
                    </div>
                  </div>
                </div>
              </section>
            </div>
            ";
                }
                // line 114
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</div>
          <hr />
          ";
        }
        // line 117
        echo "          
          ";
        // line 118
        if (($context["extensions"] ?? null)) {
            // line 119
            echo "          <div class=\"row\"> ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                // line 120
                echo "            
            ";
                // line 121
                if ($context["extension"]) {
                    // line 122
                    echo "            <div class=\"col-lg-3 col-md-4 col-sm-6 col-xs-12\">
              <section>
                <div class=\"extension-preview\"><a href=\"";
                    // line 124
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "href", [], "any", false, false, false, 124);
                    echo "\">
                  <div class=\"extension-description\"></div>
                  <img src=\"";
                    // line 126
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "image", [], "any", false, false, false, 126);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 126);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 126);
                    echo "\" class=\"img-responsive\" /></a></div>
                <div class=\"extension-name\">
                  <h4><a href=\"";
                    // line 128
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "href", [], "any", false, false, false, 128);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 128);
                    echo "</a></h4>
                  ";
                    // line 129
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "price", [], "any", false, false, false, 129);
                    echo "</div>
                <div class=\"extension-rate\">
                  <div class=\"row\">
                    <div class=\"col-xs-6\">";
                    // line 132
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 133
                        echo "                      ";
                        if ((twig_get_attribute($this->env, $this->source, $context["extension"], "rating", [], "any", false, false, false, 133) >= $context["i"])) {
                            echo "<i class=\"fa fa-star\"></i>";
                        } else {
                            echo "<i class=\"fa fa-star-o\"></i>";
                        }
                        // line 134
                        echo "                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo "</div>
                    <div class=\"col-xs-6\">
                      <div class=\"text-right\">";
                    // line 136
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "rating_total", [], "any", false, false, false, 136);
                    echo " ";
                    echo ($context["text_reviews"] ?? null);
                    echo "</div>
                    </div>
                  </div>
                </div>
              </section>
            </div>
            ";
                }
                // line 143
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " </div>
          ";
        } else {
            // line 145
            echo "          <p class=\"text-center\">";
            echo ($context["text_no_results"] ?? null);
            echo "</p>
          ";
        }
        // line 146
        echo " </div>
        <div class=\"row\">
          <div class=\"col-sm-12 text-center\">";
        // line 148
        echo ($context["pagination"] ?? null);
        echo "</div>
        </div>
      </div>
    </div>
  </div>
<script type=\"text/javascript\"><!--
\$('#button-filter').on('click', function(e) {
\tvar url = 'index.php?route=marketplace/opencartforum&user_token=";
        // line 155
        echo ($context["user_token"] ?? null);
        echo "';

\tvar input = \$('#extension-filter :input');

\tfor (i = 0; i < input.length; i++) {
\t\tif (\$(input[i]).val() != '' && \$(input[i]).val() != null) {
\t\t\turl += '&' + \$(input[i]).attr('name') + '=' + \$(input[i]).val()
\t\t}
\t}

\tlocation = url;
});

\$('input[name=\"filter_search\"]').keydown(function(e) {
\tif (e.keyCode == 13) {
\t\te.preventDefault();

\t\t\$('#button-filter').trigger('click');
\t}
});
//--></script></div>
";
        // line 176
        echo ($context["footer"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "marketplace/opencartforum_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  468 => 176,  444 => 155,  434 => 148,  430 => 146,  424 => 145,  415 => 143,  403 => 136,  394 => 134,  387 => 133,  383 => 132,  377 => 129,  371 => 128,  362 => 126,  357 => 124,  353 => 122,  351 => 121,  348 => 120,  343 => 119,  341 => 118,  338 => 117,  328 => 114,  316 => 107,  307 => 105,  300 => 104,  296 => 103,  290 => 100,  284 => 99,  275 => 97,  270 => 95,  266 => 93,  263 => 92,  259 => 91,  256 => 90,  254 => 89,  243 => 80,  237 => 79,  226 => 73,  220 => 69,  209 => 63,  203 => 59,  200 => 58,  196 => 57,  179 => 47,  164 => 46,  160 => 45,  150 => 38,  146 => 37,  142 => 36,  138 => 35,  134 => 34,  130 => 33,  127 => 32,  116 => 30,  112 => 29,  109 => 28,  103 => 27,  95 => 25,  92 => 24,  88 => 23,  82 => 22,  74 => 17,  66 => 11,  55 => 9,  51 => 8,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "marketplace/opencartforum_list.twig", "");
    }
}
