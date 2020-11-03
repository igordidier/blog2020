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

/* base_home.html.twig */
class __TwigTemplate_36dbb87a01ca1c65031a8976b5123fcfd9f9bc812ea1f1d4f1869b0c99dfee7a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'meta_title' => [$this, 'block_meta_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'title' => [$this, 'block_title'],
            'subtitle' => [$this, 'block_subtitle'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base_home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base_home.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"Shortcut Icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/favicon.png"), "html", null, true);
        echo "\" />

    <title>";
        // line 12
        $this->displayBlock('meta_title', $context, $blocks);
        echo "</title>

    ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 28
        echo "</head>

<body>
<!-- Navigation -->
<nav class=\"navbar navbar-expand-lg navbar-dark fixed-top bg-dark\" id=\"mainNav\">
    <div class=\"container\">
        <a class=\"navbar-brand\" href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\">CodeBlog</a>
        <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\"
                data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\"
                aria-label=\"Toggle navigation\">
            Menu
            <i class=\"fas fa-bars\"></i>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
            <ul class=\"navbar-nav ml-auto\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\">Home</a>
                </li>
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        Admin
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                        <a class=\"dropdown-item\" href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_index");
        echo "\">Catégories</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_index");
        echo "\">Articles</a>
                    </div>
                </li>
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        Hello
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                        <a class=\"dropdown-item\" href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hello_world");
        echo "\">Hello</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 61
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hello_firstname", ["firstname" => "igor"]);
        echo " \">Hello Prénom</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hello_number", ["number" => "4"]);
        echo "\">Hello 4</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
";
        // line 70
        echo "<div class=\"container mt-5 pt-5\">
";
        // line 71
        $this->displayBlock('body', $context, $blocks);
        // line 188
        echo "</div>
<hr>

<!-- Footer -->
<footer>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-md-10 mx-auto\">
                <ul class=\"list-inline text-center\">
                    <li class=\"list-inline-item\">
                        <a href=\"#TODO\">
                <span class=\"fa-stack fa-lg\">
                  <i class=\"fas fa-circle fa-stack-2x\"></i>
                  <i class=\"fab fa-linkedin fa-stack-1x fa-inverse\"></i>
                </span>
                        </a>
                    </li>
                    <li class=\"list-inline-item\">
                        <a href=\"#TODO\">
                <span class=\"fa-stack fa-lg\">
                  <i class=\"fas fa-circle fa-stack-2x\"></i>
                  <i class=\"fab fa-github fa-stack-1x fa-inverse\"></i>
                </span>
                        </a>
                    </li>
                </ul>
                <p class=\"copyright text-muted\">Copyright &copy; Votre prof de symfony 2020</p>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap core JavaScript -->
<script src=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>


<!-- Custom scripts for this template -->
";
        // line 226
        $this->displayBlock('javascripts', $context, $blocks);
        // line 227
        echo "
</body>

</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 12
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta_title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta_title"));

        echo "Titre qu'on voit dans les onglets ;)";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 15
        echo "        <!-- Bootstrap core CSS -->
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- Custom fonts for this template -->
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/fontawesome-free/css/all.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet'
              type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
              rel='stylesheet' type='text/css'>

        <!-- Custom styles for this template -->
        <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/clean-blog.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 71
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 72
        echo "<!-- Page Header -->
<header class=\"masthead\" style=\"background-image: url('";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/landscape.gif"), "html", null, true);
        echo "')\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-md-10 mx-auto\">
                <div class=\"site-heading\">
                    <h1>";
        // line 79
        $this->displayBlock('title', $context, $blocks);
        echo "</h1>
                    <span class=\"subheading\">";
        // line 80
        $this->displayBlock('subtitle', $context, $blocks);
        echo "</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<main class=\"container\">
    <div class=\"row\">
            <div class=\"col-lg-8 col-md-10 mx-auto\">
                <div class=\"row\">

                    <div class=\"col-sm-2 d-none d-sm-block\">
                        <img class=\"img-fluid img-profile rounded-circle mx-auto mb-2\" src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/profile.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
                    </div>
                    <div class=\"col-sm-10\">
                        <h2>Bienvenue sur le template de blog</h2>

                        <ul>
                            <li>
                                <a href=\"https://slides.com/gotorahoutan/epsi-symfony\" target=\"_blank\">
                                        <i class=\"fa fa-external-link-alt\"></i>
                                    Les slides du prof
                                </a>
                            </li>
                            <li>
                                <a href=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("public_file/Cours_Symfony_4.pdf"), "html", null, true);
        echo "\" target=\"_blank\">
                                    <i class=\"fa fa-file-pdf\"></i>
                                    Le cours
                                </a>
                            </li>
                            <li>
                                <a href=\"https://symfony.com/doc/4.2/index.html\" target=\"_blank\">
                                    <i class=\"fa fa-external-link-alt\"></i>
                                    Doc Symfony
                                </a>
                            </li>
                            <li>
                                <a href=\"https://twig.symfony.com/doc/2.x/\" target=\"_blank\">
                                    <i class=\"fa fa-external-link-alt\"></i>
                                    Twig (template)
                                </a>
                            </li>
                            <li>
                                <a href=\"https://getbootstrap.com/docs/4.3/components/alerts/\" target=\"_blank\">
                                    <i class=\"fa fa-external-link-alt\"></i>
                                    Bootstrap (css)
                                </a>
                            </li>
                        </ul>
                    </div>
                    <h4>L'exam :o</h4>
                    <p>
                        Remplacer les liens du menu pour qu'ils pointent sur les bonnes pages <em>/4pt</em>
                        <br><br>
                        Enlever le champ Created At des formulaires de création/modification d'article
                        <em>/1pt</em>
                        <br><br>
                        Générer le CRUD des catégories via la commande <code>bin/console make:crud</code>  <em>/2pt</em><br>
                        - Rajouter le lien dans le menu admin -> Catégories<em>/1pt</em><br>
                        - inclure les pages du crud dans le design existant <em>/2pt</em><br>
                        - Ajouter une contrainte sur le formulaire Catégorie: Lorsqu'on créé ou modifie une catégorie, le nom doit d'être d'au moins 4 caractères <em>/2pt</em>
                        <br><br>
                        Lorsque j'accède à la page category_show (par exemple /category/1) j'aimerai voir la liste des articles de cette catégorie <em>/5pt</em>
                        <br><br>
                        Ordonner la liste des articles de la page article_index par ordre décroissant (requete sql déjà écrite) <em>/1pt</em>
                        <br><br>
                        Sécuriser la page category_delete pour n'être accessible que par l'admin <em>/2pt</em>
                        <br><br>
                    </p>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-10\">
                <div class=\"post-preview\">
                    <a href=\"#TODO\">
                        <h4 class=\"\">
                            ";
        // line 157
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lastArticle"]) || array_key_exists("lastArticle", $context) ? $context["lastArticle"] : (function () { throw new RuntimeError('Variable "lastArticle" does not exist.', 157, $this->source); })()), "title", [], "any", false, false, false, 157), "html", null, true);
        echo "
                        </h4>
                        <h5 class=\"post-subtitle\">
                            ";
        // line 160
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lastArticle"]) || array_key_exists("lastArticle", $context) ? $context["lastArticle"] : (function () { throw new RuntimeError('Variable "lastArticle" does not exist.', 160, $this->source); })()), "content", [], "any", false, false, false, 160), "html", null, true);
        echo "
                        </h5>
                    </a>
                    <p class=\"post-meta\">Posted by
                        <a href=\"#TODO\">Renaud</a>
                        le
                        ";
        // line 166
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lastArticle"]) || array_key_exists("lastArticle", $context) ? $context["lastArticle"] : (function () { throw new RuntimeError('Variable "lastArticle" does not exist.', 166, $this->source); })()), "createdAt", [], "any", false, false, false, 166), "d M Y"), "html", null, true);
        echo "</p>
                </div>

                <div>
                    ";
        // line 170
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 170, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 171
            echo "                        <div>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 171), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "articles", [], "any", false, false, false, 171)), "html", null, true);
            echo ")</div>

                        ";
            // line 173
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "articles", [], "any", false, false, false, 173));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 174
                echo "                           <div class=\"pl-3\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 174), "html", null, true);
                echo "</div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 176
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 177
        echo "                </div>

                <!-- Pager -->
                <div class=\"clearfix\">
                    <a class=\"btn btn-primary float-right\" href=\"#TODO\">Liste des articles</a>
                </div>
            </div>
    </div>
</main>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 79
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Titre";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 80
    public function block_subtitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "subtitle"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "subtitle"));

        echo "Sous titre";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 226
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base_home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  486 => 226,  467 => 80,  448 => 79,  428 => 177,  422 => 176,  413 => 174,  409 => 173,  401 => 171,  397 => 170,  390 => 166,  381 => 160,  375 => 157,  322 => 107,  306 => 94,  289 => 80,  285 => 79,  276 => 73,  273 => 72,  263 => 71,  251 => 26,  241 => 19,  235 => 16,  232 => 15,  222 => 14,  203 => 12,  189 => 227,  187 => 226,  180 => 222,  176 => 221,  141 => 188,  139 => 71,  136 => 70,  126 => 62,  122 => 61,  118 => 60,  107 => 52,  103 => 51,  93 => 44,  80 => 34,  72 => 28,  70 => 14,  65 => 12,  60 => 10,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"Shortcut Icon\" href=\"{{ asset('img/favicon.png') }}\" />

    <title>{% block meta_title %}Titre qu'on voit dans les onglets ;){% endblock %}</title>

    {% block stylesheets %}
        <!-- Bootstrap core CSS -->
        <link href=\"{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">

        <!-- Custom fonts for this template -->
        <link href=\"{{ asset('vendor/fontawesome-free/css/all.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">
        <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet'
              type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
              rel='stylesheet' type='text/css'>

        <!-- Custom styles for this template -->
        <link href=\"{{ asset('css/clean-blog.css') }}\" rel=\"stylesheet\">
    {% endblock %}
</head>

<body>
<!-- Navigation -->
<nav class=\"navbar navbar-expand-lg navbar-dark fixed-top bg-dark\" id=\"mainNav\">
    <div class=\"container\">
        <a class=\"navbar-brand\" href=\"{{ path('homepage') }}\">CodeBlog</a>
        <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\"
                data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\"
                aria-label=\"Toggle navigation\">
            Menu
            <i class=\"fas fa-bars\"></i>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
            <ul class=\"navbar-nav ml-auto\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('homepage') }}\">Home</a>
                </li>
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        Admin
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                        <a class=\"dropdown-item\" href=\"{{ path('category_index') }}\">Catégories</a>
                        <a class=\"dropdown-item\" href=\"{{ path('article_index') }}\">Articles</a>
                    </div>
                </li>
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        Hello
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                        <a class=\"dropdown-item\" href=\"{{ path('hello_world') }}\">Hello</a>
                        <a class=\"dropdown-item\" href=\"{{ path('hello_firstname', { 'firstname' : 'igor' }) }} \">Hello Prénom</a>
                        <a class=\"dropdown-item\" href=\"{{ path('hello_number', { 'number' : '4' }) }}\">Hello 4</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
{# todo crado to fix and remove fixed top nav#}
<div class=\"container mt-5 pt-5\">
{% block body %}
<!-- Page Header -->
<header class=\"masthead\" style=\"background-image: url('{{ asset('img/landscape.gif') }}')\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-md-10 mx-auto\">
                <div class=\"site-heading\">
                    <h1>{% block title %}Titre{% endblock %}</h1>
                    <span class=\"subheading\">{% block subtitle %}Sous titre{% endblock %}</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<main class=\"container\">
    <div class=\"row\">
            <div class=\"col-lg-8 col-md-10 mx-auto\">
                <div class=\"row\">

                    <div class=\"col-sm-2 d-none d-sm-block\">
                        <img class=\"img-fluid img-profile rounded-circle mx-auto mb-2\" src=\"{{ asset('img/profile.jpg') }}\" alt=\"\"/>
                    </div>
                    <div class=\"col-sm-10\">
                        <h2>Bienvenue sur le template de blog</h2>

                        <ul>
                            <li>
                                <a href=\"https://slides.com/gotorahoutan/epsi-symfony\" target=\"_blank\">
                                        <i class=\"fa fa-external-link-alt\"></i>
                                    Les slides du prof
                                </a>
                            </li>
                            <li>
                                <a href=\"{{ asset('public_file/Cours_Symfony_4.pdf') }}\" target=\"_blank\">
                                    <i class=\"fa fa-file-pdf\"></i>
                                    Le cours
                                </a>
                            </li>
                            <li>
                                <a href=\"https://symfony.com/doc/4.2/index.html\" target=\"_blank\">
                                    <i class=\"fa fa-external-link-alt\"></i>
                                    Doc Symfony
                                </a>
                            </li>
                            <li>
                                <a href=\"https://twig.symfony.com/doc/2.x/\" target=\"_blank\">
                                    <i class=\"fa fa-external-link-alt\"></i>
                                    Twig (template)
                                </a>
                            </li>
                            <li>
                                <a href=\"https://getbootstrap.com/docs/4.3/components/alerts/\" target=\"_blank\">
                                    <i class=\"fa fa-external-link-alt\"></i>
                                    Bootstrap (css)
                                </a>
                            </li>
                        </ul>
                    </div>
                    <h4>L'exam :o</h4>
                    <p>
                        Remplacer les liens du menu pour qu'ils pointent sur les bonnes pages <em>/4pt</em>
                        <br><br>
                        Enlever le champ Created At des formulaires de création/modification d'article
                        <em>/1pt</em>
                        <br><br>
                        Générer le CRUD des catégories via la commande <code>bin/console make:crud</code>  <em>/2pt</em><br>
                        - Rajouter le lien dans le menu admin -> Catégories<em>/1pt</em><br>
                        - inclure les pages du crud dans le design existant <em>/2pt</em><br>
                        - Ajouter une contrainte sur le formulaire Catégorie: Lorsqu'on créé ou modifie une catégorie, le nom doit d'être d'au moins 4 caractères <em>/2pt</em>
                        <br><br>
                        Lorsque j'accède à la page category_show (par exemple /category/1) j'aimerai voir la liste des articles de cette catégorie <em>/5pt</em>
                        <br><br>
                        Ordonner la liste des articles de la page article_index par ordre décroissant (requete sql déjà écrite) <em>/1pt</em>
                        <br><br>
                        Sécuriser la page category_delete pour n'être accessible que par l'admin <em>/2pt</em>
                        <br><br>
                    </p>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-10\">
                <div class=\"post-preview\">
                    <a href=\"#TODO\">
                        <h4 class=\"\">
                            {{ lastArticle.title }}
                        </h4>
                        <h5 class=\"post-subtitle\">
                            {{ lastArticle.content }}
                        </h5>
                    </a>
                    <p class=\"post-meta\">Posted by
                        <a href=\"#TODO\">Renaud</a>
                        le
                        {{ lastArticle.createdAt|date('d M Y') }}</p>
                </div>

                <div>
                    {% for category in categories %}
                        <div>{{ category.name }} ({{ category.articles|length }})</div>

                        {% for article in category.articles %}
                           <div class=\"pl-3\">{{ article.title }}</div>
                        {% endfor %}
                    {% endfor %}
                </div>

                <!-- Pager -->
                <div class=\"clearfix\">
                    <a class=\"btn btn-primary float-right\" href=\"#TODO\">Liste des articles</a>
                </div>
            </div>
    </div>
</main>

{% endblock %}
</div>
<hr>

<!-- Footer -->
<footer>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-md-10 mx-auto\">
                <ul class=\"list-inline text-center\">
                    <li class=\"list-inline-item\">
                        <a href=\"#TODO\">
                <span class=\"fa-stack fa-lg\">
                  <i class=\"fas fa-circle fa-stack-2x\"></i>
                  <i class=\"fab fa-linkedin fa-stack-1x fa-inverse\"></i>
                </span>
                        </a>
                    </li>
                    <li class=\"list-inline-item\">
                        <a href=\"#TODO\">
                <span class=\"fa-stack fa-lg\">
                  <i class=\"fas fa-circle fa-stack-2x\"></i>
                  <i class=\"fab fa-github fa-stack-1x fa-inverse\"></i>
                </span>
                        </a>
                    </li>
                </ul>
                <p class=\"copyright text-muted\">Copyright &copy; Votre prof de symfony 2020</p>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap core JavaScript -->
<script src=\"{{ asset('vendor/jquery/jquery.min.js') }}\"></script>
<script src=\"{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>


<!-- Custom scripts for this template -->
{% block javascripts %}{% endblock %}

</body>

</html>
", "base_home.html.twig", "C:\\Users\\33612\\Documents\\cours\\b2\\php-syphony\\codeblog_20-21\\templates\\base_home.html.twig");
    }
}
