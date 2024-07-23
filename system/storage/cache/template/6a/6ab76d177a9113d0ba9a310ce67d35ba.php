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
class __TwigTemplate_f46ae51cacf8f4b063030e1d9f1a41cd extends Template
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

\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<title>";
        // line 6
        echo ($context["title"] ?? null);
        echo "</title>
\t\t<meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
\t\t<base href=\"";
        // line 8
        echo ($context["base"] ?? null);
        echo "\"/>
\t\t";
        // line 9
        if (($context["description"] ?? null)) {
            // line 10
            echo "\t\t\t<meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\"/>
\t\t";
        }
        // line 12
        echo "\t\t";
        if (($context["keywords"] ?? null)) {
            // line 13
            echo "\t\t\t<meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\"/>
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
            echo "\"/>
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
        echo "\t\t<!-- Google Web Fonts -->
\t\t<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
\t\t<link
\t\thref=\"https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap\" rel=\"stylesheet\">
\t\t<!-- Font Awesome -->
\t\t<link
\t\thref=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css\" rel=\"stylesheet\">

\t\t<!-- Libraries Stylesheet -->
\t\t<link href=\"catalog/view/theme/multishop/assets/lib/animate/animate.min.css\" rel=\"stylesheet\">
\t\t<link
\t\thref=\"catalog/view/theme/multishop/assets/lib/owlcarousel/assets/owl.carousel.min.css\" rel=\"stylesheet\">
\t\t<!-- Customized Bootstrap Stylesheet -->
\t\t<link href=\"catalog/view/theme/multishop/assets/css/style.css\" rel=\"stylesheet\">

\t\t";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 38
            echo "\t\t\t<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 38);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 38);
            echo "\"/>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 41
            echo "\t\t\t";
            echo $context["analytic"];
            echo "
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "\t</head>
\t<body>
\t\t<!-- Topbar Start -->
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"row bg-secondary py-1 px-xl-5\">
\t\t\t\t<div class=\"col-lg-6 d-none d-lg-block\">
\t\t\t\t\t<div class=\"d-inline-flex align-items-center h-100\">
\t\t\t\t\t\t<a class=\"text-body mr-3\" href=\"\">About</a>
\t\t\t\t\t\t<a class=\"text-body mr-3\" href=\"\">Contact</a>
\t\t\t\t\t\t<a class=\"text-body mr-3\" href=\"\">Help</a>
\t\t\t\t\t\t<a class=\"text-body mr-3\" href=\"\">FAQs</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-6 text-center text-lg-right\">
\t\t\t\t\t<div class=\"d-inline-flex align-items-center\">
\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm btn-light dropdown-toggle\" data-toggle=\"dropdown\">My Account</button>
\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right\">
\t\t\t\t\t\t\t\t<button class=\"dropdown-item\" type=\"button\">Sign in</button>
\t\t\t\t\t\t\t\t<button class=\"dropdown-item\" type=\"button\">Sign up</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"btn-group mx-2\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm btn-light dropdown-toggle\" data-toggle=\"dropdown\">USD</button>
\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right\">
\t\t\t\t\t\t\t\t<button class=\"dropdown-item\" type=\"button\">EUR</button>
\t\t\t\t\t\t\t\t<button class=\"dropdown-item\" type=\"button\">GBP</button>
\t\t\t\t\t\t\t\t<button class=\"dropdown-item\" type=\"button\">CAD</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm btn-light dropdown-toggle\" data-toggle=\"dropdown\">EN</button>
\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right\">
\t\t\t\t\t\t\t\t<button class=\"dropdown-item\" type=\"button\">FR</button>
\t\t\t\t\t\t\t\t<button class=\"dropdown-item\" type=\"button\">AR</button>
\t\t\t\t\t\t\t\t<button class=\"dropdown-item\" type=\"button\">RU</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"d-inline-flex align-items-center d-block d-lg-none\">
\t\t\t\t\t\t<a href=\"\" class=\"btn px-0 ml-2\">
\t\t\t\t\t\t\t<i class=\"fas fa-heart text-dark\"></i>
\t\t\t\t\t\t\t<span class=\"badge text-dark border border-dark rounded-circle\" style=\"padding-bottom: 2px;\">0</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"\" class=\"btn px-0 ml-2\">
\t\t\t\t\t\t\t<i class=\"fas fa-shopping-cart text-dark\"></i>
\t\t\t\t\t\t\t<span class=\"badge text-dark border border-dark rounded-circle\" style=\"padding-bottom: 2px;\">0</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex\">
\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t<a href=\"\" class=\"text-decoration-none\">
\t\t\t\t\t\t<span class=\"h1 text-uppercase text-primary bg-dark px-2\">Multi</span>
\t\t\t\t\t\t<span class=\"h1 text-uppercase text-dark bg-primary px-2 ml-n1\">Shop</span>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4 col-6 text-left\">
\t\t\t\t\t<form action=\"\">
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Search for products\">
\t\t\t\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t\t\t\t<span class=\"input-group-text bg-transparent text-primary\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4 col-6 text-right\">
\t\t\t\t\t<p class=\"m-0\">Customer Service</p>
\t\t\t\t\t<h5 class=\"m-0\">+012 345 6789</h5>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- Topbar End -->
\t\t<!-- Navbar Start -->
\t\t<div class=\"container-fluid bg-dark mb-30\">
\t\t\t<div class=\"row px-xl-5\">
\t\t\t\t";
        // line 123
        echo ($context["menu"] ?? null);
        echo "
\t\t\t\t<div
\t\t\t\t\tclass=\"col-lg-3 d-none d-lg-block\">";
        // line 150
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-9\">
\t\t\t\t\t<nav class=\"navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0\">
\t\t\t\t\t\t<a href=\"\" class=\"text-decoration-none d-block d-lg-none\">
\t\t\t\t\t\t\t<span class=\"h1 text-uppercase text-dark bg-light px-2\">Multi</span>
\t\t\t\t\t\t\t<span class=\"h1 text-uppercase text-light bg-primary px-2 ml-n1\">Shop</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<button type=\"button\" class=\"navbar-toggler\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\">
\t\t\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<div class=\"collapse navbar-collapse justify-content-between\" id=\"navbarCollapse\">
\t\t\t\t\t\t\t<div class=\"navbar-nav mr-auto py-0\">
\t\t\t\t\t\t\t\t<a href=\"index.html\" class=\"nav-item nav-link active\">Home</a>
\t\t\t\t\t\t\t\t<a href=\"shop.html\" class=\"nav-item nav-link\">Shop</a>
\t\t\t\t\t\t\t\t<a href=\"detail.html\" class=\"nav-item nav-link\">Shop Detail</a>
\t\t\t\t\t\t\t\t<div class=\"nav-item dropdown\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\">Pages
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-down mt-1\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu bg-primary rounded-0 border-0 m-0\">
\t\t\t\t\t\t\t\t\t\t<a href=\"cart.html\" class=\"dropdown-item\">Shopping Cart</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"checkout.html\" class=\"dropdown-item\">Checkout</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<a href=\"contact.html\" class=\"nav-item nav-link\">Contact</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"navbar-nav ml-auto py-0 d-none d-lg-block\">
\t\t\t\t\t\t\t\t<a href=\"\" class=\"btn px-0\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-heart text-primary\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"badge text-secondary border border-secondary rounded-circle\" style=\"padding-bottom: 2px;\">0</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"\" class=\"btn px-0 ml-3\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-shopping-cart text-primary\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"badge text-secondary border border-secondary rounded-circle\" style=\"padding-bottom: 2px;\">0</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- Navbar End -->
\t</body>
</html>
";
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
        return array (  242 => 150,  237 => 123,  155 => 43,  146 => 41,  141 => 40,  130 => 38,  126 => 37,  109 => 22,  100 => 20,  95 => 19,  82 => 17,  78 => 16,  75 => 15,  69 => 13,  66 => 12,  60 => 10,  58 => 9,  54 => 8,  49 => 6,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "multishop/template/common/header.twig", "");
    }
}
