<?php

/* admin/setting/index.html.twig */
class __TwigTemplate_2f984020d7360cea885384dfeb184928c7778ec42dd0917fe64ec4aa7a92d347 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("adminbase.html.twig", "admin/setting/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'sidebar' => array($this, 'block_sidebar'),
            'navbar' => array($this, 'block_navbar'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "adminbase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/setting/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/setting/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Admin Dashboard";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        echo " ";
        echo twig_include($this->env, $context, "admin/sidebar.twig");
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        echo " ";
        echo twig_include($this->env, $context, "admin/navbar.twig");
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "    ";
        // line 11
        echo "    <form name=\"setting\" method=\"post\">
        <div style=\"width:98%;margin-left:1%;\" class=\"form-panel\">
            <div class=\"panel-heading\">
                <ul class=\"nav nav-tabs nav-justified\">
                    <li class=\"active\">
                        <a class=\"btn btn-primary\" data-toggle=\"tab\" style=\"color:white;text-transform: capitalize;font-weight:bolder;\" href=\"#genel\" aria-expanded=\"true\">Genel Bilgiler</a>
                    </li>
                    <li class=\"\">
                        <a class=\"btn btn-primary\" data-toggle=\"tab\" style=\"color:white;text-transform: capitalize;font-weight:bolder;\" href=\"#emailsw\" class=\"contact-map\" aria-expanded=\"false\">Email Server</a>
                    </li>
                    <li class=\"\">
                        <a class=\"btn btn-primary\" data-toggle=\"tab\" style=\"color:white;text-transform: capitalize;font-weight:bolder;\" href=\"#aboutus\" class=\"contact-map\" aria-expanded=\"false\">Hakkımızda</a>
                    </li>
                    <li class=\"\">
                        <a class=\"btn btn-primary\" data-toggle=\"tab\" style=\"color:white;text-transform: capitalize;font-weight:bolder;\" href=\"#contact\" class=\"contact-map\" aria-expanded=\"false\">İletişim</a>
                    </li>
                    <li class=\"\">
                        <a class=\"btn btn-primary\" data-toggle=\"tab\" style=\"color:white;text-transform: capitalize;font-weight:bolder;\" href=\"#ref\" class=\"contact-map\" aria-expanded=\"false\">Referanslar</a>
                    </li>
                </ul>
            </div>
            <!-- /panel-heading -->
            <div style=\"margin-top:50px;\" class=\"panel-body\">
                <div class=\"tab-content\">
                    <div id=\"genel\" class=\"tab-pane active\">
                        <div class=\"form-group \">
                            <label class=\"control-label col-lg-2\"  for=\"setting_title\">Başlık</label>
                            <div class=\"col-lg-10\">
                                <input class=\"form-control\"  type=\"text\" id=\"setting_title\" name=\"setting[title]\" maxlength=\"100\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new Twig_Error_Runtime('Variable "setting" does not exist.', 39, $this->source); })()), "title", array()), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div class=\"form-group \">
                            <label class=\"control-label col-lg-2\"  for=\"setting_description\">Açıklama</label>
                            <div class=\"col-lg-10\">
                                <input class=\"form-control\"  type=\"text\" id=\"setting_description\" name=\"setting[description]\" maxlength=\"255\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new Twig_Error_Runtime('Variable "setting" does not exist.', 45, $this->source); })()), "description", array()), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div class=\"form-group \">
                            <label class=\"control-label col-lg-2\"  for=\"setting_keywords\">Anahtar Kelimeler</label>
                            <div class=\"col-lg-10\">
                                <input class=\"form-control\"  type=\"text\" id=\"setting_keywords\" name=\"setting[keywords]\" maxlength=\"255\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new Twig_Error_Runtime('Variable "setting" does not exist.', 51, $this->source); })()), "keywords", array()), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div class=\"form-group \">
                            <label class=\"control-label col-lg-2\"  for=\"setting_company\">Firma Adı</label>
                            <div class=\"col-lg-10\">
                                <input class=\"form-control\"  type=\"text\" id=\"setting_company\" name=\"setting[company]\" maxlength=\"255\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new Twig_Error_Runtime('Variable "setting" does not exist.', 57, $this->source); })()), "company", array()), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div class=\"form-group \">
                            <label class=\"control-label col-lg-2\"  for=\"setting_address\">Adres</label>
                            <div class=\"col-lg-10\">
                                <input class=\"form-control\"  type=\"text\" id=\"setting_address\" name=\"setting[address]\" maxlength=\"255\" value=\"";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new Twig_Error_Runtime('Variable "setting" does not exist.', 63, $this->source); })()), "address", array()), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div class=\"form-group \">
                            <label class=\"control-label col-lg-2\"  for=\"setting_email\">E-Mail Adresi</label>
                            <div class=\"col-lg-10\">
                                <input class=\"form-control\"  type=\"text\" id=\"setting_email\" name=\"setting[email]\" maxlength=\"255\" value=\"";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new Twig_Error_Runtime('Variable "setting" does not exist.', 69, $this->source); })()), "email", array()), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div class=\"form-group \">
                            <label class=\"control-label col-lg-2\"  for=\"setting_phone\">Telefon</label>
                            <div class=\"col-lg-10\">
                                <input class=\"form-control\"  type=\"text\" id=\"setting_phone\" name=\"setting[phone]\" maxlength=\"15\" value=\"";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new Twig_Error_Runtime('Variable "setting" does not exist.', 75, $this->source); })()), "phone", array()), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div class=\"form-group \">
                            <label class=\"control-label col-lg-2\"  for=\"setting_fax\">Fax</label>
                            <div class=\"col-lg-10\">
                                <input class=\"form-control\"  type=\"text\" id=\"setting_fax\" name=\"setting[fax]\" maxlength=\"15\" value=\"";
        // line 81
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new Twig_Error_Runtime('Variable "setting" does not exist.', 81, $this->source); })()), "fax", array()), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div class=\"form-group \">
                            <label class=\"control-label col-lg-2\"  for=\"setting_status\">Durum</label>
                            <div class=\"col-lg-10\">
                                <select name=\"setting[status]\" class=\"form-control\">
                                    <option value=\"";
        // line 88
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new Twig_Error_Runtime('Variable "setting" does not exist.', 88, $this->source); })()), "status", array()), "html", null, true);
        echo "\">
                                        ";
        // line 89
        if ((twig_get_attribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new Twig_Error_Runtime('Variable "setting" does not exist.', 89, $this->source); })()), "status", array()) == "true")) {
            // line 90
            echo "                                            Aktif
                                        ";
        } else {
            // line 92
            echo "                                            Devre Dışı
                                        ";
        }
        // line 94
        echo "                                    </option>
                                    <option value=\"true\">Aktif</option>
                                    <option value=\"false\">Devre Dışı</option>
                                </select>
                            </div>
                        </div>
                        <button style=\"float:right;margin-top:10px;\" class=\"btn btn-primary\">Kaydet</button>
                    </div>
                    <div id=\"emailsw\" class=\"tab-pane\">
                        <div class=\"form-group \">
                            <label class=\"control-label col-lg-2\"  for=\"setting_smtpserver\">SMTP Sunucu Adresi</label>
                            <div class=\"col-lg-10\">
                                <input class=\"form-control\"  type=\"text\" id=\"setting_smtpserver\" name=\"setting[smtpserver]\" maxlength=\"100\" value=\"";
        // line 106
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new Twig_Error_Runtime('Variable "setting" does not exist.', 106, $this->source); })()), "smtpserver", array()), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div class=\"form-group \">
                            <label class=\"control-label col-lg-2\"  for=\"setting_smtpemail\">SMTP E-Mail Adresi</label>
                            <div class=\"col-lg-10\">
                                <input class=\"form-control\"  type=\"text\" id=\"setting_smtpemail\" name=\"setting[smtpemail]\" maxlength=\"255\" value=\"";
        // line 112
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new Twig_Error_Runtime('Variable "setting" does not exist.', 112, $this->source); })()), "smtpemail", array()), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div class=\"form-group \">
                            <label class=\"control-label col-lg-2\"  for=\"setting_smtppassword\">SMTP Sunucu Şifresi</label>
                            <div class=\"col-lg-10\">
                                <input class=\"form-control\"  type=\"text\" id=\"setting_smtppassword\" name=\"setting[smtppassword]\" maxlength=\"255\" value=\"";
        // line 118
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new Twig_Error_Runtime('Variable "setting" does not exist.', 118, $this->source); })()), "smtppassword", array()), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div class=\"form-group \">
                            <label class=\"control-label col-lg-2\"  for=\"setting_smtpport\">SMPT Sunucu Portu</label>
                            <div class=\"col-lg-10\">
                                <input class=\"form-control\"  type=\"number\" id=\"setting_smtpport\" name=\"setting[smtpport]\" value=\"";
        // line 124
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new Twig_Error_Runtime('Variable "setting" does not exist.', 124, $this->source); })()), "smtpport", array()), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <button style=\"float:right;margin-top:10px;\" class=\"btn btn-primary\">Kaydet</button>
                    </div>
                    <div id=\"aboutus\" class=\"tab-pane\">
                        <div class=\"form-group \">
                            <label class=\"control-label col-lg-2\"  for=\"setting_aboutus\">Hakkımızda</label>
                            <div class=\"col-lg-10\">
                                <textarea id=\"abtus\" name=\"setting[aboutus]\" rows=\"10\" cols=\"100\">";
        // line 133
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new Twig_Error_Runtime('Variable "setting" does not exist.', 133, $this->source); })()), "aboutus", array()), "html", null, true);
        echo "</textarea>
                            </div>
                        </div>
                        <button style=\"float:right;margin-top:10px;\" class=\"btn btn-primary\">Kaydet</button>
                    </div>
                    <div style=\"margin-top:-25px;\" id=\"contact\" class=\"tab-pane\">
                        <div class=\"form-group \">
                            <label class=\"control-label col-lg-2\"  for=\"setting_referances\">İletişim</label>
                            <div class=\"col-lg-10\">
                                <textarea id=\"ctc\" name=\"setting[contact]\" rows=\"10\" cols=\"100\">";
        // line 142
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new Twig_Error_Runtime('Variable "setting" does not exist.', 142, $this->source); })()), "contact", array()), "html", null, true);
        echo "</textarea>
                            </div>
                        </div>
                        <button style=\"float:right;margin-top:10px;\" class=\"btn btn-primary\">Kaydet</button >
                    </div>
                    <div id=\"ref\" class=\"tab-pane\">
                        <div class=\"form-group \">
                            <label class=\"control-label col-lg-2\"  for=\"setting_referances\">Referanslar</label>
                            <div class=\"col-lg-10\">
                                <textarea id=\"referances\" name=\"setting[referances]\" rows=\"10\" cols=\"100\">";
        // line 151
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["setting"]) || array_key_exists("setting", $context) ? $context["setting"] : (function () { throw new Twig_Error_Runtime('Variable "setting" does not exist.', 151, $this->source); })()), "referances", array()), "html", null, true);
        echo "</textarea>
                            </div>
                        </div>
                        <button style=\"float:right;margin-top:10px;\" class=\"btn btn-primary\">Kaydet</button >
                    </div>
                </div>
                <!-- /tab-content -->
            </div>
            <!-- /panel-body -->
        </div>
        <script>
            CKEDITOR.replace('abtus');
            CKEDITOR.replace('ctc');
            CKEDITOR.replace('referances');
        </script>
        <input class=\"form-control\"  type=\"hidden\" id=\"setting__token\" name=\"setting[_token]\" value=\"ujz6NglPwcqcY77WUVEsZkuuyciPjUoivP0Z1yparUI\">
    </form>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/setting/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  308 => 151,  296 => 142,  284 => 133,  272 => 124,  263 => 118,  254 => 112,  245 => 106,  231 => 94,  227 => 92,  223 => 90,  221 => 89,  217 => 88,  207 => 81,  198 => 75,  189 => 69,  180 => 63,  171 => 57,  162 => 51,  153 => 45,  144 => 39,  114 => 11,  112 => 10,  103 => 9,  84 => 7,  65 => 5,  47 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'adminbase.html.twig' %}

{% block title %}Admin Dashboard{% endblock %}

{% block sidebar %} {{ include ('admin/sidebar.twig') }}{% endblock %}

{% block navbar %} {{ include ('admin/navbar.twig') }}{% endblock %}

{% block content %}
    {#{{ include('alerts.html.twig') }}#}
    <form name=\"setting\" method=\"post\">
        <div style=\"width:98%;margin-left:1%;\" class=\"form-panel\">
            <div class=\"panel-heading\">
                <ul class=\"nav nav-tabs nav-justified\">
                    <li class=\"active\">
                        <a class=\"btn btn-primary\" data-toggle=\"tab\" style=\"color:white;text-transform: capitalize;font-weight:bolder;\" href=\"#genel\" aria-expanded=\"true\">Genel Bilgiler</a>
                    </li>
                    <li class=\"\">
                        <a class=\"btn btn-primary\" data-toggle=\"tab\" style=\"color:white;text-transform: capitalize;font-weight:bolder;\" href=\"#emailsw\" class=\"contact-map\" aria-expanded=\"false\">Email Server</a>
                    </li>
                    <li class=\"\">
                        <a class=\"btn btn-primary\" data-toggle=\"tab\" style=\"color:white;text-transform: capitalize;font-weight:bolder;\" href=\"#aboutus\" class=\"contact-map\" aria-expanded=\"false\">Hakkımızda</a>
                    </li>
                    <li class=\"\">
                        <a class=\"btn btn-primary\" data-toggle=\"tab\" style=\"color:white;text-transform: capitalize;font-weight:bolder;\" href=\"#contact\" class=\"contact-map\" aria-expanded=\"false\">İletişim</a>
                    </li>
                    <li class=\"\">
                        <a class=\"btn btn-primary\" data-toggle=\"tab\" style=\"color:white;text-transform: capitalize;font-weight:bolder;\" href=\"#ref\" class=\"contact-map\" aria-expanded=\"false\">Referanslar</a>
                    </li>
                </ul>
            </div>
            <!-- /panel-heading -->
            <div style=\"margin-top:50px;\" class=\"panel-body\">
                <div class=\"tab-content\">
                    <div id=\"genel\" class=\"tab-pane active\">
                        <div class=\"form-group \">
                            <label class=\"control-label col-lg-2\"  for=\"setting_title\">Başlık</label>
                            <div class=\"col-lg-10\">
                                <input class=\"form-control\"  type=\"text\" id=\"setting_title\" name=\"setting[title]\" maxlength=\"100\" value=\"{{ setting.title }}\">
                            </div>
                        </div>
                        <div class=\"form-group \">
                            <label class=\"control-label col-lg-2\"  for=\"setting_description\">Açıklama</label>
                            <div class=\"col-lg-10\">
                                <input class=\"form-control\"  type=\"text\" id=\"setting_description\" name=\"setting[description]\" maxlength=\"255\" value=\"{{ setting.description }}\">
                            </div>
                        </div>
                        <div class=\"form-group \">
                            <label class=\"control-label col-lg-2\"  for=\"setting_keywords\">Anahtar Kelimeler</label>
                            <div class=\"col-lg-10\">
                                <input class=\"form-control\"  type=\"text\" id=\"setting_keywords\" name=\"setting[keywords]\" maxlength=\"255\" value=\"{{ setting.keywords }}\">
                            </div>
                        </div>
                        <div class=\"form-group \">
                            <label class=\"control-label col-lg-2\"  for=\"setting_company\">Firma Adı</label>
                            <div class=\"col-lg-10\">
                                <input class=\"form-control\"  type=\"text\" id=\"setting_company\" name=\"setting[company]\" maxlength=\"255\" value=\"{{ setting.company }}\">
                            </div>
                        </div>
                        <div class=\"form-group \">
                            <label class=\"control-label col-lg-2\"  for=\"setting_address\">Adres</label>
                            <div class=\"col-lg-10\">
                                <input class=\"form-control\"  type=\"text\" id=\"setting_address\" name=\"setting[address]\" maxlength=\"255\" value=\"{{ setting.address }}\">
                            </div>
                        </div>
                        <div class=\"form-group \">
                            <label class=\"control-label col-lg-2\"  for=\"setting_email\">E-Mail Adresi</label>
                            <div class=\"col-lg-10\">
                                <input class=\"form-control\"  type=\"text\" id=\"setting_email\" name=\"setting[email]\" maxlength=\"255\" value=\"{{ setting.email }}\">
                            </div>
                        </div>
                        <div class=\"form-group \">
                            <label class=\"control-label col-lg-2\"  for=\"setting_phone\">Telefon</label>
                            <div class=\"col-lg-10\">
                                <input class=\"form-control\"  type=\"text\" id=\"setting_phone\" name=\"setting[phone]\" maxlength=\"15\" value=\"{{ setting.phone }}\">
                            </div>
                        </div>
                        <div class=\"form-group \">
                            <label class=\"control-label col-lg-2\"  for=\"setting_fax\">Fax</label>
                            <div class=\"col-lg-10\">
                                <input class=\"form-control\"  type=\"text\" id=\"setting_fax\" name=\"setting[fax]\" maxlength=\"15\" value=\"{{ setting.fax }}\">
                            </div>
                        </div>
                        <div class=\"form-group \">
                            <label class=\"control-label col-lg-2\"  for=\"setting_status\">Durum</label>
                            <div class=\"col-lg-10\">
                                <select name=\"setting[status]\" class=\"form-control\">
                                    <option value=\"{{ setting.status }}\">
                                        {% if setting.status == 'true' %}
                                            Aktif
                                        {% else %}
                                            Devre Dışı
                                        {% endif %}
                                    </option>
                                    <option value=\"true\">Aktif</option>
                                    <option value=\"false\">Devre Dışı</option>
                                </select>
                            </div>
                        </div>
                        <button style=\"float:right;margin-top:10px;\" class=\"btn btn-primary\">Kaydet</button>
                    </div>
                    <div id=\"emailsw\" class=\"tab-pane\">
                        <div class=\"form-group \">
                            <label class=\"control-label col-lg-2\"  for=\"setting_smtpserver\">SMTP Sunucu Adresi</label>
                            <div class=\"col-lg-10\">
                                <input class=\"form-control\"  type=\"text\" id=\"setting_smtpserver\" name=\"setting[smtpserver]\" maxlength=\"100\" value=\"{{ setting.smtpserver }}\">
                            </div>
                        </div>
                        <div class=\"form-group \">
                            <label class=\"control-label col-lg-2\"  for=\"setting_smtpemail\">SMTP E-Mail Adresi</label>
                            <div class=\"col-lg-10\">
                                <input class=\"form-control\"  type=\"text\" id=\"setting_smtpemail\" name=\"setting[smtpemail]\" maxlength=\"255\" value=\"{{ setting.smtpemail }}\">
                            </div>
                        </div>
                        <div class=\"form-group \">
                            <label class=\"control-label col-lg-2\"  for=\"setting_smtppassword\">SMTP Sunucu Şifresi</label>
                            <div class=\"col-lg-10\">
                                <input class=\"form-control\"  type=\"text\" id=\"setting_smtppassword\" name=\"setting[smtppassword]\" maxlength=\"255\" value=\"{{ setting.smtppassword }}\">
                            </div>
                        </div>
                        <div class=\"form-group \">
                            <label class=\"control-label col-lg-2\"  for=\"setting_smtpport\">SMPT Sunucu Portu</label>
                            <div class=\"col-lg-10\">
                                <input class=\"form-control\"  type=\"number\" id=\"setting_smtpport\" name=\"setting[smtpport]\" value=\"{{ setting.smtpport }}\">
                            </div>
                        </div>
                        <button style=\"float:right;margin-top:10px;\" class=\"btn btn-primary\">Kaydet</button>
                    </div>
                    <div id=\"aboutus\" class=\"tab-pane\">
                        <div class=\"form-group \">
                            <label class=\"control-label col-lg-2\"  for=\"setting_aboutus\">Hakkımızda</label>
                            <div class=\"col-lg-10\">
                                <textarea id=\"abtus\" name=\"setting[aboutus]\" rows=\"10\" cols=\"100\">{{ setting.aboutus }}</textarea>
                            </div>
                        </div>
                        <button style=\"float:right;margin-top:10px;\" class=\"btn btn-primary\">Kaydet</button>
                    </div>
                    <div style=\"margin-top:-25px;\" id=\"contact\" class=\"tab-pane\">
                        <div class=\"form-group \">
                            <label class=\"control-label col-lg-2\"  for=\"setting_referances\">İletişim</label>
                            <div class=\"col-lg-10\">
                                <textarea id=\"ctc\" name=\"setting[contact]\" rows=\"10\" cols=\"100\">{{ setting.contact }}</textarea>
                            </div>
                        </div>
                        <button style=\"float:right;margin-top:10px;\" class=\"btn btn-primary\">Kaydet</button >
                    </div>
                    <div id=\"ref\" class=\"tab-pane\">
                        <div class=\"form-group \">
                            <label class=\"control-label col-lg-2\"  for=\"setting_referances\">Referanslar</label>
                            <div class=\"col-lg-10\">
                                <textarea id=\"referances\" name=\"setting[referances]\" rows=\"10\" cols=\"100\">{{ setting.referances }}</textarea>
                            </div>
                        </div>
                        <button style=\"float:right;margin-top:10px;\" class=\"btn btn-primary\">Kaydet</button >
                    </div>
                </div>
                <!-- /tab-content -->
            </div>
            <!-- /panel-body -->
        </div>
        <script>
            CKEDITOR.replace('abtus');
            CKEDITOR.replace('ctc');
            CKEDITOR.replace('referances');
        </script>
        <input class=\"form-control\"  type=\"hidden\" id=\"setting__token\" name=\"setting[_token]\" value=\"ujz6NglPwcqcY77WUVEsZkuuyciPjUoivP0Z1yparUI\">
    </form>
{% endblock %}
", "admin/setting/index.html.twig", "/opt/lampp/htdocs/shivaphp/templates/admin/setting/index.html.twig");
    }
}
