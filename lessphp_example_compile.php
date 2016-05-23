<?php 
    include_once("./lessphp/lessc.inc.php");
    
    $less = new lessc();
    
    $css = $less->compile("
    
    // Maak een nieuwe pagina die 2 verschillende tabellen laat zien met ieder 5 records. De opmaak van de tabellen moet
    // worden geregeld door dezelfde geparametriseerde LESS mixin met guard. 
    .tblDefault(@margin, @border, @color, @padding, @borderCollapse: collapse)
    { 
            border-collapse: @borderCollapse;
            margin: 2em auto;
            font-family: Verdana;
            
            tr
            {
                &:nth-child(2n)
                {
                    background-color: lighten(@color, 40%);
                }
                
                &:nth-child(2n+1)
                {
                    background-color: lighten(@color, 30%);
                }
            }
            
            td
            {
                
                border: @border @color; 
                margin: @margin;
                padding: @padding;
                color: lighten(@color, 50%);
                font-weight:900;
            }
            
            th
            {
                border: @border @color; 
                margin: @margin;
                padding: @padding;
                background-color: darken(@color, 10%);
                color: lighten(@color, 60%);
            }            
    }

    #tbl1
    {
        .tblDefault(2em, 1px solid, rgb(255, 7, 20), 1em, collapse) ;
    }

    #tbl2
    {
        .tblDefault(1em, 1px solid,  blue, 1em, collapse) ;
    }
");
?>

<!DOCTYPE html>
<html>
    <head>
       <title>Table LESS</title>  
       <!--
       <link rel="stylesheet/less"  type="text/css" href="./style.less"> 
       <script src="./less.js/dist/less.js"></script> 
       -->
       <style>
           <?php echo $css; ?>           
       </style>          
    </head>
    <body>
        <table id="tbl1">
            <tr>
               <th>id</th>
                <th>voornaam</th>
                <th>tussenvoegsel</th>
                <th>achternaam</th>
                <th>gebruikersrol</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Arjan</td>
                <td>de</td>
                <td>Ruijter</td>
                <td>root</td>                
            </tr>
            <tr>
                <td>2</td>
                <td>Frans</td>
                <td>van</td>
                <td>Ouderkerk</td>
                <td>admin</td>                
            </tr>
            <tr>
                <td>3</td>
                <td>Hans</td>
                <td>van</td>
                <td>Tuien</td>
                <td>developer</td>                
            </tr>
            <tr>
                <td>4</td>
                <td>Fred</td>
                <td>de</td>
                <td>Bakker</td>
                <td>customer</td>                
            </tr>
            <tr>
                <td>5</td>
                <td>Freek</td>
                <td>de</td>
                <td>Boer</td>
                <td>admin</td>                
            </tr>            
        </table>
        
        <table id="tbl2">
            <tr>
                <th>id</th>
                <th>voornaam</th>
                <th>tussenvoegsel</th>
                <th>achternaam</th>
                <th>gebruikersrol</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Arjan</td>
                <td>de</td>
                <td>Ruijter</td>
                <td>root</td>                
            </tr>
            <tr>
                <td>2</td>
                <td>Frans</td>
                <td>van</td>
                <td>Ouderkerk</td>
                <td>admin</td>                
            </tr>
            <tr>
                <td>3</td>
                <td>Hans</td>
                <td>van</td>
                <td>Tuien</td>
                <td>developer</td>                
            </tr>
            <tr>
                <td>4</td>
                <td>Fred</td>
                <td>de</td>
                <td>Bakker</td>
                <td>customer</td>                
            </tr>
            <tr>
                <td>5</td>
                <td>Freek</td>
                <td>de</td>
                <td>Boer</td>
                <td>admin</td>                
            </tr>            
        </table>
        
        
    </body>
</html>