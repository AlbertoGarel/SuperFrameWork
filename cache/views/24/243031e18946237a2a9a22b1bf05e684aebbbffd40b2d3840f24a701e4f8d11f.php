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

/* dashboard.twig.html */
class __TwigTemplate_a8da4afb5f908b4f574148da18db7c633787f3fab4002ea2803613493c356704 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("template.twig.html", "dashboard.twig.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <h1>PANEL DE CONTROL</h1>

    <a class=\"btn btn-primary\" href=\"/create-post\">Añadir Post</a>
    <table class=\"table\">
        <thead class =\"thead-dark\">
            <tr>
                <th scope =\"col\">#</th>
                <th scope=\"col\">title</th>
                <th scope=\"col\">body</th>
                <th scope=\"col\">Edit</th>
                <th scope=\"col\">Delete</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 19
            echo "                <tr>
                    <th scope=\"row\"> ";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 20), "html", null, true);
            echo " </th>
                    <td> ";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 21), "html", null, true);
            echo " </td>
                    <td> ";
            // line 22
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "body", [], "any", false, false, false, 22), 0, 80), "html", null, true);
            echo "</td>     
                    <td><a class=\"btn btn-success\" href=\"/edit-post/";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 23), "html", null, true);
            echo "\">Editar</a> </td>
                    <td><a id=\"#";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 24), "html", null, true);
            echo "\" class=\"btn btn-danger\" href=\"#\" onclick=\"deleteMsg( '";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 24), "html", null, true);
            echo "','";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 24), "html", null, true);
            echo "')\">Borrar</a></td>    
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "        </tbody>
    </table>

    <!--Modal-->
    <div class=\"modal fade\" id=\"deleteModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Borrar</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">

                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Cerrar</button>
                    <button type=\"button\" class=\"btn btn-danger\">Borrar</button>
                </div>
            </div>
        </div>       
    </div>

";
    }

    public function getTemplateName()
    {
        return "dashboard.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 27,  89 => 24,  85 => 23,  81 => 22,  77 => 21,  73 => 20,  70 => 19,  66 => 18,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dashboard.twig.html", "/home/xavi/Documentos/COORDINACIÓN/bootcampValenciaMayo19/php/superframework/templates/dashboard.twig.html");
    }
}
