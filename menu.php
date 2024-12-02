<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&family=Noto+Sans+JP:wght@100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
        </style>
    <link rel="stylesheet" href="menu.css">
    <title>Menú</title>
</head>
<body>

<!-- HEADER -->
<header>
        <div class="logo">
            <h1 class="header-title">Popolo Pizza</h1>
        </div>
        <div class="list">
            <ul>
                <li>Menú</li>
                <a href="#About-us"><li>Sobre nosotros</li></a>
                <li>Contacto</li>
            </ul>
        </div>

        <div class="user-conteiner">
            <svg width="32px" height="32px" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" fill="#fff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill="#fff" d="M432 928a48 48 0 1 1 0-96 48 48 0 0 1 0 96zm320 0a48 48 0 1 1 0-96 48 48 0 0 1 0 96zM96 128a32 32 0 0 1 0-64h160a32 32 0 0 1 31.36 25.728L320.64 256H928a32 32 0 0 1 31.296 38.72l-96 448A32 32 0 0 1 832 768H384a32 32 0 0 1-31.36-25.728L229.76 128H96zm314.24 576h395.904l82.304-384H333.44l76.8 384z"></path></g></svg>
        </div>
    </header>

    <!-- TITULO -->

    <div class="contenedor-titulo">
        <div class="linea"></div>
        <h1 class="titulo-menu">Menú</h1>
    </div>

    <!-- MENÚ -->
    <div class="contenedor">
        <div class="menu-general-contenedor">
            <div class="primera-fila-menu">

                <div class="producto-general-contenedor">
                    <img class="producto-general-imagen" src="4se_afee79a5-5428-4feb-b3a4-522f54cebe44_394x.png" alt="">
                    <div class="producto-general-texto">
                        <h2 class="producto-nombre-general">Four Seasons ($4000)</h2>
                        <ul>
                            <li>Salsa de tomate artesanal</li>
                            <li>Queso mozzarella</li>
                            <li>Pimiento</li>
                            <li>Champiñones</li>
                            <li>Jamón</li>
                            <li>Aceitunas</li>
                        </ul>
                    </div>
                </div>

                <div class="producto-general-contenedor">
                    <img class="producto-general-imagen" src="sup_3f21643c-b966-4752-8d51-4f8a6ee232ee_394x.webp" alt="">
                    <div class="producto-general-texto">
                        <h2 class="producto-nombre-general">Suprema ($5500)</h2>
                        <ul>
                            <li>Salsa de tomate artesanal</li>
                            <li>Queso mozzarella</li>
                            <li>Carne de hamburguesa</li>
                            <li>Pepperoni</li>
                            <li>Champiñones</li>
                            <li>Cebolla</li>
                            <li>Pimiento</li>
                        </ul>
                    </div>
                </div>

                <div class="producto-general-contenedor">
                    <img class="producto-general-imagen" src="pop_d268ceec-a0d4-4429-82eb-8953b145e3ae_394x.jpeg" alt="error">
                    <div class="producto-general-texto">
                        <h2 class="producto-nombre-general">Popolo($3800)</h2>
                        <ul>
                            <li>Salsa de tomate artesanal</li>
                            <li>Queso mozzarella</li>
                            <li>Prosciutto*</li>
                            <li>Champiñones</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="sistema-pedido">
                <div class="titulo-sistema-contenedor">
                    <h1 class='titulo-sistema-pedido'>Armá tu pedido</h1>
                </div>
                <?php 
    $menu = array(
        "Four Seasons" => array("Precio" => 4000, "Stock" => rand(1,50)),
        "Suprema" => array("Precio" => 5500, "Stock" => rand(1,50)),
        "Popolo" => array("Precio" => 3800, "Stock" => rand(1,50)),
        "Four Cheese" => array("Precio" => 4500, "Stock" => rand(1,50)),
        "Tribeca" => array("Precio" => 5500, "Stock" => rand(1,50)),
        "Capresse" => array("Precio" => 4000, "Stock" => rand(1,50))
    );

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $pedidos = $_POST["selector"];
        $cantidades = $_POST["cantidad"];
    }

    global $cantidades;
    $pedidoinfo = array();

    if (empty($cantidades) || empty($pedidos)) {
        echo "<h3 style='text-align: center; margin-top: 3rem;'>Seleccione un producto y cuantas quiere comprar</h3>";
    }else{
        if (!empty($pedidos) && !empty($cantidades)) {
            $precioUnidad = $menu[$pedidos]["Precio"];
            $precioTotal = $precioUnidad * $cantidades;
            
            array_push($pedidoinfo, $pedidos . " " .  $cantidades . " " . $precioTotal);
    
            if (count($pedidoinfo) > 0) {
                echo "<div class='resumen' style='height: auto; background: transparent; padding: .5rem; width: 80%; border-radius: 20px; text-align: center; display: flex; flex-direction: column; align-items: center; justify-content: center; margin:auto; margin-bottom: 1rem; margin-top: 2rem; border: 10px double #111;'>";
                for ($i = 0; $i < count($pedidoinfo); $i++) { 
                    echo "<li style='list-style: none; color: #111;'>" . $pedidoinfo[$i] . "</li>";
                }
                echo "</div>";
            }
        }
    }
?>


                <form action="menu.php" method="post">
                    <div class="selector-contenedor">
                        <label for="selector">Seleccione un producto</label>
                        <select name="selector" id="selector" multiple>
                            <option value="Four Seasons">Four Seasons $4000 c/u</option>
                            <option value="Suprema">Suprema $5500 c/u</option>
                            <option value="Popolo">Popolo $4800 c/u</option>
                            <option value="Four Cheese">Four Cheese $4500 c/u</option>
                            <option value="Tribeca">Tribeca $5500 c/u</option>
                            <option value="Capresse">Capresse $4000 c/u</option>
                        </select>
                    </div>

                    <div class="input-sistema-pedido-contenedor">
                        <input type="number" name="cantidad" id="cantidad" min="1">
                        <input type="submit" value="+" id="agregar">
                    </div>
                </form>

            </div>


            <div class="segunda-fila-menu">
                <div class="producto-general-contenedor">
                    <div class="producto-general-texto">
                        <h2 class="producto-nombre-general">Four Cheese ($4500)</h2>
                        <ul>
                            <li>Salsa de tomate artesanal</li>
                            <li>Queso mozzarella</li>
                            <li>Queso gorgonzola</li>
                            <li>Queso provolone</li>
                            <li>Queso parmesano</li>
                            <li>Ajo</li>
                        </ul>
                    </div>
                    <img class="producto-general-imagen" src="4ch_cce35a63-b914-4f0d-a9fa-a9d28d58e2b0_394x.png" alt="">
                </div>

                <div class="producto-general-contenedor">
                    <div class="producto-general-texto">
                        <h2 class="producto-nombre-general">Tribeca ($5500)</h2>
                        <ul>
                            <li>Salsa de tomate artesanal</li>
                            <li>Queso mozzarella</li>
                            <li>Tomates confitados</li>
                            <li>Queso ricotta</li>
                            <li>Queso parmesano</li>
                            <li>Limón</li>
                            <li>Arúgula</li>
                        </ul>
                </div>
                    <img class="producto-general-imagen" src="tbc_dca99f92-a843-44fd-be54-3d9b6b181c8d_394x.webp" alt="">
                </div>

                <div class="producto-general-contenedor">
                    <div class="producto-general-texto">
                        <h2 class="producto-nombre-general">Capresse ($4000)</h2>
                        <ul>
                            <li>Salsa de tomate artesanal</li>
                            <li>Queso mozzarella</li>
                            <li>Tomates cherry</li>
                            <li>Albahaca</li>
                        </ul>
                    </div>
                    <img class="producto-general-imagen" src="cpe_13c9ded8-303e-4756-b606-09e4c873cc39_295x.png" alt="">
                    </div>
                </div>
        </div>
    </div>
    <?php 
                        if (isset($_POST['selector'])) {
                            $selector = $_POST['selector'];
                            $cantidad = $_POST['cantidad'];

                            include('guardarpedido.php');
                        }                  
                    ?>

    <footer>
            <h1 class="footer-title">Popolo Pizza</h1>
    </footer>
</body>
</html>