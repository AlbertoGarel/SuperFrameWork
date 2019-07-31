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

/* login.twig.html */
class __TwigTemplate_369fac61b7ddc1ddd7b9c868b57163e02b8a753be3fd241493bc771df8d9c51d extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "template.twig.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("template.twig.html", "login.twig.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    
    <div class=\"container\">
        <div class=\"wrapper\">

            <form role=\"form\" method=\"POST\" name=\"login_form\" class=\"form-signing\">
                <h3 class=\"form-signin-heading\">Login</h3>
                <hr class=\"colorgraph\"><hr/>
                <input type=\"text\" class=\"form-control\" name=\"email\" placeholder=\"Correo electrónico\" required=\"\" autofocus=\"\"/>
                <input type=\"password\" class=\"form-control\" name=\"password\" placehoder=\"Password\" required=\"\" />
                <button class=\"btn btn-lg btn-primary btn-block\" name=\"submit\" value=\"Login\" type=\"Submit\">Login</button>
            </form>
       </div>
    </div>


";
    }

    public function getTemplateName()
    {
        return "login.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "login.twig.html", "/home/xavi/Documentos/COORDINACIÓN/bootcampValenciaMayo19/php/superframework/templates/login.twig.html");
    }
}
