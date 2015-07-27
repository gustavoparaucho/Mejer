<?php
    function isActive($menu) {
        if ($menu == "principal" && stripos($_SERVER['PHP_SELF'], "index") != FALSE) {
            return 'class="active"';
        } elseif ($menu == "sobre" && stripos($_SERVER['PHP_SELF'], "sobre") != FALSE) {
            return 'class="active"';
        } elseif ($menu == "produtos" && stripos($_SERVER['PHP_SELF'], "produtos") != FALSE) {
            return 'class="active"';
        } elseif ($menu == "processo"  && stripos($_SERVER['PHP_SELF'], "processo") != FALSE) {
            return 'class="active"';
        } elseif ($menu == "cliente" && stripos($_SERVER['PHP_SELF'], "cliente") != FALSE) {
            return 'class="active"';
        } elseif ($menu == "fale" && stripos($_SERVER['PHP_SELF'], "fale") != FALSE) {
            return 'class="active"';
        }

        return "";
    }
?>

<div class="topo">
    <div class="box clearfix">
        <h1 class="navbar-brand navbar-brand_"><a href="index.php"><img src="img/logo.png" alt="Mejer"></a></h1>
        <nav class="navbar navbar-default navbar-static-top tm_navbar clearfix" role="navigation">
            <ul class="nav sf-menu clearfix">
                <li <?php echo isActive("principal"); ?>><a href="index.php">Principal</a></li>
                <li <?php echo isActive("sobre"); ?>><a href="sobre.php">Sobre</a></li>
                <li <?php echo isActive("produtos"); ?>><a href="produto.php">Produtos</a></li>
                <li <?php echo isActive("processo"); ?>><a href="processo.php">Processo Produtivo</a></li>
                <li <?php echo isActive("cliente"); ?>><a href="cliente.php">Clientes</a></li>
                <li <?php echo isActive("fale"); ?>><a href="fale-conosco.php">Fale Conosco</a></li>
            </ul>
        </nav>
    </div>
</div>