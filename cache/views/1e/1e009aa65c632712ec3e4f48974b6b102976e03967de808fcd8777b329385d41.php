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

/* 404.twig.html */
class __TwigTemplate_5dfd16078401e9cbf701be978e522aba7ca297456586d73ba891f193dc0bba2e extends \Twig\Template
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
        // line 3
        return "templategen.twig.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("templategen.twig.html", "404.twig.html", 3);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/app.css\" />
";
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    <div class=\"d-flex justify-content-center align-items-center\" id=\"main\">
        <h1 class=\"mr-3 pr-3 align-top border-right inline-block align-content-center\">404</h1>
        <div class=\"inline-block align-middle\">
            <h2 class=\"font-weight-normal lead\" id=\"desc\">The page you requested was not found.</h2>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "404.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 8,  56 => 7,  51 => 5,  47 => 4,  36 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "404.twig.html", "/home/xavi/Documentos/COORDINACIÓN/bootcampValenciaMayo19/php/superframework/templates/404.twig.html");
    }
}
