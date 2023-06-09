<?php
function getCurrentPage()
{
    $currentPage = basename($_SERVER['PHP_SELF']);
    return $currentPage;
}
?>

<header>
    <div class="logo">
        <a href="index.php"><img src="Imagens/Logo2.png" alt="LogoMS" id="logoImg"></a>
    </div>
    <nav>
        <ul class="Menu" id="menuNav">
            <li <?php if (getCurrentPage() == "index.php")
                    echo 'class="ativo"'; ?>><a href="index.php"><i class="bi bi-house-door-fill"></i> Home</a></li>
            <li <?php if (getCurrentPage() == "profissionais.php")
                    echo 'class="ativo"'; ?>><a href="profissionais.php"><i class="bi bi-people-fill"></i> Profissionais</a></li>
            <li <?php if (getCurrentPage() == "contato.php")
                    echo 'class="ativo"'; ?>><a href="contato.php"><i class="bi bi-envelope-fill"></i> Contato</a></li>
        </ul>
    </nav>
</header>
