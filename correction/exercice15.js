export const response15 = `
    // La fonction
    function readMyFile (): false|string
    {
        define('FILE_PATH', __DIR__ . '/docs/');
        define('DEFAULT_FILE', __DIR__ . '/docs/default.txt');
    
        $content = "";
        $filename = $_POST['filename'] ?? DEFAULT_FILE;
    
        if (!preg_match('/^[a-zA-Z0-9-_]+(\\.[a-zA-Z0-9]+)?$/', $filename)) {
            $content .= 'Nom de fichier invalide.';
        } else {
            $filepath = FILE_PATH . $filename;
            if (file_exists($filepath)) {
                $content .= '<p class="border border-primary rounded p-4 mt-2">';
                $content .= file_get_contents($filepath);
                $content .= '</p>';
            } else {
                $content .= 'Le fichier n\\'existe pas.';
            }
        }
    
        $html = "<form method='post'>
                    <div class='form-group d-flex'>
                        <input class='form-control' placeholder='Nom du fichier à lire' type='text' name='filename' id='filename'>
                        <input class='btn btn-sm btn-primary' type='submit' value='Lire'>
                    </div>
                </form>";
    
        return $html . $content;
    }
    
    // Appel de la fonction
    readMyFile()`;