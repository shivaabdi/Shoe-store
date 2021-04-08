<?php

/* admin/message.twig */
class __TwigTemplate_08819523d65cb23713af0e38627b90fc5c17c06c7dde27a7d0bf5494b9b2e193 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/message.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/message.twig"));

        // line 1
        if (((isset($context["bilgi"]) || array_key_exists("bilgi", $context) ? $context["bilgi"] : (function () { throw new Twig_Error_Runtime('Variable "bilgi" does not exist.', 1, $this->source); })()) != "")) {
            // line 2
            if (((isset($context["bilgi"]) || array_key_exists("bilgi", $context) ? $context["bilgi"] : (function () { throw new Twig_Error_Runtime('Variable "bilgi" does not exist.', 2, $this->source); })()) == "1")) {
                // line 3
                echo "    <div class=\"alert alert-success\"><b>İşlem Başarılı!</b>";
                echo twig_escape_filter($this->env, (isset($context["yazi"]) || array_key_exists("yazi", $context) ? $context["yazi"] : (function () { throw new Twig_Error_Runtime('Variable "yazi" does not exist.', 3, $this->source); })()), "html", null, true);
                echo "</div>
";
            }
            // line 5
            if (((isset($context["bilgi"]) || array_key_exists("bilgi", $context) ? $context["bilgi"] : (function () { throw new Twig_Error_Runtime('Variable "bilgi" does not exist.', 5, $this->source); })()) == "2")) {
                // line 6
                echo "    <div class=\"alert alert-info\"><b>Well done!</b>";
                echo twig_escape_filter($this->env, (isset($context["yazi"]) || array_key_exists("yazi", $context) ? $context["yazi"] : (function () { throw new Twig_Error_Runtime('Variable "yazi" does not exist.', 6, $this->source); })()), "html", null, true);
                echo "</div>
";
            }
            // line 8
            if (((isset($context["bilgi"]) || array_key_exists("bilgi", $context) ? $context["bilgi"] : (function () { throw new Twig_Error_Runtime('Variable "bilgi" does not exist.', 8, $this->source); })()) == "3")) {
                // line 9
                echo "    <div class=\"alert alert-warning\"><b>Well done!</b>";
                echo twig_escape_filter($this->env, (isset($context["yazi"]) || array_key_exists("yazi", $context) ? $context["yazi"] : (function () { throw new Twig_Error_Runtime('Variable "yazi" does not exist.', 9, $this->source); })()), "html", null, true);
                echo "</div>
";
            } else {
                // line 11
                echo "    <div class=\"alert alert-danger\"><b>İşlem Başarısız!</b>";
                echo twig_escape_filter($this->env, (isset($context["yazi"]) || array_key_exists("yazi", $context) ? $context["yazi"] : (function () { throw new Twig_Error_Runtime('Variable "yazi" does not exist.', 11, $this->source); })()), "html", null, true);
                echo "</div>
";
            }
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/message.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 11,  49 => 9,  47 => 8,  41 => 6,  39 => 5,  33 => 3,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if bilgi != '' %}
{% if bilgi == '1' %}
    <div class=\"alert alert-success\"><b>İşlem Başarılı!</b>{{ yazi }}</div>
{% endif %}
{% if bilgi == '2' %}
    <div class=\"alert alert-info\"><b>Well done!</b>{{ yazi }}</div>
{% endif %}
{% if bilgi == '3' %}
    <div class=\"alert alert-warning\"><b>Well done!</b>{{ yazi }}</div>
{% else %}
    <div class=\"alert alert-danger\"><b>İşlem Başarısız!</b>{{ yazi }}</div>
{% endif %}
{% endif %}
", "admin/message.twig", "C:\\xampp\\htdocs\\PhpOdev-2\\templates\\admin\\message.twig");
    }
}
