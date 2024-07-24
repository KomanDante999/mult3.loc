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

/* multishop/template/common/footer.twig */
class __TwigTemplate_d101212dce43d21a7a0ae7457d1d5242 extends Template
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
        echo "<!-- Footer Start -->
<div class=\"container-fluid bg-dark text-secondary mt-5 pt-5\">
\t<div class=\"row px-xl-5 pt-5\">
\t\t<div class=\"col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5\">
\t\t\t<h5 class=\"text-secondary text-uppercase mb-4\">Get In Touch</h5>
\t\t\t<p class=\"mb-4\">No dolore ipsum accusam no lorem. Invidunt sed clita kasd clita et et dolor sed dolor. Rebum tempor no vero est magna amet no</p>
\t\t\t<p class=\"mb-2\">
\t\t\t\t<i class=\"fa fa-map-marker-alt text-primary mr-3\"></i>123 Street, New York, USA</p>
\t\t\t<p class=\"mb-2\">
\t\t\t\t<i class=\"fa fa-envelope text-primary mr-3\"></i>info@example.com</p>
\t\t\t<p class=\"mb-0\">
\t\t\t\t<i class=\"fa fa-phone-alt text-primary mr-3\"></i>+012 345 67890</p>
\t\t</div>
\t\t<div class=\"col-lg-8 col-md-12\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4 mb-5\">
\t\t\t\t\t<h5 class=\"text-secondary text-uppercase mb-4\">Quick Shop</h5>
\t\t\t\t\t<div class=\"d-flex flex-column justify-content-start\">
\t\t\t\t\t\t<a class=\"text-secondary mb-2\" href=\"#\">
\t\t\t\t\t\t\t<i class=\"fa fa-angle-right mr-2\"></i>Home</a>
\t\t\t\t\t\t<a class=\"text-secondary mb-2\" href=\"#\">
\t\t\t\t\t\t\t<i class=\"fa fa-angle-right mr-2\"></i>Our Shop</a>
\t\t\t\t\t\t<a class=\"text-secondary mb-2\" href=\"#\">
\t\t\t\t\t\t\t<i class=\"fa fa-angle-right mr-2\"></i>Shop Detail</a>
\t\t\t\t\t\t<a class=\"text-secondary mb-2\" href=\"#\">
\t\t\t\t\t\t\t<i class=\"fa fa-angle-right mr-2\"></i>Shopping Cart</a>
\t\t\t\t\t\t<a class=\"text-secondary mb-2\" href=\"#\">
\t\t\t\t\t\t\t<i class=\"fa fa-angle-right mr-2\"></i>Checkout</a>
\t\t\t\t\t\t<a class=\"text-secondary\" href=\"#\">
\t\t\t\t\t\t\t<i class=\"fa fa-angle-right mr-2\"></i>Contact Us</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 mb-5\">
\t\t\t\t\t<h5 class=\"text-secondary text-uppercase mb-4\">My Account</h5>
\t\t\t\t\t<div class=\"d-flex flex-column justify-content-start\">
\t\t\t\t\t\t<a class=\"text-secondary mb-2\" href=\"#\">
\t\t\t\t\t\t\t<i class=\"fa fa-angle-right mr-2\"></i>Home</a>
\t\t\t\t\t\t<a class=\"text-secondary mb-2\" href=\"#\">
\t\t\t\t\t\t\t<i class=\"fa fa-angle-right mr-2\"></i>Our Shop</a>
\t\t\t\t\t\t<a class=\"text-secondary mb-2\" href=\"#\">
\t\t\t\t\t\t\t<i class=\"fa fa-angle-right mr-2\"></i>Shop Detail</a>
\t\t\t\t\t\t<a class=\"text-secondary mb-2\" href=\"#\">
\t\t\t\t\t\t\t<i class=\"fa fa-angle-right mr-2\"></i>Shopping Cart</a>
\t\t\t\t\t\t<a class=\"text-secondary mb-2\" href=\"#\">
\t\t\t\t\t\t\t<i class=\"fa fa-angle-right mr-2\"></i>Checkout</a>
\t\t\t\t\t\t<a class=\"text-secondary\" href=\"#\">
\t\t\t\t\t\t\t<i class=\"fa fa-angle-right mr-2\"></i>Contact Us</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 mb-5\">
\t\t\t\t\t<h5 class=\"text-secondary text-uppercase mb-4\">Newsletter</h5>
\t\t\t\t\t<p>Duo stet tempor ipsum sit amet magna ipsum tempor est</p>
\t\t\t\t\t<form action=\"\">
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Your Email Address\">
\t\t\t\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-primary\">Sign Up</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t\t<h6 class=\"text-secondary text-uppercase mt-4 mb-3\">Follow Us</h6>
\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t<a class=\"btn btn-primary btn-square mr-2\" href=\"#\">
\t\t\t\t\t\t\t<i class=\"fab fa-twitter\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a class=\"btn btn-primary btn-square mr-2\" href=\"#\">
\t\t\t\t\t\t\t<i class=\"fab fa-facebook-f\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a class=\"btn btn-primary btn-square mr-2\" href=\"#\">
\t\t\t\t\t\t\t<i class=\"fab fa-linkedin-in\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a class=\"btn btn-primary btn-square\" href=\"#\">
\t\t\t\t\t\t\t<i class=\"fab fa-instagram\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"row border-top mx-xl-5 py-4\" style=\"border-color: rgba(256, 256, 256, .1) !important;\">
\t\t<div class=\"col-md-6 px-xl-0\">
\t\t\t<p class=\"mb-md-0 text-center text-md-left text-secondary\">
\t\t\t\t&copy;
\t\t\t\t<a class=\"text-primary\" href=\"#\">Domain</a>. All Rights Reserved. Designed
\t\t\t\t\t\t\t\t\t\t                    by
\t\t\t\t<a class=\"text-primary\" href=\"https://htmlcodex.com\">HTML Codex</a>
\t\t\t</p>
\t\t</div>
\t\t<div class=\"col-md-6 px-xl-0 text-center text-md-right\">
\t\t\t<img class=\"img-fluid\" src=\"catalog/view/theme/multishop/assets/img/payments.png\" alt=\"\">
\t\t</div>
\t</div>
</div>
<!-- Footer End -->


<!-- Back to Top -->
<a href=\"#\" class=\"btn btn-primary back-to-top\">
\t<i class=\"fa fa-angle-double-up\"></i>
</a>

";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 103
            echo "\t<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 103);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 103);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 103);
            echo "\"/>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 106
            echo "\t<script src=\"catalog/view/theme/multishop/assets/";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "

<!-- JavaScript Libraries -->
<script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js\"></script>
<script src=\"catalog/view/theme/multishop/assets/lib/easing/easing.min.js\"></script>
<script src=\"catalog/view/theme/multishop/assets/lib/owlcarousel/owl.carousel.min.js\"></script>

<!-- Contact Javascript File -->
<script src=\"catalog/view/theme/multishop/assets/mail/jqBootstrapValidation.min.js\"></script>
<script src=\"catalog/view/theme/multishop/assets/mail/contact.js\"></script>

<!-- Template Javascript -->
<script src=\"catalog/view/theme/multishop/assets/js/common.js\"></script>
<script src=\"catalog/view/theme/multishop/assets/js/main.js\"></script></body></html>
";
    }

    public function getTemplateName()
    {
        return "multishop/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 108,  161 => 106,  157 => 105,  144 => 103,  140 => 102,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "multishop/template/common/footer.twig", "");
    }
}
