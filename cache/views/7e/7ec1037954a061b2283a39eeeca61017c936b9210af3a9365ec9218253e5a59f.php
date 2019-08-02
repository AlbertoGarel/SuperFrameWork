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

/* profile.twig.html */
class __TwigTemplate_571cc70f6901cb79fccaac6df3b2ae2e6a99baf1507c74aad6a23d9342d68c98 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("template.twig.html", "profile.twig.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    
    <div class=\"container\">
        <div class=\"row my-2\">
            <div class=\"col-lg-8 order-lg-2\">
                <ul class=\"nav nav-tabs\">
                    <li class=\"nav-item\">
                        <a href=\"\" data-target=\"#profile\" data-toggle=\"tab\" class=\"nav-link active\">Profile</a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"\" data-target=\"#edit\" data-toggle=\"tab\" class=\"nav-link\">Edit</a>
                    </li>
                </ul>
                <div class=\"tab-content py-4\">
                    <div class=\"tab-pane active\" id=\"profile\">
                        <h5 class=\"mb-3\">User Profile</h5>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <h6>Name</h6>
                                <p>
                                    ";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "name", [], "any", false, false, false, 23), "html", null, true);
        echo "
                                </p>
                            </div>
                            <div class=\"col-md-6\">
                                <h6>Recent badges</h6>
                                <a href=\"#\" class=\"badge badge-dark badge-pill\">html5</a>
                                <a href=\"#\" class=\"badge badge-dark badge-pill\">react</a>
                                <a href=\"#\" class=\"badge badge-dark badge-pill\">codeply</a>
                                <a href=\"#\" class=\"badge badge-dark badge-pill\">angularjs</a>
                                <a href=\"#\" class=\"badge badge-dark badge-pill\">css3</a>
                                <a href=\"#\" class=\"badge badge-dark badge-pill\">jquery</a>
                                <a href=\"#\" class=\"badge badge-dark badge-pill\">bootstrap</a>
                                <a href=\"#\" class=\"badge badge-dark badge-pill\">responsive-design</a>
                                <hr>
                                <span class=\"badge badge-primary\"><i class=\"fa fa-user\"></i> 900 Post Totales</span>
                                <span class=\"badge badge-success\"><i class=\"fa fa-cog\"></i> 43 Publicados</span>
                                <span class=\"badge badge-danger\"><i class=\"fa fa-eye\"></i> 245 Borradores</span>
                            </div>
                            <div class=\"col-md-12\">
                                <h5 class=\"mt-2\"><span class=\"fa fa-clock-o ion-clock float-right\"></span> Ultimos Posts</h5>
                                <table class=\"table table-sm table-hover table-striped\">
                                    <tbody>                                    
                                        <tr>
                                            <td>
                                                <strong>Abby</strong> joined ACME Project Team in <strong>`Collaboration`</strong>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Gary</strong> deleted My Board1 in <strong>`Discussions`</strong>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Kensington</strong> deleted MyBoard3 in <strong>`Discussions`</strong>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>John</strong> deleted My Board1 in <strong>`Discussions`</strong>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Skell</strong> deleted his post Look at Why this is.. in <strong>`Discussions`</strong>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!--/row-->
                    </div>
                    
                    <div class=\"tab-pane\" id=\"edit\">
                        <form role=\"form\">
                            <div class=\"form-group row\">
                                <label class=\"col-lg-3 col-form-label form-control-label\">Nombre</label>
                                <div class=\"col-lg-9\">
                                    <input class=\"form-control\" type=\"text\" value= ";
        // line 82
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "name", [], "any", false, false, false, 82), "html", null, true);
        echo " >
                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <label class=\"col-lg-3 col-form-label form-control-label\">Email</label>
                                <div class=\"col-lg-9\">
                                    <input class=\"form-control\" type=\"email\" value=\"";
        // line 88
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "email", [], "any", false, false, false, 88), "html", null, true);
        echo "\">
                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <label class=\"col-lg-3 col-form-label form-control-label\">Password</label>
                                <div class=\"col-lg-9\">
                                    <input class=\"form-control\" type=\"password\" value=\"11111122333\">
                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <label class=\"col-lg-3 col-form-label form-control-label\">Confirm password</label>
                                <div class=\"col-lg-9\">
                                    <input class=\"form-control\" type=\"password\" value=\"11111122333\">
                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <label class=\"col-lg-3 col-form-label form-control-label\"></label>
                                <div class=\"col-lg-9\">
                                    <input type=\"reset\" class=\"btn btn-secondary\" value=\"Cancel\">
                                    <input type=\"button\" class=\"btn btn-primary\" value=\"Save Changes\">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 order-lg-1 text-center\">
                <img src=\"//placehold.it/150\" class=\"mx-auto img-fluid img-circle d-block\" alt=\"avatar\">
                <h6 class=\"mt-2\">Upload a different photo</h6>
                <label class=\"custom-file\">
                    <input type=\"file\" id=\"file\" class=\"custom-file-input\">
                    <span class=\"custom-file-control\">Choose file</span>
                </label>
            </div>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "profile.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 88,  133 => 82,  71 => 23,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "profile.twig.html", "/home/xavi/Documentos/COORDINACIÓN/bootcampValenciaMayo19/php/superframework/templates/profile.twig.html");
    }
}
