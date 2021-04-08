<?php

/* admin/users/guncelle.twig */
class __TwigTemplate_8a318aa3ea68be63b3ec9ae0df523a0fce399270e976404c2c1e9b6513201dad extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("adminbase.html.twig", "admin/users/guncelle.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'navbar' => array($this, 'block_navbar'),
            'sidebar' => array($this, 'block_sidebar'),
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/users/guncelle.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/users/guncelle.twig"));

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

        echo "Üye Düzenleme";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        echo " ";
        $this->loadTemplate("admin/navbar.twig", "admin/users/guncelle.twig", 5)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        echo " ";
        $this->loadTemplate("admin/sidebar.twig", "admin/users/guncelle.twig", 7)->display($context);
        echo " ";
        
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
        echo "    <div class=\"form-panel\">
        <h4><i class=\"fa fa-angle-right\"></i>Üye Güncelle</h4>
        <hr>
        <div class=\"form\">
            <form class=\"cmxform form-horizontal style-form\" method=\"post\">
                <div class=\"form-group \">
                    <label class=\"control-label col-lg-2\">İsim</label>
                    <div class=\"col-lg-10\">
                        <input class=\" form-control\" id=\"firstname\" name=\"user[name]\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 18, $this->source); })()), "name", array()), "html", null, true);
        echo "\"
                               type=\"text\">
                    </div>
                </div>
                <div class=\"form-group \">
                    <label class=\"control-label col-lg-2\">E-Mail Adresi</label>
                    <div class=\"col-lg-10\">
                        <input class=\" form-control\" id=\"lastname\" name=\"user[email]\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 25, $this->source); })()), "email", array()), "html", null, true);
        echo "\"
                               type=\"text\">
                    </div>
                </div>
                <div class=\"form-group \">
                    <label class=\"control-label col-lg-2\">Telefon Numarası</label>
                    <div class=\"col-lg-10\">
                        <input class=\"form-control\" id=\"username\" name=\"user[phone]\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 32, $this->source); })()), "phone", array()), "html", null, true);
        echo "\"
                               type=\"text\">
                    </div>
                </div>
                <div class=\"form-group \">
                    <label class=\"control-label col-lg-2\">Adres Bilgileri</label>
                    <div class=\"col-lg-10\">
                        <input class=\"form-control\" id=\"username\" name=\"user[address]\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 39, $this->source); })()), "address", array()), "html", null, true);
        echo "\"
                               type=\"text\">
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"control-label col-lg-2\" for=\"user_city\">Şehir</label>
                    <div class=\"col-lg-10\">
                        <select class=\"form-control\" name=\"user[city]\">
                            <option value=\"";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 47, $this->source); })()), "city", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 47, $this->source); })()), "city", array()), "html", null, true);
        echo "</option>
                            <option value=\"İstanbul\">İstanbul</option>
                            <option value=\"Ankara\">Ankara</option>
                            <option value=\"İzmir\">İzmir</option>
                            <option value=\"Adana\">Adana</option>
                            <option value=\"Adıyaman\">Adıyaman</option>
                            <option value=\"Afyonkarahisar\">Afyonkarahisar</option>
                            <option value=\"Ağrı\">Ağrı</option>
                            <option value=\"Aksaray\">Aksaray</option>
                            <option value=\"Amasya\">Amasya</option>
                            <option value=\"Antalya\">Antalya</option>
                            <option value=\"Ardahan\">Ardahan</option>
                            <option value=\"Artvin\">Artvin</option>
                            <option value=\"Aydın\">Aydın</option>
                            <option value=\"Balıkesir\">Balıkesir</option>
                            <option value=\"Bartın\">Bartın</option>
                            <option value=\"Batman\">Batman</option>
                            <option value=\"Bayburt\">Bayburt</option>
                            <option value=\"Bilecik\">Bilecik</option>
                            <option value=\"Bingöl\">Bingöl</option>
                            <option value=\"Bitlis\">Bitlis</option>
                            <option value=\"Bolu\">Bolu</option>
                            <option value=\"Burdur\">Burdur</option>
                            <option value=\"Bursa\">Bursa</option>
                            <option value=\"Çanakkale\">Çanakkale</option>
                            <option value=\"Çankırı\">Çankırı</option>
                            <option value=\"Çorum\">Çorum</option>
                            <option value=\"Denizli\">Denizli</option>
                            <option value=\"Diyarbakır\">Diyarbakır</option>
                            <option value=\"Düzce\">Düzce</option>
                            <option value=\"Edirne\">Edirne</option>
                            <option value=\"Elazığ\">Elazığ</option>
                            <option value=\"Erzincan\">Erzincan</option>
                            <option value=\"Erzurum\">Erzurum</option>
                            <option value=\"Eskişehir\">Eskişehir</option>
                            <option value=\"Gaziantep\">Gaziantep</option>
                            <option value=\"Giresun\">Giresun</option>
                            <option value=\"Gümüşhane\">Gümüşhane</option>
                            <option value=\"Hakkâri\">Hakkâri</option>
                            <option value=\"Hatay\">Hatay</option>
                            <option value=\"Iğdır\">Iğdır</option>
                            <option value=\"Isparta\">Isparta</option>
                            <option value=\"Kahramanmaraş\">Kahramanmaraş</option>
                            <option value=\"Karabük\">Karabük</option>
                            <option value=\"Karaman\">Karaman</option>
                            <option value=\"Kars\">Kars</option>
                            <option value=\"Kastamonu\">Kastamonu</option>
                            <option value=\"Kayseri\">Kayseri</option>
                            <option value=\"Kırıkkale\">Kırıkkale</option>
                            <option value=\"Kırklareli\">Kırklareli</option>
                            <option value=\"Kırşehir\">Kırşehir</option>
                            <option value=\"Kilis\">Kilis</option>
                            <option value=\"Kocaeli\">Kocaeli</option>
                            <option value=\"Konya\">Konya</option>
                            <option value=\"Kütahya\">Kütahya</option>
                            <option value=\"Malatya\">Malatya</option>
                            <option value=\"Manisa\">Manisa</option>
                            <option value=\"Mardin\">Mardin</option>
                            <option value=\"Mersin\">Mersin</option>
                            <option value=\"Muğla\">Muğla</option>
                            <option value=\"Muş\">Muş</option>
                            <option value=\"Nevşehir\">Nevşehir</option>
                            <option value=\"Niğde\">Niğde</option>
                            <option value=\"Ordu\">Ordu</option>
                            <option value=\"Osmaniye\">Osmaniye</option>
                            <option value=\"Rize\">Rize</option>
                            <option value=\"Sakarya\">Sakarya</option>
                            <option value=\"Samsun\">Samsun</option>
                            <option value=\"Siirt\">Siirt</option>
                            <option value=\"Sinop\">Sinop</option>
                            <option value=\"Sivas\">Sivas</option>
                            <option value=\"Şırnak\">Şırnak</option>
                            <option value=\"Tekirdağ\">Tekirdağ</option>
                            <option value=\"Tokat\">Tokat</option>
                            <option value=\"Trabzon\">Trabzon</option>
                            <option value=\"Tunceli\">Tunceli</option>
                            <option value=\"Şanlıurfa\">Şanlıurfa</option>
                            <option value=\"Uşak\">Uşak</option>
                            <option value=\"Van\">Van</option>
                            <option value=\"Yalova\">Yalova</option>
                            <option value=\"Yozgat\">Yozgat</option>
                            <option value=\"Zonguldak\">Zonguldak</option>
                        </select>
                    </div>
                </div>
                <div class=\"form-group \">
                    <label class=\"control-label col-lg-2\">Rol</label>
                    <div class=\"col-lg-10\">
                        <select name=\"role\" class=\"form-control\">
                            <option value=\"";
        // line 136
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 136, $this->source); })()), "roles", array()), 0, array(), "array"), "html", null, true);
        echo "\">
                                ";
        // line 137
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 137, $this->source); })()), "roles", array()), 0, array(), "array") == "ROLE_USER")) {
            // line 138
            echo "                                    Normal Kullanıcı
                                ";
        } else {
            // line 140
            echo "                                    Admin Kullanıcı
                                ";
        }
        // line 142
        echo "                            </option>
                            <option value=\"ROLE_USER\">Normal Kullanıcı</option>
                            <option value=\"ROLE_ADMIN\">Admin Kullanıcı</option>
                        </select>
                    </div>
                </div>
                <div class=\"form-group \">
                    <label class=\"control-label col-lg-2\">Hesap Durumu</label>
                    <div class=\"col-lg-10\">
                        <select name=\"user[status]\" class=\"form-control\">
                            <option value=\"";
        // line 152
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 152, $this->source); })()), "status", array()), "html", null, true);
        echo "\">
                                ";
        // line 153
        if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 153, $this->source); })()), "status", array()) == "true")) {
            // line 154
            echo "                                    Aktif
                                ";
        } else {
            // line 156
            echo "                                    Devre Dışı
                                ";
        }
        // line 158
        echo "                            </option>
                            <option value=\"true\">Aktif</option>
                            <option value=\"false\">Devre Dışı</option>
                        </select>
                    </div>
                </div>
                <div class=\"form-group\">
                    <div class=\"col-lg-offset-2 col-lg-10\">
                        <button class=\"btn btn-theme\" type=\"submit\">Kaydet</button>
                        <a href=\"";
        // line 167
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_index");
        echo "\">
                            <button class=\"btn btn-theme04\" type=\"button\">İptal</button>
                        </a>
                    </div>
                </div>
                <input id=\"password\" name=\"user[password]\" value=\"";
        // line 172
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 172, $this->source); })()), "password", array()), "html", null, true);
        echo "\" type=\"hidden\">
                <input type=\"hidden\" id=\"users__token\" name=\"token\"
                       value=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("adminuseredit-form"), "html", null, true);
        echo "\">
            </form>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/users/guncelle.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  322 => 174,  317 => 172,  309 => 167,  298 => 158,  294 => 156,  290 => 154,  288 => 153,  284 => 152,  272 => 142,  268 => 140,  264 => 138,  262 => 137,  258 => 136,  164 => 47,  153 => 39,  143 => 32,  133 => 25,  123 => 18,  113 => 10,  104 => 9,  84 => 7,  65 => 5,  47 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'adminbase.html.twig' %}

{% block title %}Üye Düzenleme{% endblock %}

{% block navbar %} {% include 'admin/navbar.twig' %}{% endblock %}

{% block sidebar %} {% include 'admin/sidebar.twig' %} {% endblock %}

{% block content %}
    <div class=\"form-panel\">
        <h4><i class=\"fa fa-angle-right\"></i>Üye Güncelle</h4>
        <hr>
        <div class=\"form\">
            <form class=\"cmxform form-horizontal style-form\" method=\"post\">
                <div class=\"form-group \">
                    <label class=\"control-label col-lg-2\">İsim</label>
                    <div class=\"col-lg-10\">
                        <input class=\" form-control\" id=\"firstname\" name=\"user[name]\" value=\"{{ user.name }}\"
                               type=\"text\">
                    </div>
                </div>
                <div class=\"form-group \">
                    <label class=\"control-label col-lg-2\">E-Mail Adresi</label>
                    <div class=\"col-lg-10\">
                        <input class=\" form-control\" id=\"lastname\" name=\"user[email]\" value=\"{{ user.email }}\"
                               type=\"text\">
                    </div>
                </div>
                <div class=\"form-group \">
                    <label class=\"control-label col-lg-2\">Telefon Numarası</label>
                    <div class=\"col-lg-10\">
                        <input class=\"form-control\" id=\"username\" name=\"user[phone]\" value=\"{{ user.phone }}\"
                               type=\"text\">
                    </div>
                </div>
                <div class=\"form-group \">
                    <label class=\"control-label col-lg-2\">Adres Bilgileri</label>
                    <div class=\"col-lg-10\">
                        <input class=\"form-control\" id=\"username\" name=\"user[address]\" value=\"{{ user.address }}\"
                               type=\"text\">
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"control-label col-lg-2\" for=\"user_city\">Şehir</label>
                    <div class=\"col-lg-10\">
                        <select class=\"form-control\" name=\"user[city]\">
                            <option value=\"{{ user.city }}\">{{ user.city }}</option>
                            <option value=\"İstanbul\">İstanbul</option>
                            <option value=\"Ankara\">Ankara</option>
                            <option value=\"İzmir\">İzmir</option>
                            <option value=\"Adana\">Adana</option>
                            <option value=\"Adıyaman\">Adıyaman</option>
                            <option value=\"Afyonkarahisar\">Afyonkarahisar</option>
                            <option value=\"Ağrı\">Ağrı</option>
                            <option value=\"Aksaray\">Aksaray</option>
                            <option value=\"Amasya\">Amasya</option>
                            <option value=\"Antalya\">Antalya</option>
                            <option value=\"Ardahan\">Ardahan</option>
                            <option value=\"Artvin\">Artvin</option>
                            <option value=\"Aydın\">Aydın</option>
                            <option value=\"Balıkesir\">Balıkesir</option>
                            <option value=\"Bartın\">Bartın</option>
                            <option value=\"Batman\">Batman</option>
                            <option value=\"Bayburt\">Bayburt</option>
                            <option value=\"Bilecik\">Bilecik</option>
                            <option value=\"Bingöl\">Bingöl</option>
                            <option value=\"Bitlis\">Bitlis</option>
                            <option value=\"Bolu\">Bolu</option>
                            <option value=\"Burdur\">Burdur</option>
                            <option value=\"Bursa\">Bursa</option>
                            <option value=\"Çanakkale\">Çanakkale</option>
                            <option value=\"Çankırı\">Çankırı</option>
                            <option value=\"Çorum\">Çorum</option>
                            <option value=\"Denizli\">Denizli</option>
                            <option value=\"Diyarbakır\">Diyarbakır</option>
                            <option value=\"Düzce\">Düzce</option>
                            <option value=\"Edirne\">Edirne</option>
                            <option value=\"Elazığ\">Elazığ</option>
                            <option value=\"Erzincan\">Erzincan</option>
                            <option value=\"Erzurum\">Erzurum</option>
                            <option value=\"Eskişehir\">Eskişehir</option>
                            <option value=\"Gaziantep\">Gaziantep</option>
                            <option value=\"Giresun\">Giresun</option>
                            <option value=\"Gümüşhane\">Gümüşhane</option>
                            <option value=\"Hakkâri\">Hakkâri</option>
                            <option value=\"Hatay\">Hatay</option>
                            <option value=\"Iğdır\">Iğdır</option>
                            <option value=\"Isparta\">Isparta</option>
                            <option value=\"Kahramanmaraş\">Kahramanmaraş</option>
                            <option value=\"Karabük\">Karabük</option>
                            <option value=\"Karaman\">Karaman</option>
                            <option value=\"Kars\">Kars</option>
                            <option value=\"Kastamonu\">Kastamonu</option>
                            <option value=\"Kayseri\">Kayseri</option>
                            <option value=\"Kırıkkale\">Kırıkkale</option>
                            <option value=\"Kırklareli\">Kırklareli</option>
                            <option value=\"Kırşehir\">Kırşehir</option>
                            <option value=\"Kilis\">Kilis</option>
                            <option value=\"Kocaeli\">Kocaeli</option>
                            <option value=\"Konya\">Konya</option>
                            <option value=\"Kütahya\">Kütahya</option>
                            <option value=\"Malatya\">Malatya</option>
                            <option value=\"Manisa\">Manisa</option>
                            <option value=\"Mardin\">Mardin</option>
                            <option value=\"Mersin\">Mersin</option>
                            <option value=\"Muğla\">Muğla</option>
                            <option value=\"Muş\">Muş</option>
                            <option value=\"Nevşehir\">Nevşehir</option>
                            <option value=\"Niğde\">Niğde</option>
                            <option value=\"Ordu\">Ordu</option>
                            <option value=\"Osmaniye\">Osmaniye</option>
                            <option value=\"Rize\">Rize</option>
                            <option value=\"Sakarya\">Sakarya</option>
                            <option value=\"Samsun\">Samsun</option>
                            <option value=\"Siirt\">Siirt</option>
                            <option value=\"Sinop\">Sinop</option>
                            <option value=\"Sivas\">Sivas</option>
                            <option value=\"Şırnak\">Şırnak</option>
                            <option value=\"Tekirdağ\">Tekirdağ</option>
                            <option value=\"Tokat\">Tokat</option>
                            <option value=\"Trabzon\">Trabzon</option>
                            <option value=\"Tunceli\">Tunceli</option>
                            <option value=\"Şanlıurfa\">Şanlıurfa</option>
                            <option value=\"Uşak\">Uşak</option>
                            <option value=\"Van\">Van</option>
                            <option value=\"Yalova\">Yalova</option>
                            <option value=\"Yozgat\">Yozgat</option>
                            <option value=\"Zonguldak\">Zonguldak</option>
                        </select>
                    </div>
                </div>
                <div class=\"form-group \">
                    <label class=\"control-label col-lg-2\">Rol</label>
                    <div class=\"col-lg-10\">
                        <select name=\"role\" class=\"form-control\">
                            <option value=\"{{ user.roles[0] }}\">
                                {% if user.roles[0] == \"ROLE_USER\" %}
                                    Normal Kullanıcı
                                {% else %}
                                    Admin Kullanıcı
                                {% endif %}
                            </option>
                            <option value=\"ROLE_USER\">Normal Kullanıcı</option>
                            <option value=\"ROLE_ADMIN\">Admin Kullanıcı</option>
                        </select>
                    </div>
                </div>
                <div class=\"form-group \">
                    <label class=\"control-label col-lg-2\">Hesap Durumu</label>
                    <div class=\"col-lg-10\">
                        <select name=\"user[status]\" class=\"form-control\">
                            <option value=\"{{ user.status }}\">
                                {% if user.status == \"true\" %}
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
                <div class=\"form-group\">
                    <div class=\"col-lg-offset-2 col-lg-10\">
                        <button class=\"btn btn-theme\" type=\"submit\">Kaydet</button>
                        <a href=\"{{ path('user_index') }}\">
                            <button class=\"btn btn-theme04\" type=\"button\">İptal</button>
                        </a>
                    </div>
                </div>
                <input id=\"password\" name=\"user[password]\" value=\"{{ user.password }}\" type=\"hidden\">
                <input type=\"hidden\" id=\"users__token\" name=\"token\"
                       value=\"{{ csrf_token('adminuseredit-form') }}\">
            </form>
        </div>
    </div>
{% endblock %}


", "admin/users/guncelle.twig", "C:\\xampp\\htdocs\\PhpOdev-2\\templates\\admin\\users\\guncelle.twig");
    }
}
