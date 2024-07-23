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

/* multishop/template/common/header.twig */
class __TwigTemplate_7bbf31a4fb39b03128826d18ddde185c extends Template
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
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 2
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\">

<head>
    <meta charset=\"utf-8\">
    <title>";
        // line 6
        echo ($context["title"] ?? null);
        echo "</title>
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
    <base href=\"";
        // line 8
        echo ($context["base"] ?? null);
        echo "\" />
    ";
        // line 9
        if (($context["description"] ?? null)) {
            // line 10
            echo "\t\t<meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\" />
\t\t";
        }
        // line 12
        echo "\t\t";
        if (($context["keywords"] ?? null)) {
            // line 13
            echo "\t\t<meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\" />
\t\t";
        }
        // line 15
        echo "
\t\t";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 17
            echo "\t\t\t<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 17);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 17);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 17);
            echo "\" />
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 20
            echo "\t\t\t<script src=\"catalog/view/theme/multishop/assets/";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "    <!-- Google Web Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
    <link href=\"https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap\" rel=\"stylesheet\">  
    <!-- Font Awesome -->
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css\" rel=\"stylesheet\">

    <!-- Libraries Stylesheet -->
    <link href=\"catalog/view/theme/multishop/assets/lib/animate/animate.min.css\" rel=\"stylesheet\">
    <link href=\"catalog/view/theme/multishop/assets/lib/owlcarousel/assets/owl.carousel.min.css\" rel=\"stylesheet\">
    <!-- Customized Bootstrap Stylesheet -->
    <link href=\"catalog/view/theme/multishop/assets/css/style.css\" rel=\"stylesheet\">

\t\t";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 35
            echo "\t\t<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 35);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 35);
            echo "\" />
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 38
            echo "\t\t";
            echo $context["analytic"];
            echo "
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "</head>
<body>
    <!-- Topbar Start -->
    <div class=\"container-fluid\">
        <div class=\"row bg-secondary py-1 px-xl-5\">
            <div class=\"col-lg-6 d-none d-lg-block\">
                <div class=\"d-inline-flex align-items-center h-100\">
                    <a class=\"text-body mr-3\" href=\"\">About</a>
                    <a class=\"text-body mr-3\" href=\"\">Contact</a>
                    <a class=\"text-body mr-3\" href=\"\">Help</a>
                    <a class=\"text-body mr-3\" href=\"\">FAQs</a>
                </div>
            </div>
            <div class=\"col-lg-6 text-center text-lg-right\">
                <div class=\"d-inline-flex align-items-center\">
                    <div class=\"btn-group\">
                        <button type=\"button\" class=\"btn btn-sm btn-light dropdown-toggle\" data-toggle=\"dropdown\">My Account</button>
                        <div class=\"dropdown-menu dropdown-menu-right\">
                            <button class=\"dropdown-item\" type=\"button\">Sign in</button>
                            <button class=\"dropdown-item\" type=\"button\">Sign up</button>
                        </div>
                    </div>
                    <div class=\"btn-group mx-2\">
                        <button type=\"button\" class=\"btn btn-sm btn-light dropdown-toggle\" data-toggle=\"dropdown\">USD</button>
                        <div class=\"dropdown-menu dropdown-menu-right\">
                            <button class=\"dropdown-item\" type=\"button\">EUR</button>
                            <button class=\"dropdown-item\" type=\"button\">GBP</button>
                            <button class=\"dropdown-item\" type=\"button\">CAD</button>
                        </div>
                    </div>
                    <div class=\"btn-group\">
                        <button type=\"button\" class=\"btn btn-sm btn-light dropdown-toggle\" data-toggle=\"dropdown\">EN</button>
                        <div class=\"dropdown-menu dropdown-menu-right\">
                            <button class=\"dropdown-item\" type=\"button\">FR</button>
                            <button class=\"dropdown-item\" type=\"button\">AR</button>
                            <button class=\"dropdown-item\" type=\"button\">RU</button>
                        </div>
                    </div>
                </div>
                <div class=\"d-inline-flex align-items-center d-block d-lg-none\">
                    <a href=\"\" class=\"btn px-0 ml-2\">
                        <i class=\"fas fa-heart text-dark\"></i>
                        <span class=\"badge text-dark border border-dark rounded-circle\" style=\"padding-bottom: 2px;\">0</span>
                    </a>
                    <a href=\"\" class=\"btn px-0 ml-2\">
                        <i class=\"fas fa-shopping-cart text-dark\"></i>
                        <span class=\"badge text-dark border border-dark rounded-circle\" style=\"padding-bottom: 2px;\">0</span>
                    </a>
                </div>
            </div>
        </div>
        <div class=\"row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex\">
            <div class=\"col-lg-4\">
                <a href=\"\" class=\"text-decoration-none\">
                    <span class=\"h1 text-uppercase text-primary bg-dark px-2\">Multi</span>
                    <span class=\"h1 text-uppercase text-dark bg-primary px-2 ml-n1\">Shop</span>
                </a>
            </div>
            <div class=\"col-lg-4 col-6 text-left\">
                <form action=\"\">
                    <div class=\"input-group\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"Search for products\">
                        <div class=\"input-group-append\">
                            <span class=\"input-group-text bg-transparent text-primary\">
                                <i class=\"fa fa-search\"></i>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
            <div class=\"col-lg-4 col-6 text-right\">
                <p class=\"m-0\">Customer Service</p>
                <h5 class=\"m-0\">+012 345 6789</h5>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class=\"container-fluid bg-dark mb-30\">
        <div class=\"row px-xl-5\">
            <div class=\"col-lg-3 d-none d-lg-block\">
                ";
        // line 148
        echo "            </div>
            <div class=\"col-lg-9\">
                <nav class=\"navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0\">
                    <a href=\"\" class=\"text-decoration-none d-block d-lg-none\">
                        <span class=\"h1 text-uppercase text-dark bg-light px-2\">Multi</span>
                        <span class=\"h1 text-uppercase text-light bg-primary px-2 ml-n1\">Shop</span>
                    </a>
                    <button type=\"button\" class=\"navbar-toggler\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\">
                        <span class=\"navbar-toggler-icon\"></span>
                    </button>
                    <div class=\"collapse navbar-collapse justify-content-between\" id=\"navbarCollapse\">
                        <div class=\"navbar-nav mr-auto py-0\">
                            <a href=\"index.html\" class=\"nav-item nav-link active\">Home</a>
                            <a href=\"shop.html\" class=\"nav-item nav-link\">Shop</a>
                            <a href=\"detail.html\" class=\"nav-item nav-link\">Shop Detail</a>
                            <div class=\"nav-item dropdown\">
                                <a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\">Pages <i class=\"fa fa-angle-down mt-1\"></i></a>
                                <div class=\"dropdown-menu bg-primary rounded-0 border-0 m-0\">
                                    <a href=\"cart.html\" class=\"dropdown-item\">Shopping Cart</a>
                                    <a href=\"checkout.html\" class=\"dropdown-item\">Checkout</a>
                                </div>
                            </div>
                            <a href=\"contact.html\" class=\"nav-item nav-link\">Contact</a>
                        </div>
                        <div class=\"navbar-nav ml-auto py-0 d-none d-lg-block\">
                            <a href=\"\" class=\"btn px-0\">
                                <i class=\"fas fa-heart text-primary\"></i>
                                <span class=\"badge text-secondary border border-secondary rounded-circle\" style=\"padding-bottom: 2px;\">0</span>
                            </a>
                            <a href=\"\" class=\"btn px-0 ml-3\">
                                <i class=\"fas fa-shopping-cart text-primary\"></i>
                                <span class=\"badge text-secondary border border-secondary rounded-circle\" style=\"padding-bottom: 2px;\">0</span>
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->";
    }

    public function getTemplateName()
    {
        return "multishop/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 148,  152 => 40,  143 => 38,  138 => 37,  127 => 35,  123 => 34,  109 => 22,  100 => 20,  95 => 19,  82 => 17,  78 => 16,  75 => 15,  69 => 13,  66 => 12,  60 => 10,  58 => 9,  54 => 8,  49 => 6,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "multishop/template/common/header.twig", "");
    }
}
