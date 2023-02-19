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

/* catalog/view/template/account/login.twig */
class __TwigTemplate_a0f1b37407640a59f52ee84a822d60b7 extends Template
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
        echo "
<div id=\"account-login\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "      <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
  ";
        // line 8
        if (($context["success"] ?? null)) {
            // line 9
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ";
            echo ($context["success"] ?? null);
            echo " <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
  ";
        }
        // line 11
        echo "  ";
        if (($context["error_warning"] ?? null)) {
            // line 12
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo " <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
  ";
        }
        // line 14
        echo "  <div class=\"row\">";
        echo ($context["column_left"] ?? null);
        echo "
    <div id=\"content\" class=\"col\">";
        // line 15
        echo ($context["content_top"] ?? null);
        echo "
      <div class=\"row\">
        <div class=\"col-sm-6\">
          <div class=\"card mb-3\">
            <div class=\"card-body\">
              <h2>";
        // line 20
        echo ($context["text_new_customer"] ?? null);
        echo "</h2>
              <p><strong>";
        // line 21
        echo ($context["text_register"] ?? null);
        echo "</strong></p>
              <p>";
        // line 22
        echo ($context["text_register_account"] ?? null);
        echo "</p>
              <a href=\"";
        // line 23
        echo ($context["register"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a></div>
          </div>
        </div>
        <div class=\"col-sm-6\">
          <div class=\"card mb-3\">
            <div class=\"card-body\">
              <form id=\"form-login\" action=\"";
        // line 29
        echo ($context["login"] ?? null);
        echo "\" method=\"post\" data-oc-toggle=\"ajax\">
                <h2>";
        // line 30
        echo ($context["text_returning_customer"] ?? null);
        echo "</h2>
                <p><strong>";
        // line 31
        echo ($context["text_i_am_returning_customer"] ?? null);
        echo "</strong></p>
                <div class=\"mb-3\">
                  <label for=\"input-email\" class=\"col-form-label\">";
        // line 33
        echo ($context["entry_email"] ?? null);
        echo "</label>
                  <input type=\"text\" name=\"email\" value=\"";
        // line 34
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\"/>
                </div>
                <div class=\"mb-3\">
                  <label for=\"input-password\" class=\"col-form-label\">";
        // line 37
        echo ($context["entry_password"] ?? null);
        echo "</label>
                  <input type=\"password\" name=\"password\" value=\"";
        // line 38
        echo ($context["password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\"/>
                  <a href=\"";
        // line 39
        echo ($context["forgotten"] ?? null);
        echo "\">";
        echo ($context["text_forgotten"] ?? null);
        echo "</a>
                </div>
                <button type=\"submit\" class=\"btn btn-primary\">";
        // line 41
        echo ($context["button_login"] ?? null);
        echo "</button>
                ";
        // line 42
        if (($context["redirect"] ?? null)) {
            // line 43
            echo "                  <input type=\"hidden\" name=\"redirect\" value=\"";
            echo ($context["redirect"] ?? null);
            echo "\"/>
                ";
        }
        // line 45
        echo "              </form>
            </div>
          </div>
        </div>
      </div>
      ";
        // line 50
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 51
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 53
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/account/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 53,  179 => 51,  175 => 50,  168 => 45,  162 => 43,  160 => 42,  156 => 41,  149 => 39,  143 => 38,  139 => 37,  131 => 34,  127 => 33,  122 => 31,  118 => 30,  114 => 29,  103 => 23,  99 => 22,  95 => 21,  91 => 20,  83 => 15,  78 => 14,  72 => 12,  69 => 11,  63 => 9,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/account/login.twig", "C:\\xampp\\htdocs\\opencart\\catalog\\view\\template\\account\\login.twig");
    }
}
