<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>BMI Bereken Oefening</title>
        <link rel="stylesheet" href="style/bmi.css">
    </head>
    <body onload="form.reset();">
        <div align="center">
            <h2>
                Bereken je BMI<br/>
            </h2>
            <p2>Bereken hier uw Body Mass Index (BMI) om te kijken of u een gezond gewicht heeft.</p2><br/>
            <form name="form" method="POST">
                <table>
                    <tr>
                        <td>
                            Uw lengte in meters:
                        </td>
                        <td>
                            <input type="int" class="input" placeholder="lengte bijv  1.80" name="lengte"/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Uw gewicht in kg:
                        </td>
                        <td>
                            <input type="int" class="input" placeholder="gewicht bijv 80" name="gewicht"/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" name="submit" value="Bereken BMI"/>
                        </td>
                    </tr>
                </table>
            </form>

            <?php
              include "cookie.php";
              include "bmiBerekening.php";
              echo $cookie_name;
              echo $cookie_value;
            ?>

        </div>
    </body>
</html>
