<?php

/* admin/navbar.twig */
class __TwigTemplate_9c9a739b68073d43bf01c1d978cd2086694eed5c3f9a0602101191456ea5c943 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/navbar.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/navbar.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top \">
    <div class=\"container-fluid\">
        <div class=\"navbar-wrapper\">
            <a class=\"navbar-brand\" href=\"#pablo\">Admin Dashboard</a>
        </div>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" aria-controls=\"navigation-index\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"navbar-toggler-icon icon-bar\"></span>
            <span class=\"navbar-toggler-icon icon-bar\"></span>
            <span class=\"navbar-toggler-icon icon-bar\"></span>
        </button>
        <div class=\"collapse navbar-collapse justify-content-end\">
            <form class=\"navbar-form\">
                <div class=\"input-group no-border\">
                    <input type=\"text\" value=\"\" class=\"form-control\" placeholder=\"Search...\">
                    <button type=\"submit\" class=\"btn btn-white btn-round btn-just-icon\">
                        <i class=\"material-icons\">search</i>
                        <div class=\"ripple-container\"></div>
                    </button>
                </div>
            </form>
            <ul class=\"navbar-nav\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#pablo\">
                        <i class=\"material-icons\">dashboard</i>
                        <p class=\"d-lg-none d-md-block\">
                            Stats
                        </p>
                    </a>
                </li>
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link\" href=\"http://example.com\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <i class=\"material-icons\">notifications</i>
                        <span class=\"notification\">5</span>
                        <p class=\"d-lg-none d-md-block\">
                            Some Actions
                        </p>
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownMenuLink\">
                        <a class=\"dropdown-item\" href=\"#\">Mike John responded to your email</a>
                        <a class=\"dropdown-item\" href=\"#\">You have 5 new tasks</a>
                        <a class=\"dropdown-item\" href=\"#\">You're now friend with Andrew</a>
                        <a class=\"dropdown-item\" href=\"#\">Another Notification</a>
                        <a class=\"dropdown-item\" href=\"#\">Another One</a>
                    </div>
                </li>
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link\" href=\"#pablo\" id=\"navbarDropdownProfile\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <i class=\"material-icons\">person</i>
                        <p class=\"d-lg-none d-md-block\">
                            Account
                        </p>
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownProfile\">
                        <a class=\"dropdown-item\" href=\"#\">Profile</a>
                        <a class=\"dropdown-item\" href=\"#\">Settings</a>
                        <div class=\"dropdown-divider\"></div>
                        <a class=\"dropdown-item\" href=\"#\">Log out</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/navbar.twig";
    }

    public function getDebugInfo()
    {
        return array (  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top \">
    <div class=\"container-fluid\">
        <div class=\"navbar-wrapper\">
            <a class=\"navbar-brand\" href=\"#pablo\">Admin Dashboard</a>
        </div>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" aria-controls=\"navigation-index\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"navbar-toggler-icon icon-bar\"></span>
            <span class=\"navbar-toggler-icon icon-bar\"></span>
            <span class=\"navbar-toggler-icon icon-bar\"></span>
        </button>
        <div class=\"collapse navbar-collapse justify-content-end\">
            <form class=\"navbar-form\">
                <div class=\"input-group no-border\">
                    <input type=\"text\" value=\"\" class=\"form-control\" placeholder=\"Search...\">
                    <button type=\"submit\" class=\"btn btn-white btn-round btn-just-icon\">
                        <i class=\"material-icons\">search</i>
                        <div class=\"ripple-container\"></div>
                    </button>
                </div>
            </form>
            <ul class=\"navbar-nav\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#pablo\">
                        <i class=\"material-icons\">dashboard</i>
                        <p class=\"d-lg-none d-md-block\">
                            Stats
                        </p>
                    </a>
                </li>
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link\" href=\"http://example.com\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <i class=\"material-icons\">notifications</i>
                        <span class=\"notification\">5</span>
                        <p class=\"d-lg-none d-md-block\">
                            Some Actions
                        </p>
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownMenuLink\">
                        <a class=\"dropdown-item\" href=\"#\">Mike John responded to your email</a>
                        <a class=\"dropdown-item\" href=\"#\">You have 5 new tasks</a>
                        <a class=\"dropdown-item\" href=\"#\">You're now friend with Andrew</a>
                        <a class=\"dropdown-item\" href=\"#\">Another Notification</a>
                        <a class=\"dropdown-item\" href=\"#\">Another One</a>
                    </div>
                </li>
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link\" href=\"#pablo\" id=\"navbarDropdownProfile\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <i class=\"material-icons\">person</i>
                        <p class=\"d-lg-none d-md-block\">
                            Account
                        </p>
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownProfile\">
                        <a class=\"dropdown-item\" href=\"#\">Profile</a>
                        <a class=\"dropdown-item\" href=\"#\">Settings</a>
                        <div class=\"dropdown-divider\"></div>
                        <a class=\"dropdown-item\" href=\"#\">Log out</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
", "admin/navbar.twig", "/opt/lampp/htdocs/shivaphp/templates/admin/navbar.twig");
    }
}
