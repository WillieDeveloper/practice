<?php

/* templateForm.html */
class __TwigTemplate_09a8426c80c5f5b9393bfc683daa6066b5acb5c1d82fc45fb436621e30dfcd90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>";
        // line 7
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</title>
    <link rel=\"stylesheet\" href=\"../css/main.css\">
    <script type=\"text/javascript\" src=\"../script/jquery 3-3-1.js\"></script>
    <script type=\"text/javascript\" src=\"../script/ajax.js\"></script>
</head>
<body class=\"wrapper\">
    <header>
        <div class=\"welcome\">
            <h1><span>";
        // line 15
        echo twig_escape_filter($this->env, ($context["header"] ?? null), "html", null, true);
        echo "</span></h1>
        </div>
        <nav>
            <div class=\"topnav\">
                <a href=\"main\">Главная</a>
                <a href=\"form\">Добавить пользователя</a>
            </div>
        </nav>
    </header>
    <main>
        <div class=\"content\">
            <form method=\"POST\" action=\"javascript:void(0);\" onsubmit=\"sendAjaxForm()\" id=\"form_ajax\">
                <table class=\"form\">
                    <tr>
                        <td>Имя: </td>
                        <td><input name=\"user_name\" type=\"text\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\"></td>
                    </tr>
                    <tr>
                        <td>Возраст: </td>
                        <td><input name=\"user_age\" type=\"text\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, ($context["age"] ?? null), "html", null, true);
        echo "\"></td>
                    </tr>
                    <tr>
                        <td>Город: </td>
                        <td>
                            <select name=\"user_city\" type=\"text\">
                                ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["data"]);
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 41
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], 0, []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], 1, []), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input id=\"add_user_btn\" name=\"add_user_btn\" type=\"submit\" value=\"Добавить\"></td>
                    </tr>
                </table> 
            </form>
            <div class=\"message\">
                <p class=\"msg_text\" id=\"result\"></p>
            </div>
        </div>
    </main>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "templateForm.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 43,  76 => 41,  72 => 40,  63 => 34,  56 => 30,  38 => 15,  27 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "templateForm.html", "D:\\Server\\data\\htdocs\\templates\\templateForm.html");
    }
}
