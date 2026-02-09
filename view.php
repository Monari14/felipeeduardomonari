<?php
require_once 'includes/config.php';

$ano = $_GET['ano'] ?? '2025';
$id = $_GET['id'] ?? '01';

// Encontrar a escrita
$escrita = null;
foreach ($escritas[$ano] as $item) {
    if ($item['id'] === $id) {
        $escrita = $item;
        break;
    }
}

if (!$escrita) {
    header('Location: index.php');
    exit;
}

$pageTitle = $escrita['titulo'];
$basePath = '';
require_once 'includes/header.php';
require_once 'includes/sidebar.php';

// Caminho do arquivo
$filePath = ($ano === '2026' ? 'escritas2026' : 'escritas') . '/' . $escrita['slug'] . '.html';

?>

<main class="book-container">
    <div class="page active">
        <?php
        if (file_exists($filePath)) {
            $content = file_get_contents($filePath);
            // Extrair conteúdo entre <main> e </main>
            if (preg_match('/<main[^>]*>(.*?)<\/main>/is', $content, $matches)) {
                echo $matches[1];
            } else {
                echo '<p>Conteúdo não encontrado.</p>';
            }
        } else {
            echo '<p>Escrita não encontrada.</p>';
        }
        ?>
    </div>
</main>

<?php require_once 'includes/footer.php'; ?>
