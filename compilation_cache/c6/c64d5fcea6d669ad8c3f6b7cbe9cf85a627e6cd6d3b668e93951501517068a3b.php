<?php

/* templateMain.html */
class __TwigTemplate_5e408f81017947df72fcc53111c6e2dee220c8a1e7d7d4dbe5ba95d7a3ffd72c extends Twig_Template
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
</head>
<body class=\"wrapper\">
    <header>
        <div class=\"welcome\">
            <h1><span>";
        // line 13
        echo twig_escape_filter($this->env, ($context["header"] ?? null), "html", null, true);
        echo "</span></h1>
        </div>
        <nav>
            <div class=\"topnav\">
                <a href=\"main\">Главная</a>
                <a href=\"form\">Добавить пользователя</a>
                <a id=\"createDB\" href=\"create\">Создать БД</a>
            </div>
        </nav>
    </header>
    <main>
        <div class=\"content\">
            <table class=\"user_sheet\">
                <thead>
                    <tr>
                        <th>Имя</th>
                        <th>Возраст</th>
                        <th>Город</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["data"]);
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 35
            echo "                        <tr><td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], 0, []), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], 1, []), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], 2, []), "html", null, true);
            echo "</td></tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "                </tbody>
            </table>
        </div>
    </main>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "templateMain.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 37,  64 => 35,  60 => 34,  36 => 13,  27 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "templateMain.html", "D:\\Server\\data\\htdocs\\templates\\templateMain.html");
    }
}
