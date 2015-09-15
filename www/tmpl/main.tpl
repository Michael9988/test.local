<!DOCTYPE html>
<html>
    <head>
        <title>%title%</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="%meta_desc%" />
        <meta name="keywords" content="%meta_key%" />
        <link rel="stylesheet" href="%address%css/main.css" type="text/css" />
    </head>
    <body>
        <div id="content">
            <div id="header">
                <h2>Шапка сайта</h2>
            </div>
            <hr />
            <div id="main_content">
                <div id="left">
                    <h2>Меню</h2>
                    <ul>%menu%</ul>
                    %auth_user%                    
                </div>
                <div id="right">
                    <form name="search" action="%address%" method="get">
                        <p>
                            Поиск: <input type="text" name="words" /> 
                        </p>
                        <p>
                            <input type="hidden" name="view" value="search" />
                            <input type="submit" name="search" value="Искать" /> 
                        </p>
                    </form>
                    <h2>Реклама</h2>
                    %banners%
                    %poll%
                </div>
                <div id="center">
                    %top%
                    %middle%
                    %bottom%                    
                </div>
                <div class="clear">
                    <hr />
                    <div id="footer">
                        <p>Все права защищены &copy; 2015</p>
                    </div>
                </div>
            </div>
    </body>
</html>
