<?php

/* admin/products/resimler/_delete_form.html.twig */
class __TwigTemplate_b6727c8a0cb33c1125c203263db79aad2a7f3ab658a8c3b147f325316b759182 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/products/resimler/_delete_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/products/resimler/_delete_form.html.twig"));

        // line 1
        echo "<form method=\"post\" action=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("resimler_delete", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["resimler"]) || array_key_exists("resimler", $context) ? $context["resimler"] : (function () { throw new Twig_Error_Runtime('Variable "resimler" does not exist.', 1, $this->source); })()), "id", array()))), "html", null, true);
        echo "\" onsubmit=\"return confirm('Resimi silmek istediğinize emin misiniz ?');\">
    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, (isset($context["resimler"]) || array_key_exists("resimler", $context) ? $context["resimler"] : (function () { throw new Twig_Error_Runtime('Variable "resimler" does not exist.', 3, $this->source); })()), "id", array()))), "html", null, true);
        echo "\">
    <button style=\"margin-left:5px;\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-trash\"></i></button>
</form>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/products/resimler/_delete_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 3,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<form method=\"post\" action=\"{{ path('resimler_delete', {'id': resimler.id}) }}\" onsubmit=\"return confirm('Resimi silmek istediğinize emin misiniz ?');\">
    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ resimler.id) }}\">
    <button style=\"margin-left:5px;\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-trash\"></i></button>
</form>
", "admin/products/resimler/_delete_form.html.twig", "C:\\xampp\\htdocs\\PhpOdev-2\\templates\\admin\\products\\resimler\\_delete_form.html.twig");
    }
}
