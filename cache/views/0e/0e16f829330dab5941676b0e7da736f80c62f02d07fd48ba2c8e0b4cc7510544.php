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

/* template.twig.html */
class __TwigTemplate_8b133003a23a5c31b8854c005745b07c3fe8b13f3a320f04034d6242c1119cd4 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
    <title>Document</title>
</head>
<body>
    <header>
        <ul class=\"nav justify-content-end\">
            ";
        // line 13
        if (twig_test_empty(($context["user"] ?? null))) {
            // line 14
            echo "            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/login\">Login</a>
            </li>
            <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/register\">Registro</a>
            </li>
            ";
        }
        // line 21
        echo "            ";
        if (($context["user"] ?? null)) {
            // line 22
            echo "            <div class=\"dropdown\">
                <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" id=\"dropdownMenu2\" data-togle=\"dropdown\" aria-expanded=\"false\">
                    ";
            // line 24
            echo twig_escape_filter($this->env, ($context["user"] ?? null), "html", null, true);
            echo "
                </button>
                <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu2\">
                    <a class=\"dropdown-item\" type=\"button\" href=\"/paneldecontrol\">Panel de Control</a>
                    <a class=\"dropdown-item\" type=\"button\" href=\"/perfil\">Perfil</a>
                    <a class=\"dropdown-item\" type=\"button\" href=\"/salir\">Salir</a>
                </div>
            </div>
            ";
        }
        // line 33
        echo "        </ul>
    </header>
  
    ";
        // line 36
        $this->displayBlock('body', $context, $blocks);
        // line 38
        echo "
<script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\" integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\" crossorigin=\"anonymous\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>
</body>
</html>";
    }

    // line 36
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "    ";
    }

    public function getTemplateName()
    {
        return "template.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 37,  98 => 36,  89 => 38,  87 => 36,  82 => 33,  70 => 24,  66 => 22,  63 => 21,  54 => 14,  52 => 13,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "template.twig.html", "/home/xavi/Documentos/COORDINACIÓN/bootcampValenciaMayo19/php/superframework/templates/template.twig.html");
    }
}
