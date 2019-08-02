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

/* form-post.twig.html */
class __TwigTemplate_5a27713fc015197e6bf6e6d68f86ea454c3393f113bf5e8e812d6615d78ed323 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "template.twig.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("template.twig.html", "form-post.twig.html", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/app.css\" />
";
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo " 
    <div class=\"container\">
        <div class=\"wrapper\">
            <form role=\"form\" method=\"POST\" name=\"";
        // line 10
        echo ((($context["post"] ?? null)) ? ("edit-post") : ("create-post"));
        echo "\" class=\"form-signin\">
                <h3 class=\"form-signing-heading\">";
        // line 11
        echo ((($context["post"] ?? null)) ? ("Modificar") : ("Añadir"));
        echo " Post</h3>
                <hr class=\"colorgraph\"><br/>
                <input type=\"text\" class=\"form-control\" name=\"title\" placeholder=\"Titulo\" value= \"";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 13), "html", null, true);
        echo "\" />
                <textarea class=\"form-control ckeditor\" name=\"body\" placeholder=\"body\"> ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "body", [], "any", false, false, false, 14), "html", null, true);
        echo "</textarea>
                <button class=\"btn btn-lg btn-primary btn-block\" name=\"submit\" value=\"create\">";
        // line 15
        echo ((($context["post"] ?? null)) ? ("Modificar") : ("Añadir"));
        echo "</button>
            </form>
            ";
        // line 17
        if (($context["error"] ?? null)) {
            // line 18
            echo "            <div class=\"alert alert-danger\" role=\"alert\">
                ";
            // line 19
            echo twig_escape_filter($this->env, ($context["error"] ?? null), "html", null, true);
            echo "
            </div>
        ";
        }
        // line 22
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "form-post.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 22,  92 => 19,  89 => 18,  87 => 17,  82 => 15,  78 => 14,  74 => 13,  69 => 11,  65 => 10,  60 => 7,  56 => 6,  51 => 4,  47 => 3,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "form-post.twig.html", "/home/xavi/Documentos/COORDINACIÓN/bootcampValenciaMayo19/php/superframework/templates/form-post.twig.html");
    }
}
