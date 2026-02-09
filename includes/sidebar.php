<?php
require_once __DIR__ . '/config.php';
$basePath = $basePath ?? '';
?>

<aside class="sidebar" id="sidebar">
    <center>
        <a href="<?php echo $basePath; ?>index.php">
            <img src="<?php echo $basePath; ?>assinatura.png" alt="Minha Assinatura">
        </a>
    </center>
    <ul>
        <?php foreach ($escritas as $ano => $lista): ?>
            <details open>
                <summary class="<?php echo $ano === '2026' ? 'verde' : 'laranja'; ?>">
                    <?php echo $ano; ?>
                </summary>
                <br>
                <?php foreach ($lista as $item): ?>
                    <li class="<?php echo $item['cor']; ?>">
                        <a href="<?php echo $basePath; ?>view.php?ano=<?php echo $ano; ?>&id=<?php echo $item['id']; ?>">
                            <?php echo $item['titulo']; ?>
                        </a>
                    </li>
                <?php endforeach; ?>
                <br>
            </details>
        <?php endforeach; ?>
    </ul>
</aside>
